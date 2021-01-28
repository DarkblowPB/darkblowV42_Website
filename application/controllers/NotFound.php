<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function index()
	{
		$data['title'] = '404 - Not Found';
		$this->load->view('main/content/error/content_error', $data, FALSE);
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //