<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Playerrank_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GetClanPerPage($limit, $start)
	{
		return $this->db->order_by('exp', 'desc')->where(array('email !=' => 'empty@empty.empty', 'access_level <' => '3', 'access_level !=' => '-1'))->get('accounts', $limit, $start)->result_array();
	}

	function GetPlayerCount()
	{
		return $this->db->get('accounts')->num_rows();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //