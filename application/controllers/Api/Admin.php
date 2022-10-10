<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Admin extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->lang->load('message');
    }

    function loginpanel_get()
    {
        $response = array();

        if (empty($this->session->userdata('uid')) && empty($this->session->userdata('adminpanel_login_token'))) {
            $response['response'] = 'false';
            $response['message'] = $this->lang->line('STR_ERROR_62');

            $this->response($response, 200);
        } else {
            $data = array(
                'player_id' => $this->session->userdata('uid'),
                'password' => $this->session->userdata('adminpanel_login_token')
            );

            $query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $data['player_id'], 'password' => $data['password']))->row();
            if ($query) {
                if ($query->access_level < Darkblowaccesslevel::MODERATOR) {
                    $response['response'] = 'false';
                    $response['message'] = $this->lang->line('STR_ERROR_63');

                    $this->response($response, 200);
                } else {
                    $sessionData = array(
                        'admin_uid' => $query->player_id,
                        'admin_name' => $query->player_name,
                        'admin_access_level' => $query->access_level
                    );

                    $this->session->set_userdata($sessionData);

                    $response['response'] = 'true';
                    $response['message'] = $this->lang->line('STR_SUCCESS_19');

                    $this->response($response, 200);
                }
            } else {
                $response['response'] = 'false';
                $response['message'] = $this->lang->line('STR_ERROR_63');

                $this->response($response, 200);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
