<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main/login_model', 'login');
	}

	public function index()
	{
		if (isset($_SESSION['uid'])) 
		{
			$this->session->set_flashdata('error', 'You Already Login! , '.$_SESSION['playername'].'.');
			redirect(base_url('home'),'refresh');
		}
		else
		{
			$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Cannot Be Empty'));
			$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Cannot Be Empty'));
			if ($this->form_validation->run())
			{
				$username =	$this->input->post('username');
				$password = $this->input->post('password');
				$this->login_library->login($username,$password);
			}
			$data['title'] = 'DarkblowPB || Login';
			$data['isi'] = 'main/content/login/content_login';
			$this->load->view('main/layout/wrapper', $data, FALSE);
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */