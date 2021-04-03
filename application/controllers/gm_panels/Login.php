<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function index()
    {
        if (empty($_GET['username']))
        {
            echo "Error 01";
        }
        if (empty($_GET['password']))
        {
            echo "Error 02";
        }
        if (empty($_GET['username']) && empty($_GET['password'])) 
        {
            echo "Error 03";
        }
        if (!empty($_GET['username']) && !empty($_GET['password'])) 
        {
            $check = $this->db->get_where('accounts', array('login' => pg_escape_string($_GET['username']), 'password' => pg_escape_string($this->lib->password_encrypt($_GET['password']))));
            $result = $check->row();
            if ($result) 
            {
                if ($result->access_level == -1) 
                {
                    echo "Error 04";
                }
                if ($result->access_level < 3) 
                {
                    echo "Error 05";
                }
                if ($result->access_level >= 3 && $result->access_level <= 6) 
                {
                    echo "Success";
                }
                if ($result->access_level > 6) 
                {
                    echo "Error 06";
                }
            }
            else 
            {
                echo "Error 07";
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>