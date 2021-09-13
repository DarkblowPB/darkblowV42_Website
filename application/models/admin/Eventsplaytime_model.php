<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Eventsplaytime_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin/eventslogin_model', 'eventslogin');
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
            'date_start' => $this->encryption->encrypt($this->input->post('date_start', true)),
            'date_end' => $this->encryption->encrypt($this->input->post('date_end', true)),
            'title' => $this->encryption->encrypt($this->input->post('title', true)),
            'seconds_target' => $this->encryption->encrypt($this->input->post('seconds_target', true)),
            'reward_type' => $this->encryption->encrypt($this->input->post('reward_type', true)),
            'good_reward1' => $this->encryption->encrypt($this->input->post('good_reward1', true)),
            'good_reward2' => $this->encryption->encrypt($this->input->post('good_reward2', true)),
            'good_count1' => $this->encryption->encrypt($this->input->post('good_count1', true)),
            'good_count2' => $this->encryption->encrypt($this->input->post('good_count2', true))
        );

        $purify = array(
            'date_start' => $this->eventslogin->ConvertDate($this->encryption->decrypt($data['date_start'])),
            'date_end' => $this->eventslogin->ConvertDate($this->encryption->decrypt($data['date_end']))
        );

        if ($this->encryption->decrypt($data['reward_type']) == 'single_reward')
        {
            $insert = $this->db->insert('events_playtime', array(
                'start_date' => $purify['date_start'],
                'end_date' => $purify['date_end'],
                'title' => $this->encryption->decrypt($data['title']),
                'seconds_target' => $this->encryption->decrypt($data['seconds_target']),
                'good_reward1' => $this->encryption->decrypt($data['good_reward1']),
                'good_count1' => $this->encryption->decrypt($data['good_count1'])
            ));

            if ($insert)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Created New Events';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Created New Events';
                echo json_encode($response);
            }
        }

        if ($this->encryption->decrypt($data['reward_type']) == 'double_reward')
        {
            $insert = $this->db->insert('events_playtime', array(
                'start_date' => $purify['date_start'],
                'end_date' => $purify['date_end'],
                'title' => $this->encryption->decrypt($data['title']),
                'seconds_target' => $this->encryption->decrypt($data['seconds_target']),
                'good_reward1' => $this->encryption->decrypt($data['good_reward1']),
                'good_reward2' => $this->encryption->decrypt($data['good_reward2']),
                'good_count1' => $this->encryption->decrypt($data['good_count1']),
                'good_count2' => $this->encryption->decrypt($data['good_count2'])
            ));

            if ($insert)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Created New Events';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Created New Events';
                echo json_encode($response);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>