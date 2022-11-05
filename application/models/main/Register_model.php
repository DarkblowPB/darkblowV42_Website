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

		$query = $this->db->get_where(Darkblowdatabase::accounts, array('login' => $this->encryption->decrypt($data['username'])))->row();
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
			$query = $this->db->get_where(Darkblowdatabase::events_register, array('id' => '1'))->row();
			if ($query) {
				// Trigger When Register Events In Active State.
				if ($query->is_active == 1) {
					if ($query->stock >= 1) {
						$query2 = $this->db->insert(Darkblowdatabase::accounts, array(
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
							$query3 = $this->db->get_where(Darkblowdatabase::accounts, array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password'])))->row();
							if ($query3) {
								// Insert Register Events Reward To Player Inventory.
								$query4 = $this->db->insert(Darkblowdatabase::player_items, array(
									'owner_id' => $query3->player_id,
									'item_id' => $query->item_id,
									'item_name' => $query->item_name,
									'count' => $query->item_count,
									'category' => $query->item_category,
									'equip' => '1'
								));
								$query5 = $this->db->where('id', $query->id)->update(Darkblowdatabase::events_register, array('stock' => ($query->stock - 1)));
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
						$query99 = $this->db->where('id', $query->id)->update(Darkblowdatabase::events_register, array('is_active' => 'f'));
						$query2 = $this->db->insert(Darkblowdatabase::accounts, array(
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
					$query2 = $this->db->insert(Darkblowdatabase::accounts, array(
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
		$response = array();

		$data = array(
			'login' => $this->input->post('login', true),
			'email' => $this->input->post('email', true),
			'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true)),
			'hint_question' => $this->input->post('hint_question', true),
			'hint_answer' => $this->input->post('hint_answer', true)
		);

		// Register Function
		$query = $this->db->insert(Darkblowdatabase::accounts, array(
			'login' => $data['login'],
			'password' => $data['password'],
			'email' => $data['email'],
			'hint_question' => $data['hint_question'],
			'hint_answer' => $data['hint_answer']
		));
		if ($query) {
			$webhook_data =  [
				'content' => 'New Registered Account',
				'username' => '',
				'avatar_url' => '',
				'tts' => false,
				'embeds' => [
					[
						'title' => $this->darkblowsettings->load()->project_name . ' - Redeem Code',
						'url' => base_url(),
						'type' => 'rich',
						'description' => '',
						'timestamp' => date('c', strtotime('now')),
						'fields' => [
							[
								"name" => "Username",
								"value" => $data['login']
							],
							[
								"name" => "Email",
								"value" => $data['email'],
							],
							[
								"name" => "IP Address",
								"value" => $this->input->ip_address(),
							],
						]
					]
				]
			];
			// Fetch Account
			$query2 = $this->db->get_where(Darkblowdatabase::accounts, array('login' => $data['login']))->row();
			if ($query2) {
				// Fetch Register Events
				$query3 = $this->db->get_where(Darkblowdatabase::events_register, array('is_active' => 't'))->row();
				if ($query3) {
					// Check & Insert Events Item
					if ($query3) {
						if ($query3->stock >= 1) {
							$query4 = $this->db->insert(Darkblowdatabase::player_items, array(
								'owner_id' => $query2->player_id,
								'item_id' => $query3->item_id,
								'item_name' => $this->darkblowlib->GetItemName($query3->item_id),
								'count' => $query3->item_count,
								'category' => $this->darkblowlib->GetItemCategory($query3->item_id),
								'equip' => '1'
							));
							$query5 = $this->db->where('id', $query3->id)->update(Darkblowdatabase::events_register, array('stock' => ($query3->stock - 1)));
							if ($query4 && $query5) {
								$response['response'] = 'success';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Successfully Registered.';
								if ($this->config->item('main_config')['webhook_url']['register'] != '') $response['discord_webhook'] = $this->darkblowwebhook->Send('register', $webhook_data);

								$this->darkblowmessage->AjaxFlashData($response);
							} else {
								$response['response'] = 'success';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Successfully Registered.';
								if ($this->config->item('main_config')['webhook_url']['register'] != '') $response['discord_webhook'] = $this->darkblowwebhook->Send('register', $webhook_data);

								$this->darkblowmessage->AjaxFlashData($response);
							}
						} else {
							$response['response'] = 'success';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Successfully Registered.';
							if ($this->config->item('main_config')['webhook_url']['register'] != '') $response['discord_webhook'] = $this->darkblowwebhook->Send('register', $webhook_data);

							$this->darkblowmessage->AjaxFlashData($response);
						}
					} else {
						$response['response'] = 'success';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Successfully Registered.';
						if ($this->config->item('main_config')['webhook_url']['register'] != '') $response['discord_webhook'] = $this->darkblowwebhook->Send('register', $webhook_data);

						$this->darkblowmessage->AjaxFlashData($response);
					}
				} else {
					$response['response'] = 'success';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Successfully Registered.';
					if ($this->config->item('main_config')['webhook_url']['register'] != '') $response['discord_webhook'] = $this->darkblowwebhook->Send('register', $webhook_data);

					$this->darkblowmessage->AjaxFlashData($response);
				}
			} else {
				$response['response'] = 'success';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Successfully Registered.';
				if ($this->config->item('main_config')['webhook_url']['register'] != '') $response['discord_webhook'] = $this->darkblowwebhook->Send('register', $webhook_data);

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Failed To Register Your Account.';

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //