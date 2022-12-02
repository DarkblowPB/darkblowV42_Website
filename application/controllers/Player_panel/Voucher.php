<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Voucher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string', 'message'));
        $this->load->model('main/voucher_model', 'voucher');
        $this->darkblowlib->FeatureControl('voucher', 'player_panel');

        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->BlockedIP_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Maintenance_Protection();
        $this->darkblowprotection->RequireLogin_Protection();
        $this->darkblowprotection->RedeemcodePage_Protection();
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
            'required|min_length[24]|max_length[24]',
            array(
                'required' => '%s Cannot Be Empty.',
                'min_length' => '%s Must Contains 24 Characters Or More.',
                'max_length' => '%s Only Can Contains 24 Characters.'
            )
        );
        if ($this->form_validation->run()) $this->voucher->RedeemVoucherV4();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
