<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->login_library->primaryAuthCheck_Empty();
		$this->load->model('main/playerpanel_model', 'player');
		$this->load->helper('text');
	}
	public function index()
	{
		$data['title'] = 'DarkblowPB || Player Panels';
		$data['account'] = $this->player->getdata_accountdetails();
		$data['isi'] = 'main/content/player_panel/content_playerpanel';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Player_panel/Home.php */