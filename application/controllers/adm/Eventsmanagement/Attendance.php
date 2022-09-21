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
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/eventsattendance_model', 'attendance');
    }

    function index()
    {
        $data['title'] = 'Attendance Events';
        $data['header'] = 'Attendance Events';

        $data['attend'] = $this->attendance->GetAttendanceData();

        $data['content'] = 'admin/content/events/attendance/content_attendance';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function create($type = null)
    {
        if ($type == null) redirect(base_url('adm/eventsmanagement/attendance'), 'refresh');
        else {
            switch ($type) {
                case '7days': {
                        $data = array(
                            'title' => 'Create 7 Days Attendance Event',
                            'reward' => $this->attendance->GetRewardItemList(),
                            'header' => 'Create 7 Days Attendance Event',
                            'content' => 'admin/content/events/attendance/content_create_7days'
                        );
                        $this->load->view('admin/layout/wrapper', $data, FALSE);
                        break;
                    }

                case '14days': {
                        $data = array(
                            'title' => 'Create 7 Days Attendance Event',
                            'reward' => $this->attendance->GetRewardItemList(),
                            'header' => 'Create 7 Days Attendance Event',
                            'content' => 'admin/content/events/attendance/content_create_14days'
                        );
                        $this->load->view('admin/layout/wrapper', $data, FALSE);
                        break;
                    }

                default: {
                        redirect(base_url('adm/eventsmanagement/attendance'), 'refresh');
                        break;
                    }
            }
        }
    }

    function do_create7days()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'reward_day_1',
            'Reward Day 1',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_2',
            'Reward Day 2',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_3',
            'Reward Day 3',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_4',
            'Reward Day 4',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_5',
            'Reward Day 5',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_6',
            'Reward Day 6',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_7',
            'Reward Day 7',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_duration',
            'Reward Duration',
            'required|numeric|in_list[64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.',
                'in_list' => '%s Invalid.'
            )
        );
        if ($this->form_validation->run()) $this->attendance->CreateEvents7DaysV2();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }

    function do_create14days()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'reward_day_1',
            'Reward Day 1',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_2',
            'Reward Day 2',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_3',
            'Reward Day 3',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_4',
            'Reward Day 4',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_5',
            'Reward Day 5',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_6',
            'Reward Day 6',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_7',
            'Reward Day 7',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_8',
            'Reward Day 8',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_9',
            'Reward Day 9',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_10',
            'Reward Day 10',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_11',
            'Reward Day 11',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_12',
            'Reward Day 12',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_13',
            'Reward Day 13',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_day_14',
            'Reward Day 14',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_duration',
            'Reward Duration',
            'required|numeric|in_list[64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Contains Numeric Characters.',
                'in_list' => '%s Invalid.'
            )
        );
        if ($this->form_validation->run()) $this->attendance->CreateEvents14Days();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'event_id',
            'Event ID',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Contains Numeric Characters.'
            )
        );
        if ($this->form_validation->run()) $this->attendance->DeleteEvents();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }

    function do_disableevent()
    {
        $this->attendance->ClearAllAndDisableEvent();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
