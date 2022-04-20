<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Forgotpassword_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function ForgotPasswordValidationV1()
    {
        $response = array();

        $data = array(
            'email' => $this->input->post('email', true)
        );

        $query = $this->db->get_where('accounts', array('email' => $data['email']))->row();
        if ($query) {
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
