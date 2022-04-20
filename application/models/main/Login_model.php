<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('lib');
		$this->lang->load('message');
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
		if ($query) {
			if ($query->access_level == '-1') {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_37');
				echo json_encode($response);
			} else {
				// Set Session
				$sessionData = array(
					'uid' => $query->player_id,
					'player_name' => $query->player_name,
					'access_level' => $query->access_level,
					'login_token' => $query->password,
				);
				$this->session->set_userdata($sessionData);
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				// if ($this->session->userdata('player_name') == '') $response['message'] = ' ' . $query->login . '.';
				// if ($this->session->userdata('player_name') != '') $response['message'] = 'Successfully Logged In. Welcome ' . $this->session->userdata('player_name') . '.';
				$this->session->userdata('player_name') == '' ? $response['message'] = $this->lang->line('STR_SUCCESS_6') . $query->login : $response['message'] = $this->lang->line('STR_SUCCESS_6') . $this->session->userdata('player_name');

				echo json_encode($response);
			}
		} else {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_38');
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //