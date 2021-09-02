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
    }

    function GetAllEvents()
    {
        return $this->db->get('events_playtime')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>