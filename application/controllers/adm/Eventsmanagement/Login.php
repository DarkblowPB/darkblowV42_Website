<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventslogin_model', 'eventslogin');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Login Events';
        $data['header'] = 'Login Events';

        $data['items'] = $this->eventslogin->GetAllEvents();

        $data['content'] = 'admin/content/events/login/content_login';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $data['title'] = 'Add Login Events';
        $data['header'] = 'Add Login Events';

        $data['items'] = $this->eventslogin->GetAllItems();

        $data['content'] = 'admin/content/events/login/content_add';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_add()
    {
        $response = array();

        $this->form_validation->set_rules(
            'start_date',
            'Date Start',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        $this->form_validation->set_rules(
            'end_date',
            'Date End',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        $this->form_validation->set_rules(
            'reward_id',
            'Reward Item',
            'required|numeric|min_length[9]|max_length[10]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Accepted Numeric Characters.',
                'min_length' => '%s Must Using 9 Numeric Characters.',
                'max_length' => '%s Only Can Using 10 Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'reward_count',
            'Reward Count',
            'required|numeric|in_list[64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Accepted Numeric Characters.',
                'in_list' => 'Invalid %s'
            )
        );
        if ($this->form_validation->run()) $this->eventslogin->AddNewEvents();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_delete()
    {
        $response = array();

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
        if ($this->form_validation->run()) $this->eventslogin->DeleteEvents();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
