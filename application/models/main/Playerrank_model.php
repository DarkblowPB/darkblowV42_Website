<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Playerrank_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_account_limit($limit, $start)
	{
		return $this->db->order_by('exp', 'desc')->get('accounts', $limit, $start)->result_array();
	}
	public function getdata_account_in_rows()
	{
		return $this->db->get('accounts')->num_rows();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //