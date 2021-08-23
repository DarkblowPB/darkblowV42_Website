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
		$this->form_validation->set_rules(
			'code',
			'Redeem Code',
			'required',
			array('required' => '%s Cannot Be Empty')
		);
		if ($this->form_validation->run() === FALSE) 
		{
			$data['title'] = 'DarkblowPB || Redeem Code';
			$data['isi'] = 'main/content/player_panel/content_redeemcode';
			$this->load->view('main/layout/wrapper', $data, FALSE);
		}
		else 
		{
			$this->redeemcode->code_validation();
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //