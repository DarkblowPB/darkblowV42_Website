<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Createhint_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
	}

	function CreateHintValidationV2()
	{
		$data = array(
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer')),
			'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password')))
		);

		$response = array();

		$query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'], 'password' => $this->encryption->decrypt($data['password'])))->row();
		if ($query)
		{
			$update = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array(
				'hint_question' => $this->encryption->decrypt($data['hint_question']),
				'hint_answer' => $this->encryption->decrypt($data['hint_answer'])
			));
			if ($update)
			{
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Successfully Create Hint.';
				echo json_encode($response);
			}
			else
			{
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Failed To Create Hint.';
				echo json_encode($response);
			}
		}
		else
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Password.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //