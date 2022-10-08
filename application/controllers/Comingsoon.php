<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Comingsoon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string'));

		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->ComingSoonPage_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Coming Soon';
		$this->load->view('main/content/coming_soon/content_comingsoon', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //