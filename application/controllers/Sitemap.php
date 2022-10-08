<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/sitemap_model', 'sitemap');
        $this->darkblowlib->GetVisitorData('Site Map');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB Reborn  - Sitemap';
        $this->load->view('main/content/sitemap/content_sitemap', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
