<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Playersmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/playersmanagement_model', 'playersmanagement');
    }

    function index()
    {
        $data = array(
            'title' => 'Players Management - All Players',
            'header' => 'All Players',
            'players' => $this->playersmanagement->GetAllPlayers(),
            'content' => 'admin/content/playersmanagement/content_allplayers'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>