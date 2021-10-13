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

        $this->lang->load(array('header', 'string'));
        $this->lib->GetVisitorData('404 - Not Found');
		
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
	}

	function index()
	{
		$data['title'] = 'Not Found';
		$this->load->view('main/content/error/content_error', $data, FALSE);
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //