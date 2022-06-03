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
        $this->load->model('main/forgotpassword_model', 'forgotpassword');
        // $this->main_protect->SessionProtector();

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

    function verifyid($param = null)
    {
        if ($param == null) redirect(base_url());
        else {
            $this->form_validation->set_rules(
                'new_password',
                'New Password',
                'required',
                array(
                    'required' => '%s Cannot Be Empty.'
                )
            );
            $this->form_validation->set_rules(
                'confirm_password',
                'Confirm Password',
                'required',
                array(
                    'required' => '%s Cannot Be Empty.'
                )
            );
            if ($this->form_validation->run()) $this->forgotpassword->SetNewPassword($param);
            else {
                $data = array(
                    'title' => 'Set New Password',
                    'secret_token' => $param,
                    'isi' => 'main/content/forgotpassword/content_setnewpassword'
                );

                $this->load->view('main/layout/wrapper', $data, FALSE);
            }
        }
    }

    function do_forgotpassword()
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
        if ($this->form_validation->run()) $this->forgotpassword->ForgotPasswordValidationV1();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
