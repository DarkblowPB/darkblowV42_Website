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
		$this->login_library->primaryAuthCheck_Exist();
		$this->load->model('main/login_model', 'login');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Cannot Be Empty'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Cannot Be Empty'));
		if ($this->form_validation->run() === FALSE)
		{
			$data['title'] = 'DarkblowPB || Login';
			$data['isi'] = 'main/content/login/content_login';
			$this->load->view('main/layout/wrapper', $data, FALSE);
		}
		else 
		{
			$username =	$this->input->post('username');
			$password = $this->input->post('password');
			$this->login_library->login($username,$password);
		}
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //