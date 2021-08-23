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

	function getdata_account()
	{
		return $this->db->order_by('exp','desc')->limit(5)->get('accounts')->result_array();
	}

	function getdata_clan()
	{
		return $this->db->order_by('clan_exp', 'desc')->limit(5)->get('clan_data')->result_array();
	}
	function getdata_allaccount()
	{
		$query = $this->db->query('SELECT * FROM accounts');
		$finish = $query->num_rows();
		return $finish;
	}
	function getdata_onlineaccount()
	{
		$query = $this->db->query('SELECT * FROM accounts WHERE online=true');
		$finish = $query->num_rows();
		return $finish;
	}
	function getdata_quickslide()
	{
		return $this->db->order_by('id','desc')->limit(5)->get('web_quickslide')->result_array();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //