<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventslogin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function GetAllEvents()
    {
        return $this->db->get('events_login')->result_array();
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc', true)->get('shop')->result_array();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
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
            'start_date' => $this->encryption->encrypt($this->input->post('start_date', true)),
            'end_date' => $this->encryption->encrypt($this->input->post('end_date', true)),
            'reward_id' => $this->encryption->encrypt($this->input->post('reward_id', true)),
            'reward_count' => $this->encryption->encrypt($this->input->post('reward_count', true))
        );


        $defaultDate = $this->encryption->decrypt($data['start_date']); // Start Date
        $defaultDate2 = $this->encryption->decrypt($data['end_date']); // End Date

        $query = $this->db->insert('events_login', array(
            'start_date' => $this->lib->ExplodeDate($defaultDate)['years'].$this->lib->ExplodeDate($defaultDate)['month'].$this->lib->ExplodeDate($defaultDate)['days'].$this->lib->ExplodeDate($defaultDate)['hours'].$this->lib->ExplodeDate($defaultDate)['minutes'],
            'end_date' => $this->lib->ExplodeDate($defaultDate2)['years'].$this->lib->ExplodeDate($defaultDate2)['month'].$this->lib->ExplodeDate($defaultDate2)['days'].$this->lib->ExplodeDate($defaultDate2)['hours'].$this->lib->ExplodeDate($defaultDate2)['minutes'],
            'reward_id' => $this->encryption->decrypt($data['reward_id']),
            'reward_count' => $this->encryption->decrypt($data['reward_count'])
        ));

        if ($query)
        {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Created New Login Events.';
            echo json_encode($response);
        }
        else
        {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Created New Login Events.';
            echo json_encode($response);
        }
    }

    function DeleteEvents()
    {
        sleep(1);
        $response = array();

        $data = array(
            'start_date' => $this->encryption->encrypt($this->input->post('start_date', true)),
            'end_date' => $this->encryption->encrypt($this->input->post('end_date', true))
        );

        $query = $this->db->get_where('events_login', array(
            'start_date' => $this->encryption->decrypt($data['start_date']),
            'end_date' => $this->encryption->decrypt($data['end_date'])
        ))->row();
        if ($query)
        {
            $delete = $this->db->where(array('start_date' => $query->start_date, 'end_date' => $query->end_date))->delete('events_login');
            if ($delete)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete This Events.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Events.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Events Not Found.';
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>