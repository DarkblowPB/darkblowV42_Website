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
	}

	function LoginValidationV2()
	{
		sleep(1);
		$data = array(
			'username' => $this->encryption->encrypt($this->input->post('username', true)),
			'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password', true)))
		);

		$response = array();

		$query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username']), 'password' => $this->encryption->decrypt($data['password'])))->row();
		if ($query)
		{
			if ($query->access_level == '-1')
			{
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Your Account Has Been Blocked. Login Failed.';
				echo json_encode($response);
			}
			else
			{
				// Set Session
				$sessionData = array(
					'uid' => $query->player_id,
					'player_name' => $query->player_name,
					'access_level' => $query->access_level
				);
				$this->session->set_userdata($sessionData);
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				if ($_SESSION['player_name'] == '')
				{
					$response['message'] = 'Successfully Logged In. Welcome '.$query->login.'.';
				}
				if ($_SESSION['player_name'] != '')
				{
					$response['message'] = 'Successfully Logged In. Welcome '.$_SESSION['player_name'].'.';
				}
				echo json_encode($response);
			}
		}
		else
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Username or Password.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //