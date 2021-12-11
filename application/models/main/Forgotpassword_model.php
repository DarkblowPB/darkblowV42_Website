<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function ForgotPasswordValidationV1()
    {
        $data = array(
            'username' => $this->encryption->encrypt($this->input->post('username', true)),
            'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
            'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true))
        );

        $query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username']), 'hint_question' => $this->encryption->decrypt($data['hint_question']), 'hint_answer' => $this->encryption->decrypt($data['hint_answer'])))->row();
        if ($query)
        {
            // Send Verification Email.
        }
        else
        {
            $this->session->set_flashdata('false', 'Cannot Find Any Account.');
            redirect(base_url('forgotpassword'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>