<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_library
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
		$this->ci->load->database();
		$this->ci->load->model('moderatorpanel/logger_model', 'logger');
	}

	public function primaryAuthCheck_Empty()
	{
		if (empty($_SESSION['uid'])) 
		{
			$this->ci->session->set_flashdata('error', 'You Are Not Logged In!');
			redirect(base_url('home'),'refresh');
		}
	}

	public function primaryAuthCheck_Exist()
	{
		if (!empty($_SESSION['uid'])) 
		{
			$this->ci->session->set_flashdata('error', 'You Already Logged In!');
			redirect(base_url('home'),'refresh');
		}
	}

	public function adminAuthCheck_Empty()
	{
		if (empty($_SESSION['uid_admin'])) 
		{
			redirect(base_url('moderatorpanel/login'), 'refresh');
		}
		if (empty($_SESSION['uid_admin']) && empty($_SESSION['admin_name'])) 
		{
			redirect(base_url('moderatorpanel/login'), 'refresh');
		}
		if (empty($_SESSION['uid_admin']) && empty($_SESSION['admin_name']) && empty($_SESSION['access_level_admin'])) 
		{
			redirect(base_url('moderatorpanel/login'), 'refresh');
		}
		if ($_SESSION['access_level_admin'] < 3) 
		{
			redirect(base_url('moderatorpanel/login'), 'refresh');
		}
	}

	public function adminAuthCheck_Exist()
	{
		if (!empty($_SESSION['uid_admin'])) 
		{
			redirect(base_url('moderatorpanel/home'), 'refresh');
		}
		if (!empty($_SESSION['uid_admin']) && !empty($_SESSION['admin_name'])) 
		{
			redirect(base_url('moderatorpanel/home'), 'refresh');
		}
		if (!empty($_SESSION['uid_admin']) && !empty($_SESSION['admin_name']) && !empty($_SESSION['access_level_admin'])) 
		{
			redirect(base_url('moderatorpanel/home'), 'refresh');
		}
	}

	public function changepassword_protect()
	{
		$check = $this->ci->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
		$result = $check->row();
		if ($result) 
		{
			if ($result->hint_question == null || $result->hint_answer == null) 
			{
				redirect(base_url('player_panel'), 'refresh');
			}
		}
	}
}

/* End of file Login_library.php */
/* Location: ./application/libraries/Login_library.php */
