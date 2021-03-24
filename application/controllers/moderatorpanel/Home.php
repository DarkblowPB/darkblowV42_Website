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
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminhome_model', 'home');
        $this->load->model('moderatorpanel/logger_model', 'logger');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Dashboard';
        $data['header'] = 'Dashboard';
        $data['playerall'] = $this->home->getPlayerAll();
        $data['playeronline'] = $this->home->getPlayerOnline();
        $data['report'] = $this->home->getReport();
        $data['gm'] = $this->home->getGMAccount();
        $data['lastregistered'] = $this->home->getLastRegistered();
        $data['history'] = $this->home->getLogger();
        $data['content'] = 'moderatorpanel/content/home/content_home';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_access');

        $this->logger->logger_AdminLoginSuccess();
        redirect(base_url('moderatorpanel/login'), 'refresh');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>