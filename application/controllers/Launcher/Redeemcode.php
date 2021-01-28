<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Redeemcode extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('launcher/Launcherredeemcode_model', 'launcher_redeemcode_01');
    }

    function index()
    {
        redirect(base_url('home'), 'refresh');
    }

    function home()
    {
        $this->login_library->launcherAuthCheckEmpty();
        $data['title'] = 'DarkblowPB || Launcher Redeem Code';
        $data['content'] = 'launcher/content/home/content_home';
        $this->load->view('launcher/layout/wrapper', $data, FALSE);
    }

    function login()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'login',
            'Username',
            'trim|strtolower|required|min_length[4]|max_length[16]|alpha_numeric',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Contains 4 Characters Or More',
                'max_length' => '%s Maximal Length Reached (max. 16 Characters)',
                'alpha_numeric' => '%s Only Alpha Numeric Characters Allowed'
            )
        );
        $valid->set_rules(
            'password',
            'Password',
            'trim|strtolower|required|min_length[4]|max_length[16]|alpha_numeric',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Contains 4 Characters Or More',
                'max_length' => '%s Maximal Length Reached (max. 16 Characters)',
                'alpha_numeric' => '%s Only Alpha Numeric Characters Allowed'
            )
        );
        if ($valid->run()) 
        {
            $i = $this->input;
            $login = $i->post('login');
            $password = $i->post('password');
            $this->login_library->launcher_LoginProcessing($login, $password);
        }
        else 
        {
            $this->login_library->launcherAuthCheckExist();
            $data['title'] = 'DarkblowPB || Launcher Redeem Code';
            $data['content'] = 'launcher/content/login/content_login';
            $this->load->view('launcher/layout/wrapper', $data, FALSE);
        }
    }
    
    function logout()
    {
        $this->login_library->launcher_LogoutProcessing();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>