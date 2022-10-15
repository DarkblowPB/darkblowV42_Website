<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Redeemcode extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/redeemcode_model', 'redeemcode');

		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->RequireLogin_Protection();
		$this->darkblowprotection->RedeemcodePage_Protection();

		$this->darkblowlib->FeatureControl('redeemcode', 'player_panel');
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Redeem Code';
		$data['isi'] = 'main/content/player_panel/content_redeemcode';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_redeem()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();
			$this->form_validation->set_error_delimiters('', '');

			$this->form_validation->set_rules(
				'code',
				'Code',
				'required|min_length[19]|max_length[19]|alpha_dash',
				array(
					'required' => '%s Cannot Be Empty.',
					'min_length' => '%s Must Contains 19 Characters Or More.',
					'max_length' => '%s Only Can Accepted 19 Characters.'
				)
			);
			if ($this->form_validation->run()) $this->redeemcode->CodeValidationManual();
			else {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors('', '');

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //