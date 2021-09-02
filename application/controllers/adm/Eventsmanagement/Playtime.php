<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Playtime extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/eventsplaytime_model', 'eventsplaytime');
        $this->load->model('admin/eventslogin_model', 'eventslogin');
    }

    function index()
    {
        $data['title'] = 'Playtime Events';
        $data['header'] = 'Playtime Events';

        $data['playtime'] = $this->eventsplaytime->GetAllEvents();

        $data['content'] = 'admin/content/events/playtime/content_playtime';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>