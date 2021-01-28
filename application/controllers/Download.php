<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main/download_model', 'download');
	}
	public function index()
	{
		$data['title'] = 'DarkblowPB || Download';
		$data['client'] = $this->download->getdata_client();
		$data['partial'] = $this->download->getdata_partialclient();
		$data['launcher'] = $this->download->getdata_launcher();
		$data['support'] = $this->download->getdata_supportapplication();
		$data['isi'] = 'main/content/download/content_download';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //