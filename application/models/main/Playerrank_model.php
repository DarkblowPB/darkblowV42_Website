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
		return $this->db->order_by('exp', 'desc')->where(array('email !=' => 'empty@empty.empty', 'access_level <' => '3', 'access_level !=' => '-1'))->get(Darkblowdatabase::accounts, $limit, $start)->result_array();
	}

	function GetPlayerCount()
	{
		return $this->db->get(Darkblowdatabase::accounts)->num_rows();
	}

	function GetPlayerData($player_id)
	{
		$query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $player_id))->row();
		if ($query) return $query;
		else redirect(base_url('player_rank'), 'refresh');
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //