<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Players extends RestController {

    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
    }

    function index_get()
    {
        $response = array();
        if (empty($this->input->get('player_id', true)))
        {
            $query = $this->db->order_by('player_id', 'desc')->get('accounts')->result();
            $this->response($query, 200);
        }
        else
        {
            if ($this->input->get('player_id', true) == '' || $this->input->get('player_id', true) == null || $this->input->get('player_id', true) < 0)
            {
                $response['status'] = 'Failed';
                $response['message'] = 'Failed To Fetch Player Data.';

                $this->response($response, 404);
            }
            else
            {
                $query = $this->db->get_where('accounts', array('player_id' => $this->input->get('player_id')))->result();
                if ($query)
                {
                    $response['status'] = 'Success';
                    $this->response($query, 200);
                }
                else
                {
                    $response['status'] = 'Failed';
                    $response['message'] = 'Failed To Fetch Player Data.';
    
                    $this->response($response, 404);
                }
            }
        }
    }
    
    function byusername_get()
    {
        $response = array();
        if (empty($this->input->get('username', true)))
        {
            $query = $this->db->order_by('login', 'desc')->get('accounts')->result();
            $this->response($query, 200);
        }
        else
        {
            if ($this->input->get('username', true) == '' || $this->input->get('username', true) == null)
            {
                $response['status'] = 'Failed';
                $response['message'] = 'Failed To Fetch Player Data.';
    
                $this->response($response, 404);
            }
            else
            {
                $query = $this->db->get_where('accounts', array('login' => $this->input->get('username')))->result();
                if ($query)
                {
                    $response['status'] = 'Success';
                    $this->response($query, 200);
                }
                else
                {
                    $response['status'] = 'Failed';
                    $response['message'] = 'Failed To Fetch Player Data.';
    
                    $this->response($response, 404);
                }
            }
        }

    }

    function getip_get()
    {
        // if (!empty($this->input->get('token', true)))
        // {
        //     if ($this->input->get('token', true) == 'darkblowpbreborn_2021')
        //     {
        //         $this->db->insert('launcher_loghistory', array(
        //             'ip_address' => $this->input->ip_address(),
        //             'date_created' => date('d-m-Y H:i:s')
        //         ));
        //     }
        // }
        $this->response(["status" => 'Success', "ip_address" => $this->input->ip_address()], 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>