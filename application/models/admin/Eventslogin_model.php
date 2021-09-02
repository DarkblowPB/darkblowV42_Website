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
        if ($query)
        {
            return $query->item_name;
        }
        else
        {
            return "";
        }
    }

    function ConvertDuration($duration)
    {
        switch ($duration) {
            case '64800':
                {
                    return "1 Day";
                }
            case '259200':
                {
                    return "3 Days";
                }
            case '604800':
                {
                    return "7 Days";
                }
            case '2592000':
                {
                    return "30 Days";
                }
            
            default:
                return "";
        }
    }

    function ConvertDate($defaultDate)
    {
        $resultdate = array();

        // Get Years (2 Digits)
        $explode1 = explode('-', $defaultDate)[0];
        $split1 = str_split($explode1, 2);

        // Get Month (2 Digits)
        $explode2 = explode('-', $defaultDate)[1];

        // Get Days (2 Digits)
        $explode3 = explode('-', $defaultDate)[2];
        $split2 = str_split($explode3, 2);

        // Get Hours (2 Digits)
        $explode4 = explode('T', $defaultDate)[1];
        $explode5 = explode(':', $explode4);

        // Get Minutes (2 Digits)
        $explode6 = $explode5[1];

        // The Result
        $resultdate['years'] = $split1[1];
        $resultdate['month'] = $explode2;
        $resultdate['days'] = $split2[0];
        $resultdate['hours'] = $explode5[0];
        $resultdate['minutes'] = $explode6;

        return $resultdate;
    }

    function ConvertDate2($param)
    {
        return str_split($param, 2); // [0] Years | [1] Month | [2] Days | [3] Hours | [4] Minutes
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
            'start_date' => $this->ConvertDate($defaultDate)['years'].$this->ConvertDate($defaultDate)['month'].$this->ConvertDate($defaultDate)['days'].$this->ConvertDate($defaultDate)['hours'].$this->ConvertDate($defaultDate)['minutes'],
            'end_date' => $this->ConvertDate($defaultDate2)['years'].$this->ConvertDate($defaultDate2)['month'].$this->ConvertDate($defaultDate2)['days'].$this->ConvertDate($defaultDate2)['hours'].$this->ConvertDate($defaultDate2)['minutes'],
            'reward_id' => $this->encryption->decrypt($data['reward_id']),
            'reward_count' => $this->encryption->decrypt($data['reward_count'])
        ), true);

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