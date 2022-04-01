<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Mapselector extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Write Code Here
    }

    function index()
    {
        $data['title'] = 'Map Selector';
        $this->load->view('main/content/mapselector/content_mapselector', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
