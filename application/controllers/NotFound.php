<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Not Found';
		$this->load->view('main/content/error/content_error', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //