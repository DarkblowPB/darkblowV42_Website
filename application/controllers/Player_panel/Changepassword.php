<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Changepassword extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load(array('header', 'string', 'message'));
		$this->darkblowlib->GetVisitorData('Change Password');

		$this->darkblowprotection->RunningLegality();
		// $this->darkblowlicense->DarkblowPBLicense();
		$this->darkblowprotection->BlockedIP_Protection();
		$this->darkblowprotection->PageDump_Protection();
		$this->darkblowprotection->Maintenance_Protection();
		$this->darkblowprotection->RequireLogin_Protection();
		$this->darkblowprotection->ChangePasswordPage_Protection();

		$this->load->model('main/changepassword_model', 'changepassword');
	}

	function index()
	{
		if ($this->input->is_ajax_request()) return;

		$data['title'] = 'Change Password';
		$data['isi'] = 'main/content/player_panel/content_changepassword';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}

	function do_changepassword()
	{
		if ($this->input->is_ajax_request()) {
			$response = array();

			$this->form_validation->set_error_delimiters('', '');
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
			if ($this->form_validation->run()) $this->changepassword->ChangePasswordV2();
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