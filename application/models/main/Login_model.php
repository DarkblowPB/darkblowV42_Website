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
		$this->load->model('main/register_model', 'register');
	}
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where(array('login' => $username, 'password' => $this->register->password_encrypt($password)));
		$query = $this->db->get();
		return $query->row();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //