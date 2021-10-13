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

        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Change Password');
		
		$this->allprotect->Changepassword_Protection();
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
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
		$response = array();

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
			'required|in_list[What was your childhood nickname?,What is the name of your favorite childhood friend?,In what city or town did your mother and father meet?,What is your favorite team?,What is your favorite movie?,What was your favorite sport in high school?,What was your favorite food as a child?,What is the first name of the boy or girl that you first kissed?,What was the make and model of your first car?,What was the name of the hospital where you were born?,Who is your childhood sports hero?,What school did you attend for sixth grade?,What was the last name of your third grade teacher?,In what town was your first job?,What was the name of the company where you had your first job?]',
			array(
				'required' => '%s Cannot Be Empty',
				'in_list' => 'Invalid %s'
			)
		);
		$this->form_validation->set_rules(
			'hint_answer',
			'Hint Answer',
			'required',
			array('required' => '%s Cannot Be Empty')
		);
		if ($this->form_validation->run()) 
		{
			$this->changepassword->ChangePasswordV2();
		}
		else 
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = validation_errors();

			echo json_encode($response);
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