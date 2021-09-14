<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function GetPlayerRanking()
	{
		return $this->db->order_by('exp', 'desc')->limit(5)->get_where('accounts', array('access_level' => '0', 'email !=' => 'empty@empty.empty'))->result_array();
	}
	
	function GetClanRanking()
	{
		return $this->db->order_by('clan_exp', 'desc')->limit(5)->get('clan_data')->result_array();
	}
	
	function GetNews()
	{
		return $this->db->order_by('id','desc')->limit(5)->get('web_quickslide')->result_array();
	}

	function GetPopularWebshop()
	{
		return $this->db->order_by('webshop_totalbuy', 'desc')->limit(7)->get('webshop')->result_array();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //