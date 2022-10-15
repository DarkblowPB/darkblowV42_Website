<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsquest_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function UpdateEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true)
        );

        $query = $this->db->get(Darkblowdatabase::events_quest)->num_rows();
        if ($query == 0) {
            $insert = $this->db->insert(Darkblowdatabase::events_quest, array(
                'start_date' => $this->darkblowlib->ExplodeDate($data['start_date'])['years'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['month'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['days'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['hours'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
                'end_date' => $this->darkblowlib->ExplodeDate($data['end_date'])['years'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['month'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['days'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['hours'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['minutes']
            ));
            if ($insert) {
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
        } else {
            $update = $this->db->update(Darkblowdatabase::events_quest, array(
                'start_date' => $this->darkblowlib->ExplodeDate($data['start_date'])['years'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['month'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['days'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['hours'] .
                    $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
                'end_date' => $this->darkblowlib->ExplodeDate($data['end_date'])['years'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['month'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['days'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['hours'] .
                    $this->darkblowlib->ExplodeDate($data['end_date'])['minutes']
            ));
            if ($update) {
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

    function GetEvents()
    {
        return $this->db->get(Darkblowdatabase::events_quest)->result_array();
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true)
        );

        $query = $this->db->where('start_date', $data['start_date'])->delete(Darkblowdatabase::events_quest);
        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Delete This Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Delete This Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
