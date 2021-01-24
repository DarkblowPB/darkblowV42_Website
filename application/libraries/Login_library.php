<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_library
{
	protected $ci;
	public function __construct()
	{
        $this->ci =& get_instance();
		$this->ci->load->model('main/login_model', 'login');
		$this->ci->load->model('moderatorpanel/logger_model', 'logger');
		$this->ci->load->model('moderatorpanel/Adminlogin_model', 'loginfunction');
	}
	public function login($username, $password)
	{
		$check = $this->ci->login->login($username,$password);
		if ($check)
		{
			$uid = $check->player_id;
			$username = $check->login;
			$playername = $check->player_name;
			$access_level = $check->access_level;
			$d_cash = $check->money;
			$rank = $check->rank;
			$exp = $check->exp;
			$coin = $check->kuyraicoin;
			$points = $check->gp;
			$password = $check->password;

			$this->ci->session->set_userdata('uid',$uid);
			$this->ci->session->set_userdata('login',$username);
			$this->ci->session->set_userdata('playername',$playername);
			$this->ci->session->set_userdata('accesslevel',$access_level);
			$this->ci->session->set_userdata('d_cash',$d_cash);
			$this->ci->session->set_userdata('rank',$rank);
			$this->ci->session->set_userdata('exp',$exp);
			$this->ci->session->set_userdata('coin',$coin);
			$this->ci->session->set_userdata('points',$points);
			$this->ci->session->set_userdata('password', $password);

			
			$this->ci->session->set_flashdata('welcome', 'Login Successfully!, Welcome '.$_SESSION['playername'].'.');
			redirect(base_url('home'),'refresh');
		}
		else
		{
			$this->ci->session->set_flashdata('error', 'Wrong Username or Password.');
			redirect(base_url('login'),'refresh');
		}
	}
	public function login_check()
	{
		if (empty($_SESSION['uid'])) 
		{
			$this->ci->session->set_flashdata('error', 'You Are Not Logged In!');
			redirect(base_url('home'),'refresh');
		}
	}
	public function logout()
	{
		$this->ci->session->unset_userdata('uid');
		$this->ci->session->unset_userdata('login');
		$this->ci->session->unset_userdata('playername');
		$this->ci->session->unset_userdata('accesslevel');
		$this->ci->session->unset_userdata('d_cash');
		$this->ci->session->unset_userdata('rank');
		$this->ci->session->unset_userdata('exp');
		$this->ci->session->unset_userdata('coin');
		$this->ci->session->unset_userdata('points');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->set_flashdata('welcome', 'Successfully Logout.');
		redirect(base_url('home'),'refresh');
	}
	public function logout_from_changepassword()
	{
		$this->ci->session->unset_userdata('uid');
		$this->ci->session->unset_userdata('login');
		$this->ci->session->unset_userdata('playername');
		$this->ci->session->unset_userdata('accesslevel');
		$this->ci->session->unset_userdata('d_cash');
		$this->ci->session->unset_userdata('rank');
		$this->ci->session->unset_userdata('exp');
		$this->ci->session->unset_userdata('coin');
		$this->ci->session->unset_userdata('points');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->set_flashdata('welcome', 'Password Changed Successfully<br>Please Relogin To Continue Your Action.');
		redirect(base_url('home'),'refresh');
	}

	public function adminAuthCheck_Empty()
	{
		if (empty($_SESSION['uid_admin'])) 
		{
			redirect(base_url('moderatorpanel/login'), 'refresh');
		}
		if (empty($_SESSION['uid_admin']) && empty($_SESION['admin_name'])) 
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
