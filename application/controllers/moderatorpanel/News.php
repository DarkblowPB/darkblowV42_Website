<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class News extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->adminAuthCheck_Empty();
        $this->load->model('moderatorpanel/adminnews_model', 'adminnews');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || News';
        $data['header'] = 'News';
        $data['news'] = $this->adminnews->getNewsAll();
        $data['content'] = 'moderatorpanel/content/news/content_news';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
    
    function news_create()
    {
        $data['title'] = 'DarkblowPB || Create News';
        $data['header'] = 'Create News';
        $data['content'] = 'moderatorpanel/content/news/content_createnews';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function news_edit()
    {
        if ($_GET['id'] == null) 
        {
            redirect(base_url('moderatorpanel/news'), 'refresh');
        }
        if ($_GET['id'] != null) 
        {
            $data['title'] = 'DarkblowPB || News Edit';
            $data['header'] = 'News Edit';
            $data['news'] = $this->adminnews->getNewsId($_GET['id']);
            $data['content'] = 'moderatorpanel/content/news/content_editnews';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
    }

    function news_delete()
    {
        if ($_GET['id'] == null) 
        {
            redirect(base_url('moderatorpanel/news'), 'refresh');
        }
        if ($_GET['id'] != null) 
        {
            $this->adminnews->deleteNewsId($_GET['id']);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>