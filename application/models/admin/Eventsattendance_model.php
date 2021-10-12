<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventsattendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAttendanceData()
    {
        return $this->db->get('events_attendance')->result_array();
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

    function GetItemDuration($duration)
    {
        switch ($duration) 
        {
            case '64800':
                return "1 Day";
            case '259200':
                return "3 Days";
            case '604800':
                return "7 Days";
            case '2592000':
                return "30 Days";
            
            default:
                return "-1 Day";
        }
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'event_id' => $this->encryption->encrypt($this->input->post('event_id', true))
        );

        $query = $this->db->get_where('events_attendance', array('id' => $this->encryption->decrypt($data['event_id'])))->row();
        if ($query)
        {
            $delete = $this->db->where('id', $query->id)->delete('events_attendance');
            if ($delete)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete This Event.';

                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Event.';

                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Events Found.';

            echo json_encode($response);
        }
    }

    function GetRewardItemList()
    {
        return $this->db->where('buy_type', '2')->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function CreateEvents7Days()
    {
        $response = array();

        $data = array(
            1 => $this->encryption->encrypt($this->input->post('reward_day_1', true)),
            2 => $this->encryption->encrypt($this->input->post('reward_day_2', true)),
            3 => $this->encryption->encrypt($this->input->post('reward_day_3', true)),
            4 => $this->encryption->encrypt($this->input->post('reward_day_4', true)),
            5 => $this->encryption->encrypt($this->input->post('reward_day_5', true)),
            6 => $this->encryption->encrypt($this->input->post('reward_day_6', true)),
            7 => $this->encryption->encrypt($this->input->post('reward_day_7', true)),
            8 => $this->encryption->encrypt($this->input->post('reward_duration', true))
        );

        $date = array(
            'full_date' => date('d-m-Y'),
            'day' => date('d'),
            'month' => date('m'),
            'year' => date('Y')
        );

        $state = array(
            'success' => 0,
            'fail' => 0
        );

        for ($i=1; $i <= 7; $i++)
        {
            $query = $this->db->insert('events_attendance', array(
                'day' => $i,
                'item_id' => $this->encryption->decrypt($data[$i]),
                'item_name' => $this->GetItemName($this->encryption->decrypt($data[$i])),
                'item_count' => $this->encryption->decrypt($data[8]),
                'total_claim' => '0',
                'date' => ($date['day']++).'-'.$date['month'].'-'.$date['year']
            ));
            if ($query)
            {
                $state['success']++;
            }
            else
            {
                $state['fail']++;
            }
        }

        $response['response'] = 'true';
        $response['token'] = $this->security->get_csrf_hash();
        $response['message'] = 'Successfully Create ['.$state['success'].'] Events. Failed ['.$state['fail'].']';

        echo json_encode($response);
    }

    function ClearAllAndDisableEvent()
    {
        $response = array();

        $query = array(
            0 => $this->db->truncate('events_attendance'),
            1 => $this->db->where('id', '1')->update('web_settings', array('attendance' => '0'))
        );

        if ($query[0] && $query[1])
        {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Disabled The Event.';

            echo json_encode($response);
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Disabled The Event.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>