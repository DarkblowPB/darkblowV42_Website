<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Visit extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsvisit_model', 'visit');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Visit Events';
        $data['header'] = 'Visit Events';
        $data['content'] = 'admin/content/events/visit/content_visit';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $data['title'] = 'Create New Visit Events';
        $data['header'] = 'Create New Visit Events';
        $data['content'] = 'admin/content/events/visit/content_add';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
