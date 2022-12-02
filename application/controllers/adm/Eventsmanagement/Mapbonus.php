<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Mapbonus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/eventsmapbonus_model', 'eventsmapbonus');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Map Bonus Events';
        $data['header'] = 'Map Bonus Events';

        $data['events'] = $this->eventsmapbonus->GetAllEvents();

        $data['content'] = 'admin/content/events/mapbonus/content_mapbonus';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $data['title'] = 'Add New Map Bonus Events';
        $data['header'] = 'Add New Map Bonus Events';

        $data['items'] = '';

        $data['content'] = 'admin/content/events/mapbonus/content_add';
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
            'map_id',
            'Map',
            'required|numeric|is_unique[events_mapbonus.map_id]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.',
                'is_unique' => 'Events For This %s Already Exists.'
            )
        );
        $this->form_validation->set_rules(
            'stage_type',
            'Gameplay Type',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'percent_gp',
            'Point Boost',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'percent_xp',
            'EXP Boost',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.'
            )
        );
        if ($this->form_validation->run()) $this->eventsmapbonus->AddNewEvents();
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
        if ($this->form_validation->run()) $this->eventsmapbonus->DeleteEvents();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
