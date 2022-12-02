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

        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->BlockedIP_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Production_Protection();
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Maintenance';
        $this->load->view('main/content/maintenance/content_maintenance', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
