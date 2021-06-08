<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Get_launcherkey extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function index()
    {
        if (!empty($_GET['token']))
        {
            if ($_GET['token'] == "darkblowpb_reborn2021")
            {
                $check = $this->db->get_where('info_launcherkey', array('id' => '1'));
                $result = $check->row();
                if ($result)
                {
                    echo $result->key;
                }
                else 
                {
                    echo "0";
                }
            }
            if ($_GET['token'] != "darkblowpb_reborn2021")
            {
                echo "0";
            }
        }
        if (empty($_GET['token']))
        {
            return "0";
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>