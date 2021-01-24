<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createhint_model extends CI_Model 
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

/* End of file Createhint_model.php */
/* Location: ./application/models/Createhint_model.php */