<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminrecharge_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getVoucherDataAll()
    {
        return $this->db->get('item_voucher')->result_array();
    }

    function getPlayerName()
    {
        return $this->db->order_by('player_id', 'asc')->get('accounts')->result_array();
    }

    function getLoggerId()
    {
        return $this->db->where('category', "Recharge")->get('web_adminpanel_log')->result_array();
    }
    
    function createVoucher($data)
    {
        $this->db->insert('item_voucher', $data);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>