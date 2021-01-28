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
        $this->login_library->adminAuthCheck_Exist();
        $this->load->model('moderatorpanel/logger_model', 'logger');
    }

    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required|min_length[4]|max_length[16]|alpha_numeric',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Contains 4 Character Or More!',
                'max_length' => '%s Max Length Reached!',
                'alpha_numeric' => '%s Only Alpha Numeric Characters Allowed'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required|min_length[4]|max_length[16]|alpha_numeric',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Contains 4 Character Or More!',
                'max_legnth' => '%s Max Length Reached!',
                'alpha_numeric' => '%s Only Alpha Numeric Characters Allowed'
            )
        );

        if ($this->form_validation->run()) 
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->logger->loger_LoginAttempt();
            $this->login_library->adminlogin($username, $password);
        }
        $data['title'] = 'DarkblowPB || Login Area';
        $data['catchip'] = $this->input->ip_address();
        $this->load->view('moderatorpanel/content/content_login', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>