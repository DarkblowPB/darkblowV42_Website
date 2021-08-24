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

    function SendEmail()
    {
        $config = array('');
    }

    function GetPlayerData()
    {
        return $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row();
    }
    
    function IsConfirmEmail($email)
    {
        $query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'], 'email' => $email))->row();
        if ($query)
        {
            if ($query->email_verification == 0)
            {
                return false;
            }
            else if ($query->email_verification == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    function ChangeEmailValidation()
    {
        $data = array(
            'old_email' => $this->encryption->encrypt($this->input->post('old_email')),
            'new_email' => $this->encryption->encrypt($this->input->post('new_email')),
            'confirm_email' => $this->encryption->encrypt($this->input->post('confirm_email'))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'], 'email' => $this->encryption->decrypt($data['old_email'])))->row();
        if ($query)
        {
            if ($query->email_verification == 0)
            {
                // If Email Verification Is 0
                echo "false";
            }
            else if ($query->email_verification == 1)
            {
                // If Email Verification Is 1
                $update = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('email' => $this->encryption->decrypt($data['new_email']), 'email_verification' => '0'));
                if ($update)
                {
                    echo "true";
                }
                else
                {
                    echo "false";
                }
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>