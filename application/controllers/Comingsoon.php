<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Comingsoon extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Coming Soon';
		$this->load->view('main/content/coming_soon/content_comingsoon', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //