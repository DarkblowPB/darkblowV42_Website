<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //


defined('BASEPATH') or exit('No direct script access allowed');

class Webshop extends DARKBLOW_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('main/webshop_model', 'webshop_model');
		$this->load->model('main/login_model', 'login');
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		// Pagination Section

		// Load Config
		$config['base_url'] = base_url('webshop/index');
		$config['total_rows'] = $this->webshop_model->GetWebshopCount();
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

		$config['cur_tag_open'] = '<a class="nk-pagination-current" href="javascript:void(0)">';
		$config['cur_tag_close'] = '</a>';
		// End Pagination Styling

		// Initialize Pagination
		$this->pagination->initialize($config);
		// End Initialize Pagination

		// End Pagination Section

		$data['title'] = 'Webshop';
		$data['popular'] = $this->webshop_model->GetPopularWebshop();
		$data['start'] = $this->uri->segment(3);
		$data['webshop'] = $this->webshop_model->GetWebshopPerPage($config['per_page'], $data['start']);
		$data['isi'] = 'main/content/webshop/content_webshop';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function details($id)
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Webshop Item Details';
		$data['detail'] = $this->webshop_model->GetWebshopDetails($id);
		$data['related'] = $this->webshop_model->GetWebshopRelated();
		$data['isi'] = 'main/content/webshop/content_webshopdetail';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_login()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();
			$this->form_validation->set_rules(
				'username',
				'Username',
				'required',
				array('required' => '%s Cannot Be Empty.')
			);
			$this->form_validation->set_rules(
				'password',
				'Password',
				'required',
				array('required' => '%s Cannot Be Empty.')
			);
			if ($this->form_validation->run()) $this->login->LoginValidationV2();
			else {
				$this->form_validation->set_error_delimiters('', '');
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors();
				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}

	function do_buy()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();

			$this->form_validation->set_rules(
				'player_id',
				'Player ID',
				'required',
				array('required' => '%s Cannot Be Empty.')
			);
			$this->form_validation->set_rules(
				'item_id',
				'Item ID',
				'numeric|required',
				array('numeric' => '%s Cannot Be Empty', 'required' => '%s Cannot Be Empty.')
			);
			$this->form_validation->set_rules(
				'item_price',
				'Item Price',
				'numeric|required',
				array('numeric' => '%s Cannot Be Empty', 'required' => '%s Cannot Be Empty.')
			);
			if ($this->form_validation->run()) $this->webshop_model->BuyItemV2();
			else {
				$this->form_validation->set_error_delimiters('', '');

				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors('', '');
				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //