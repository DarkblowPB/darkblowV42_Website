<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Createhint_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function CreateHintValidationV2()
	{
		$data = array(
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true)),
			'password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('password', true)))
		);

		$response = array();

		$query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid'), 'password' => $this->encryption->decrypt($data['password'])))->row();
		if ($query) {
			$update = $this->db->where('player_id', $this->session->userdata('uid'))->update('accounts', array(
				'hint_question' => $this->encryption->decrypt($data['hint_question']),
				'hint_answer' => $this->encryption->decrypt($data['hint_answer'])
			));
			if ($update) {
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_SUCCESS_4');
				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_33');
				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_34');
			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //