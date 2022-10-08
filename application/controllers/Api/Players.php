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
    }

    function index_get($player_id = null)
    {
        $response = array();

        if ($player_id == null) {
            $query = $this->db->get(Darkblowdatabase::accounts)->result();
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
            $query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $player_id))->result();
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
            $query = $this->db->get_where(Darkblowdatabase::accounts, array(
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

    function getonline_get()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();

            $response['response'] = $this->db->get_where(Darkblowdatabase::accounts, array('access_level <' => '3', 'email !=' => 'empty@empty.empty', 'online' => 't'))->num_rows();
            $this->darkblowmessage->AjaxFlashData($response);
        } else return;
    }

    function getregistered_get()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();

            $response['response'] = $this->db->get_where(Darkblowdatabase::accounts, array('access_level <' => '3', 'email != ' => 'empty@empty.empty'))->num_rows();
            $this->darkblowmessage->AjaxFlashData($response);
        } else return;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
