<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminLogin_Protection();
        $this->lib->GetVisitorData('Admin Login (Warning!!!)');
        $this->load->model('admin/login_model', 'login');
    }

    function index()
    {
        $data['title'] = 'Admin Login';
        $this->load->view('admin/content/login/content_login', $data, FALSE);
    }

    function do_login()
    {
        $response = array();

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run()) $this->login->LoginValidation();
        else
        {
            $this->form_validation->set_error_delimiters('', '');
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>