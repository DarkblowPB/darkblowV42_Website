<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function do_logout()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();

			$this->session->sess_destroy();

			$response['response'] = 'true';
			$response['message'] = 'Successfully Logged Out.';
			$this->darkblowmessage->AjaxFlashData($response);
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //
