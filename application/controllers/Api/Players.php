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

    function getversioncontrol_get($current_patch_version, $current_launcher_version)
    {
        $response = array();

        $data = array(
            'current_patch_version' => $current_patch_version,
            'current_launcher_version' => $current_launcher_version
        );

        $query = $this->db->get_where('launcher_version_control', array('ip_address' => $this->input->ip_address()))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update('launcher_version_control', $data);
            if ($update) {
                $response['status'] = 'Success';
                $response['message'] = 'Successfully update launcher version control.';
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $response['message'] = 'Failed to update launcher version control.';
                $this->response($response, 200);
            }
        } else {
            $insert = $this->db->insert('launcher_version_control', array(
                'ip_address' => $this->input->ip_address(),
                'current_patch_version' => $data['current_patch_version'],
                'current_launcher_version' => $data['current_launcher_version'],
                'date_created' => date('d/m/Y H:i:s'),
                'date_updated' => '0'
            ));
            if ($insert) {
                $response['status'] = 'Success';
                $response['message'] = 'Successfully update launcher version control.';
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $response['message'] = 'Failed to update launcher version control.';
                $this->response($response, 200);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
