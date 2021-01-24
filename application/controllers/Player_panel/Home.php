<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main/playerpanel_model', 'player');
		$this->load->helper('text');
		$this->login_library->login_check();
	}
	public function index()
	{
		if (isset($_SESSION['uid'])) 
		{
			$data['title'] = 'DarkblowPB || Player Panels';
			$data['account'] = $this->player->getdata_accountdetails();
			$data['isi'] = 'main/content/player_panel/content_playerpanel';
			$this->load->view('main/layout/wrapper', $data, FALSE);
		}
		else
		{
			$this->session->set_flashdata('error', 'You Are Not Logged In');
			redirect(base_url('home'),'refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Player_panel/Home.php */