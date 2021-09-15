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

    function GetAllVoucher()
    {
        return $this->db->get('item_voucher')->result_array();
    }

    function GetDetailVoucher($voucher_id)
    {
        return $this->db->get_where('item_voucher', array('id' => $voucher_id))->row();
    }

    function SetCategory($item_id)
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

    function RedeemVoucherV2()
    {
        sleep(1);
        $data = array('voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code')));
        
        $response = array();
        
        $query = $this->db->get_where('item_voucher', array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
        if ($query)
        {
            // Get Prize -> Items
            $items = explode(',', $query->voucher_items);
            $count = count($items);
            // Get Prize -> Cash
            $cash = $query->voucher_cash;
            // Get Prize -> Webcoin
            $webcoin = $query->voucher_webcoin;

            // Fetch Player Data
            $fetch1 = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row();
            if ($fetch1)
            {
                $playermoney = $fetch1->money;
                $playerwebcoin = $fetch1->kuyraicoin;

                $totalmoney = $playermoney + $cash;
                $totalwebcoin = $playerwebcoin + $webcoin;

                // Insert / Update Items

                for ($i=0; $i < $count; $i++)
                {
                    $fetch2 = $this->db->get_where('player_items', array('owner_id' => $fetch1->player_id, 'item_id' => $items[$i]))->row();
                    if ($fetch2)
                    {
                        if ($fetch2->equip != '1')
                        {
                            // Update Count
                            $this->db->where(array('owner_id' => $fetch2->owner_id, 'item_id' => $fetch2->item_id))->update('player_items', array('count' => ($fetch2->count + 2592000)));
                        }
                        else
                        {
                            // Convert To Cash
                            $this->db->where('player_id', $fetch2->owner_id)->update('accounts', array('money' => ($fetch1->money + 10000)));
                        }
                    }
                    else
                    {
                        // Insert Item
                        $this->db->insert('player_items', array(
                            'owner_id' => $fetch2->owner_id,
                            'item_id' => $fetch2->item_id,
                            'item_name' => 'Voucher Item',
                            'count' => '2592000',
                            'category' => $this->SetCategory($fetch2->item_id),
                            'equip' => '1'
                        ));
                    }
                }

                // Update Cash & Webcoin
                $update = $this->db->where('player_id', $fetch1->player_id)->update('accounts', array('money' =>$totalmoney, 'kuyraicoin' => $totalwebcoin));
                if ($update)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Redeem The Reward. Please Check Your Inventory.';
                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Redeem The Reward.';
                    echo json_encode($response);
                }
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Redeem The Reward.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Voucher Code Doesnt Exists.';
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>