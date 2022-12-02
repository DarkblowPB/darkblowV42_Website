<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/login_model', 'login');

		$this->darkblowprotection->RunningLegality();
		// $this->darkblowlicense->DarkblowPBLicense();
		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->LoginPage_Protection();
		$this->darkblowprotection->NotRequireLogin_Protection();
		$this->darkblowprotection->Maintenance_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;
		$data['title'] = 'Login';
		$data['isi'] = 'main/content/login/content_login';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_login()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();
			$this->form_validation->set_error_delimiters('', '');

			$this->form_validation->set_rules(
				'username',
				'Username',
				'trim|strtolower|min_length[4]|max_length[16]|alpha_numeric|required',
				array(
					'min_length' => '%s Must Contains 4 Character With Combination of Letters and Numbers.',
					'max_length' => '%s Can Only Use 16 Characters.',
					'alpha_numeric' => '%s Can Only Use A Combination Of Letters And Numbers.',
					'required' => '%s Cannot Be Empty'
				)
			);
			$this->form_validation->set_rules(
				'password',
				'Password',
				'trim|strtolower|min_length[4]|max_length[16]|alpha_numeric|required',
				array(
					'min_length' => '%s Must Contains 4 Character With Combination of Letters and Numbers.',
					'max_length' => '%s Can Only Use 16 Characters.',
					'alpha_numeric' => '%s Can Only Use A Combination Of Letters And Numbers.',
					'required' => '%s Cannot Be Empty'
				)
			);
			if ($this->form_validation->run()) $this->login->LoginValidation();
			else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors();
				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //