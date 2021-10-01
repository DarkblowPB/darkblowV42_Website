<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

        $this->lang->load(array('header', 'string'));

		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
		$this->load->library('lib');
		$this->load->model('main/home_model', 'home');
	}

	function index()
	{
		$data['title'] = 'Home';

		$data['account'] = $this->home->GetPlayerRanking();
		$data['clan'] = $this->home->GetClanRanking();

		$data['quickslide'] = $this->home->GetNews();
		$data['webshop'] = $this->home->GetPopularWebshop();
		
		$data['isi'] = 'main/content/home/content_home';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_getservercondition()
	{
		$this->getsettings->Fetch();
	}

	function do_getonline()
	{
		$this->getsettings->GetOnlinePlayers();
	}

	function do_getregistered()
	{
		$this->getsettings->GetRegisteredPlayers();
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //