<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Attendance extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/attendance_model', 'attendance');
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Attandance Events';

        $data['attend'] = $this->attendance->GetAttendData();

        $data['isi'] = 'main/content/event/content_attendance';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
