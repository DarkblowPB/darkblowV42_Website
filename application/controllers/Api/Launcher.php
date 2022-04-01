<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Launcher extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/servercommandmanagement_model', 'servercommand');
    }

    function getlauncherkey_get()
    {
        $query = $this->db->get('launcher_launcherkey')->row();
        $this->response(["status" => 'Success', 'launcher_key' => $query->key], 200);
    }

    function version_get($type = null)
    {
        if ($type == null) $this->response(['status' => 'error', 'patch_version' => 0], 200);
        else {
            switch ($type) {
                case 'launcher': {
                        $launcherversion = @file_get_contents('./pblauncher/version/launcher_version.ini');
                        $this->response(["status" => 'Success', 'pblauncher_version' => $launcherversion], 200);
                        break;
                    }

                case 'patch': {
                        $patchversion = @file_get_contents('./pblauncher/version/patch_version.ini');
                        $this->response(["status" => 'Success', 'patch_version' => $patchversion], 200);
                        break;
                    }

                default:
                    break;
            }
        }
    }

    function serverstatus_get()
    {
        if ($this->servercommand->GetServerState()) $this->response(["status" => 'Success', "server_status" => 'ONLINE'], 200);
        else $this->response(["status" => 'Success', "server_status" => 'OFFLINE'], 200);
    }

    function updatetoken_get($player_id = null)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $charaLengths = strlen($characters);
        $tokenlengths = 32;
        $token = '';

        for ($i = 0; $i < $tokenlengths; $i++) $token .= $characters[rand(0, $charaLengths - 1)];

        $response = array();
        if ($player_id == null || $token == null) {
            $response['status'] = 'Failed';
            $response['message'] = '';
            $this->response($response, 200);
        } else {
            $query = $this->db->get_where('accounts', array('player_id' => $player_id))->row();
            if ($query) {
                $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('token' => $token));
                if ($update) {
                    $response['status'] = 'Success';
                    $response['message'] = '';
                    $this->response($response, 200);
                } else {
                    $response['status'] = 'Failed';
                    $response['message'] = '';
                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'Failed';
                $response['message'] = '';
                $this->response($response, 200);
            }
        }
    }

    function validate_get($username = null, $password = null)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $charaLengths = strlen($characters);
        $tokenlengths = 32;
        $token = '';

        for ($i = 0; $i < $tokenlengths; $i++) $token .= $characters[rand(0, $charaLengths - 1)];

        $response = array();
        if ($username == null || $password == null) {
            $response['status'] = 'Failed';
            $this->response($response, 200);
        } else {
            $query = $this->db->get_where('accounts', array(
                'login' => $username,
                'password' => $password
            ));
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('token' => $token));
            if ($query && $update) {
                $response['status'] = 'Success';
                $response['login'] = $query->login;
                $response['token'] = $query->token;
            } else {
                $response['status'] = 'Failed';
                $this->response($response, 200);
            }
        }
    }

    function validatekey_get($param = null)
    {
        $response = array();
        $data = array(
            'key' => $param
        );

        if ($param == null) {
            $response['status'] = 'Failed';
            $response['message'] = 'Failed Update Launcher Key';
            $this->response($response, 200);
        } else {
            $query = $this->db->get_where('launcher_launcherkey', array('key' => $data['key']))->row();
            if ($query) {
                if ($query->status == 0) {
                    $response['status'] = 'Failed';
                    $response['message'] = 'Failed Update Launcher Key (0)';
                    $this->response($response, 200);
                } else {
                    $update = $this->db->where('id', $query->id)->update('launcher_launcherkey', array('status' => '0'));
                    if ($update) {
                        $response['status'] = 'Success';
                        $response['message'] = 'Successfully Update Launcher Key';
                        $this->response($response, 200);
                    } else {
                        $response['status'] = 'Failed';
                        $response['message'] = 'Failed Update Launcher Key (1)';
                        $this->response($response, 200);
                    }
                }
            } else {
                $response['status'] = 'Failed';
                $response['message'] = 'Failed Update Launcher Key (2)';
                $this->response($response, 200);
            }
        }
    }

    function generatekey_get()
    {
        $response = array();

        $numeric = '0123456789';
        $num_length = strlen($numeric);
        $key_length = 9;
        $key = '';

        for ($i = 0; $i < $key_length; $i++) $key .= $numeric[rand(0, $num_length) - 1];

        $insert = $this->db->insert('launcher_launcherkey', array(
            'key' => $key,
            'status' => '1'
        ));

        if ($insert) {
            $response['status'] = 'Success';
            $response['launcher_key'] = $key;
            $this->response($response, 200);
        } else {
            $response['status'] = 'Failed';
            $response['launcher_key'] = '0';
            $this->response($response, 200);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
