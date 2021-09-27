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

	function CheckUsername()
	{
		$response = array();

		$data = array(
			'username' => $this->encryption->encrypt($this->input->post('login'))
		);

		$query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username'])))->row();
		if ($query)
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Username Already Registered.';
			echo json_encode($response);
		}
		else
		{
			$response['response'] = 'true';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Username Available.';
			echo json_encode($response);
		}
	}

	function RegisterValidationV3()
	{
		$response = array();

		$data = array(
			'login' => $this->encryption->encrypt($this->input->post('login', true)),
			'email' => $this->encryption->encrypt($this->input->post('email', true)),
			'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password', true))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('re_password', true))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true))
		);

		// Check Register Events.
		$query = $this->db->get_where('events_register', array('id' => '1'))->row();
		if ($query)
		{
			// Trigger When Register Events In Active State.
			if ($query->is_active == 1)
			{
				$query2 = $this->db->insert('accounts', array(
					'login' => $this->encryption->decrypt($data['login']),
					'email' => $this->encryption->decrypt($data['email']),
					'password' => $this->encryption->decrypt($data['password']),
					'hint_question' => $this->encryption->decrypt($data['hint_question']),
					'hint_answer' => $this->encryption->decrypt($data['hint_answer'])
				), true);
				if ($query2)
				{
					// Get Registered Accounts.
					$query3 = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password'])))->row();
					if ($query3)
					{
						// Insert Register Events Reward To Player Inventory.
						$query4 = $this->db->insert('player_items', array(
							'owner_id' => $query3->player_id,
							'item_id' => $query->item_id,
							'item_name' => $query->item_name,
							'count' => $query->item_count,
							'category' => $query->item_category,
							'equip' => '1'
						));
						if ($query4)
						{
							// if ($this->SendEmailVerification($this->encryption->decrypt($data['email'])))
							// {
								$response['response'] = 'true';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Successfully Registered. Please Check Your Email For Activated Your Account.';
								echo json_encode($response);
							// }
							// else
							// {
							// 	$response['response'] = 'true';
							// 	$response['token'] = $this->security->get_csrf_hash();
							// 	$response['message'] = 'Successfully Registered. But Failed To Send Activation Email.';
							// 	echo json_encode($response);
							// }
							
						}
						else
						{
							$response['response'] = 'true';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Successfully Registered (2). Please Check Your Email For Activated Your Account.';
							echo json_encode($response);
						}
					}
					else
					{
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Successfully Registered (3). Please Check Your Email For Activated Your Account.';
						echo json_encode($response);
					}
				}
				else
				{
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Failed To Register Your Account.';
					echo json_encode($response);
				}
			}
			else
			{
				$query2 = $this->db->insert('accounts', array(
					'login' => $this->encryption->decrypt($data['login']),
					'email' => $this->encryption->decrypt($data['email']),
					'password' => $this->encryption->decrypt($data['password']),
					'hint_question' => $this->encryption->decrypt($data['hint_question']),
					'hint_answer' => $this->encryption->decrypt($data['hint_answer'])
				), true);
				if ($query2)
				{
					$response['response'] = 'true';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Successfully Registered. Please Check Your Email For Activated Your Account.';
					echo json_encode($response);
				}
				else
				{
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Failed To Register Your Account.';
					echo json_encode($response);
				}
			}
		}
		else
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Failed To Get Register Events.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //