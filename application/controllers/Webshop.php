<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //


defined('BASEPATH') OR exit('No direct script access allowed');

class Webshop extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main/webshop_model', 'webshop');
		$this->load->library('pagination');
	}
	public function index()
	{
		// Pagination Section

			// Load Config
				$config['base_url'] = 'http://localhost:8080/webpb-ci3/webshop/index';
				$config['total_rows'] = $this->webshop->getdata_webshop_in_row();
				$config['per_page'] = 9;
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

		$data['title'] = 'DarkblowPB || Webshop';
		$data['popular'] = $this->webshop->getdata_webshop_mostpopular();
		$data['start'] = $this->uri->segment(3);
		$data['webshop'] = $this->webshop->getdata_webshop_limit($config['per_page'], $data['start']);
		$data['isi'] = 'main/content/webshop/content_webshop';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
	public function details($id)
	{
		$data['title'] = 'DarkblowPB || Webshop Item Details';
		$data['detail'] = $this->webshop->getdata_webshop_detail($id);
		$data['related'] = $this->webshop->getdata_webshop_related();
		$data['isi'] = 'main/content/webshop/content_webshopdetail';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //