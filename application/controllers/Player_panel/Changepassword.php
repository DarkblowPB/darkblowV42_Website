<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->login_library->primaryAuthCheck_Empty();
		$this->load->model('main/changepassword_model', 'changepassword');
	}

	public function index()
	{
		$data['title'] = 'DarkblowPB || Change Password';
		$data['change'] = $this->changepassword->getdata_account();
		$data['isi'] = 'main/content/player_panel/content_changepassword';
		$this->load->view('main/layout/wrapper', $data, FALSE);
		
	}
	public function logout()
	{
		return $this->login_library->logout_from_changepassword();
	}

}

/* End of file Changepassword.php */
/* Location: ./application/controllers/Player_panel/Changepassword.php */