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
	
	function delete_item($param)
	{
		// Checking Item
		$check_item = $this->db->get_where('player_items', array('object_id' => $param));
		$result_item = $check_item->row();
		if ($result_item) 
		{
			// Checking Owner
			if ($result_item->owner_id != $_SESSION['uid'])
			{
				$this->session->set_flashdata('error', 'You Cannot Delete Another Player Item.');
				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
			else 
			{
				// Delete Item
				$delete_item = $this->db->where(array('object_id' => $result_item->object_id, 'item_id' => $result_item->item_id))->delete('player_items');
				if ($delete_item) 
				{
					$this->session->set_flashdata('success', 'Item Deleted Successfully.');
					redirect($_SERVER['HTTP_REFERER'], 'refresh');
				}
				else 
				{
					$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
					redirect($_SERVER['HTTP_REFERER'], 'refresh');
				}	
			}
		}
		else 
		{
			$this->session->set_flashdata('error', 'Item Not Found.');
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
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