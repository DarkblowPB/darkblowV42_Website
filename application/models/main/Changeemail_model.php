<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Changeemail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('message');
    }

    function GetPlayerData()
    {
        return $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid')))->row();
    }

    function IsConfirmEmail($email)
    {
        $query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid'), 'email' => $email))->row();
        if ($query) {
            if ($query->email_verification == 0) return false;
            else if ($query->email_verification == 1) return true;
            else return false;
        } else return false;
    }

    function ChangeEmailValidation()
    {
        $response = array();

        $data = array(
            'old_email' => $this->encryption->encrypt($this->input->post('old_email')),
            'new_email' => $this->encryption->encrypt($this->input->post('new_email')),
            'confirm_email' => $this->encryption->encrypt($this->input->post('confirm_email'))
        );

        $query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid'), 'email' => $this->encryption->decrypt($data['old_email'])))->row();
        if ($query) {
            if ($query->email_verification == 0) {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = $this->lang->line('STR_WARNING_24');

                $this->darkblowmessage->AjaxFlashData($response);
            } else if ($query->email_verification == 1) {
                // If Email Verification Is 1
                $update = $this->db->where('player_id', $this->session->userdata('uid'))->update(Darkblowdatabase::accounts, array('email' => $this->encryption->decrypt($data['new_email']), 'email_verification' => '0'));
                if ($update) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = $this->lang->line('STR_SUCCESS_2');

                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = $this->lang->line('STR_ERROR_29');

                    $this->darkblowmessage->AjaxFlashData($response);
                }
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
