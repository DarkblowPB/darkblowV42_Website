<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsattendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAttendanceData()
    {
        return $this->db->get('events_attendance')->result_array();
    }

    function GetRewardItemList()
    {
        return $this->db->where('buy_type', '2')->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'event_id' => $this->encryption->encrypt($this->input->post('event_id', true))
        );

        $query = $this->db->get_where('events_attendance', array('id' => $this->encryption->decrypt($data['event_id'])))->row();
        if ($query) {
            $delete = $this->db->where('id', $query->id)->delete('events_attendance');
            if ($delete) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete This Event.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Event.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Events Found.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
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

        for ($i = 1; $i <= 7; $i++) {
            $query = $this->db->insert('events_attendance', array(
                'day' => $i,
                'item_id' => $this->encryption->decrypt($data[$i]),
                'item_name' => $this->darkblowlib->GetItemName($this->encryption->decrypt($data[$i])),
                'item_count' => $this->encryption->decrypt($data[8]),
                'total_claim' => '0',
                'date' => ($date['day']++) . '-' . $date['month'] . '-' . $date['year']
            ));
            if ($query) $state['success']++;
            else $state['fail']++;
        }

        $response['response'] = 'true';
        $response['token'] = $this->security->get_csrf_hash();
        $response['message'] = 'Successfully Create [' . $state['success'] . '] Events. Failed [' . $state['fail'] . ']';

        $this->darkblowmessage->AjaxFlashData($response);
    }

    function CreateEvents7DaysV2()
    {
        $response = array();

        $data = array(
            0 => $this->input->post('reward_day_1', true),
            1 => $this->input->post('reward_day_2', true),
            2 => $this->input->post('reward_day_3', true),
            3 => $this->input->post('reward_day_4', true),
            4 => $this->input->post('reward_day_5', true),
            5 => $this->input->post('reward_day_6', true),
            6 => $this->input->post('reward_day_7', true),
            7 => $this->input->post('reward_duration', true)
        );

        $num = 0;
        $state = array(
            'success' => 0,
            'failed' => 0
        );

        for ($i = 0; $i < count($data) - 1; $i++) {
            $query = $this->db->insert('events_attendance', array(
                'day' => ++$num,
                'item_id' => $data[$i],
                'item_name' => $this->darkblowlib->GetItemName($data[$i]),
                'item_count' => $data[7],
                'total_claim' => '0',
                'date' => date('d', strtotime('+ ' . $i . ' day', time())) . '-' . date('m') . '-' . date('Y')
            ));
            if ($query) $state['success'] += 1;
            else $state['failed'] += 1;
        }

        $response['response'] = 'success';
        $response['token'] = $this->security->get_csrf_hash();
        $response['message'] = 'Successfully Create Attendance Event [Success: ' . $state['success'] . '] [Failed: ' . $state['failed'] . ']';

        $this->darkblowmessage->AjaxFlashData($response);
    }

    function CreateEvents14Days()
    {
        $response = array();

        $data = array(
            0 => $this->input->post('reward_day_1', true),
            1 => $this->input->post('reward_day_2', true),
            2 => $this->input->post('reward_day_3', true),
            3 => $this->input->post('reward_day_4', true),
            4 => $this->input->post('reward_day_5', true),
            5 => $this->input->post('reward_day_6', true),
            6 => $this->input->post('reward_day_7', true),
            7 => $this->input->post('reward_day_8', true),
            8 => $this->input->post('reward_day_9', true),
            9 => $this->input->post('reward_day_10', true),
            10 => $this->input->post('reward_day_11', true),
            11 => $this->input->post('reward_day_12', true),
            12 => $this->input->post('reward_day_13', true),
            13 => $this->input->post('reward_day_14', true),
            14 => $this->input->post('reward_duration', true)
        );

        $num = 0;
        $state = array(
            'success' => 0,
            'failed' => 0
        );

        for ($i = 0; $i < count($data) - 1; $i++) {
            $query = $this->db->insert('events_attendance', array(
                'day' => ++$num,
                'item_id' => $data[$i],
                'item_name' => $this->darkblowlib->GetItemName($data[$i]),
                'item_count' => $data[13],
                'total_claim' => '0',
                'date' => date('d', strtotime('+ ' . $i . ' day', time())) . '-' . date('m') . '-' . date('Y')
            ));
            if ($query) $state['success'] += 1;
            else $state['failed'] += 1;
        }

        $response['response'] = 'success';
        $response['token'] = $this->security->get_csrf_hash();
        $response['message'] = 'Successfully Create Attendance Event [Success: ' . $state['success'] . '] [Failed: ' . $state['failed'] . ']';

        $this->darkblowmessage->AjaxFlashData($response);
    }

    function ClearAllAndDisableEvent()
    {
        $response = array();

        $query = array(
            0 => $this->db->truncate('events_attendance'),
            1 => $this->db->where('id', '1')->update('web_settings', array('attendance' => '0'))
        );

        if ($query[0] && $query[1]) {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Disabled The Event.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Disabled The Event.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
