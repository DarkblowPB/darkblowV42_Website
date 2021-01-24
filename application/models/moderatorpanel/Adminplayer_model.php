<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminplayer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getPlayerAll()
    {
        return $this->db->query('SELECT player_id, player_name, access_level FROM accounts WHERE access_level <= 2 ORDER BY player_id DESC')->result_array();
    }

    function getPlayerId($id)
    {
        return $this->db->where('player_id', $id)->get('accounts')->result_array();
    }
    
    function getInventoryId($id)
    {
        return $this->db->where('owner_id' , $id)->get('player_items')->num_rows();
    }

    function getItem_unused($id)
    {
        $this->db->select('*');
        $this->db->from('player_items');
        $this->db->where('owner_id', $id);
        $this->db->where('equip', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getItem_used($id)
    {
        $this->db->select('*');
        $this->db->from('player_items');
        $this->db->where('owner_id', $id);
        $this->db->where('equip', '2');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getItem_permanent($id)
    {
        $this->db->select('*');
        $this->db->from('player_items');
        $this->db->where('owner_id', $id);
        $this->db->where('equip', '3');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getInventoryIdAll($id)
    {
        return $this->db->order_by('object_id', 'desc')->where('owner_id', $id)->get('player_items')->result_array();
    }

    function getItem($object_id)
    {
        return $this->db->where('object_id', $object_id)->get('player_items')->result_array();
    }

    function deleteInventoryId($object_id)
    {
        $this->db->where('object_id', $object_id);
        $this->db->delete('player_items');
    }

    function extendItem($object_id, $value)
    {
        $this->db->where('object_id', $object_id)->update('player_items', array('count' => $value));
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>