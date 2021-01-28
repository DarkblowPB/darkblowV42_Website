<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Webshop_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_webshop_detail($id)
	{
		return $this->db->where('id', $id)->get('webshop')->result_array();
	}
	public function getdata_webshop_in_row()
	{
		return $this->db->where('webshop_itemstatus', '1')->get('webshop')->num_rows();
	}
	public function getdata_webshop_limit($limit, $start)
	{
		return $this->db->where('webshop_itemstatus', '1')->order_by('id','desc')->get('webshop', $limit, $start)->result_array();
	}
	public function getdata_webshop_mostpopular()
	{
		return $this->db->order_by('webshop_totalbuy', 'desc')->limit(7)->get('webshop')->result_array();
	}
	public function getdata_webshop_related()
	{
		return $this->db->where('webshop_itemstatus', '1')->order_by('id','desc')->limit(4)->get('webshop')->result_array();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //