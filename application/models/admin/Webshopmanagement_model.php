<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Webshopmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllWebshopData()
    {
        return $this->db->order_by('id', 'desc')->get('webshop')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>