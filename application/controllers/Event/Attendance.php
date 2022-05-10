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

        $this->lib->GetVisitorData('Attendance');

        $this->allprotect->Web_Protection();
        $this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
        $this->allprotect->DarkblowCopierGuard();
        $this->main_protect->SessionProtector();

        $this->main_protect->mainProtectA();

        $this->load->model('main/attendance_model', 'attendance');
        $this->load->library('servercommand_library');

        $this->lib->FeatureControl('attendance', '');
    }

    function index()
    {
        $data['title'] = 'Attandance Events';

        $data['attend'] = $this->attendance->GetAttendData();

        $data['isi'] = 'main/content/event/content_attendance';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
