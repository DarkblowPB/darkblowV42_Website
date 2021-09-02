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
        $this->load->library('email');
    }

    function SendRequestEmail()
    {
        $data = array(
            'username' => $this->encryption->encrypt($this->input->post('username', true)),
            'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
            'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true))
        );
        
        $response = array();

        $query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['username'])))->row();
        if ($query)
        {
            if ($this->encryption->decrypt($data['hint_question']) != $query->hint_question)
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Invalid Hint Question.';
                echo json_encode($response);
            }
            else if ($this->encryption->decrypt($data['hint_answer']) != $query->hint_answer)
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Invalid Hint Answer.';
                echo json_encode($response);
            }
            else
            {
                // Send Email Will Be Coded Here!
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>