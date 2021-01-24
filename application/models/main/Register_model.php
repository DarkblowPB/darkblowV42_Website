<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function tambah($data)
	{
		$this->db->insert('accounts', $data);
	}
	public function password_encrypt($password)
	{
		$ingredient = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
		$encrypt_result = hash_hmac('md5', $password, $ingredient);
		return $encrypt_result;
	}
}

/* End of file Register_model.php */
/* Location: ./application/models/Register_model.php */