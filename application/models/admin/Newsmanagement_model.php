<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllNews()
    {
        return $this->db->order_by('id', 'desc')->get('web_quickslide')->result_array();
    }

    function GetDetails($news_id)
    {
        $query = $this->db->get_where('web_quickslide', array('id' => $news_id))->row();
        if ($query)
        {
            return $query;
        }
        else
        {
            redirect(base_url('adm/newsmanagement'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>