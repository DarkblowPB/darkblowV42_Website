<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/playerpanel_model', 'player');

		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->RequireLogin_Protection();
		$this->darkblowprotection->PlayerPanelHomePage_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Player Panels';
		$data['account'] = $this->player->GetDetailsAccount();
		$data['isi'] = 'main/content/player_panel/content_playerpanel';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_requesthint()
	{
		if ($this->input->is_ajax_request()) $this->player->RequestHint();
		else return;
	}

	function do_requestverificationemail()
	{
		if ($this->input->is_ajax_request()) $this->player->RequestVerificationEmail();
		else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //