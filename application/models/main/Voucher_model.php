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
    }

    function voucher_validation()
    {
        $data = array('voucher_code' => $this->input->post('voucher_code'));
        
        // Check Voucher Code
        $check_code = $this->db->get_where('item_voucher', array('voucher_code' => $data['voucher_code']));
        $result_code = $check_code->row();
        if ($result_code) 
        {
            // Checking Voucher Status
            if ($result_code->voucher_status == 0) 
            {
                $this->session->set_flashdata('error', 'Voucher Already Used.');
                redirect(base_url('player_panel/voucher'), 'refresh');
            }
            if ($result_code->voucher_status == 1) 
            {
                // Fetching Player Data
                $fetch_player = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
                $result_fetch = $fetch_player->row();
                if ($result_fetch) 
                {
                    $total_cash = $result_fetch->money + $result_code->cash_value;
                    // Update Player Money
                    $insert = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('money' => $total_cash));
                    if ($insert) 
                    {
                        $update_voucher_status = $this->db->where('voucher_code', $result_code->voucher_code)->update('item_voucher', array('voucher_status' => '0'));
                        $create_log = $this->db->insert('check_user_voucher', array('uid' => $_SESSION['uid'], 'voucher' => $result_code->voucher_code, 'date' => date('d-m-Y h:i:s')));
                        if ($update_voucher_status && $create_log)
                        {
                            $this->session->set_flashdata('success', 'Congratulations '.$_SESSION['player_name'].', You Received '.number_format($result_code->cash_value, '0',',','.').' D-Cash.');
                            redirect(base_url('player_panel/voucher'), 'refresh');
                        }
                    }
                }
            }
            if ($result_code->voucher_status != 0 || $result_code->voucher_status != 1) 
            {
                $this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
                redirect(base_url('player_panel/voucher'), 'refresh');
            }
        }
        else 
        {
            $this->session->set_flashdata('error', 'Voucher Code Doesnt Exists.');
            redirect(base_url('player_panel/voucher'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>