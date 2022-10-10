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
        $query = $this->db->get(Darkblowdatabase::launcher_launcherkey)->row();
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
            $query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $player_id))->row();
            if ($query) {
                $update = $this->db->where('player_id', $query->player_id)->update(Darkblowdatabase::accounts, array('token' => $token));
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
            $query = $this->db->get_where(Darkblowdatabase::accounts, array(
                'login' => $username,
                'password' => $password
            ));
            $update = $this->db->where('player_id', $query->player_id)->update(Darkblowdatabase::accounts, array('token' => $token));
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

    function validatekey_post()
    {
        $response = array();
        $data = array(
            'key' => $this->input->post('launcher_key', true)
        );

        if ($data['key'] == null) {
            $response['status'] = 'Failed';
            $this->response($response, 200);
        } else {
            $query = $this->db->get_where(Darkblowdatabase::launcher_launcherkey, array('key' => $data['key']))->row();
            if ($query) {
                if ($query->status == 0) {
                    $response['status'] = 'Failed';
                    $this->response($response, 200);
                } else {
                    $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::launcher_launcherkey, array('status' => '0'));
                    if ($update) {
                        $response['status'] = 'Success';
                        $this->response($response, 200);
                    } else {
                        $response['status'] = 'Failed';
                        $this->response($response, 200);
                    }
                }
            } else {
                $response['status'] = 'Failed';
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

        $insert = $this->db->insert(Darkblowdatabase::launcher_launcherkey, array(
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

    function fetchuserdata_post()
    {
        $response = array();

        $data = array(
            'ip_address' => $this->input->post('ip_address', true),
            'hwid' => $this->input->post('hwid', true),
            'current_patch_version' => $this->input->post('current_patch_version', true),
            'current_launcher_version' => $this->input->post('current_launcher_version', true),
            'date_created' => time(),
            'date_updated' => '0'
        );

        $query = $this->db->get_where(Darkblowdatabase::launcher_version_control, array('hwid' => $data['hwid']))->row();
        if ($query) {
            $insert = $this->db->insert(Darkblowdatabase::launcher_version_control, $data);
            if ($insert) {
                $response['status'] = 'Success';
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $this->response($response, 200);
            }
        } else {
            $update = $this->db->where('hwid', $data['hwid'])->update(Darkblowdatabase::launcher_version_control, array(
                'ip_address' => $data['ip_address'],
                'current_patch_version' => $data['current_patch_version'],
                'current_launcher_version' => $data['current_launcher_version'],
                'date_updated' => time()
            ));
            if ($update) {
                $response['status'] = 'Success';
                $this->response($response, 200);
            } else {
                $response['status'] = 'Failed';
                $this->response($response, 200);
            }
        }
    }

    function register_post()
    {
        $response = array();

        $data = array(
            'login' => $this->input->post('login', true),
            'email' => $this->input->post('email', true),
            'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true)),
            'hint_question' => $this->input->post('hint_question', true),
            'hint_answer' => $this->input->post('hint_answer', true),
        );

        // State 1 => Find Same Username Value
        $query = $this->db->get_where(Darkblowdatabase::accounts, array('login' => $data['login']))->row();
        if ($query) {
            $response['status'] = 'error';
            $response['message'] = 'Username Already Used.';

            $this->response($response, 200);
        }

        // State 2 => Find Same Email Value
        $query2 = $this->db->get_where(Darkblowdatabase::accounts, array('email' => $data['email']))->row();
        if ($query2) {
            $response['status'] = 'error';
            $response['message'] = 'Email Already Used.';

            $this->response($response, 200);
        }

        // State 3 => Register Account
        $query3 = $this->db->insert(Darkblowdatabase::accounts, $data);
        if ($query3) {
            $response['status'] = 'success';
            $response['message'] = 'Successfully Registered.';

            $this->response($response, 200);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Failed To Register Your Account. Please Register Through Website.';

            $this->response($response, 200);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
