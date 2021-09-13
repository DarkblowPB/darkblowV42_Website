<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Forgotpassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
    }

    function index()
    {
        redirect(base_url('home'), 'refresh');
        // $data['title'] = 'Forgot Password';
        // $data['isi'] = 'main/content/forgotpassword/content_forgotpassword';
        // $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>