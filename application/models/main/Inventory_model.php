<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_inventory_limit($limit, $start)
	{
		return $this->db->where('owner_id', $_SESSION['uid'])->order_by('object_id', 'desc')->get('player_items', $limit, $start)->result_array();
	}
	public function getdata_inventory_rows()
	{
		return $this->db->where('owner_id', $_SESSION['uid'])->get('player_items')->num_rows();
	}
	public function getdata_detail_item($detail)
	{
		return $this->db->where('item_id', $detail)->get('player_items')->result_array();
	}
	public function getdata_specific_item($detail)
	{
		return $this->db->where('object_id' , $detail)->get('player_items')->result_array();
	}
	public function deleteItemInventory($object_id)
	{
		return $this->db->where('object_id', $object_id)->delete('player_items');
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //