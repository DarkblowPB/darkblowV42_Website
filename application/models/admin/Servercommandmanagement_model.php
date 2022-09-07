<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Servercommandmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('lib');
    }

    function GetServerState()
    {
        if ($this->lib->CheckOpenPort($this->config->item('main_config')['pbserver_auth_host'], '39190') && $this->lib->CheckOpenPort($this->config->item('main_config')['pbserver_auth_host'], '39191'))
            return TRUE;
        else return FALSE;
    }

    function GetAllPlayers()
    {
        return $this->db->where(array('access_level' => '0', 'email != ' => 'empty@empty.empty'))->order_by('player_id', 'asc')->get('accounts')->result_array();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "";
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
