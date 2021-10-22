<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Forgotpassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Forgot Password');

        $this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
		$this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
    }

    function index()
    {
        $data['title'] = 'Forgot Password';
        $data['isi'] = 'main/content/forgotpassword/content_forgotpassword';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function verifyid()
    {
        if (empty($this->input->get('token', true)))
        {
            redirect(base_url(), 'refresh');
        }
        else
        {
            // Token Verifying...
        }
    }

    function do_sendrequest()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|alpha_numeric|min_length[4]|max_length[16]',
            array(
                'required' => '%s Cannot Be Empty.',
                'alpha_numeric' => '%s Only Alphabetic & Numeric Character Allowed.',
                'min_length' => '%s Must Contains 4 Characters Or More.',
                'max_length' => '%s Only Can Contains 16 Characters.'
            )
        );
        $this->form_validation->set_rules(
            'hint_question',
            'Hint Question',
            'required|in_list[What was your childhood nickname?,What is the name of your favorite childhood friend?,In what city or town did your mother and father meet?,What is your favorite team?,What is your favorite movie?,What was your favorite sport in high school?,What was your favorite food as a child?,What is the first name of the boy or girl that you first kissed?,What was the make and model of your first car?,What was the name of the hospital where you were born?,Who is your childhood sports hero?,What school did you attend for sixth grade?,What was the last name of your third grade teacher?,In what town was your first job?,What was the name of the company where you had your first job?]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'hint_answer',
            'Hint Answer',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run())
        {

        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>