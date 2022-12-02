<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/home_model', 'home');

		$this->darkblowprotection->RunningLegality();
		// $this->darkblowlicense->DarkblowPBLicense();
		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->HomePage_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Home';
		$data['isi'] = 'main/content/home/content_home';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //