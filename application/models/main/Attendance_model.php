<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Attendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAttendData()
    {
        return $this->db->order_by('id', 'asc')->get(Darkblowdatabase::events_attendance)->result_array();
    }

    function GetPlayerAttendDate($event_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::check_user_attendance, array('player_id' => $this->session->userdata('uid'), 'event_id' => $event_id))->row();
        if ($query) return TRUE;
        else return FALSE;
    }

    function GetTodayEventID()
    {
        $query = $this->db->get_where(Darkblowdatabase::events_attendance, array('date' => date('d-m-Y')))->row();
        if ($query) return $query->id;
        else return "0";
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
