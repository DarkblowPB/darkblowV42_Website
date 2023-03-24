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

	function ModulCreate()
	{
		$response = array();

		$data = array(
			'login' => $this->input->post('login', true),
			'email' => $this->input->post('email', true),
			'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true)),
			'hint_question' => $this->input->post('hint_question', true),
			'hint_answer' => $this->input->post('hint_answer', true)
		);

		$this->db->trans_start();
		$this->db->insert(Darkblowdatabase::accounts, $data, TRUE);
		$this->db->trans_complete();

		$this->db->trans_start();
		$this->db->select('*', TRUE);
		$this->db->from(Darkblowdatabase::accounts);
		$this->db->where('login', $data['login'], TRUE);

		$accounts_result = $this->db->get()->row_array();
		$this->db->trans_complete();

		if ($accounts_result != []) {
			$this->db->trans_start();
			$this->db->select('*', TRUE);
			$this->db->from(Darkblowdatabase::events_register);

			$events_register_result = $this->db->get()->row_array();
			$this->db->trans_complete();

			if ($events_register_result != []) {
				if ($events_register_result['is_active'] == 't') {
					if ($events_register_result['stock'] > 0) {
						$this->db->trans_start();
						$this->db->insert(Darkblowdatabase::player_items, array(
							'owner_id' => $accounts_result['player_id'],
							'item_id' => $events_register_result['item_id'],
							'item_name' => $events_register_result['item_name'],
							'count' => $events_register_result['item_count'],
							'category' => $events_register_result['item_category'],
							'equip' => '1'
						));
						$this->db->trans_complete();

						$this->db->trans_start();
						$this->db->where('id', $events_register_result['id'], TRUE);
						$this->db->update(Darkblowdatabase::events_register, array('stock' => ($events_register_result['stock'] - 1)));
						$this->db->trans_complete();
					}
				}
			}
			$this->db->trans_start();
			$this->db->select('*', TRUE);
			$this->db->from(Darkblowdatabase::web_webhook);
			$this->db->where('type', '1', TRUE);

			$web_webhook_result = $this->db->get()->row_array();
			$this->db->trans_complete();

			if ($web_webhook_result != []) {
				if ($web_webhook_result['status'] == 1) {
					$webhook_data = array(
						'content' => '',
						'username' => ($web_webhook_result['username'] == '' ? 'DarkblowPB Reborn' : $this->darkblowsettings->load()->project_name),
						'avatar_url' => $web_webhook_result['avatar_url'],
						'tts' => false,
						'embeds' => array(
							array(
								'title' => ($web_webhook_result['embeds_title'] == '' ? $this->darkblowsettings->Load()->project_name . ' - Register Account' : $web_webhook_result['embeds_title']),
								'url' => base_url('register'),
								'type' => 'rich',
								'description' => $web_webhook_result['embeds_description'],
								'timestamp' => date('c', strtotime('now')),
								'fields' => array(
									array(
										'name' => 'Username',
										'value' => $data['login']
									),
									array(
										'name' => 'Email',
										'value' => $data['email']
									),
									array(
										'name' => 'IP Address',
										'value' => $this->input->ip_address()
									)
								)
							)
						)
					);
					$this->darkblowwebhook->Send('1', $webhook_data);
				}
			}
		}

		$response['response'] = 'success';
		$response['token'] = $this->security->get_csrf_hash();
		$response['message'] = 'Successfully Registered.';

		$this->darkblowmessage->AjaxFlashData($response);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //