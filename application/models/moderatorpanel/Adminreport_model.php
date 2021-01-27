<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminreport_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getReportAll()
    {
        return $this->db->get('web_report')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>