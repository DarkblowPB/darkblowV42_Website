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
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminrecharge_model', 'adminrecharge');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Data Voucher';
        $data['header'] = 'Data Voucher';
        $data['voucher'] = $this->adminrecharge->getVoucherDataAll();
        $data['content'] = 'moderatorpanel/content/recharge/content_daterechargevoucher';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function recharge_history()
    {
        $data['title'] = 'DarkblowPB || Recharge History';
        $data['header'] = 'Recharge History';
        $data['history'] = $this->adminrecharge->getLoggerId();
        $data['content'] = 'moderatorpanel/content/recharge/content_historyrecharge';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function manual_recharge()
    {
        $this->form_validation->set_rules(
            'player_id',
            'Nickname',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        $this->form_validation->set_rules(
            'recharge_package',
            'Recharge Package',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Recharge / Donation';
            $data['header'] = 'Recharge / Donation';
            $data['recharge'] = $this->adminrecharge->getPlayerName();
            $data['content'] = 'moderatorpanel/content/recharge/content_manualrecharge';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);   
        }
        else 
        {
            $this->adminrecharge->createManualRecharge();
        }
    }

    function voucher()
    {
        $this->form_validation->set_rules(
            'cash_alert',
            'Cash Alert',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        $this->form_validation->set_rules(
            'cash_value',
            'Cash Value',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        $this->form_validation->set_rules(
            'voucher_code',
            'Voucher Code',
            'required|is_unique[item_voucher.voucher_code]',
            array(
                'required' => '%s Cannot Be Empty.',
                'is_unique' => '%s Already Exists.'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Recharge Voucher';
            $data['header'] = 'Recharge Voucher';
            $data['content'] = 'moderatorpanel/content/recharge/content_voucherrecharge';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);   
        }
        else 
        {
            $this->adminrecharge->createVoucher();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>