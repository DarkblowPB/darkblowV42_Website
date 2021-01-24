<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if (empty($_SESSION['uid'])) 
		{
			$this->session->set_flashdata('error', 'You Are Not Logged In');
			redirect(base_url('home'),'refresh');
		}
		else
		{
			$data['title'] = 'DarkblowPB || Redeem Code';
			$data['isi'] = 'main/content/player_panel/content_redeemcode';
			$this->load->view('main/layout/wrapper', $data, FALSE);
		}
	}
}

/* End of file Redeemcode.php */
/* Location: ./application/controllers/Player_panel/Redeemcode.php */