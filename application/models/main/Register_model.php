<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->lang->load('message');
	}

	function CheckRegisteredAccount($email)
	{
		$query = $this->db->get_where('accounts', array('email' => $email))->row();
		if ($query) return FALSE;
		else return TRUE;
	}

	function GenerateRandomToken()
	{
		$character = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890-=?';
		$length = strlen($character);
		$tokenlength = 128;
		$token = '';

		for ($i = 0; $i < $tokenlength; $i++) $token .= $character[rand(0, $length - 1)];

		return $token;
	}

	function SendEmailVerification($email, $username, $token)
	{
		$SmtpConfig = @file_get_contents('./darkblow_config.json');
		$SmtpParse = json_decode($SmtpConfig);

		foreach ($SmtpParse as $row) {
			$config = array(
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'smtp.gmail.com', // Your SMTP Host
				'smtp_user' => $row->SmtpConfig->Email,  // Your Email
				'smtp_pass'   => $row->SmtpConfig->Password,  // Your Password
				'smtp_crypto' => 'ssl',
				'smtp_port'   => 465,
				'crlf'    => "\r\n",
				'newline' => "\r\n"
			);
		}
		$this->email->initialize($config);

		$this->email->from('no-reply@yourdomain.com', 'DarkblowPB Reborn');
		$this->email->to($email);
		$this->email->subject('Email Verification');
		$this->email->message('<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Email Confirmation</title>
			<style>
				*{
					font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
				}
				body{
					margin: auto;
					padding-top: 25px;
					padding-bottom: 25px;
					width: 50%;
					height: auto;
				}
				table{
					border: 1px solid;
					border-radius: 3px;
					width: 700px;
					height: auto;
				}
				td{
					margin: 10px;
					padding: 10px;
				}
				a{
					text-decoration: none;
					color: #007bff;
				}
		
				.bg-primary{
					background-color: #dd163b;
					color: #fff;
				}
				.bg-light{
					background-color: #f8f9fa;
					color: #212529;
				}
				.btn{
					background-color: #dd163b;
					border: 1px solid transparent;
					border-radius: .25rem;
					color: #fff;
					padding: 10px 15px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
				}
		
				#header{
					font-size: 14px;
					font-weight: bold;
					text-transform: uppercase;
				}
				#content{
					margin: auto;
					width: 75%;
				}
				#data{
					font-weight: bold;
				}
				#warning{
					color: #dc3545;
				}
			</style>
		</head>
		<body>
			<table>
				<thead class="bg-primary">
					<th colspan="2"><a href="javascript:void(0)" style="text-decoration: none;"><img src="' . base_url() . 'assets/goodgames/assets/images/settings/' . $this->getsettings->Get()->project_logo . '" alt="' . $this->getsettings->Get()->project_name . '"></a></th>
				</thead>
				<tbody class="bg-light">
					<tr>
						<td colspan="2" id="header" align="center">Email Confirmation - ' . $this->getsettings->Get()->project_name . '</td>
					</tr>
					<tr>
						<td align="center">
							Hi ' . $email . ', Thank You For Registering Account On Our Project. <br>For Confirmation, Please Activate Your Account To Play Our Game.
						</td>
					</tr>
					<tr>
						<td>
							<table id="content">
								<tbody>
									<tr>
										<td width="35%">Username</td>
										<td width="5%">:</td>
										<td id="data">' . $username . '</td>
									</tr>
									<tr>
										<td width="35%">Email</td>
										<td width="5%">:</td>
										<td id="data">' . $email . '</td>
									</tr>
									<tr>
										<td width="35%">Verification</td>
										<td>:</td>
										<td><a href="' . base_url('register/verification?token_key=' . $token) . '" class="btn">Click Here</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" class="bg-primary">Copyright &copy; <b>' . $this->getsettings->Get()->project_name . '</b> 2021. All rights reserved.</td>
					</tr>
				</tbody>
			</table>
		</body>
		</html>');
		if ($this->email->send()) {
			return true;
		} else {
			return false;
		}
	}

	function CheckUsername()
	{
		$response = array();

		$data = array(
			'username' => $this->encryption->encrypt($this->input->post('login', true))
		);

		$query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username'])))->row();
		if ($query) {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_43');
			echo json_encode($response);
		} else {
			$response['response'] = 'true';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_INFO_11');
			echo json_encode($response);
		}
	}

	function GoogleRegisterValidation()
	{
		$response = array();

		$data = array(
			'login' => $this->encryption->encrypt($this->input->post('login', true)),
			'email' => $this->encryption->encrypt($this->input->post('email', true)),
			'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password', true))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('re_password', true))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true)),
			'email_verification' => '0',
			'token' => $this->GenerateRandomToken()
		);

		if ($this->getsettings->Get()->register != 1) {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_INFO_12');

			echo json_encode($response);
		} else {

			// Check Register Events.
			$query = $this->db->get_where('events_register', array('id' => '1'))->row();
			if ($query) {
				// Trigger When Register Events In Active State.
				if ($query->is_active == 1) {
					if ($query->stock >= 1) {
						$query2 = $this->db->insert('accounts', array(
							'login' => $this->encryption->decrypt($data['login']),
							'lastip' => $this->input->ip_address(),
							'email' => $this->encryption->decrypt($data['email']),
							'password' => $this->encryption->decrypt($data['password']),
							'hint_question' => $this->encryption->decrypt($data['hint_question']),
							'hint_answer' => $this->encryption->decrypt($data['hint_answer']),
							'date_registered' => date('d-m-Y h:i:s'),
							'email_verification' => '1'
						), true);
						if ($query2) {
							// Get Registered Accounts.
							$query3 = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password'])))->row();
							if ($query3) {
								// Insert Register Events Reward To Player Inventory.
								$query4 = $this->db->insert('player_items', array(
									'owner_id' => $query3->player_id,
									'item_id' => $query->item_id,
									'item_name' => $query->item_name,
									'count' => $query->item_count,
									'category' => $query->item_category,
									'equip' => '1'
								));
								$query5 = $this->db->where('id', $query->id)->update('events_register', array('stock' => ($query->stock - 1)));
								$query6 = $this->db->insert('web_email_confirmation', array(
									'account_id' => $this->encryption->decrypt($data['login']),
									'email' => $this->encryption->decrypt($data['email']),
									'token' => $data['token'],
									'valid' => '1'
								));
								if ($query4 && $query5 && $query6) {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_10');
									echo json_encode($response);
								} else {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_10');
									echo json_encode($response);
								}
							} else {
								$response['response'] = 'true';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_SUCCESS_10');
								echo json_encode($response);
							}
						} else {
							$response['response'] = 'false';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = $this->lang->line('STR_ERROR_12');
							echo json_encode($response);
						}
					} else {
						$query99 = $this->db->where('id', $query->id)->update('events_register', array('is_active' => 'f'));
						$query2 = $this->db->insert('accounts', array(
							'login' => $this->encryption->decrypt($data['login']),
							'lastip' => $this->input->ip_address(),
							'email' => $this->encryption->decrypt($data['email']),
							'password' => $this->encryption->decrypt($data['password']),
							'hint_question' => $this->encryption->decrypt($data['hint_question']),
							'hint_answer' => $this->encryption->decrypt($data['hint_answer']),
							'date_registered' => date('d-m-Y h:i:s'),
							'email_verification' => '0'
						), true);
						$query6 = $this->db->insert('web_email_confirmation', array(
							'account_id' => $this->encryption->decrypt($data['login']),
							'email' => $this->encryption->decrypt($data['email']),
							'token' => $data['token'],
							'valid' => '1'
						));
						if ($query2 && $query99 && $query6) {
							$response['response'] = 'true';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = $this->lang->line('STR_SUCCESS_10');
							echo json_encode($response);
						} else {
							$response['response'] = 'false';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = $this->lang->line('STR_ERROR_12');
							echo json_encode($response);
						}
					}
				} else {
					$query2 = $this->db->insert('accounts', array(
						'login' => $this->encryption->decrypt($data['login']),
						'lastip' => $this->input->ip_address(),
						'email' => $this->encryption->decrypt($data['email']),
						'password' => $this->encryption->decrypt($data['password']),
						'hint_question' => $this->encryption->decrypt($data['hint_question']),
						'hint_answer' => $this->encryption->decrypt($data['hint_answer']),
						'date_registered' => date('d-m-Y h:i:s'),
						'email_verification' => '0'
					), true);
					$query6 = $this->db->insert('web_email_confirmation', array(
						'account_id' => $this->encryption->decrypt($data['login']),
						'email' => $this->encryption->decrypt($data['email']),
						'token' => $data['token'],
						'valid' => '1'
					));
					if ($query2 && $query6) {
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = $this->lang->line('STR_SUCCESS_10');
						echo json_encode($response);
					} else {
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = $this->lang->line('STR_ERROR_12');
						echo json_encode($response);
					}
				}
			} else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_44');
				echo json_encode($response);
			}
		}
	}

	function RegisterValidationV4()
	{
		$response = array();
		$data = array(
			'login' => $this->input->post('login', true),
			'email' => $this->input->post('email', true),
			'password' => $this->lib->password_encrypt($this->input->post('password', true)),
			're_password' => $this->lib->password_encrypt($this->input->post('re_password', true)),
			'hint_question' => $this->input->post('hint_question', true),
			'hint_answer' => $this->input->post('hint_answer', true)
		);

		$insert = $this->db->insert('accounts', $data);
		if ($insert) {
			$query = $this->db->get_where('accounts', array('login' => $data['login']))->row();
			$events = $this->db->get_where('events_register', array('is_active' => 't'))->row();
			if ($events) {
				if ($events->stock > 0) {
					$this->db->insert('player_items', array(
						'owner_id' => $query->player_id,
						'item_id' => $events->item_id,
						'item_name' => $events->item_name,
						'count' => $events->item_count,
						'category' => $events->item_category,
						'equip' => '1'
					));
					$this->db->where('id', $events->id)->update('events_register', array('stock' => ($events->stock - 1)));
				}
				$response['response'] = 'success';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_SUCCESS_10');

				echo json_encode($response);
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_SUCCESS_25');

			echo json_encode($response);
		}
	}

	function AccountVerification()
	{
		$data = array(
			'token' => $this->encryption->encrypt($this->input->get('token_key', true))
		);

		$query = $this->db->get_where('web_email_confirmation', array('token' => $this->encryption->decrypt($data['token'])))->row();
		if ($query) {
			if ($query->valid == 0) echo "<script>alert('" . $this->lang->line('STR_ERROR_45') . "');window.location='" . base_url('home') . "'</script>";
			else {
				$update = array(
					'01' => $this->db->where('id', $query->id)->update('web_email_confirmation', array('valid' => '0')),
					'02' => $this->db->where('login', $query->account_id)->update('accounts', array('email_verification' => '1'))
				);

				if ($update['01'] && $update['02']) echo "<script>alert('" . $this->lang->line('STR_SUCCESS_12') . "');window.location='" . base_url('login') . "'</script>";
				else echo "<script>alert('" . $this->lang->line('STR_ERROR_45') . "');window.location='" . base_url('home') . "'</script>";
			}
		} else echo "<script>alert('" . $this->lang->line('STR_ERROR_45') . "');window.location='" . base_url('home') . "'</script>";
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //