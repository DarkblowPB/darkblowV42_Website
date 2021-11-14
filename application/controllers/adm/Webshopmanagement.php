<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Webshopmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/webshopmanagement_model', 'webshop');
    }

    function index()
    {
        $data['title'] = 'Webshop Management';
        $data['header'] = 'Webshop Management';

        $data['webshop'] = $this->webshop->GetAllWebshopData();

        $data['content'] = 'admin/content/webshopmanagement/content_webshopmanagement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>