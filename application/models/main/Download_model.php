<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Download_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function GetClient()
	{
		return $this->db->where('type', 'client')->get('web_download_clientlauncher')->result_array();
	}

	function GetPartialClient()
	{
		return $this->db->where('type', 'partial')->get('web_download_clientlauncher')->result_array();
	}

	function GetLauncher()
	{
		return $this->db->where('type', 'launcher')->get('web_download_clientlauncher')->result_array();
	}

	function GetSupportApp()
	{
		return $this->db->where('type', 'support')->get('web_download_clientlauncher')->result_array();
	}

	function GetDownloadData($package_id)
	{
		sleep(1);
		$response = array();

		$data = array(
			'package_id' => $this->encryption->encrypt($package_id)
		);

		$query = $this->db->get_where('web_download_clientlauncher', array('id' => $this->encryption->decrypt($data['package_id'])))->row();
		if ($query) {
			$response['response'] = 'true';
			$response['url'] = $query->file_url;
			$response['message'] = $this->lang->line('STR_INFO_10');

			echo json_encode($response);
		} else {
			$response['response'] = 'false';
			$response['url'] = '';
			$response['message'] = $this->lang->line('STR_ERROR_35');

			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //