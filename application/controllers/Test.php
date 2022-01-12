<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        $this->load->library('lib');
    }

    function index()
    {
        $file = read_file('./darkblow_config.json');
        $decode = json_decode($file);

        foreach ($decode as $row)
        {
            echo $row->GoogleConfig->ClientID;
        }
    }

    function encrypt()
    {
        $encrypt_string = $this->lib->Encrypt('Test Encrypt');
        $decrypt_string = $this->lib->Decrypt($encrypt_string);

        echo 'Encrypted String = ' . $encrypt_string . '<br> Decrypted String = ' . $decrypt_string . '.';
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>