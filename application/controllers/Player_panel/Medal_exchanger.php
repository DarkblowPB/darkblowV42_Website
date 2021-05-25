<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Medal_exchanger extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {
        $data['title'] = 'DarkblowPB || Medal Exchanger';
        
		$this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>