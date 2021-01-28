<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Clanrank_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_clan_limit($limit, $start)
	{
		return $this->db->order_by('clan_exp', 'desc')->get('clan_data', $limit, $start)->result_array();
	}
	public function getdata_clan_in_rows()
	{
		return $this->db->get('clan_data')->num_rows();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //