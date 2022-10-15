<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsregister_model', 'eventsregister');
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Register Events';
        $data['header'] = 'Register Events';

        $data['events'] = $this->eventsregister->GetEvents();
        $data['items'] = $this->eventsregister->GetAllItems();

        $data['content'] = 'admin/content/events/register/content_register';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_update()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'item_id',
            'Reward',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'item_count',
            'Duration',
            'required|in_list[64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'stock',
            'Stock',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.'
            )
        );
        if ($this->form_validation->run()) $this->eventsregister->UpdateEvents();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_updatestate()
    {
        $this->eventsregister->UpdateEventsState();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
