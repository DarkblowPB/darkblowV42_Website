<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Voucher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->primaryAuthCheck_Empty();
    }
    function index()
    {
        $data['title'] = 'DarkblowPB || Voucher';
        $data['isi'] = 'main/content/voucher/content_voucher';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>