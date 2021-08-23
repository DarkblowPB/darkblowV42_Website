<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Playerrank_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getdata_account_limit($limit, $start)
	{
		return $this->db->order_by('exp', 'desc')->get('accounts', $limit, $start)->result_array();
	}
	function getdata_account_in_rows()
	{
		return $this->db->get('accounts')->num_rows();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //