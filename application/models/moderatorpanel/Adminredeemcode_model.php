<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminredeemcode_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getDataRedeemCodeItemAll()
    {
        return $this->db->where('type', "Item")->get('item_code')->result_array();
    }

    function getDataRedeemCodeCashAll()
    {
        $this->db->select('*');
        $this->db->from('item_code');
        $this->db->where('type', "Cash");
        $query = $this->db->get();
        return $query->result_array();
    }

    function getItemNameAll()
    {
        $this->db->select('item_id, item_name');
        $this->db->from('shop');
        $this->db->order_by('item_id', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    function insertRedeemCodeItem($data)
    {
        $this->db->insert('item_code', $data);
    }

    function insertRedeemCodeCash($data)
    {
        $this->db->insert('item_code', $data);
    }

    function getLoggerRedeemCode()
    {
        return $this->db->where('category', "Redeem Code")->get('web_adminpanel_log')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>