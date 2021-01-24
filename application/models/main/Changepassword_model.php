<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_account()
	{
		return $this->db->where('player_id' , $_SESSION['uid'])->get('accounts')->result_array();
	}
}

/* End of file Changepassword_model.php */
/* Location: ./application/models/Changepassword_model.php */