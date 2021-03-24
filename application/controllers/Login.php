<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->main_protect->mainProtectB();
		$this->load->model('main/login_model', 'login');
	}

	public function index()
	{
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
		if ($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'DarkblowPB || Login';
			$data['isi'] = 'main/content/login/content_login';
			$this->load->view('main/layout/wrapper', $data, FALSE);
		}
		else 
		{
			$data = array(
				'login' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->login->auth_login($data['login'], $data['password']);
		}
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //