<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaccountconfig_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAccountConfig()
    {
        return $this->db->where('player_id', $_SESSION['uid_admin'])->get('accounts')->result_array();
    }

    function updateAccountConfig($data)
    {
        $this->db->where('player_id', $_SESSION['uid_admin'])->update('accounts', $data);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>