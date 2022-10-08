<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');


use chriskacerguis\RestServer\RestController;

class Security extends RestController
{

	function __construct()
	{
		parent::__construct();
	}

	function csrf_get()
	{
		$response = array();

		if (empty($this->input->get('tokenkey', true))) {
			$response['response'] = 'true';
			$response['token'] = '';

			$this->response($response, 200);
		} else {
			$data = array(
				'tokenkey' => $this->input->get('tokenkey', true)
			);

			$query = $this->db->get_where(Darkblowdatabase::web_tokenkey, array('token' => $data['tokenkey']))->row();
			if ($query) {
				if ($query->is_valid == 0) {
					$response['response'] = 'true';
					$response['token'] = '';

					$this->response($response, 200);
				} else if ($query->is_valid == 1) {
					$update = $this->db->where('token', $query->token)->update(Darkblowdatabase::web_tokenkey, array('is_valid' => '0'));
					$insert = $this->db->insert(Darkblowdatabase::web_tokenkey, array('token' => $this->darkblowlib->GenerateRandomToken(), 'is_valid' => '1'));
					if ($update && $insert) {
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();

						$this->response($response, 200);
					} else {
						$response['response'] = 'true';
						$response['token'] = '';

						$this->response($response, 200);
					}
				} else {
					$response['response'] = 'true';
					$response['token'] = '';

					$this->response($response, 200);
				}
			} else {
				$response['response'] = 'false';
				$response['token'] = '';

				$this->response($response, 200);
			}
		}
	}

	function launchercsrf_get()
	{
		$response = array();

		$response['status'] = 'success';
		$response['csrf_token_name'] = $this->security->get_csrf_token_name();
		$response['csrf_token_hash'] = $this->security->get_csrf_hash();

		$this->response($response, 200);
	}

	function discordbotcsrf_get()
	{
		$response = array();

		$data = array(
			'secret_token' => $this->input->get('secret_token', true)
		);

		if ($data['secret_token'] != 'darkblowpbreborn_2021') {
			$response['response'] = 'error';
			$response['name'] = '';
			$response['token'] = '';
			$response['message'] = 'Fatal Error';

			$this->response($response, 401);
		} else {
			$response['response'] = 'success';
			$response['name'] = $this->security->get_csrf_token_name();
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Successfully Get CSRF Token';

			$this->response($response, 200);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //
