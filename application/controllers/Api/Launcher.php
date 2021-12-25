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

    function version_get()
    {
        if (!empty($this->input->get('type', true)))
        {
            switch ($this->input->get('type', true))
            {
                case 'launcher':
                    {
                        $launcherversion = @file_get_contents('./pblauncher/version/launcher_version.ini');
                        $this->response(["status" => 'Success', 'pblauncher_version' => $launcherversion], 200);
                        break;
                    }

                case 'patch':
                    {
                        $patchversion = @file_get_contents('./pblauncher/version/patch_version.ini');
                        $this->response(["status" => 'Success', 'patch_version' => $patchversion], 200);
                        break;
                    }
                
                default:
                    {
                        break;
                    }
            }
        }
    }

    function serverstatus_get()
    {
        if ($this->servercommand->GetServerState()) $this->response(["status" => 'Success', "server_status" => 'ONLINE'], 200);
        else $this->response(["status" => 'Success', "server_status" => 'OFFLINE'], 200);
    }

    function validate_get()
    {
        $response = array();

        $data = array(
            'username' => $this->input->get('login'),
            'password' => $this->input->get('password')
        );
        
        $query = $this->db->get_where('accounts', array(
            'login' => $data['username'],
            'password' => $data['password']
        ))->row();

        if ($query)
        {
            $response['status'] = 'Success';
            $response['login'] = $query->login;
            $response['token'] = $query->token;
            $this->response($response, 200);
        }
        else
        {
            $response['status'] = 'Failed';
            $this->response($response, 200);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>