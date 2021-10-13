<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Register');

		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
		$this->main_protect->mainProtectB();

		$this->load->model('main/register_model', 'register');
	}
	
	function index()
	{
		$data['title'] = 'Register';
		$data['isi'] = 'main/content/register/content_register';
		$this->load->view('main/layout/wrapper', $data, FALSE);	
	}

	function do_checkusername()
	{
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
		if ($this->form_validation->run())
		{
			$this->register->CheckUsername();
		}
		else
		{
			$this->form_validation->set_error_delimiters('', '');

			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = validation_errors();
		}
	}

	function do_register()
	{
		$response = array();

		$this->form_validation->set_rules(
			'login',
			'Username',
			'trim|strtolower|required|is_unique[accounts.login]|alpha_numeric|min_length[4]|max_length[16]',
			array(
				'required' => '%s Cannot Be Empty.',
				'is_unique' => '%s Already Exists',
				'alpha_numeric' => '%s Only Can Using Alphabetic & Numeric Characters.',
				'min_length' => '%s Must Contains 4 Characters Or More.',
				'max_length' => '%s Only Can Accept 16 Characters.'
			)
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|strtolower|required|is_unique[accounts.email]|valid_email',
			array(
				'required' => '%s Cannot Be Empty.',
				'is_unique' => '%s Already Exists',
				'valid_email' => 'Invalid %s'
			)
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|strtolower|required|alpha_numeric|min_length[4]|max_length[16]',
			array(
				'required' => '%s Cannot Be Empty.',
				'alpha_numeric' => '%s Only Can Using Alphabetic & Numeric Characters.',
				'min_length' => '%s Must Contains 4 Characters Or More.',
				'max_length' => '%s Can Only Accepted 16 Characters.'
			)
		);
		$this->form_validation->set_rules(
			're_password',
			'Confirmation Password',
			'trim|strtolower|required|alpha_numeric|min_length[4]|max_length[16]|matches[password]',
			array(
				'required' => '%s Cannot Be Empty.',
				'alpha_numeric' => '%s Can Only Using Alphabetic & Numeric Characters.',
				'min_length' => '%s Must Contains 4 Characters Or More.',
				'max_length' => '%s Only Can Accepted 16 Characters.',
				'matches' => '%s Doesnt Matches.'
			)
		);
		$this->form_validation->set_rules(
			'hint_question',
			'Hint Question',
			'required|in_list[What was your childhood nickname?,What is the name of your favorite childhood friend?,In what city or town did your mother and father meet?,What is your favorite team?,What is your favorite movie?,What was your favorite sport in high school?,What was your favorite food as a child?,What is the first name of the boy or girl that you first kissed?,What was the make and model of your first car?,What was the name of the hospital where you were born?,Who is your childhood sports hero?,What school did you attend for sixth grade?,What was the last name of your third grade teacher?,In what town was your first job?,What was the name of the company where you had your first job?]',
			array(
				'required' => '%s Cannot Be Empty.',
				'in_list' => 'Invalid %s.'
			)
		);
		$this->form_validation->set_rules(
			'hint_answer',
			'Hint Answer',
			'required',
			array('required' => '%s Cannot Be Empty.')
		);
		if ($this->form_validation->run())
		{
			$this->register->RegisterValidationV3();
		}
		else
		{
			$this->form_validation->set_error_delimiters('', '');

			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = validation_errors();
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //