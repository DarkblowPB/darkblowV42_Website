<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getLogAll()
    {
        return $this->db->order_by('id', 'desc')->get('web_adminpanel_log')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>