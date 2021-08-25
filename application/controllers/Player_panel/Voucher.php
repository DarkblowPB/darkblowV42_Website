<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Voucher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->allprotect->Web_Protection();
        $this->main_protect->mainProtectA();
        $this->load->model('main/voucher_model', 'voucher');
    }

    function index()
    {
        $this->form_validation->set_rules(
            'voucher_code',
            'Voucher Code',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Voucher';
            $data['isi'] = 'main/content/player_panel/content_voucher';
            $this->load->view('main/layout/wrapper', $data, FALSE);    
        }
        else 
        {
            $this->voucher->voucher_validation();
        }
    }

    function do_redeem()
    {
        $this->form_validation->set_rules(
            'voucher_code',
            'Voucher Code',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run())
        {
            $this->voucher->RedeemVoucherV2();
        }
        else
        {
            $this->form_validation->set_error_delimiters('', '');
            echo validation_errors();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>