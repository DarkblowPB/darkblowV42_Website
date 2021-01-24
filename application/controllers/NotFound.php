<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function index()
	{
		$data['title'] = '404 - Not Found';
		$this->load->view('main/content/error/content_error', $data, FALSE);
	}

}

/* End of file NotFound.php */
/* Location: ./application/controllers/NotFound.php */