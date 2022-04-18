<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Admin extends RestController
{

    function __construct()
    {
        parent::__construct();
    }

    function validatelicense_post()
    {
        $data = array(
            'username' => $this->input->post('username', true),
            'password' => md5($this->input->post('password', true)),
            'ip_address' => $this->input->ip_address(),
            'mac_address' => $this->input->post('mac_address', true),
            'secret_token' => $this->input->post('secret_token', true),
            'secret_keys' => $this->input->post('secret_keys', true),
            'opcode' => $this->input->post('opcode', true)
        );
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
