<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Ip_req extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        echo $this->input->ip_address();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>