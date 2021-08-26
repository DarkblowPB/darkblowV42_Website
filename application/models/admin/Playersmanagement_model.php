<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Playersmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllPlayers()
    {
        return $this->db->get('accounts')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>