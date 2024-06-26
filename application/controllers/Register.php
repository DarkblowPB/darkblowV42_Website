<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('main/register_model', 'register_model');
		$this->load->helper('hintquestion');
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Register';
		$data['isi'] = 'main/content/register/content_register';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_checkusername()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();

			$this->form_validation->set_rules(
				'login',
				'Username',
				'required|alpha_numeric|min_length[4]|max_length[16]|is_unique[accounts.login]',
				array(
					'required' => '%s Cannot Be Empty.',
					'alpha_numeric' => '%s Only Can Contains Alphabetic & Numeric Characters.',
					'min_length' => '%s Must Contains 4 Characters Or More.',
					'max_length' => '%s Can Only Contains 16 Characters.',
					'is_unique' => '%s Already Registered.'
				)
			);
			if ($this->form_validation->run()) $this->register_model->CheckUsername();
			else {
				$this->form_validation->set_error_delimiters('', '');

				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors();

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}

	function do_register()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules(
				'login',
				'Username',
				'trim|strtolower|required|is_unique[accounts.login]|alpha_numeric|min_length[4]|max_length[16]'
			);
			$this->form_validation->set_rules(
				'email',
				'Email',
				'trim|strtolower|required|is_unique[accounts.email]|valid_email'
			);
			$this->form_validation->set_rules(
				'password',
				'Password',
				'trim|strtolower|required|alpha_numeric|min_length[4]|max_length[16]'
			);
			$this->form_validation->set_rules(
				're_password',
				'Confirmation Password',
				'trim|strtolower|required|alpha_numeric|min_length[4]|max_length[16]|matches[password]'
			);
			$this->form_validation->set_rules(
				'hint_question',
				'Hint Question',
				'required|in_list[What was your childhood nickname?,What is the name of your favorite childhood friend?,In what city or town did your mother and father meet?,What is your favorite team?,What is your favorite movie?,What was your favorite sport in high school?,What was your favorite food as a child?,What is the first name of the boy or girl that you first kissed?,What was the make and model of your first car?,What was the name of the hospital where you were born?,Who is your childhood sports hero?,What school did you attend for sixth grade?,What was the last name of your third grade teacher?,In what town was your first job?,What was the name of the company where you had your first job?]'
			);
			$this->form_validation->set_rules(
				'hint_answer',
				'Hint Answer',
				'required'
			);
			if ($this->form_validation->run()) {
				if (!empty($this->session->userdata('g_email'))) $this->register_model->GoogleRegisterValidation();
				else $this->register_model->ModulCreate();
			} else {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors('', '');

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //