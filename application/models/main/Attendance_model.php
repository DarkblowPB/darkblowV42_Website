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
        $this->load->database();
    }

    function ClaimReward()
    {
        $response = array();

        $data = array(
            'event_id' => $this->encryption->encrypt($this->input->post('event_id', true)),
            'date' => $this->encryption->encrypt($this->input->post('date', true))
        );

        $date = array(
            'full_date' => date('d-m-Y'),
            'days' => date('d'),
            'months' => date('m'),
            'years' => date('Y')
        );

        $query = $this->db->get_where('events_attendance', array('id' => $this->encryption->decrypt($data['event_id']), 'day' => date('d-m-Y')))->row();
        if ($query)
        {
            
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>