<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
	}
	public function auth_login($username, $password)
	{
		$check = $this->db->get_where('accounts', array('login' => $username, 'password' => $this->lib->password_encrypt($password)));
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