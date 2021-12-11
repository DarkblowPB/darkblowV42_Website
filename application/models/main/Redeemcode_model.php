<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
	}

	function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query)
        {
            return $query->item_name;
        }
        else
        {
            return "";
        }
    }

	function GetItemCategory($item_id)
	{
		if ($item_id >= 100003001 && $item_id <= 904007069)
		{
			return "1";
		}
		else if ($item_id >= 1001001003 && $item_id <= 1105003032)
		{
			return "2";
		}
		else if ($item_id >= 1300002003 && $item_id <= 1302379000)
		{
			return "3";
		}
		else
		{
			return "0";
		}
	}

	function CodeValidationV2()
	{
		sleep(1);
		$data = array(
			'code' => $this->encryption->encrypt($this->input->post('code')),
			'player_id' => $this->encryption->encrypt($_SESSION['uid'])
		);

		$response = array();
		
		// Check Code From Database Table
		$check = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['code'])))->row();
		if ($check)
		{
			// If Code Found
			// Check History Redeem Code
			$check2 = $this->db->get_where('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $check->item_code))->row();
			if ($check2)
			{
				$response['token'] = $this->security->get_csrf_hash();
				$response['response'] = 'false';
				$response['message'] = 'This Code Already Used.';
				echo json_encode($response);
			}
			else
			{
				if ($check->type == "Item")
				{
					$insert = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $check->item_code, 'username' => '', 'date_redeemed' => date('d-m-Y h:i:s')));
					if ($insert)
					{
						$config = array(
							'separator' => '>'
						);
						$buffer = array(
							'command_type' => 'RedeemCode',
							'item_id' => $check->item_id,
							'category' => $this->GetItemCategory($check->item_id),
							'item_name' => $this->GetItemName($check->item_id),
							'item_count' => $check->item_count,
							'player_id' => $this->encryption->decrypt($data['player_id']),
							'type' => 'Item',
							'cash' => '0'
						);
						if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1')))
						{
							if ($this->lib->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'), $buffer['command_type'].$config['separator'].$buffer['item_id'].$config['separator'].$buffer['category'].$config['separator'].$buffer['item_name'].$config['separator'].$buffer['item_count'].$config['separator'].$buffer['player_id'].$config['separator'].$buffer['type'].$config['separator'].$buffer['cash']) == 'Success')
							{
								$response['response'] = 'true';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Congratulations '.$_SESSION['player_name'].', You Received '.$this->GetItemName($check->item_id).'.';

								echo json_encode($response);
							}
							else
							{
								$response['response'] = 'false';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Failed To Redeem The Code.';
							}
						}
						else
						{
							if ($this->lib->SendSocket($this->lib->HostLibrary('side', 'ip_address'), $this->lib->HostLibrary('side', 'port_1'), $buffer['command_type'].$config['separator'].$buffer['item_id'].$config['separator'].$buffer['category'].$config['separator'].$buffer['item_name'].$config['separator'].$buffer['item_count'].$config['separator'].$buffer['player_id'].$config['separator'].$buffer['type'].$config['separator'].$buffer['cash']) == 'Success')
							{
								$response['response'] = 'true';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Congratulations '.$_SESSION['player_name'].', You Received '.$this->GetItemName($check->item_id).'.';

								echo json_encode($response);
							}
							else
							{
								$response['response'] = 'false';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Failed To Redeem The Code.';
							}
						}
					}
				}
				else if ($check->type == "Cash")
				{
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Sorry, This Reward Is Cash, And We Under Development.';

					echo json_encode($response);
				}
			}
		}
		else
		{
			$response['token'] = $this->security->get_csrf_hash();
			$response['response'] = 'false';
			$response['message'] = 'Code Doesnt Exists.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //