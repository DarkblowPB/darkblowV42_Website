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

		$query = $this->db->get_where('accounts', array(
			'login' => $this->encryption->decrypt($data['username']),
			'password' => $this->encryption->decrypt($data['password'])
		))->row();
		
		if ($query)
		{
			$sessionData = array(
				'uid' => $query->player_id,
				'player_name' => $query->player_name,
				'access_level' => $query->access_level
			);

			$this->session->set_userdata($sessionData);
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //