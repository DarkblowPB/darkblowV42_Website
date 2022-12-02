<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Playtime extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsplaytime_model', 'eventsplaytime');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Playtime Events';
        $data['header'] = 'Playtime Events';

        $data['playtime'] = $this->eventsplaytime->GetAllEvents();

        $data['content'] = 'admin/content/events/playtime/content_playtime';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        // return base_url('adm/dashboard');
        $data['title'] = 'Create Playtime Events';
        $data['header'] = 'Create Playtime Events';

        $data['items'] = $this->eventsplaytime->GetAllItems();

        $data['content'] = 'admin/content/events/playtime/content_add';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_add()
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
        $this->form_validation->set_rules(
            'title',
            'Title',
            'required|is_unique[events_playtime.title]|max_length[30]',
            array(
                'required' => '%s Cannot Be Empty.',
                'is_unique' => 'Please Use Another %s.',
                'max_length' => '%s Only Can Contains 30 Characters.'
            )
        );
        $this->form_validation->set_rules(
            'seconds_target',
            'Playtime',
            'required|in_list[1800,3600,7200]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'reward_count',
            'Reward Duration',
            'required|in_list[64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run()) $this->eventsplaytime->AddNewEvents();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'title',
            'Title',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run()) $this->eventsplaytime->DeleteEvents();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
