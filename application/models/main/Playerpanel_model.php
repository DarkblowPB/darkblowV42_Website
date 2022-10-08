<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Playerpanel_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
		$this->load->library('querylib');
	}

	function GetDetailsAccount()
	{
		return $this->db->where('player_id', $this->session->userdata('uid'))->get('accounts')->result_array();
	}

	function RequestHint()
	{
		sleep(1);
		$response = array();

		$query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
		if ($query) {
			switch ($query->email_verification) {
				case 1: {
						$response['response'] = 'success';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Your Hint: ' . $query->hint_answer;

						$this->darkblowmessage->AjaxFlashData($response);
						break;
					}
				case 0:
				default: {
						$response['response'] = 'error';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Unverified Email Address.';

						$this->darkblowmessage->AjaxFlashData($response);
						break;
					}
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Fatal Error: Invalid Account.';

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}

	function RequestVerificationEmail()
	{
		$response = array();

		$query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
		if ($query) {
			switch ($query->email_verification) {
				case 0: {
						$state = array(
							'success' => 0,
							'failed' => 0
						);

						$expired_date = strtotime('+3 day', time());
						$secret_token = $this->darkblowlib->GenerateRandomTokenV2(128);
						$message = 'Hi ' . $query->email . ', We Confirmed You Request A Verification Email For Your Account. Please following this <a href="' . base_url('home/verifyaccount/' . $secret_token) . '">link</a> to activate your account.<br>
									Link Will Be Expired On ' . date('d-m-Y H:i:s', $expired_date) . '. Please Activate Before This Link Expired. Or You Can Re-Generate This Email By Re-sent An Request Email On Player Panel.';

						$query2 = $this->db->get_where('web_log_verifyaccount', array('email' => $query->email))->row();
						if ($query2) {
							if ($query2->status == 1 && $query2->valid_date < time()) $state['success'] += 1;
							else if ($query2->status == 0) {
								if ($this->querylib->SendEmail('no-reply@darkblowpbreborn.com', $query->email, 'Account Verification', $message)) {
									$this->db->insert('web_log_verifyaccount', array(
										'email' => $query->email,
										'secret_token' => $secret_token,
										'valid_date' => $expired_date,
										'status' => '1',
										'date_created' => '0',
										'date_updated' => null
									));
									$state['success'] += 1;
								} else $state['failed'] += 1;
							} else $state['failed'] += 1;
						} else {
							if ($this->querylib->SendEmail('no-reply@darkblowpbreborn.com', $query->email, 'Account Verification', $message)) {
								$this->db->insert('web_log_verifyaccount', array(
									'email' => $query->email,
									'secret_token' => $secret_token,
									'valid_date' => $expired_date,
									'status' => '1',
									'date_created' => '0',
									'date_updated' => null
								));
								$state['success'] += 1;
							} else $state['failed'] += 1;
						}

						if ($state['success'] > 0 && $state['failed'] == 0) {
							$response['response'] = 'success';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Successfully Sent Request Email. Please Check Your Mailbox.';

							$this->darkblowmessage->AjaxFlashData($response);
						} else if ($state['failed'] > 0 && $state['success'] == 0) {
							$response['response'] = 'error';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Failed To Sent Request Email.';

							$this->darkblowmessage->AjaxFlashData($response);
						} else if ($state['success'] > 0 && $state['error'] == 0) {
							$response['response'] = 'error';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'We Already Trying To Send Request Email But Failed. Please Check Your Mailbox First Before Request An Email Again.';

							$this->darkblowmessage->AjaxFlashData($response);
						} else {
							$response['response'] = 'error';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Fatal Error. Contact DEV / GM For Detail Information.';

							$this->darkblowmessage->AjaxFlashData($response);
						}
						break;
					}
				case 1:
				default: {
						$response['response'] = 'success';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Your Account Is Already Activated.';

						$this->darkblowmessage->AjaxFlashData($response);
						break;
					}
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //