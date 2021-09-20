<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Banned extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->BlockedAccount_Protection();
    }

    function index()
    {
        $data['title'] = 'IP Address Banned';
        $this->load->view('main/content/banned/content_banned', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>