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
		$this->load->library('encryption');
	}

	function changepassword_protect()
	{
		$check = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
		$result = $check->row();
		if ($result) 
		{
			if ($result->hint_question == null)
			{
				redirect(base_url('player_panel/create_hint'), 'refresh');
			}
			if ($result->hint_answer == null) 
			{
				redirect(base_url('player_panel/create_hint'), 'refresh');
			}
		}
	}
	
	function changepassword_validation()
	{
		$data = array(
			'old_password' => $this->encryption->encrypt(pg_escape_string(password_encrypt($this->input->post('old_password')))),
			'new_password' => $this->encryption->encrypt(pg_escape_string(password_encrypt($this->input->post('new_password')))),
			'confirm_password' => $this->encryption->encrypt(pg_escape_string(password_encrypt($this->input->post('confirm_password')))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer'))
		);

		// Checking Account
		$check_account = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
		$result_account = $check_account->row();
		if ($result_account) 
		{
			// Checking Password
			if ($this->encryption->decrypt($data['old_password']) != $result_account->password) 
			{
				$this->session->set_flashdata('error', 'Wrong Password.');
				redirect(base_url('player_panel/changepassword'), 'refresh');
			}
			if ($this->encryption->decrypt($data['new_password']) == $result_account->password) 
			{
				$this->session->set_flashdata('error', 'New Passwords May Not Be The Same As Old Passwords.');
				redirect(base_url('player_panel/changepassword'), 'refresh');
			}
			if ($this->encryption->decrypt($data['hint_question']) != $result_account->hint_question) 
			{
				$this->session->set_flashdata('error', 'Hint Question Mismatch.');
				redirect(base_url('player_panel/changepassword'), 'refresh');
			}
			if ($this->encryption->decrypt($data['hint_question']) != $result_account->hint_answer)
			{
				$this->session->set_flashdata('error', 'Hint Answer Mismatch.');
				redirect(base_url('player_panel/changepassword'), 'refresh');
			}

			// Update New Password
			$update_password = $this->db->where('player_id', $result_account->player_id)->update('accounts', array('password' => $this->encryption->decrypt($data['new_password'])));
			if ($update_password) 
			{
				echo "<script>alert('Password Successfully Changed, Please To Relogin To Continue.');window.location.href='".base_url('player_panel/changepassword/logout')."';</script>";
			}
			else 
			{
				$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
				redirect(base_url('player_panel/changepassword'), 'refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
			redirect(base_url('player_panel/changepassword'), 'refresh');
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //