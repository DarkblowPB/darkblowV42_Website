<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
    }

    public function index()
    {
        var_dump(get_cookie('_ga'));
        die;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
