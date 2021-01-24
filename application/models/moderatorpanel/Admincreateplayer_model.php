<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Admincreateplayer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getRankList()
    {
        $this->db->select('*');
        $this->db->order_by('id', 'asc');
        $this->db->from('web_rankinfo');
        $query = $this->db->get();
        return $query->result_array();
    }

    function addPlayer($data)
    {
        $this->db->insert('accounts', $data);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>