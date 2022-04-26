<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Visit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsvisit_model', 'visit');
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
