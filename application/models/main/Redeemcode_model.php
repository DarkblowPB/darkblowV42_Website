<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_redeemcode($redeemcode)
	{
		return $this->db->where('item_code', $redeemcode)->get('item_code')->row();
	}
	public function postdata_redeemcode($data)
	{
		$this->db->insert('player_items', $data);
	}
	public function postdata_checkuser($data)
	{
		$this->db->insert('check_user_itemcode', $data);
	}
	public function getdata_redeemcode1($data)
	{
		$this->db->select('*');
		$this->db->from('item_code');
		$this->db->where('item_code', $data);
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Redeemcode_model.php */
/* Location: ./application/models/Redeemcode_model.php */