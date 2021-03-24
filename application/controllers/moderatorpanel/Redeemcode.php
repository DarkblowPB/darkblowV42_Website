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
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminredeemcode_model', 'adminredeemcode');
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
        $this->form_validation->set_rules(
            'item_alert',
            'Item Alert',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        $this->form_validation->set_rules(
            'item_code',
            'Code',
            'trim|required|min_length[19]|max_length[19]|is_unique[item_code.item_code]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Contains 19 Character.',
                'max_length' => '%s Can Only Use 19 Characters.',
                'is_unique' => '%s Already Exists.'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Create Redeem Code Item';
            $data['header'] = 'Create Redeem Code Item';
            $data['itemname'] = $this->adminredeemcode->getItemNameAll();
            $data['content'] = 'moderatorpanel/content/redeemcode/content_createredeemcodeitem';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
        else 
        {
            $this->adminredeemcode->insertRedeemCodeItem($data);
        }
    }

    function redeemcode_cash()
    {
        $this->form_validation->set_rules(
            'item_alert',
            'Item Alert',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        $this->form_validation->set_rules(
            'item_code',
            'Item Code',
            'trim|required|min_length[19]|max_length[19]|is_unique[item_code.item_code]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Contains 19 Character.',
                'max_length' => '%s Can Only Use 19 Characters.',
                'is_unique' => '%s Already Exists.'
            )
        );
        $this->form_validation->set_rules(
            'cash',
            'Cash Amount',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = 'DarkblowPB || Create Redeem Code Cash';
            $data['header'] = 'Redeem Code Cash';
            $data['content'] = 'moderatorpanel/content/redeemcode/content_createredeemcodecash';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
        else 
        {
            $this->adminredeemcode->insertRedeemCodeCash();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>