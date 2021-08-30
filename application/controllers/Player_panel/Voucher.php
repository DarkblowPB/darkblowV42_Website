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

        if ($this->getsettings->Get2()->voucher != 1)
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function index()
    {
        $data['title'] = 'Voucher';
        $data['isi'] = 'main/content/player_panel/content_voucher';
        $this->load->view('main/layout/wrapper', $data, FALSE);
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
            $response = array(
                'response' => 'false',
                'token' => $this->security->get_csrf_hash(),
                'message' => validation_errors()
            );
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>