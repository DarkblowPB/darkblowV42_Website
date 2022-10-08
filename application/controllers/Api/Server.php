<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Server extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('socketcommand');
    }

    function sendcommand_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[2]|in_list[1,2,3,4,5,6,7,8,9,10,11]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.',
                'in_list' => 'Invalid %s'
            )
        );
        $this->form_validation->set_rules(
            'secret_token',
            'Secret Token',
            'required|alpha_numeric|max_length[64]',
            array(
                'required' => '%s Cannot Be Empty.',
                'alpha_numeric' => '%s Only Can Using Alphabetic And Numeric Combination.',
                'max_length' => '%s Only Can Accept 64 Combination Characters.'
            )
        );
        $this->form_validation->set_rules(
            'secret_keys',
            'Secret Keys',
            'required|in_list[darkblowpb,darkblowpb_2021,darkblowpbreborn,darkblowpbreborn_2021]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'command_type',
            'Command Type',
            'required',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
                'command_type' => $this->input->post('command_type', true)
            );

            $host = array(
                'pbserver_auth' => $this->socketcommand->LoadConfig('pbserver_auth_host'),
                'pbserver_battle' => $this->socketcommand->LoadConfig('pbserver_battle_host'),
                'pbserver_game' => $this->socketcommand->LoadConfig('pbserver_game_host'),
                'pbserver_management' => $this->socketcommand->LoadConfig('pbserver_management_host'),
            );

            $port = array(
                'pbserver_auth' => $this->socketcommand->LoadConfig('pbserver_auth_port'),
                'pbserver_battle' => $this->socketcommand->LoadConfig('pbserver_battle_port'),
                'pbserver_game' => $this->socketcommand->LoadConfig('pbserver_game_port'),
                'pbserver_management' => $this->socketcommand->LoadConfig('pbserver_management_port'),
            );

            switch ($data['opcode']) {
                case '1': // Start Server
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_management'], $port['pbserver_management'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Start Server.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Start Server.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case '2': // Shutdown Server
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_management'], $port['pbserver_management'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Shutdown Server.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Shutdown Server.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case '3': // Reload Events
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Reload Events.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Reload Events.';

                            $this->response($response, 200);
                        }
                    }
                case '4': // Send Announcement
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Send Announcement.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Send Announcement.';

                            $this->response($response, 200);
                        }
                    }
                case '5': // Kick All Players
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Kick All Players.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Kick All Players.';

                            $this->response($response, 200);
                        }
                    }
                case '6': // Banned Player
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Banned Player.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Banned Player.';

                            $this->response($response, 200);
                        }
                    }
                case '7': // Attendance
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Attendance.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Attendance.';

                            $this->response($response, 200);
                        }
                    }
                case '8': // Redeem Code
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Redeem Code.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Redeem Code.';

                            $this->response($response, 200);
                        }
                    }
                case '9': // Send Cash ID
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Send Cash.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Send Cash.';

                            $this->response($response, 200);
                        }
                    }
                case '10': // Refill Shop
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Refill Shop.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Refill Shop.';

                            $this->response($response, 200);
                        }
                    }
                case '11': // Send Point ID
                    {
                        if ($this->socketcommand->CreateConnection($host['pbserver_game'], $port['pbserver_game'], $data) == 'success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Send Point.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Send Point.';

                            $this->response($response, 200);
                        }
                    }

                default: {
                        $response['response'] = 'error';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Invalid Opcode.';

                        $this->response($response, 200);
                    }
            }
        }
    }

    function getservercondition_get()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();
            $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
            if ($query) {
                if ($query->server_condition == 0) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'OFFLINE';
                    $this->darkblowmessage->AjaxFlashData($response);
                } else if ($query->server_condition == 1) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'ONLINE';
                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'OFFLINE';
                    $this->darkblowmessage->AjaxFlashData($response);
                }
            } else {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'INVALID';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else return;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
