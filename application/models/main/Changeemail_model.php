<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Changeemail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetPlayerData()
    {
        return $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
    }
    
    function IsConfirmEmail($email)
    {
        $query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid'), 'email' => $email))->row();
        if ($query)
        {
            if ($query->email_verification == 0) return false;
            else if ($query->email_verification == 1) return true;
            else return false;
        }
        else return false;
    }

    function ChangeEmailValidation()
    {
        $response = array();

        $data = array(
            'old_email' => $this->encryption->encrypt($this->input->post('old_email')),
            'new_email' => $this->encryption->encrypt($this->input->post('new_email')),
            'confirm_email' => $this->encryption->encrypt($this->input->post('confirm_email'))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid'), 'email' => $this->encryption->decrypt($data['old_email'])))->row();
        if ($query)
        {
            if ($query->email_verification == 0)
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Please Confirm Your Email First.';

                echo json_encode($response);
            }
            else if ($query->email_verification == 1)
            {
                // If Email Verification Is 1
                $update = $this->db->where('player_id', $this->session->userdata('uid'))->update('accounts', array('email' => $this->encryption->decrypt($data['new_email']), 'email_verification' => '0'));
                if ($update)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Change Email';

                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed Change Email';
    
                    echo json_encode($response);
                }
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>