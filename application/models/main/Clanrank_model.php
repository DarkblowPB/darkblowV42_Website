<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Clanrank_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function GetClanPerPage($limit, $start)
	{
		return $this->db->order_by('clan_exp', 'desc')->get('clan_data', $limit, $start)->result_array();
	}

	function GetClanCount()
	{
		return $this->db->get('clan_data')->num_rows();
	}

	function GetTotalMemberEachClan($clan_id)
	{
		return $this->db->get_where('accounts', array('clan_id' => $clan_id))->num_rows();
	}

	function GetTotalClanMemberCapacity($clan_id)
	{
		$query = $this->db->get_where('clan_data', array('clan_id' => $clan_id))->row();
		if ($query) return $query->max_players;
		else return 0;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //