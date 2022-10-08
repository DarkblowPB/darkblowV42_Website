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
	}

	function GetClanPerPage($limit, $start)
	{
		return $this->db->order_by('clan_exp', 'desc')->get(Darkblowdatabase::clan_data, $limit, $start)->result_array();
	}

	function GetClanCount()
	{
		return $this->db->get(Darkblowdatabase::clan_data)->num_rows();
	}

	function GetTotalMemberEachClan($clan_id)
	{
		return $this->db->get_where(Darkblowdatabase::accounts, array('clan_id' => $clan_id))->num_rows();
	}

	function GetTotalClanMemberCapacity($clan_id)
	{
		$query = $this->db->get_where(Darkblowdatabase::clan_data, array('clan_id' => $clan_id))->row();
		if ($query) return $query->max_players;
		else return 0;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //