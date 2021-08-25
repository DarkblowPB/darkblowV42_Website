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

    function RedeemVoucherV2()
    {
        $data = array('voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code')));

        $query = $this->db->get_where('item_voucher', array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
        if ($query)
        {
            // Get Prize -> Items
            $items = explode(',', $query->voucher_items);
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

                // Update Cash & Webcoin
                $update = $this->db->where('player_id', $fetch1->player_id)->update('accounts', array('money' =>$totalmoney, 'kuyraicoin' => $totalwebcoin));
                if ($update)
                {
                    echo "true";
                }
                else
                {
                    echo "false";
                }
            }
            else
            {
                echo "false";
            }
        }
        else
        {
            echo "false";
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>