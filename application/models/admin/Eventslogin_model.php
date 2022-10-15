<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventslogin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllEvents()
    {
        return $this->db->get(Darkblowdatabase::events_login)->result_array();
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc', true)->get(Darkblowdatabase::shop)->result_array();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::shop, array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "";
    }

    function ConvertDuration($duration)
    {
        switch ($duration) {
            case '64800':
                return "1 Day";
            case '259200':
                return "3 Days";
            case '604800':
                return "7 Days";
            case '2592000':
                return "30 Days";
            default:
                return "";
        }
    }

    function AddNewEvents()
    {
        sleep(1);
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true),
            'reward_id' => $this->input->post('reward_id', true),
            'reward_count' => $this->input->post('reward_count', true)
        );


        $defaultDate = $data['start_date']; // Start Date
        $defaultDate2 = $data['end_date']; // End Date

        $query = $this->db->insert(Darkblowdatabase::events_login, array(
            'start_date' => $this->darkblowlib->ExplodeDate($defaultDate)['years'] . $this->darkblowlib->ExplodeDate($defaultDate)['month'] . $this->darkblowlib->ExplodeDate($defaultDate)['days'] . $this->darkblowlib->ExplodeDate($defaultDate)['hours'] . $this->darkblowlib->ExplodeDate($defaultDate)['minutes'],
            'end_date' => $this->darkblowlib->ExplodeDate($defaultDate2)['years'] . $this->darkblowlib->ExplodeDate($defaultDate2)['month'] . $this->darkblowlib->ExplodeDate($defaultDate2)['days'] . $this->darkblowlib->ExplodeDate($defaultDate2)['hours'] . $this->darkblowlib->ExplodeDate($defaultDate2)['minutes'],
            'reward_id' => $data['reward_id'],
            'reward_count' => $data['reward_count']
        ));

        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Created New Login Events.';
            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Created New Login Events.';
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function DeleteEvents()
    {
        sleep(1);
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::events_login, $data)->row();
        if ($query) {
            $delete = $this->db->where(array('start_date' => $query->start_date, 'end_date' => $query->end_date))->delete(Darkblowdatabase::events_login);
            if ($delete) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete This Events.';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Events.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Events Not Found.';
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
