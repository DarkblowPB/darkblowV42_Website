<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/download_model', 'download');

		$this->darkblowprotection->RunningLegality();
		// $this->darkblowlicense->DarkblowPBLicense();
		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->DownloadPage_Protection();
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