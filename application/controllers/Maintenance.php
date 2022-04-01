<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string'));
        $this->lib->GetVisitorData('Maintenance');

        $this->allprotect->Web_Protection();
        $this->allprotect->BlockedAccount_Protection();
        $this->allprotect->DarkblowCopierGuard();

        if ($this->getsettings->Get2()->website_condition != 0) redirect(base_url('home'), 'refresh');
    }

    function index()
    {
        $data['title'] = 'Maintenance';
        $this->load->view('main/content/maintenance/content_maintenance', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
