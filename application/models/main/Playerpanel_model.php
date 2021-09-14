<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Playerpanel_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function GetDetailsAccount()
	{
		return $this->db->where('player_id', $_SESSION['uid'])->get('accounts')->result_array();
	}

	function RequestHint()
	{
		$response = array();

		$query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row();
		if ($query)
		{
			$response['response'] = 'true';
			$response['message'] = 'Your Hint : '.$query->hint_answer;
			echo json_encode($response);
		}
		else
		{
			$response['response'] = 'false';
			$response['message'] = 'Failed To Get Your Hint.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //