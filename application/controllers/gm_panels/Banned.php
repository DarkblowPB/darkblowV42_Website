<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Banned extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function index()
    {
        if (empty($_GET['player_id'])) 
        {
            echo "Error 01";
        }
        if (empty($_GET['gm_username'])) 
        {
            echo "Error 02";
        }
        if (empty($_GET['player_id']) && empty($_GET['gm_username'])) 
        {
            echo "Error 03";
        }
        if (!empty($_GET['player_id']) && !empty($_GET['gm_username']))
        {
            $check = $this->db->get_where('accounts', array('login' => pg_escape_string($_GET['gm_username'])));
            $result = $check->row();
            if ($result) 
            {
                if ($result->access_level == -1) 
                {
                    echo "Error 04";
                }
                if ($result->access_level < 5)
                {
                    echo "Warning 01";
                }
                if ($result->access_level == 6) 
                {
                    $victim_check = $this->db->get_where('accounts', array('player_id' => pg_escape_string($_GET['player_id'])));
                    $victim_result = $victim_check->row();
                    if ($victim_result) 
                    {
                        if ($victim_result->access_level == -1) 
                        {
                            echo "Warning 02";
                        }
                        if ($victim_result->access_level >= 0 && $victim_result->access_level < 3) 
                        {
                            $update = $this->db->where('player_id', $victim_result->player_id)->update('accounts', array('access_level' => '-1'));
                            if ($update) 
                            {
                                echo "Success";
                            }
                            else 
                            {
                                echo "Warning 03";
                            }
                        }
                        if ($victim_result->access_level >= 3 && $victim_result->access_level <= 6) 
                        {
                            echo "Error 05";
                        }
                    }
                    else 
                    {
                        echo "Error 06";
                    }
                }
                if ($result->access_level > 6) 
                {
                    echo "Error 07";
                }
            }
            else 
            {
                echo "Error 08";
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>