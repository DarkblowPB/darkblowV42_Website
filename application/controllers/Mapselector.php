<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Mapselector extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->darkblowprotection->BlockedIP_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Maintenance_Protection();
        $this->darkblowprotection->MapselectorPage_Protection();
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Map Selector';
        $this->load->view('main/content/mapselector/content_mapselector', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
