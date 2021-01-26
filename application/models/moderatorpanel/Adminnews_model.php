<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminnews_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getNewsAll()
    {
        return $this->db->get('web_quickslide')->result_array();
    }

    function getNewsId($id)
    {
        return $this->db->where('id', $id)->get('web_quickslide')->result_array();
    }

    function deleteNewsId($id)
    {
        $this->db->where('id', $id)->delete('web_quickslide');
    }

    function insertNews($data)
    {
        $this->db->insert('web_quickslide', $data);
    }

    function updateNews($data)
    {
        $this->db->where('id', $news->id)->update('web_quickslide', $data);
    }

    function getId($id)
    {
        $this->db->select('*');
        $this->db->from('web_quickslide');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>