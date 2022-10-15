<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsplaytime_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllEvents()
    {
        return $this->db->get(Darkblowdatabase::events_playtime)->result_array();
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get(Darkblowdatabase::shop)->result_array();
    }

    function AddNewEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true),
            'title' => $this->input->post('title', true),
            'seconds_target' => $this->input->post('seconds_target', true),
            'reward_1' => $this->input->post('reward_1', true),
            'reward_2' => $this->input->post('reward_2', true),
            'reward_count' => $this->input->post('reward_count', true)
        );

        if ($data['reward_1'] == '' && $data['reward_2'] == '') {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Reward 1 & 2 Cannot Be Empty.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $query = $this->db->insert(Darkblowdatabase::events_playtime, array(
                'start_date' => $this->darkblowlib->ExplodeDate($data['start_date'])['years'] . $this->darkblowlib->ExplodeDate($data['start_date'])['month'] . $this->darkblowlib->ExplodeDate($data['start_date'])['days'] . $this->darkblowlib->ExplodeDate($data['start_date'])['hours'] . $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
                'end_date' => $this->darkblowlib->ExplodeDate($data['end_date'])['years'] . $this->darkblowlib->ExplodeDate($data['end_date'])['month'] . $this->darkblowlib->ExplodeDate($data['end_date'])['days'] . $this->darkblowlib->ExplodeDate($data['end_date'])['hours'] . $this->darkblowlib->ExplodeDate($data['end_date'])['minutes'],
                'title' => $data['title'],
                'seconds_target' => $data['seconds_target'],
                'good_reward1' => $data['reward_1'],
                'good_reward2' => $data['reward_2'],
                'good_count1' => $data['reward_count'],
                'good_count1' => $data['reward_count']
            ));

            if ($query) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Created Events.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {

                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Created Events.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        }
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'title' => $this->input->post('title', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::events_playtime, array('title' => $data['title']))->row();
        if ($query) {
            $delete = $this->db->where('title', $query->title)->delete(Darkblowdatabase::events_playtime);
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
            $response['message'] = 'Invalid Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
