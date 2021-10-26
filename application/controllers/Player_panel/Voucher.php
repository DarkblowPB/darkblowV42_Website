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

        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Voucher');
        
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
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
        $response = array();
        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'voucher_code',
            'Voucher Code',
            'required|min_length[19]|max_length[19]',
            array(
                'required' => '%s Cannot Be Empty.',
                'min_length' => '%s Must Contains 19 Characters Or More.',
                'max_length' => '%s Only Can Contains 19 Characters.'
            )
        );
        if ($this->form_validation->run())
        {
            $this->voucher->RedeemVoucherV3();
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>