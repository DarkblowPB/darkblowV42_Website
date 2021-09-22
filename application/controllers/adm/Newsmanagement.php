<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Newsmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/newsmanagement_model', 'newsmanagement');
    }

    function index()
    {
        $data['title'] = 'News Management';
        $data['header'] = 'News Management';

        $data['news'] = $this->newsmanagement->GetAllNews();

        $data['content'] = 'admin/content/news/content_news';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>