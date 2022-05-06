<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Forgotpassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Forgot Password');
        $this->main_protect->SessionProtector();

        $this->allprotect->Web_Protection();
        $this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
        $this->allprotect->DarkblowCopierGuard();
        $this->lib->FeatureControl('forgot_password', '');
    }

    function index()
    {
        $data['title'] = 'Forgot Password';
        $data['isi'] = 'main/content/forgotpassword/content_forgotpassword';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function verifyid()
    {
    }

    function do_sendrequest()
    {
        $response = array();
        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s Cannot Be Empty.',
                'valid_email' => '%s Not Valid.'
            )
        );
        if ($this->form_validation->run()) {
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
