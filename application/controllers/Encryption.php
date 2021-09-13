<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Encryption extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');

        if (empty($_SESSION['uid']))
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function darkblowstudio_01()
    {
        $this->lib->EncryptedWeb();
    }
    
    function darkblowstudio_02()
    {
        $this->lib->CreateAccount();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>