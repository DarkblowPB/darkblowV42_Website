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

	function GetClanPerPage($limit = '', $start = '')
	{
		$this->db->trans_start();
		$this->db->select('*', TRUE);
		$this->db->from(Darkblowdatabase::clan_data);
		$this->db->limit($limit, $start);
		$this->db->order_by('clan_exp', 'DESC', TRUE);

		$result = $this->db->get()->result_array();
		$this->db->trans_complete();

		return $result;
	}

	function GetClanCount()
	{
		$this->db->trans_start();
		$this->db->select('*', TRUE);
		$this->db->from(Darkblowdatabase::clan_data);

		$result = $this->db->get()->num_rows();
		$this->db->trans_complete();

		return $result;
	}

	function GetTotalMemberEachClan($clan_id = '')
	{
		$this->db->trans_start();
		$this->db->select('*', TRUE);
		$this->db->from(Darkblowdatabase::accounts);
		$this->db->where('clan_id', $clan_id, TRUE);

		$result = $this->db->get()->num_rows();
		$this->db->trans_complete();

		return $result;
	}

	function GetTotalClanMemberCapacity($clan_id = '')
	{
		$this->db->trans_start();
		$this->db->select('*', TRUE);
		$this->db->from(Darkblowdatabase::clan_data);
		$this->db->where('clan_id', $clan_id, TRUE);

		$result = $this->db->get()->row_array();
		$this->db->trans_complete();

		if ($result != null) return $result['max_players'];
		else return '0';
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //