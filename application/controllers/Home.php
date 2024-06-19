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
		$this->load->model('main/home_model', 'home');
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Home';
		$data['player_ranking'] = $this->home->GetPlayerRanking();
		$data['clan_ranking'] = $this->home->GetClanRanking();
		$data['webshop'] = $this->home->GetPopularWebshop();
		$data['isi'] = 'main/content/home/content_home';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //