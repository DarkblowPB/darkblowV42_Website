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
		$this->load->library('encryption');
	}

	function validation()
	{
		$data = array(
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer'))
		);

		// Fetching Account
		$account1 = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
		$account2 = $account1->row();
		if ($account2)
		{
			if ($account2->hint_question != "")
			{
				$this->session->set_flashdata('error', 'Hint Question Already Created');
				redirect(base_url('player_panel'), 'refresh');
			}
			if ($account2->hint_answer != "")
			{
				
				$this->session->set_flashdata('error', 'Hint Answer Already Created');
				redirect(base_url('player_panel'), 'refresh');
			}
			if ($account2->hint_question == "" && $account2->hint_answer == "")
			{
				$update = $this->db->where('player_id', $account2->player_id)->update('accounts', array('hint_question' => $this->encryption->decrypt($data['hint_question']), 'hint_answer' => $this->encrpytion->decrypt($data['hint_answer'])));
				if ($update)
				{
					$this->session->set_flashdata('success', 'Successfully Created Hint');
					redirect(base_url('player_panel'), 'refresh');
				}
				else 
				{
					$this->session->set_flashdata('error', 'Failed To Create Hint');
					redirect(base_url('player_panel'), 'refresh');
				}
			}
		}
		else 
		{
			$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
			redirect(base_url('player_panel'), 'refresh');
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //