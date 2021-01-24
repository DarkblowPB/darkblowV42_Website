<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getdata_account()
	{
		return $this->db->order_by('exp','desc')->limit(5)->get('accounts')->result_array();
	}

	public function getdata_clan()
	{
		return $this->db->order_by('clan_exp', 'desc')->limit(5)->get('clan_data')->result_array();
	}
	public function getdata_allaccount()
	{
		$query = $this->db->query('SELECT * FROM accounts');
		$finish = $query->num_rows();
		return $finish;
	}
	public function getdata_onlineaccount()
	{
		$query = $this->db->query('SELECT * FROM accounts WHERE online=true');
		$finish = $query->num_rows();
		return $finish;
	}
	public function getdata_quickslide()
	{
		return $this->db->order_by('id','desc')->limit(5)->get('web_quickslide')->result_array();
	}
}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */