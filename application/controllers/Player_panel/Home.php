<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('main/playerpanel_model', 'player');
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