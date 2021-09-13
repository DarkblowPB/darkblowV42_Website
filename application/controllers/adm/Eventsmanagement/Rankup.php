<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Rankup extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['title'] = 'Rank Up Events';
        $data['header'] = 'Rank Up Events';
        $data['content'] = 'admin/content/events/rankup/content_rankup';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>