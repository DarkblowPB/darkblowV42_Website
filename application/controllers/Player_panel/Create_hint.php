<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_hint extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->login_library->primaryAuthCheck_Empty();
		$this->load->model('main/createhint_model', 'hint');
	}
	public function index()
	{
		$data['title'] = 'DarkblowPB || Create Hint';
		$data['detailaccount'] = $this->hint->getdata_accountdetails();
		$data['isi'] = 'main/content/player_panel/content_createhint';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

}

/* End of file Create_hint.php */
/* Location: ./application/controllers/Player_panel/Create_hint.php */