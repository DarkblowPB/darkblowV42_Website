<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->login_library->primaryAuthCheck_Exist();
		$this->load->model('main/register_model', 'register');
	}
	
	public function index()
	{
		$valid = $this->form_validation;
		$valid->set_rules('username','Username','required|alpha_numeric|min_length[4]|max_length[16]|is_unique[accounts.login]|strtolower',array('required' => '%s Cannot Be Empty','alpha_numeric' => '%s Only Characters And Numbers Allowed', 'min_length' => '%s Must Contain 4 Character Or More', 'max_length' => '%s Cannot More Than 16 Character', 'is_unique' => '%s Already Registered, Please Create Another'));
		$valid->set_rules('email','Email Address','required|min_length[10]|max_length[35]|is_unique[accounts.email]|valid_email|strtolower',array('required' => '%s Cannot Be Empty','min_length' => '%s Must Contain 10 Character Or More','max_length' => '%s Max Character Reached, Please Use Another','is_unique' => 'This %s Already Registered, Please Use Another Email', 'valid_email' => 'This %s Not Valid'));
		$valid->set_rules('password','Password','required|alpha_numeric|min_length[4]|max_length[16]|strtolower',array('required' => '%s harus diisi','alpha_numeric','min_length' => '%s Must Contain 4 Character Or More','max_length' => '%s Reached 16 Character Or More, Please Use Another Password'));
		$valid->set_rules('re_password','Confirmation Password','required|alpha_numeric|min_length[4]|max_length[16]|matches[password]|strtolower',array('required' => '%s harus diisi','alpha_numeric','min_length' => '%s Must Contain 4 Character Or More','max_length' => '%s Reached 16 Character Or More, Please Use Another Password','matches' => '%s Doesnt Match'));
		$valid->set_rules('hint_question', 'Hint Question', 'required', array('required' => '%s Cannot Be Empty'));
		$valid->set_rules('hint_answer', 'Hint Answer', 'required', array('required' => '%s Cannot Be Empty'));

		if ($valid->run() === FALSE) 
		{
			$data['title'] = 'DarkblowPB || Register';
			$data['isi'] = 'main/content/register/content_register';
			$this->load->view('main/layout/wrapper', $data, FALSE);	
		}
		else
		{
			$i = $this->input;
			$data = array(
				'login' => $i->post('username'),
				'email' => $i->post('email'),
				'password' => $this->register->password_encrypt($i->post('password')),
				'hint_question' => $i->post('hint_question'),
				'hint_answer' => $i->post('hint_answer')
			);

			$this->register->tambah($data);
			$this->session->set_flashdata('sukses', 'Successfully Registered!.');
			redirect(base_url('register'),'refresh');
		}
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */