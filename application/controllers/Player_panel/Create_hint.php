<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Create_hint extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->main_protect->mainProtectA();
		$this->load->model('main/createhint_model', 'hint');
		$this->load->AllProtect->Web_Protection();
	}
	public function index()
	{
		$data['title'] = 'DarkblowPB || Create Hint';
		$data['detailaccount'] = $this->hint->getdata_accountdetails();
		$data['isi'] = 'main/content/player_panel/content_createhint';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //