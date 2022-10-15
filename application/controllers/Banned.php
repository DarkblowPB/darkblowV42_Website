<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Banned extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string'));

        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Maintenance_Protection();
        $this->darkblowprotection->BlockedIP_Protection();
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'IP Address Banned';
        $this->load->view('main/content/banned/content_banned', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
