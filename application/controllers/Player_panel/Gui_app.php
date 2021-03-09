<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Gui_app extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('main/gui_model', 'gui_model');
	}

	function index()
	{
		$username = $_GET['login'];
		$password = $_GET['password'];
		if (empty($username) && empty($password))
		{
			echo "failed";
		}
		if (!empty($username) && !empty($password))
		{
			$this->gui_model->get_player($username, $password);
		}
	}
}

/* End of file Gui_app.php */
/* Location: ./application/controllers/Player_panel/Gui_app.php */