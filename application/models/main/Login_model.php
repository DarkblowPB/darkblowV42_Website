<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
		$this->load->library('encryption');
	}
	function auth_login()
	{
		$data = array(
			'username' => $this->encryption->encrypt(pg_escape_string($this->input->post('username'))),
			'password' => $this->encryption->encrypt(pg_escape_string($this->lib->password_encrypt($this->input->post('password'))))
		);
		$check = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username']), 'password' => $this->encryption->decrypt($data['password'])));
		$result = $check->row();
		if ($result) 
		{
			$this->session->set_userdata('uid', $result->player_id);
			$this->session->set_userdata('player_name', $result->player_name);
			$this->session->set_userdata('access_level', $result->access_level);
			$this->session->set_flashdata('success', 'Login Successfully, Welcome '.$_SESSION['player_name'].'');
			redirect(base_url('home'), 'refresh');
		}
		else 
		{
			$this->session->set_flashdata('error', 'Username Or Password Wrong');
			redirect(base_url('login'), 'refresh');
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //