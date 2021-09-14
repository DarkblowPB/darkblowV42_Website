<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function GetClient()
	{
		return $this->db->where('type', 'client')->get('web_download_clientlauncher')->result_array();
	}

	function GetPartialClient()
	{
		return $this->db->where('type','partial')->get('web_download_clientlauncher')->result_array();
	}

	function GetLauncher()
	{
		return $this->db->where('type', 'launcher')->get('web_download_clientlauncher')->result_array();
	}
	function GetSupportApp()
	{
		return $this->db->where('type','support')->get('web_download_clientlauncher')->result_array();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //