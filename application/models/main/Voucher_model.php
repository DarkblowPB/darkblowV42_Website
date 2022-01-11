<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encryption');
    }

    function SetCategory($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069) return "1";
		else if ($item_id >= 1001001003 && $item_id <= 1105003032) return "2";
		else if ($item_id >= 1300002003 && $item_id <= 1302379000) return "3";
		else return "0";
    }

	function GetItemName($item_id)
	{
		$query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
		if ($query) return $query->item_name;
		else return "";
	}

    function RedeemVoucherV3()
    {
        $response = array();

		$data = array(
			'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code', true))
		);

		$state = array(
			'success' => 0,
			'failed' => 0,
			'converted' => 0,
			'total_cash' => 0,
			'total_webcoin' => 0
		);

		$query = $this->db->get_where('item_voucher', array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
		if ($query)
		{
			if ($query->active == 'f'){
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Invalid Voucher Code.';

				echo json_encode($response);
			}
			else
			{
				$explode = explode(',', $query->voucher_item);
				$count = count($explode);

				$query3 = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
				if ($query3)
				{
					$updatecash2 = $this->db->where('player_id', $query3->player_id)->update('accounts', array('money' => ($query3->money + $query->voucher_cash)));
					$updatewebcoin = $this->db->where('player_id', $query3->player_id)->update('accounts', array('kuyraicoin' => ($query3->kuyraicoin + $query->voucher_webcoin)));
					if ($updatecash2 && $updatewebcoin)
					{
						$state['success']++;
						$state['total_cash'] .= ($state['total_cash'] + $query->voucher_cash);
						$state['total_webcoin'] .= ($state['total_webcoin'] + $query->voucher_webcoin);
					}
					else $state['failed']++;
				}
				else
				{
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Failed To Fetch Account.';

					echo json_encode($response);
				}

				for ($i=0; $i < $count; $i++)
				{
					$query2 = $this->db->get_where('player_items', array('owner_id' => $this->session->userdata('uid'), 'item_id' => $explode[$i]))->row();
					if ($query2)
					{
						if ($query2->equip == 1)
						{
							$updatecount = $this->db->where(array('owner_id' => $query2->owner_id, 'item_id' => $query2->item_id))->update('player_items', array('count' => ($query2->count + 7776000)));
							if ($updatecount) $state['success']++;
							else $state['failed']++;
						}
						else
						{
							$fetchaccount = $this->db->get_where('accounts', array('player_id' => $query2->owner_id))->row();
							if ($fetchaccount)
							{
								$updatecash = $this->db->where('player_id', $fetchaccount->player_id)->update('accounts', array('money' => ($fetchaccount->money + 100000)));
								if ($updatecash)
								{
									$state['converted']++;
									$state['total_cash'] .= ($state['total_cash'] + 100000);
								}
								else $state['failed']++;
							}
							else
							{
								$response['response'] = 'false';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Failed To Fetch Account.';

								echo json_encode($response);
							}
						}
					}
					else
					{
						$insertnewitem = $this->db->insert('player_items', array(
							'owner_id' => $this->session->userdata('uid'),
							'item_id' => $explode[$i],
							'item_name' => $this->GetItemName($explode[$i]),
							'count' => '7776000',
							'category' => $this->SetCategory($explode[$i]),
							'equip' => '1'
						));
						if ($insertnewitem) $state['success']++;
						else $state['failed']++;
					}
				}

				$this->db->where('voucher_code', $this->encryption->decrypt($data['voucher_code']))->update('item_voucher', array('active' => 'f'));

				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Congratulations '.$this->session->userdata('player_name').', You Received '.$state['success'].' New Items, '.$state['total_cash'].' Cash, '.$state['total_webcoin'].' Webcoin. Failed ['.$state['failed'].']';

				echo json_encode($response);
			}
		}
		else
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Voucher Code';

			echo json_encode($response);
		}
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>