<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Redeemcode extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->adminAuthCheck_Empty();
        $this->load->model('moderatorpanel/Adminredeemcode_model', 'adminredeemcode');
        $this->load->model('moderatorpanel/Logger_model', 'logger');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Data Redeem Code';
        $data['header'] = 'Redeem Code';
        $data['redeemcodeitem'] = $this->adminredeemcode->getDataRedeemCodeItemAll();
        $data['redeemcodecash'] = $this->adminredeemcode->getDataRedeemCodeCashAll();
        $data['content'] = 'moderatorpanel/content/redeemcode/content_dataredeemcode';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function history()
    {
        $data['title'] = 'DarkblowPB || History Redeem Code';
        $data['header'] = 'History Redeem Code';
        $data['history'] = $this->adminredeemcode->getLoggerRedeemCode();
        $data['content'] = 'moderatorpanel/content/redeemcode/content_historyredeemcode';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function redeemcode_item()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'item_alert',
            'Item Alert',
            'required|min_length[20]|max_length[255]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 10 Characters Or More',
                'max_length' => '%s Max Length Reached (max. 255 Characters)'
            )
        );
        $valid->set_rules(
            'item_code',
            'Code',
            'required|min_length[19]|max_length[19]|alpha_numeric|is_unique[item_code.item_code]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 10 Characters Or More',
                'max_length' => '%s Max Length Reached (max. 255 Characters)',
                'alpha_numeric' => '%s Only Alpha Numeric Characters Allowed',
                'is_unique' => '%s Already Exist'
            )
        );
        if ($valid->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Create Redeem Code Item';
            $data['header'] = 'Create Redeem Code Item';
            $data['itemname'] = $this->adminredeemcode->getItemNameAll();
            $data['content'] = 'moderatorpanel/content/redeemcode/content_createredeemcodeitem';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
        else 
        {
            $i = $this->input;
            $data = array(
                'item_id' => $i->post('item_id'),
                'item_name' => $i->post('item_name'),
                'item_count' => $i->post('item_count'),
                'item_alert' => $i->post('item_alert'),
                'item_code' => $i->post('item_code'),
                'category' => $i->post('category'),
                'type' => "Item"
            );
            $this->adminredeemcode->insertRedeemCodeItem($data);
            if ($data) 
            {
                $this->logger->logger_CreateRedeemCodeItemSuccess($i->post('item_name'), $i->post('item_count'));
                $this->session->set_flashdata('Success', 'Redeem Code Item Successfully Created');
                redirect(base_url('moderatorpanel/redeemcode/redeemcode_item'), 'refresh');
            }
            else 
            {
                $this->logger->logger_CreateRedeemCodeItemFailed($i->post('item_name'), $i->post('item_count'));
                $this->session->set_flashdata('Failed', 'Redeem Code Item Failed Created');
                redirect(base_url('moderatorpanel/redeemcode/redeemcode_item'), 'refresh');
            }
        }
    }

    function redeemcode_cash()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'item_alert',
            'Item Alert',
            'required|min_length[10]|max_length[255]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 10 Characters Or More',
                'max_length' => '%s Maximal Length Reached (max. 255 Characters)'
            )
        );
        $valid->set_rules(
            'item_code',
            'Item Code',
            'required|min_length[19]|max_length[19]|is_unique[item_code.item_code]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 19 Characters Or More',
                'max_length' => '%s Maximal Length Reached (max. 19 Characters)',
                'is_unique' => '%s Already Exist'
            )
        );
        $valid->set_rules(
            'cash',
            'Cash Amount',
            'required|min_length[1]|max_length[5]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 10 Characters Or More',
                'max_length' => '%s Maximal Length Reached (max. 255 Characters)'
            )
        );
        if ($valid->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Create Redeem Code Cash';
            $data['header'] = 'Redeem Code Cash';
            $data['content'] = 'moderatorpanel/content/redeemcode/content_createredeemcodecash';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
        else 
        {
            $i = $this->input;
            $data = array(
                'item_alert' => $i->post('item_alert'),
                'item_code' => $i->post('item_code'),
                'cash' => $i->post('cash'),
                'type' => "Cash"
            );
            $this->adminredeemcode->insertRedeemCodeCash($data);
            if ($data) 
            {
                $this->logger->logger_CreateRedeemCodeCashSuccess($i->post('cash'));
                $this->session->set_flashdata('Success', 'Create Redeem Code Cash Successfully');
                redirect(base_url('moderatorpanel/redeemcode/redeemcode_cash'), 'refresh');
            }
            else 
            {
                $this->logger->logger_CreateRedeemCodeCashFailed($i->post('cash'));
                $this->session->set_flashdata('Failed', 'Create Redeem Code Cash Failed');
                redirect(base_url('moderatorpanel/redeemcode/redeemcode_cash'), 'refresh');
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>