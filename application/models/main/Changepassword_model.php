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
	
	function changepassword_validation()
	{
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
				echo "false";
			}
			else
			{
				if ($this->encryption->decrypt($data['hint_question']) != $query->hint_question)
				{
					// If Wrong Hint Question
					echo "false2";
				}
				else if ($this->encryption->decrypt($data['hint_answer']) != $query->hint_answer)
				{
					// If Wrong Hint Answer
					echo "false3";
				}
				else
				{
					// Update Password
					$update = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('password' => $this->encryption->decrypt($data['new_password'])));
					if ($update)
					{
						// If Successfully Update Password
						echo "true";
					}
					else
					{
						// If Failed Update Password
						echo "false4";
					}
				}
			}
		}
		else
		{
			// If Wrong Old Password
			echo "false5";
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //