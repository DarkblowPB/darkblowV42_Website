<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Encrypt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    function index()
    {
        $data = array(
            'type' => $this->encryption->encrypt($this->input->post('type')),
            'value' => $this->encryption->encrypt($this->input->post('value'))
        );

        if ($this->encryption->decrypt($data['type']) == "encrypt")
        {
            echo $data['value'];
        }
        else if ($this->encryption->decrypt($data['type']) == "decrypt")
        {
            echo $this->encryption->decrypt($data['value']);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>