<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
	}
	public function auth_register()
	{
		$data = array(
			'login' => $this->input->post('login'),
			'email' => $this->input->post('email'),
			'password' => $this->lib->password_encrypt($this->input->post('password')),
			'hint_question' => $this->input->post('hint_question'),
			'hint_answer' => $this->input->post('hint_answer')
		);
		
		// Checking Username
		$check_username = $this->db->get_where('accounts', array('login' => $data['login']));
		$result_username = $check_username->row();
		if ($result_username) 
		{
			$this->session->set_flashdata('error', 'Username Already Registered');
			redirect(base_url('register'), 'refresh');
		}
		else 
		{
			// Insert Into Database
			$insert = $this->db->insert('accounts', $data);
			if ($insert) 
			{
				$this->session->set_flashdata('success', 'Successfully Registered.');
				redirect(base_url('register'), 'refresh');
			}
			else 
			{
				$this->session->set_flashdata('error', 'Major Error. Please Contact DEV & GM For Detail Information');
				redirect(base_url('register'), 'refresh');
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //