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
		$this->load->library('lib');
		$this->lib->GetVisitorData('Home');
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		$this->load->model('main/home_model', 'home');
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

		$response['response'] = $this->db->get_where('accounts', array('online' => 't'))->num_rows();
		echo json_encode($response);
	}

	function do_getregistered()
	{
		$response = array();

		$response['response'] = $this->db->get_where('accounts', array('access_level <' => '3', 'email != ' => 'empty@empty.empty'))->num_rows();
		echo json_encode($response);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //