<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getdata_download()
	{
		return $this->db->get('web_download_clientlauncher')->result_array();
	}

	public function getdata_client()
	{
		return $this->db->where('type', 'client')->get('web_download_clientlauncher')->result_array();
	}

	public function getdata_partialclient()
	{
		return $this->db->where('type','partial')->get('web_download_clientlauncher')->result_array();
	}

	public function getdata_launcher()
	{
		return $this->db->where('type', 'launcher')->get('web_download_clientlauncher')->result_array();
	}
	public function getdata_supportapplication()
	{
		return $this->db->where('type','support')->get('web_download_clientlauncher')->result_array();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //