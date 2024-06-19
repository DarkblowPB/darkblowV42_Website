<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Download extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('main/download_model', 'download');
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Download';

		$data['client'] = $this->download->GetClient();
		$data['partial'] = $this->download->GetPartialClient();
		$data['launcher'] = $this->download->GetLauncher();
		$data['support'] = $this->download->GetSupportApp();

		$data['isi'] = 'main/content/download/content_download';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_download($package_id = null)
	{
		if ($this->input->is_ajax_request()) {
			$response = array();

			if ($package_id == null) {
				$response['response'] = 'false';
				$response['url'] = '';
				$response['message'] = 'Invalid Download Data';

				$this->darkblowmessage->AjaxFlashData($response);
			} else $this->download->GetDownloadData($package_id);
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //