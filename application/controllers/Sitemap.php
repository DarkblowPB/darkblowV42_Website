<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Sitemap extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/sitemap_model', 'sitemap');
    }

    function index()
    {
        
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>