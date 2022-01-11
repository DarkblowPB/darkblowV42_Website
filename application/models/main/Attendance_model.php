<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
    }

    function GetAttendData()
    {
        return $this->db->order_by('id', 'asc')->get('events_attendance')->result_array();
    }

    function GetPlayerAttendDate($event_id)
    {
        $query = $this->db->get_where('check_user_attendance', array('player_id' => $this->session->userdata('uid'), 'event_id' => $event_id))->row();
        if ($query) return TRUE; else return FALSE;
    }

    function GetTodayEventID()
    {
        $query = $this->db->get_where('events_attendance', array('date' => date('d-m-Y')))->row();
        if ($query) return $query->id;
        else return "0";
    }

    function GetItemCategory($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069) return '1';
        else if ($item_id >= 1001001007 && $item_id <= 1105003032) return '2';
        else return '3';
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>