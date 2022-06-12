<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/home_model', 'home');
		$this->lib->GetVisitorData('Home');
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		$this->main_protect->SessionProtector();
	}

	function index()
	{
		$data['title'] = 'Home';
		$data['isi'] = 'main/content/home/content_home';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_getservercondition()
	{
		$response = array();
		$query = $this->db->get_where('web_settings', array('id' => '1'))->row();
		if ($query) {
			if ($query->server_condition == 0) {
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'OFFLINE';
				echo json_encode($response);
			} else if ($query->server_condition == 1) {
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'ONLINE';
				echo json_encode($response);
			} else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'OFFLINE';
				echo json_encode($response);
			}
		} else {
			$response['response'] = 'true';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'INVALID';
			echo json_encode($response);
		}
	}

	function do_getonline()
	{
		$response = array();

		$response['response'] = $this->db->get_where('accounts', array('access_level <' => '3', 'email !=' => 'empty@empty.empty', 'online' => 't'))->num_rows();
		echo json_encode($response);
	}

	function do_getregistered()
	{
		$response = array();

		$response['response'] = $this->db->get_where('accounts', array('access_level <' => '3', 'email != ' => 'empty@empty.empty'))->num_rows();
		echo json_encode($response);
	}

	function verifyaccount($secret_token = null)
	{
		if ($secret_token == null) redirect(base_url(), 'refresh');
		else {
			switch ($this->home->VerifyAccountValidator($secret_token)) {
				case 'Successfully Activate Account': {
						$data = array(
							'title' => 'Activate Account',
							'state' => 'success',
							'isi' => 'main/content/home/content_verifyaccount',
						);
						$this->load->view('main/layout/wrapper', $data, FALSE);
						break;
					}
				case 'Failed To Activate Account': {

						$data = array(
							'title' => 'Activate Account',
							'state' => 'error_failed',
							'isi' => 'main/content/home/content_verifyaccount',
						);
						$this->load->view('main/layout/wrapper', $data, FALSE);
						break;
					}
				case 'Fatal Error': {
						$data = array(
							'title' => 'Activate Account',
							'state' => 'error_fatal',
							'isi' => 'main/content/home/content_verifyaccount',
						);
						$this->load->view('main/layout/wrapper', $data, FALSE);
						break;
					}
				case 'Invalid Secret Token': {
						$data = array(
							'title' => 'Activate Account',
							'state' => 'error_invalid',
							'isi' => 'main/content/home/content_verifyaccount',
						);
						$this->load->view('main/layout/wrapper', $data, FALSE);
						break;
					}
				default: {
						redirect(base_url(), 'refresh');
						break;
					}
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //