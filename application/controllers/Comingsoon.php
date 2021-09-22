<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Comingsoon extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
	}

	function index()
	{
		$data['title'] = 'Coming Soon';
		$this->load->view('main/content/coming_soon/content_comingsoon', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //