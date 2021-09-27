<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
	}

	function ChangePasswordV2()
	{
		$response = array();

		$data = array(
			'old_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('old_password', true))),
			'new_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('new_password', true))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('confirm_password', true))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true))
		);

		$query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'], 'password' => $this->encryption->decrypt($data['old_password'])))->row();
		if ($query)
		{
			if ($query->email_verification == '0')
			{
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Please Confirm Your Email First.';

				echo json_encode($response);
			}
			if ($query->email_verification == '1')
			{
				if ($this->encryption->decrypt($data['new_password']) == $this->encryption->decrypt($data['old_password']))
				{
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'New Password Cannot Be Same Like Old Password.';

					echo json_encode($response);
				}
				else
				{
					$update = $this->db->where('player_id', $query->player_id)->update('accounts', array(
						'password' => $this->encryption->decrypt($data['new_password'])
					));
					if ($update)
					{
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Successfully Change Password.';
	
						echo json_encode($response);
					}
					else
					{
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Failed To Change Password.';
	
						echo json_encode($response);
					}
				}
			}
		}
		else
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Old Password.';

			echo json_encode($response);
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
			'old_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('old_password'))),
			'new_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('new_password'))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('confirm_password'))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer'))
		);

		$query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'],'password' => $this->encryption->decrypt($data['old_password'])))->row();
		if ($query)
		{
			if ($this->encryption->decrypt($data['new_password']) == $query->password)
			{
				// If New Password Same Like Old Password
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'New Password Cannot Be Same As Old Password.';
				echo json_encode($response);
			}
			else
			{
				if ($this->encryption->decrypt($data['hint_question']) != $query->hint_question)
				{
					// If Wrong Hint Question
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Invalid Hint Question.';
					echo json_encode($response);
				}
				else if ($this->encryption->decrypt($data['hint_answer']) != $query->hint_answer)
				{
					// If Wrong Hint Answer
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Invalid Hint Answer';
					echo json_encode($response);
				}
				else
				{
					// Update Password
					$update = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('password' => $this->encryption->decrypt($data['new_password'])));
					if ($update)
					{
						// If Successfully Update Password
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Successfully Change The Password.';
						echo json_encode($response);
					}
					else
					{
						// If Failed Update Password
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Failed To Change The Password.';
						echo json_encode($response);
					}
				}
			}
		}
		else
		{
			// If Wrong Old Password
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Old Password.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //