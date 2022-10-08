<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Changepassword_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function ChangePasswordV2()
	{
		sleep(1);
		$response = array();

		$data = array(
			'old_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('old_password', true))),
			'new_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('new_password', true))),
			'confirm_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('confirm_password', true))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true))
		);

		$query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid'), 'password' => $this->encryption->decrypt($data['old_password'])))->row();
		if ($query) {
			if ($this->encryption->decrypt($data['new_password']) == $this->encryption->decrypt($data['old_password'])) {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_30');

				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				$update = $this->db->where('player_id', $query->player_id)->update(Darkblowdatabase::accounts, array(
					'password' => $this->encryption->decrypt($data['new_password'])
				));

				if ($update) {
					$response['response'] = 'true';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = $this->lang->line('STR_SUCCESS_3');

					$this->darkblowmessage->AjaxFlashData($response);
				} else {
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = $this->lang->line('STR_ERROR_31');

					$this->darkblowmessage->AjaxFlashData($response);
				}
			}
		} else {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_32');

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}

	/**
	 * Changepassword Validation
	 * 
	 * This Is Old Function, So Its Deprecated
	 * 
	 * Do Not Use This Function
	 * 
	 * @return void
	 * @copyright Darkblow Studio
	 */
	function changepassword_validation()
	{
		$response = array();

		$data = array(
			'old_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('old_password'))),
			'new_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('new_password'))),
			'confirm_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('confirm_password'))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer'))
		);

		$query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid'), 'password' => $this->encryption->decrypt($data['old_password'])))->row();
		if ($query) {
			if ($this->encryption->decrypt($data['new_password']) == $query->password) {
				// If New Password Same Like Old Password
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'New Password Cannot Be Same As Old Password.';
				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				if ($this->encryption->decrypt($data['hint_question']) != $query->hint_question) {
					// If Wrong Hint Question
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Invalid Hint Question.';
					$this->darkblowmessage->AjaxFlashData($response);
				} else if ($this->encryption->decrypt($data['hint_answer']) != $query->hint_answer) {
					// If Wrong Hint Answer
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Invalid Hint Answer';
					$this->darkblowmessage->AjaxFlashData($response);
				} else {
					// Update Password
					$update = $this->db->where('player_id', $this->session->userdata('uid'))->update(Darkblowdatabase::accounts, array('password' => $this->encryption->decrypt($data['new_password'])));
					if ($update) {
						// If Successfully Update Password
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Successfully Change The Password.';
						$this->darkblowmessage->AjaxFlashData($response);
					} else {
						// If Failed Update Password
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Failed To Change The Password.';
						$this->darkblowmessage->AjaxFlashData($response);
					}
				}
			}
		} else {
			// If Wrong Old Password
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Old Password.';
			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //