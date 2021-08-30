<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->main_protect->mainProtectA();
		$this->load->model('main/redeemcode_model', 'redeemcode');
		$this->allprotect->Web_Protection();
	}
	
	function index()
	{
		$data['title'] = 'Redeem Code';
		$data['isi'] = 'main/content/player_panel/content_redeemcode';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_redeem()
	{
		$this->form_validation->set_rules(
			'code',
			'Code',
			'required',
			array('required' => '%s Cannot Be Empty.')
		);
		if ($this->form_validation->run())
		{
			$this->redeemcode->CodeValidationV2();
		}
		else
		{
			$error = array(
				'token' => $this->security->get_csrf_hash(),
				'response' => 'error',
				'message' => validation_errors()
			);
			echo json_encode($error);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //