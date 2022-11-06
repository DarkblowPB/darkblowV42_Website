<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Inventory extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->load->model('main/inventory_model', 'inventory');
		$this->load->library('pagination');
		$this->load->helper('date');

		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->RequireLogin_Protection();
		$this->darkblowprotection->InventoryPage_Protection();
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$config['base_url'] = base_url('player_panel/inventory/index');
		$config['total_rows'] = $this->inventory->GetInventoryCount();
		$config['per_page'] = 10;
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
		$this->pagination->initialize($config);

		$data['title'] = $this->session->userdata('player_name') . ' Inventory';
		$data['start'] = $this->uri->segment(4);
		$data['inventory'] = $this->inventory->GetInventoryPerPage($config['per_page'], $data['start']);
		$data['isi'] = 'main/content/player_panel/content_inventory';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function detail($idx)
	{
		if ($this->input->is_ajax_request()) return;
		else {
			if (is_numeric($idx) && $idx > 0) {
				$data['title'] = 'Details Item';
				$data['details'] = $this->darkblowlib->GetItemDetails($idx);
				$data['isi'] = 'main/content/player_panel/content_inventory_detail';
				$this->load->view('main/layout/wrapper', $data, FALSE);
			} else redirect(base_url('player_panel/inventory'), 'refresh');
		}
	}

	function do_delete()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();
			$this->form_validation->set_error_delimiters('', '');
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
				array('numeric' => '%s Only Accepted Numeric Character.', 'required' => '%s Cannot Be Empty.')
			);
			if ($this->form_validation->run()) $this->inventory->DeleteItem();
			else {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = validation_errors();

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else return;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //