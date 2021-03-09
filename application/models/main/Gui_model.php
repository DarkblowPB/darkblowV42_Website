<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gui_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('main/register_model', 'register_model');
	}

	function get_player($param1, $param2)
	{
		$check = $this->db->where(array('login' => $param1, 'password' => $this->register_model->password_encrypt($param2)))->get('accounts');
		$result = $check->row();
		if ($result)
		{
			echo "success";
		}
		else
		{
			echo "not_found";
		}
	}
}

/* End of file Gui_model.php */
/* Location: ./application/models/main/Gui_model.php */