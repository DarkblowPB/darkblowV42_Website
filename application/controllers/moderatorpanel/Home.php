<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('moderatorpanel/Home_model', 'home');
        $this->load->model('moderatorpanel/Adminlogin_model', 'adminlogin');
        $this->load->model('moderatorpanel/logger_model', 'logger');
        $this->login_library->adminAuthCheck_Empty();
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Dashboard';
        $data['header'] = 'Dashboard';
        $data['playerall'] = $this->home->getPlayerAll();
        $data['playeronline'] = $this->home->getPlayerOnline();
        $data['gm'] = $this->home->getGMAccount();
        $data['lastregistered'] = $this->home->getLastRegistered();
        $data['history'] = $this->home->getLogger();
        $data['content'] = 'moderatorpanel/content/home/content_home';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function logout()
    {
        $this->logger->logger_logoutberhasil();
        $this->login_library->adminlogout();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>