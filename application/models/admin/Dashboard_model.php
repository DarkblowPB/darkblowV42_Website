<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetCountAllRegisteredPlayers()
    {
        return $this->db->get('accounts')->num_rows();
    }

    function GetCountAllOnlinePlayers()
    {
        return $this->db->get_where('accounts', array('online' => 't'))->num_rows();
    }

    function GetCountAllNews()
    {
        return $this->db->get_where('web_quickslide')->num_rows();
    }

    function GetCountAllBlockedPlayers()
    {
        return $this->db->get_where('accounts', array('access_level' => '-1'))->num_rows();
    }

    function GetFullServerCount()
    {
        return $this->db->get_where('info_gameservers', array('id' => '1'))->row();
    }

    function LastRegisteredPlayers()
    {
        return $this->db->order_by('player_id', 'desc')->limit(10)->get_where('accounts', array('access_level <' => '3', 'email != ' => 'empty@empty.empty'))->result_array();
    }

    function LastRedeemCodeUsed()
    {
        return $this->db->order_by('id', 'desc')->limit(10)->get('check_user_itemcode')->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
