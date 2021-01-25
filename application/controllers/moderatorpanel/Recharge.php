<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Recharge extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->adminAuthCheck_Empty();
        $this->load->model('moderatorpanel/Adminrecharge_model', 'adminrecharge');
        $this->load->model('moderatorpanel/Logger_model', 'logger');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Data Voucher';
        $data['header'] = 'Data Voucher';
        $data['voucher'] = $this->adminrecharge->getVoucherDataAll();
        $data['content'] = 'moderatorpanel/content/recharge/content_rechargevoucherdata';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function recharge_history()
    {
        $data['title'] = 'DarkblowPB || Recharge History';
        $data['header'] = 'Recharge History';
        $data['history'] = $this->adminrecharge->getLoggerId();
        $data['content'] = 'moderatorpanel/content/recharge/content_rechargehistory';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function voucher()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'cash_alert',
            'Cash Alert',
            'trim|required|min_length[10]|max_length[50]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 10 Character Or More',
                'max_length' => '%s Max Length Reached (max. 50 Characters)'
            )
        );
        $valid->set_rules(
            'cash_value',
            'Cash Value',
            'required|max_length[4]',
            array(
                'requried' => '%s Cannot Be Empty',
                'max_length' => '%s Max Length Reached (max. 4 Alpha Characters)'
            )
        );
        $valid->set_rules(
            'voucher_code',
            'Voucher Code',
            'trim|required|min_length[24]|max_length[24]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 24 Character Or More',
                'max_length' => '%s Max Character Reached (max. 24 Characters)'
            )
        );
        if ($valid->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Recharge Voucher';
            $data['header'] = 'Recharge Voucher';
            $data['content'] = 'moderatorpanel/content/recharge/content_rechargevoucher';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
        else 
        {
            $i = $this->input;
            $data = array(
                'cash_alert' => $i->post('cash_alert'),
                'cash_value' => $i->post('cash_value'),
                'voucher_code' => $i->post('voucher_code'),
                'voucher_status' => "1",
                'date' => date('d-m-Y h:i:s')
            );
            $this->adminrecharge->createVoucher($data);
            if ($data) 
            {
                $this->logger->logger_CreateVoucherSuccess();
                $this->session->set_flashdata('Success', 'Create Voucher Successfully');
                redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
            }
            else 
            {
                $this->logger->logger_CreateVoucherFailed();
                $this->session->set_flashdata('Failed', 'Create Voucher Failed');
                redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
            }
        }
    }
    function manual_recharge()
    {
        $data['title'] = 'DarkblowPB || Recharge / Donation';
        $data['header'] = 'Recharge / Donation';
        $data['recharge'] = $this->adminrecharge->getPlayerName();
        $data['content'] = 'moderatorpanel/content/recharge/content_rechargemanual';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>