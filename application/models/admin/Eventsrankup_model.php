<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsrankup_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetRankUpEvents()
    {
        return $this->db->get(Darkblowdatabase::events_rankup)->row();
    }

    function UpdateEvents()
    {
        sleep(1);
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true),
            'point' => $this->input->post('point', true),
            'exp' => $this->input->post('exp', true)
        );

        $query = $this->db->update(Darkblowdatabase::events_rankup, array(
            'start_date' => $this->darkblowlib->ExplodeDate($data['start_date'])['years'] . $this->darkblowlib->ExplodeDate($data['start_date'])['month'] . $this->darkblowlib->ExplodeDate($data['start_date'])['days'] . $this->darkblowlib->ExplodeDate($data['start_date'])['hours'] . $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
            'end_date' => $this->darkblowlib->ExplodeDate($data['end_date'])['years'] . $this->darkblowlib->ExplodeDate($data['end_date'])['month'] . $this->darkblowlib->ExplodeDate($data['end_date'])['days'] . $this->darkblowlib->ExplodeDate($data['end_date'])['hours'] . $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
            'percent_xp' => $data['exp'],
            'percent_gp' => $data['point']
        ));

        if ($query) {

            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Update Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
