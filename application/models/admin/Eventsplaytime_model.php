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

        $this->load->library('lib');
    }

    function GetAllEvents()
    {
        return $this->db->get('events_playtime')->result_array();
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function AddNewEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->encryption->encrypt($this->input->post('start_date', true)),
            'end_date' => $this->encryption->encrypt($this->input->post('end_date', true)),
            'title' => $this->encryption->encrypt($this->input->post('title', true)),
            'seconds_target' => $this->encryption->encrypt($this->input->post('seconds_target', true)),
            'reward_1' => $this->input->post('reward_1', true),
            'reward_2' => $this->input->post('reward_2', true),
            'reward_count' => $this->encryption->encrypt($this->input->post('reward_count', true))
        );

        if ($data['reward_1'] == '' && $data['reward_2'] == '') {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Reward 1 & 2 Cannot Be Empty.';
        } else {
            $query = $this->db->insert('events_playtime', array(
                'start_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['years'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['month'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['days'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['hours'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
                'end_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['years'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['month'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['days'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['hours'] . $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['minutes'],
                'title' => $this->encryption->decrypt($data['title']),
                'seconds_target' => $this->encryption->decrypt($data['seconds_target']),
                'good_reward1' => $data['reward_1'],
                'good_reward2' => $data['reward_2'],
                'good_count1' => $this->encryption->decrypt($data['reward_count']),
                'good_count1' => $this->encryption->decrypt($data['reward_count'])
            ));

            if ($query) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Created Events.';

                echo json_encode($response);
            } else {

                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Created Events.';

                echo json_encode($response);
            }
        }
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'title' => $this->encryption->encrypt($this->input->post('title', true))
        );

        $query = $this->db->get_where('events_playtime', array('title' => $this->encryption->decrypt($data['title'])))->row();
        if ($query) {
            $delete = $this->db->where('title', $query->title)->delete('events_playtime');
            if ($delete) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete This Events.';

                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Events.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Events.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
