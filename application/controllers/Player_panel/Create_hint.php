<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Create_hint extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/createhint_model', 'hint');
		$this->load->helper('hintquestion');

		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->RequireLogin_Protection();
		$this->darkblowprotection->CreateHintPage_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Create Hint';
		$data['isi'] = 'main/content/player_panel/content_createhint';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_create()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();

			$this->form_validation->set_error_delimiters('', '');

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
			if ($this->form_validation->run()) $this->hint->CreateHintValidationV2();
			else {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors('', '');

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //