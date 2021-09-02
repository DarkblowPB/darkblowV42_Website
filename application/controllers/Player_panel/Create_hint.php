<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Create_hint extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->main_protect->mainProtectA();
		$this->main_protect->mainProtectC();
		$this->load->model('main/createhint_model', 'hint');
	}

	function index()
	{
		$data['title'] = 'Create Hint';
		$data['isi'] = 'main/content/player_panel/content_createhint';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
	
	function do_create()
	{
		$this->form_validation->set_rules(
			'hint_question',
			'Hint Question',
			'required',
			array('required' => '%s Cannot Be Empty.')
		);
		$this->form_validation->set_rules(
			'hint_answer',
			'Hint Answer',
			'required',
			array('required' => '%s Cannot Be Empty.')
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required',
			array('required' => '%s Cannot Be Empty.')
		);
		if ($this->form_validation->run())
		{
			$this->hint->CreateHintValidationV2();
		}
		else
		{
			$this->form_validation->set_error_delimiters('', '');
			echo validation_errors();
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //