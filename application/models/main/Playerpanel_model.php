<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playerpanel_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_accountdetails()
	{
		return $this->db->where('player_id', $_SESSION['uid'])->get('accounts')->result_array();
	}
}

/* End of file Playerpanel_model.php */
/* Location: ./application/models/Playerpanel_model.php */