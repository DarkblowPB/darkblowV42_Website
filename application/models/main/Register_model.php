<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model 
{	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
		$this->load->library('encryption');
	}

	function SendEmailVerification($email)
	{
		$config = array(
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com', // Your SMTP Host
			'smtp_user' => '',  // Your Email
			'smtp_pass'   => '',  // Your Password
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		);

		$this->load->library('email');

		$this->email->initialize($config);
		$this->email->from('no-reply@yourdomain.com', 'yourdomain');
		$this->email->to($email);
		$this->email->subject('Your Subject');
		$this->email->message('Your Message');
		if ($this->email->send())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function IsRegisterEventActive()
	{
		$query = $this->db->get_where('events_register', array('id' => '1'))->row();
		if ($query)
		{
			if ($query->is_active == "t")
			{
				return true;
			}
			if ($query->is_active == "f")
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	function IsUniqueUsername($username)
	{
		$query = $this->db->get_where('accounts', array('login' => $username))->row();
		if ($query)
		{
			return "false";
		}
		else
		{
			return "true";
		}
	}

	function RegisterValidationV2()
	{
		$data = array(
			'login' => $this->encryption->encrypt($this->input->post('login')),
			'email' => $this->encryption->encrypt($this->input->post('email')),
			'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password'))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('confirm_password'))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer'))
		);
		
		if ($this->encryption->decrypt($data['login']) != "")
		{
			if ($this->IsUniqueUsername($this->encryption->decrypt($data['login'])))
			{
				// If Register Event Active
				if ($this->IsRegisterEventActive())
				{
					// Get Event Data
					$get = $this->db->get_where('events_register', array('id' => '1'))->row();
					// Insert New Account
					$insert = $this->db->insert('accounts', array(
						'login' => $this->encryption->decrypt($data['login']),
						'email' => $this->encryption->decrypt($data['email']),
						'password' => $this->encryption->decrypt($data['password']),
						'hint_question' => $this->encryption->decrypt($data['hint_question']),
						'hint_answer' => $this->encryption->decrypt($data['hint_answer']),
						'date_registered' => date('d-m-Y h:i:s'),
						'email_verification' => '0'
					));
					if ($insert)
					{
						// Get New Account Data
						$get2 = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['login'])))->row();
						// Insert Items
						$insert2 = $this->db->insert('player_items', array('owner_id' => $get2->player_id, 'item_id' => $get->item_id, 'item_name' => $get->item_name, 'count' => $get->item_count, 'category' => $get->item_category, 'equip' => '1'));
						if ($insert2)
						{
							echo "true";
						}
						else
						{
							echo "false";
						}
					}
					else
					{
						echo "false";
					}
				}
				else
				{
					// Insert New Account
					$insert = $this->db->insert('accounts', array(
						'login' => $this->encryption->decrypt($data['login']),
						'email' => $this->encryption->decrypt($data['email']),
						'password' => $this->encryption->decrypt($data['password']),
						'hint_question' => $this->encryption->decrypt($data['hint_question']),
						'hint_answer' => $this->encryption->decrypt($data['hint_answer']),
						'date_registered' => date('d-m-Y h:i:s'),
						'email_verification' => '0'
					));
					if ($insert)
					{
						// Comment Code Below To Activated The Email
						// if ($this->SendEmailVerification($this->encryption->decrypt($data['email'])))
						// {
						// 	echo "true";
						// }
						// else
						// {
						// 	echo "false";
						// }

						// Default | Comment Code Below If You Activated The Email
						echo "true";
					}
					else
					{
						echo "false";
					}
				}
			}
			else
			{
				echo "false";
			}
		}
		else
		{
			echo "KOE NGENTOT";
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //