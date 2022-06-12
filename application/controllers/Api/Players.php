<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Players extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
    }

    function index_get($player_id = null)
    {
        $response = array();

        if ($player_id == null) {
            $query = $this->db->get('accounts')->result();
            if ($query) {
                $response['status'] = 'Success';
                $response['data'] = $query;
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $response['data'] = '';
                $this->response($response, 200);
            }
        } else {
            $query = $this->db->get_where('accounts', array('player_id' => $player_id))->result();
            if ($query) {
                $response['status'] = 'Success';
                $response['data'] = $query;
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $response['data'] = '';
                $this->response($response, 200);
            }
        }
    }

    function byusername_get($username = null)
    {
        $response = array();

        if ($username == null) {
            $response['status'] = 'Failed';
            $response['data'] = '';
            $this->response($response, 200);
        } else {
            $query = $this->db->get_where('accounts', array(
                'login' => $username
            ))->result();
            if ($query) {
                $response['status'] = 'Success';
                $response['data'] = $query;
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $response['data'] = '';
                $this->response($response, 200);
            }
        }
    }

    function getip_get()
    {
        $response = array();

        $response['status'] = 'Success';
        $response['ip_address'] = $this->input->ip_address();
        $this->response($response, 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
