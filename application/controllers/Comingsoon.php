<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comingsoon extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('main/content/coming_soon/content_comingsoon', FALSE);
	}

}

/* End of file Comingsoon.php */
/* Location: ./application/controllers/Comingsoon.php */