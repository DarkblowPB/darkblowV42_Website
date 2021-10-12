<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Attendance extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load(array('header', 'string', 'message'));

        $this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
		$this->main_protect->mainProtectA();

        $this->load->model('main/attendance_model', 'attendance');

        if ($this->getsettings->Get2()->attendance != 1)
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function index()
    {
        $data['title'] = 'Attandance Events';

        $data['attend'] = $this->attendance->GetAttendData();

        $data['isi'] = 'main/content/event/content_attendance';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_claim()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'event_id',
            'Event ID',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'date',
            'Date',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run())
        {
            $this->attendance->ClaimReward();
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>