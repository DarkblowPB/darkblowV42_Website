<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->allprotect->Changepassword_Protection();
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->main_protect->mainProtectA();
		$this->load->model('main/changepassword_model', 'changepassword');
	}

	function index()
	{
		$data['title'] = 'Change Password';
		$data['isi'] = 'main/content/player_panel/content_changepassword';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_changepassword()
	{
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_rules(
			'old_password',
			'Old Password',
			'strtolower|trim|min_length[4]|max_length[16]|alpha_numeric|required',
			array(
				'min_length' => '%s Must Contains 4 Character Or More',
				'max_length' => '%s Can Only Use 16 Characters',
				'alpha_numeric' => '%s Can Only Use Letters And Numbers',
				'required' => '%s Cannot Be Empty'
			)
		);
		$this->form_validation->set_rules(
			'new_password',
			'New Password',
			'strtolower|trim|min_length[4]|max_length[16]|alpha_numeric|required',
			array(
				'min_length' => '%s Must Contains 4 Character Or More',
				'max_length' => '%s Can Only Use 16 Characters',
				'alpha_numeric' => '%s Can Only Use Letters And Numbers',
				'required' => '%s Cannot Be Empty'
			)
		);
		$this->form_validation->set_rules(
			'confirm_password',
			'Confirmation Password',
			'strtolower|trim|min_length[4]|max_length[16]|alpha_numeric|matches[new_password]|required',
			array(
				'min_length' => '%s Must Contains 4 Character Or More',
				'max_length' => '%s Can Only Use 16 Characters',
				'alpha_numeric' => '%s Can Only Use Letters And Numbers',
				'matches' => '%s Not Matches',
				'required' => '%s Cannot Be Empty'
			)
		);
		$this->form_validation->set_rules(
			'hint_question',
			'Hint Question',
			'required',
			array('required' => '%s Cannot Be Empty')
		);
		$this->form_validation->set_rules(
			'hint_answer',
			'Hint Answer',
			'required',
			array('required' => '%s Cannot Be Empty')
		);
		if ($this->form_validation->run()) 
		{
			$this->changepassword->changepassword_validation();
		}
		else 
		{
			echo validation_errors();
		}
	}

	function logout()
	{
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('player_name');
		$this->session->unset_userdata('access_level');
		$this->session->set_flashdata('success', 'Successfully Logout, Please Relogin To Continue.');
		redirect(base_url('home'), 'refresh');
	}

}

// This Code Generated Automatically By EyeTracker Snippets. //