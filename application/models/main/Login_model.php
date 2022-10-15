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
		$this->lang->load('message');
	}

	/**
	 * A Complex Login Validation Method To Validate User
	 * 
	 * @author Darkblow Studio
	 * @package Login Module
	 * @copyright Darkblow Studio 2022
	 */
	function LoginValidation()
	{
		sleep(1);
		$response = array();

		$data = array(
			'login' => $this->input->post('username', true),
			'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true))
		);

		$query = $this->db->get_where(Darkblowdatabase::accounts, $data)->row();
		if ($query) {
			if ($query->access_level == Darkblowaccesslevel::BANNED) {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_37');

				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				$sess_data = array(
					'uid' => $query->player_id,
					'login' => $query->login,
					'player_name' => $query->player_name,
					'access_level' => $query->access_level,
					'adminpanel_login_token' => $query->password,
				);

				if ($this->config->item('main_config')['project_version'] != '1.15.42.30') $sess_data['login_token'] = $query->password;

				$this->session->set_userdata($sess_data);

				$response['response'] = 'success';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_SUCCESS_6') . ($query->player_name != '' ? $query->player_name : $query->login) . '.';

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_38');

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}

	/**
	 * Login Validation V2
	 * 
	 * A Complex Login Validation Method To Validate User
	 * 
	 * @author Darkblow Studio
	 * @package Login Module
	 * @deprecated
	 * @return void
	 * @copyright Darkblow Studio 2022
	 */
	function LoginValidationV2()
	{
		sleep(1);
		$data = array(
			'login' => $this->input->post('username', true),
			'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true))
		);

		$response = array();

		$query = $this->db->get_where(Darkblowdatabase::accounts, $data)->row();
		if ($query) {
			if ($query->access_level == Darkblowaccesslevel::BANNED) {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_37');
				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				// Set Session
				$sessionData = array(
					'uid' => $query->player_id,
					'player_name' => $query->player_name,
					'access_level' => $query->access_level,
					'login_token' => $query->password,
				);
				$this->session->set_userdata($sessionData);
				$response['response'] = 'success';
				$response['token'] = $this->security->get_csrf_hash();
				$this->session->userdata('player_name') == '' ? $response['message'] = $this->lang->line('STR_SUCCESS_6') . $query->login : $response['message'] = $this->lang->line('STR_SUCCESS_6') . $this->session->userdata('player_name');

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'success';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_38');
			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //