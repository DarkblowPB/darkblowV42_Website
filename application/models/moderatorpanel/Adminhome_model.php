<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminhome_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getPlayerAll()
    {
        return $this->db->get('accounts')->num_rows();
    }

    function getPlayerOnline()
    {
        return $this->db->where('online', 't')->get('accounts')->num_rows();
    }

    function getReport()
    {
        $check = $this->db->get('web_report');
        $result = $check->num_rows();
        return $result;
    }

    function getGMAccount()
    {
        return $this->db->query('SELECT player_id, rank, player_name, access_level, online FROM accounts WHERE access_level >= 3 ORDER BY access_level DESC')->result_array();
    }

    function getLastRegistered()
    {
        return $this->db->query('SELECT * FROM accounts ORDER BY player_id DESC LIMIT 5')->result_array();
    }

    function getLogger()
    {
        return $this->db->order_by('id', 'desc')->limit(5)->get('web_adminpanel_log')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>