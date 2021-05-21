<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Ip_req extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function index()
    {
        $ip = $this->input->ip_address();
        // Checking IP Address
        $check = $this->db->get_where('web_launcher_ipaddress', array('ip_address' => $ip));
        $result = $check->row();
        if (!$result)
        {
            $this->db->insert('web_launcher_ipaddress', array('ip_address' => $ip));
        }
        echo $this->input->ip_address();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>