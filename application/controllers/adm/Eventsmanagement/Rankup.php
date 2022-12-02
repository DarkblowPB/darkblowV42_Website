<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Rankup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsrankup_model', 'eventsrankup');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Rank Up Events';
        $data['header'] = 'Rank Up Events';

        $data['rankup'] = $this->eventsrankup->GetRankUpEvents();

        $data['content'] = 'admin/content/events/rankup/content_rankup';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
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
        $this->form_validation->set_rules(
            'point',
            'Point Boost',
            'required|numeric|max_length[4]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Can Be Set Up To 9999.'
            )
        );
        $this->form_validation->set_rules(
            'exp',
            'EXP Boost',
            'required|numeric|max_length[4]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Can Be Set Up To 9999.'
            )
        );
        if ($this->form_validation->run()) $this->eventsrankup->UpdateEvents();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
