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
		$this->lib->GetVisitorData('Login');

		$this->main_protect->mainProtectB();
		$this->main_protect->SessionProtector();
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();

		$this->load->model('main/login_model', 'login');
	}

	function index()
	{
		$data['title'] = 'Login';
		$data['isi'] = 'main/content/login/content_login';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_login()
	{
		$response = array();

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
		if ($this->form_validation->run()) $this->login->LoginValidationV2();
		else {
			$this->form_validation->set_error_delimiters('', '');
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = validation_errors();
			echo json_encode($response);
		}
	}

	function do_gettoken()
	{
		$response = array();

		$response['response'] = 'true';
		$response['token'] = $this->security->get_csrf_hash();

		echo json_encode($response);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //