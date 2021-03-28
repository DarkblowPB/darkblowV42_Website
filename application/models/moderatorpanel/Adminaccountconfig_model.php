<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminaccountconfig_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAccountConfig()
    {
        $check = $this->db->get_where('accounts', array('player_id' => $_SESSION['admin_id']));
        $result = $check->row();
        if ($result) 
        {
            return $result;
        }
        else 
        {
            redirect(base_url('404/home/logout'), 'refresh');
        }
    }

    function updateAccountConfig()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'hint_question' => $this->input->post('hint_question'),
            'hint_answer' => $this->input->post('hint_answer')
        );

        // Checking Account
        $check_account = $this->db->get_where('accounts', array('player_id' => $_SESSION['admin_id']));
        $result_account = $check_account->row();
        if ($result_account) 
        {
            if ($data['hint_question'] != $result_account->hint_question) 
            {
                $this->session->set_flashdata('Failed', 'Hint Question Wrong.');
                redirect(base_url('moderatorpanel/account_config'), 'refresh');
            }
            if ($data['hint_answer'] != $result_account->hint_answer) 
            {
                $this->session->set_flashdata('Failed', 'Hint Answer Wrong.');
                redirect(base_url('moderatorpanel/account_config'), 'refresh');
            }
            if ($data['hint_question'] == $result_account->hint_question && $data['hint_answer'] == $result_account->hint_answer) 
            {
                // Update Configuration
                $update_config = $this->db->where('player_id', $result_account->player_id)->update('accounts', array('login' => $data['username'], 'player_name' => $data['nickname'], 'email' => $data['email']));
                if ($update_config) 
                {
                    $this->session->set_flashdata('Success', 'Configuration Has Been Updated Successfully');
                    redirect(base_url('moderatorpanel/account_config'), 'refresh');
                }
                else 
                {
                    $this->session->set_flashdata('Failed', 'Failed To Update Configuration Due Server Not Respond Your Action');
                    redirect(base_url('moderatorpanel/account_config'), 'refresh');
                }
            }
        }
        else 
        {
            $this->session->set_flashdata('Failed', 'Account Not Found');
            redirect(base_url('moderatorpanel/account_config'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>