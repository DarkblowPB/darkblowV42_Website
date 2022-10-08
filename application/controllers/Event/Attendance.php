<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Attendance extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load(array('header', 'string', 'message'));
        $this->load->model('main/attendance_model', 'attendance');

        $this->darkblowprotection->BlockedIP_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->Maintenance_Protection();
        $this->darkblowprotection->RequireLogin_Protection();
        $this->darkblowprotection->AttendancePage_Protection();

        $this->darkblowlib->FeatureControl('attendance', '');
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
