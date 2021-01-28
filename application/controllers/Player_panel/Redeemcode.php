<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->login_library->primaryAuthCheck_Empty();
	}
	
	public function index()
	{
		$data['title'] = 'DarkblowPB || Redeem Code';
		$data['isi'] = 'main/content/player_panel/content_redeemcode';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //