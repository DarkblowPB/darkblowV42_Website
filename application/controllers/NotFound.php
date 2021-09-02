<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
	}

	function index()
	{
		$data['title'] = 'Not Found';
		$this->load->view('main/content/error/content_error', $data, FALSE);
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //