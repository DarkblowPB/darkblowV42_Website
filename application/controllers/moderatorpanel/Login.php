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
        $this->admin_protect->adminProtectB();
        $this->load->model('moderatorpanel/logger_model', 'logger');
        $this->load->model('moderatorpanel/adminlogin_model', 'admin_login');
		$this->load->AllProtect->Web_Protection();
    }

    function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'strtolower|trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Must Contains 4 Character Or More',
                'max_length' => '%s Can Only Use 16 Characters',
                'alpha_numeric' => '%s Can Only Use Letters And Numbers',
                'required' => '%s Cannot Be Empty'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'strtolower|trim|min_length[4]|max_length[16]|alpha_numeric|required',
            array(
                'min_length' => '%s Must Contains 4 Character Or More',
                'max_length' => '%s Can Only Use 16 Characters',
                'alpha_numeric' => '%s Can Only Use Letters And Numbers',
                'required' => '%s Cannot Be Empty'
            )
        );
        if ($this->form_validation->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Login Area';
            $this->load->view('moderatorpanel/content/login/content_login', $data, FALSE);   
        }
        else 
        {
            $this->admin_login->admin_authlogin();
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>