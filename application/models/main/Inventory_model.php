<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function GetItemRealName($item_id)
	{
		$query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
		if ($query)
		{
			return $query->item_name;
		}
		else
		{
			return "";
		}
	}
	
	function getdata_inventory_limit($limit, $start)
	{
		return $this->db->where('owner_id', $_SESSION['uid'])->order_by('object_id', 'desc')->get('player_items', $limit, $start)->result_array();
	}
	
	function getdata_inventory_rows()
	{
		return $this->db->where('owner_id', $_SESSION['uid'])->get('player_items')->num_rows();
	}
	
	function getdata_detail_item($detail)
	{
		return $this->db->where('item_id', $detail)->get('player_items')->result_array();
	}
	
	function delete_item()
	{
		$data = array(
			'player_id' => $this->encryption->encrypt($this->input->post('player_id')),
			'item_id' => $this->encryption->encrypt($this->input->post('item_id'))
		);

		$query = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $this->encryption->decrypt($data['item_id'])))->row();
		if ($query)
		{
			$delete = $this->db->where(array('owner_id' => $query->owner_id, 'item_id' => $query->item_id))->delete('player_items');
			if ($delete)
			{
				echo "true";
			}
			else
			{
				echo "false";
			}
		}
		else
		{
			echo "false";
		}
	}
	
	function detail($param)
	{
		$check = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'object_id' => $param));
		$result = $check->row();
		if ($result)
		{
			return $result;
		}
		else 
		{
			redirect(base_url('player_panel/inventory'), 'refresh');
		}
	}
}
// This Code Generated Automatically By EyeTracker Snippets. //