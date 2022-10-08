<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Inventory_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function GetInventoryPerPage($limit, $start)
	{
		return $this->db->where('owner_id', $this->session->userdata('uid'))->order_by('object_id', 'desc')->get(Darkblowdatabase::player_items, $limit, $start)->result_array();
	}

	function GetInventoryCount()
	{
		return $this->db->where('owner_id', $this->session->userdata('uid'))->get(Darkblowdatabase::player_items)->num_rows();
	}

	function DeleteItem()
	{
		sleep(1);
		$response = array();

		$data = array(
			'player_id' => $this->encryption->encrypt($this->input->post('player_id')),
			'item_id' => $this->encryption->encrypt($this->input->post('item_id'))
		);

		$query = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $this->session->userdata('uid'), 'item_id' => $this->encryption->decrypt($data['item_id'])))->row();
		if ($query) {
			$delete = $this->db->where(array('owner_id' => $query->owner_id, 'item_id' => $query->item_id))->delete(Darkblowdatabase::player_items);
			if ($delete) {
				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_SUCCESS_5');
				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_36');
				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_36');
			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}
// This Code Generated Automatically By EyeTracker Snippets. //