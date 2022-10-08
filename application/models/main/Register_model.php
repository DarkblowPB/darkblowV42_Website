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
		$this->lang->load('message');
		$this->load->library('email');

		$this->load->library('querylib');
	}

	function CheckRegisteredAccount($email)
	{
		$query = $this->db->get_where('accounts', array('email' => $email))->row();
		if ($query) return FALSE;
		else return TRUE;
	}

	function SendVerificationEmail($username, $email)
	{
		$token = $this->darkblowlib->GenerateRandomTokenV2(128);
		$message = '<!DOCTYPE html>
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
					<th colspan="2"><a href="javascript:void(0)" style="text-decoration: none;"><img src="' . base_url() . 'assets/goodgames/assets/images/settings/' . $this->darkblowsettings->load()->project_logo . '" alt="' . $this->darkblowsettings->load()->project_name . '"></a></th>
				</thead>
				<tbody class="bg-light">
					<tr>
						<td colspan="2" id="header" align="center">Email Confirmation - ' . $this->darkblowsettings->load()->project_name . '</td>
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
						<td align="center" class="bg-primary">Copyright &copy; <b>' . $this->darkblowsettings->load()->project_name . '</b> 2021. All rights reserved.</td>
					</tr>
				</tbody>
			</table>
		</body>
		</html>';

		if ($this->querylib->SendEmail('no-reply@darkblowpbreborn.com', $email, 'Verification Account', $message)) return TRUE;
		else return FALSE;
	}

	function CheckUsername()
	{
		$response = array();

		$data = array(
			'username' => $this->encryption->encrypt($this->input->post('login', true))
		);

		$query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username'])))->row();
		if ($query) {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_43');
			$this->darkblowmessage->AjaxFlashData($response);
		} else {
			$response['response'] = 'success';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_INFO_11');
			$this->darkblowmessage->AjaxFlashData($response);
		}
	}

	function GoogleRegisterValidation()
	{
		$response = array();

		$data = array(
			'login' => $this->encryption->encrypt($this->input->post('login', true)),
			'email' => $this->encryption->encrypt($this->input->post('email', true)),
			'password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('password', true))),
			'confirm_password' => $this->encryption->encrypt($this->darkblowlib->password_encrypt($this->input->post('re_password', true))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true)),
			'email_verification' => '0',
			'token' => $this->darkblowlib->GenerateRandomTokenV2(128)
		);

		if ($this->darkblowsettings->load()->register != 1) {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_INFO_12');

			$this->darkblowmessage->AjaxFlashData($response);
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
									$this->darkblowmessage->AjaxFlashData($response);
								} else {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_10');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else {
								$response['response'] = 'true';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_SUCCESS_10');
								$this->darkblowmessage->AjaxFlashData($response);
							}
						} else {
							$response['response'] = 'false';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = $this->lang->line('STR_ERROR_12');
							$this->darkblowmessage->AjaxFlashData($response);
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
							$this->darkblowmessage->AjaxFlashData($response);
						} else {
							$response['response'] = 'false';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = $this->lang->line('STR_ERROR_12');
							$this->darkblowmessage->AjaxFlashData($response);
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
						$this->darkblowmessage->AjaxFlashData($response);
					} else {
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = $this->lang->line('STR_ERROR_12');
						$this->darkblowmessage->AjaxFlashData($response);
					}
				}
			} else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_44');
				$this->darkblowmessage->AjaxFlashData($response);
			}
		}
	}

	function RegisterValidationV6()
	{
		$responses = array();

		$data = array(
			'login' => $this->input->post('login', true),
			'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true)),
			'email' => $this->input->post('email', true),
			'hint_question' => $this->input->post('hint_question', true),
			'hint_answer' => $this->input->post('hint_answer', true)
		);

		$data2 = array(
			're_password' => $this->input->post('re_password', true),
			'authorization' => $this->input->post('authorization', true)
		);

		$curl = curl_init();

		if (!$this->input->is_ajax_request()) {

			$responses['response'] = 'error';
			$responses['token'] = $this->security->get_csrf_hash();
			$responses['message'] = 'Error: 400 - Bad Request 1.';

			echo json_encode($responses);
		} else {
			curl_setopt_array($curl, array(
				CURLOPT_URL => base_url('api/web/register'),
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => '' . $this->security->get_csrf_token_name() . '=' . $this->security->get_csrf_hash() . '&login=' . $data['login'] . '&email=' . $data['email'] . '&password=' . $data['password'] . '&re_password=' . $data2['re_password'] . '&hint_question=' . urlencode($data['hint_question']) . '&hint_answer=' . urlencode($data['hint_answer']),
				CURLOPT_HTTPHEADER => array(
					'Authorization: ' . $this->darkblowsettings->load()->api_authorization_key,
					'Content-Type: application/x-www-form-urlencoded',
					'Cookie: darkblowpbreborn_cookies=fe99af92ea8a6aee1e0f09b9aa7272c7; darkblowpbreborn_session=svem0f8crg1ibmla3p1jkogvu709e4vm'
				),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			echo $response;
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