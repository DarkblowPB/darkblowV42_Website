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
        $data['title'] = 'DarkblowPB || Recharge / Donation';
        $data['header'] = 'Recharge / Donation';
        $data['recharge'] = $this->adminrecharge->getPlayerName();
        $data['content'] = 'moderatorpanel/content/recharge/content_manualrecharge';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function voucher()
    {
        $data['title'] = 'DarkblowPB || Recharge Voucher';
        $data['header'] = 'Recharge Voucher';
        $data['content'] = 'moderatorpanel/content/recharge/content_voucherrecharge';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>