<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Quest extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsquest_model', 'eventsquest');
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Events Quest';
        $data['header'] = 'Events Quest';

        $data['events'] = $this->eventsquest->GetEvents();

        $data['content'] = 'admin/content/events/quest/content_quest';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'start_date',
            'Start Date',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run()) $this->eventsquest->DeleteEvents();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_update()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'start_date',
            'Start Date',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        $this->form_validation->set_rules(
            'end_date',
            'End Date',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run()) $this->eventsquest->UpdateEvents();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
