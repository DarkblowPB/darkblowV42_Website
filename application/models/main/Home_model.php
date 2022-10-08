<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GetPlayerRanking()
	{
		return $this->db->order_by('exp', 'desc')->limit(5)->get_where(Darkblowdatabase::accounts, array('access_level' => '0', 'email !=' => 'empty@empty.empty'))->result_array();
	}

	function GetClanRanking()
	{
		return $this->db->order_by('clan_exp', 'desc')->limit(5)->get(Darkblowdatabase::clan_data)->result_array();
	}

	function GetNews()
	{
		return $this->db->order_by('id', 'desc')->limit(5)->get(Darkblowdatabase::web_quickslide)->result_array();
	}

	function GetPopularWebshop()
	{
		return $this->db->order_by('webshop_totalbuy', 'desc')->limit(7)->get(Darkblowdatabase::webshop)->result_array();
	}

	function VerifyAccountValidator($secret_token)
	{
		$query = $this->db->get_where(Darkblowdatabase::web_log_verifyaccount, array('secret_token' => $secret_token))->row();
		if ($query) {
			if ($query->status == 0) return 'Invalid Secret Token';
			else if ($query->status == 1 && $query->valid_date < time()) {
				$update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_log_verifyaccount, array('status' => '0'));
				if ($update) return 'Successfully Activate Account';
				else return 'Failed To Activate Account';
			} else return 'Fatal Error';
		} else return 'Invalid Secret Token';
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //