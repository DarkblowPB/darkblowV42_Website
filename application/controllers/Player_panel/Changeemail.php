<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Changeemail extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/changeemail_model', 'changeemail');
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Change Email';

        $data['player'] = $this->changeemail->GetPlayerData();

        $data['isi'] = 'main/content/player_panel/content_changeemail';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_changeemail()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();

            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules(
                'old_email',
                'Old Email',
                'required|valid_email',
                array('required' => '%s Cannot Be Empty.', 'valid_email' => 'Invalid %s.')
            );
            $this->form_validation->set_rules(
                'new_email',
                'New Email',
                'required|valid_email',
                array('required' => '%s Cannot Be Empty.', 'valid_email' => 'Invalid %s.')
            );
            $this->form_validation->set_rules(
                'confirm_email',
                'Confirm Email',
                'required|matches[new_email]|valid_email',
                array('required' => '%s Cannot Be Empty.', 'matches' => '%s Not Matches.', 'valid_email' => 'Invalid %s.')
            );
            if ($this->form_validation->run()) $this->changeemail->ChangeEmailValidation();
            else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['meesage'] = validation_errors();
            }
        } else return;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
