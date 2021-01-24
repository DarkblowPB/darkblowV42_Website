<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main/home_model', 'home');
		$this->load->model('main/webshop_model','webshop');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['title'] = 'DarkblowPB || Home';
		$data['account'] = $this->home->getdata_account();
		$data['clan'] = $this->home->getdata_clan();
		$data['allaccount'] = $this->home->getdata_allaccount();
		$data['onlineaccount'] = $this->home->getdata_onlineaccount();
		$data['quickslide'] = $this->home->getdata_quickslide();
		$data['webshop'] = $this->webshop->getdata_webshop_mostpopular();
		$data['isi'] = 'main/content/home/content_home';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
	public function logout()
	{
		return $this->login_library->logout();
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */