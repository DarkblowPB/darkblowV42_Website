<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Player_rank extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->load->library('pagination');
		$this->load->model('main/playerrank_model', 'playerrank');

		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->PlayerRankPage_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		// Pagination Section

		// Load Config
		$config['base_url'] = base_url('player_rank/index');
		$config['total_rows'] = $this->playerrank->GetPlayerCount();
		$config['per_page'] = 10;
		// End Load Config

		// Pagination Styling
		$config['full_tag_open'] = '<div class="nk-pagination nk-pagination-center"><nav>';
		$config['full_tag_close'] = '</nav></div>';

		$config['next_link'] = '<span class="ion-ios-arrow-forward"></span>';
		$config['next_tag_open'] = '';
		$config['next_tag_close'] = '</a>';

		$config['prev_link'] = '<span class="ion-ios-arrow-back"></span>';
		$config['prev_tag_open'] = '';
		$config['prev_tag_close'] = '</a>';

		$config['cur_tag_open'] = '<a class="nk-pagination-current" href="#">';
		$config['cur_tag_close'] = '</a>';
		// End Pagination Styling

		// Initialize Pagination
		$this->pagination->initialize($config);
		// End Initialize Pagination

		// End Pagination Section

		// Data Section
		$data['start'] = $this->uri->segment(3);
		$data['title'] = 'Player Ranks';
		$data['account'] = $this->playerrank->GetClanPerPage($config['per_page'], $data['start']);
		$data['isi'] = 'main/content/player_rank/content_playerrank';
		// End Data Section

		// View Section
		$this->load->view('main/layout/wrapper', $data, FALSE);
		// End View Section
	}

	function detail($player_id)
	{
		if ($this->input->is_ajax_request()) return;

		if (is_numeric($player_id) && $player_id > 0) {
			$data['title'] = 'Detail Player';
			$data['isi'] = 'main/content/player_rank/content_detailplayer';

			$this->load->view('layout/wrapper', $data, FALSE);
		} else set_status_header(404, 'Invalid Player ID');
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //