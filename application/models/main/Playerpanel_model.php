<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Playerpanel_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function GetDetailsAccount()
	{
		return $this->db->where('player_id', $this->session->userdata('uid'))->get('accounts')->result_array();
	}

	function RequestHint()
	{
		$response = array();

		$query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
		if ($query) {
			$response['response'] = 'true';
			$response['message'] = $this->lang->line('STR_SUCCESS_7') . $query->hint_answer;
			echo json_encode($response);
		} else {
			$response['response'] = 'false';
			$response['message'] = $this->lang->line('STR_ERROR_39');
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //