<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_library
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
		$this->ci->load->database();
		$this->ci->load->model('main/login_model', 'login');
		$this->ci->load->model('moderatorpanel/logger_model', 'logger');
		$this->ci->load->model('moderatorpanel/Adminlogin_model', 'loginfunction');
		$this->ci->load->model('launcher/Launcherredeemcode_model', 'launcher_redeemcode');
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

	public function adminlogin($username, $password)
	{
		$check = $this->ci->loginfunction->login_auth($username, $password);
		if ($check) 
		{
			$player_id = $check->player_id;
			$player_name = $check->player_name;
			$access_level = $check->access_level;
			if ($access_level < 3) 
			{
				$this->ci->logger->logger_LoginFailNotGM();
				$this->ci->session->set_flashdata('error', 'You Are Not Staff');

				redirect(base_url('moderatorpanel/login'), 'refresh');
			}
			if ($access_level >= 3) 
			{
				$this->ci->session->set_userdata('uid_admin', $player_id);
				$this->ci->session->set_userdata('admin_name', $player_name);
				$this->ci->session->set_userdata('access_level_admin', $access_level);
				if ($_SESSION['access_level_admin'] == 3) 
				{
					$this->ci->session->set_flashdata('Success', 'Welcome '.$_SESSION['admin_name'].', You Logged In As Moderator');
				}
				if ($_SESSION['access_level_admin'] == 4) 
				{
					$this->ci->session->set_flashdata('Success', 'Welcome '.$_SESSION['admin_name'].', You Logged In As Game Master');
				}
				if ($_SESSION['access_level_admin'] == 5) 
				{
					$this->ci->session->set_flashdata('Success', 'Welcome '.$_SESSION['admin_name'].', You Logged In As Administrator');
				}
				if ($_SESSION['access_level_admin'] == 6) 
				{
					$this->ci->session->set_flashdata('Success', 'Welcome '.$_SESSION['admin_name'].', You Logged In As Developer');
				}
				$this->ci->logger->logger_LoginSuccess();
				redirect(base_url('moderatorpanel/home'), 'refresh');
			}
		}
		else 
		{
			$this->ci->logger->logger_LoginFailed();
			$this->ci->session->set_flashdata('Failed', 'Username / Password Wrong');
			redirect(base_url('moderatorpanel/login'), 'refresh');
		}
	}

	public function adminlogout()
	{
		$this->ci->session->unset_userdata('uid_admin');
		$this->ci->session->unset_userdata('admin_name');
		$this->ci->session->unset_userdata('access_level_admin');
		
		redirect(base_url('moderatorpanel/login'), 'refresh');
	}
}

/* End of file Login_library.php */
/* Location: ./application/libraries/Login_library.php */
