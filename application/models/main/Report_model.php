<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insertReport($data)
    {
        $this->db->insert('web_report', $data);
    }

    function getReportId($playername)
    {
        return $this->db->where('player_name', $playername)->get('web_report')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>