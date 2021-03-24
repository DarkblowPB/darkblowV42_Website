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
        $this->load->model('moderatorpanel/logger_model', 'logger');
    }

    function getDataRedeemCodeItemAll()
    {
        return $this->db->where('type', "Item")->get('item_code')->result_array();
    }

    function getDataRedeemCodeCashAll()
    {
        return $this->db->get_where('item_code', array('type' => 'Cash'))->result_array();
    }

    function getItemNameAll()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function insertRedeemCodeItem()
    {
        $data = array(
            'item_id' => $this->input->post('item_id'),
            'item_name' => $this->input->post('item_name'),
            'item_count' => $this->input->post('item_count'),
            'item_alert' => $this->input->post('item_alert'),
            'item_code' => $this->input->post('item_code'),
            'category' => $this->input->post('category'),
            'type' => "Item"
        );
        $process = $this->db->insert('item_code', $data);
        if ($process) 
        {
            $this->logger->logger_CreateRedeemCodeItemSuccess($data['item_name'], $data['item_count']);
            $this->session->set_flashdata('Success', 'Redeem Code Item Successfully Created');
            redirect(base_url('moderatorpanel/redeemcode/redeemcode_item'), 'refresh');
        }
        else 
        {
            $this->logger->logger_CreateRedeemCodeItemFailed($data['item_name'], $data['item_count']);
            $this->session->set_flashdata('Failed', 'Redeem Code Item Failed Created');
            redirect(base_url('moderatorpanel/redeemcode/redeemcode_item'), 'refresh');
        }
    }

    function insertRedeemCodeCash()
    {
        $data = array(
            'item_alert' => $this->input->post('item_alert'),
            'item_code' => $this->input->post('item_code'),
            'cash' => $this->input->post('cash'),
            'type' => "Cash"
        );
        $process = $this->db->insert('item_code', $data);
        if ($process) 
        {
            $this->logger->logger_CreateRedeemCodeCashSuccess($data['cash']);
            $this->session->set_flashdata('Success', 'Create Redeem Code Cash Successfully');
            redirect(base_url('moderatorpanel/redeemcode/redeemcode_cash'), 'refresh');
        }
        else 
        {
            $this->logger->logger_CreateRedeemCodeCashFailed($data['cash']);
            $this->session->set_flashdata('Failed', 'Create Redeem Code Cash Failed');
            redirect(base_url('moderatorpanel/redeemcode/redeemcode_cash'), 'refresh');
        }
    }

    function getLoggerRedeemCode()
    {
        return $this->db->where('category', "Redeem Code")->get('web_adminpanel_log')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>