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
        // $this->darkblowlicense->DarkblowPBLicense();
    }

    function sendcommand_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[2]|in_list[1,2,3,4,5,6,7,8,9,10,11,12,13]',
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
                'command_type' => $this->input->post('command_type', true),
            );

            switch ($data['opcode']) {
                case Darkblowopcodes::START_SERVER[0]:
                case Darkblowopcodes::SHUTDOWN_SERVER[0]: {
                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_MANAGEMENT_PORT, $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            if ($data['opcode'] == Darkblowopcodes::START_SERVER[0]) $response['message'] = 'Successfully Start Server.';
                            else if ($data['opcode'] == Darkblowopcodes::SHUTDOWN_SERVER[0]) $response['message'] = 'Successfully Shutdown Server.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            if ($data['opcode'] == Darkblowopcodes::START_SERVER[0]) $response['message'] = 'Failed To Start Server.';
                            else if ($data['opcode'] == Darkblowopcodes::SHUTDOWN_SERVER[0]) $response['message'] = 'Failed To Shutdown Server.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case Darkblowopcodes::RELOAD_EVENTS[0]:
                case Darkblowopcodes::KICK_ALL_PLAYERS[0]:
                case Darkblowopcodes::REFILL_SHOP[0]: {
                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            if ($data['opcode'] == Darkblowopcodes::RELOAD_EVENTS[0]) $response['message'] = 'Successfully Reload Events.';
                            else if ($data['opcode'] == Darkblowopcodes::KICK_ALL_PLAYERS[0]) $response['message'] = 'Successfully Kick All Players.';
                            else if ($data['opcode'] == Darkblowopcodes::REFILL_SHOP[0]) $response['message'] = 'Successfully Refill Shop.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            if ($data['opcode'] == Darkblowopcodes::RELOAD_EVENTS[0]) $response['message'] = 'Failed To Reload Events.';
                            else if ($data['opcode'] == Darkblowopcodes::KICK_ALL_PLAYERS[0]) $response['message'] = 'Failed To Kick All Players.';
                            else if ($data['opcode'] == Darkblowopcodes::REFILL_SHOP[0]) $response['message'] = 'Failed To Refill Shop.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case Darkblowopcodes::SEND_ANNOUNCEMENT[0]: {
                        $data['message'] = $this->input->post('message', true);
                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
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
                        break;
                    }
                case Darkblowopcodes::BANNED_PLAYER[0]: {
                        $data['player_id'] = $this->input->post('player_id', true);

                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
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
                        break;
                    }
                case Darkblowopcodes::ATTENDANCE[0]: {
                        $data['event_id'] = $this->input->post('event_id', true);
                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
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
                        break;
                    }
                case Darkblowopcodes::REDEEM_CODE[0]: {
                        $data['player_id'] = (int)$this->session->userdata('uid');
                        $data['code'] = $this->input->post('code', true);
                        $query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $data['player_id']))->row();
                        if ($query) {
                            $query2 = $this->db->get_where(Darkblowdatabase::item_code, array('item_code' => $data['code']))->row();
                            if ($query2) {
                                if (time() > $query2->valid_date) {
                                    $response['response'] = 'error';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Code Already Expired.';

                                    $this->response($response, 200);
                                } else if ($query2->qty < 1) {
                                    $response['response'] = 'error';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Reward Out Of Stock.';

                                    $this->response($response, 200);
                                } else {
                                    $query3 = $this->db->get_where(Darkblowdatabase::check_user_itemcode, array(
                                        'uid' => $data['player_id'],
                                        'item_code' => $data['code']
                                    ))->row();
                                    if ($query3) {
                                        $response['response'] = 'error';
                                        $response['token'] = $this->security->get_csrf_hash();
                                        $response['message'] = 'Code Already Used.';

                                        $this->response($response, 200);
                                    } else {
                                        unset($data['code']);
                                        $data['item_id'] = (int)$query2->item_id;
                                        $data['category'] = (int)$this->darkblowlib->GetItemCategory($query2->item_id);
                                        $data['item_name'] = $this->darkblowlib->GetItemName($query2->item_id);
                                        $data['count'] = (int)$query2->item_count;
                                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
                                            $this->db->insert(Darkblowdatabase::check_user_itemcode, array(
                                                'uid' => $data['player_id'],
                                                'item_code' => $this->input->post('code', true),
                                                'username' => $this->session->userdata('login'),
                                                'date_redeemed' => date('d-m-Y H:i:s')
                                            ));
                                            $this->db->where('id', $query2->id)->update(Darkblowdatabase::item_code, array(
                                                'qty' => ($query2->qty - 1)
                                            ));
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
                                }
                            } else {
                                $response['response'] = 'error';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Invalid Code.';

                                $this->response($response, 200);
                            }
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Please Login First Before Redeem The Code.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case Darkblowopcodes::SEND_CASH_ID[0]: {
                        $data['player_id'] = $this->input->post('player_id', true);
                        $data['cash_amount'] = $this->input->post('cash_amount', true);
                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
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
                        break;
                    }
                case Darkblowopcodes::SEND_POINT_ID[0]: {
                        $data['player_id'] = $this->input->post('player_id', true);
                        $data['point_amount'] = $this->input->post('point_amount', true);
                        if ($this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) == 'Success') {
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
                        break;
                    }
                case Darkblowopcodes::GAME_SERVER_GET_MEMORY_USAGE[0]: {
                        $response['response'] = 'success';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = $this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data);

                        $this->response($response, 200);
                        break;
                    }
                case Darkblowopcodes::GAME_SERVER_GET_TOTAL_SOCKET_COUNT[0]: {

                        // Option Method 1

                        // if (empty($this->session->userdata('total_socket'))) {
                        //     $totalsocket = $this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data);

                        //     $this->session->set_userdata('total_socket', $totalsocket);

                        //     $response['response'] = 'error';
                        //     $response['token'] = $this->security->get_csrf_hash();
                        //     $response['message'] = $this->session->userdata('total_socket');
                        //     $response['isflooding'] = false;

                        //     $this->response($response, 200);
                        // } else {
                        //     $totalsocket = $this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data);

                        //     $foreign_activity_rules = 20;

                        //     if ($totalsocket != 'socket connect failed.') $totalsocket = (int)$totalsocket;
                        //     else $totalsocket = $this->session->userdata('total_socket');

                        //     if ($totalsocket > $this->session->userdata('total_socket')) {
                        //         $newtotalsocket = $totalsocket - $this->session->userdata('total_socket');

                        //         if ($newtotalsocket > $foreign_activity_rules) {
                        //             $response['response'] = 'error';
                        //             $response['token'] = $this->security->get_csrf_hash();
                        //             $response['message'] = $totalsocket;
                        //             $response['isflooding'] = true;

                        //             $this->session->set_userdata('total_socket', $totalsocket);

                        //             $this->response($response, 200);
                        //         } else {
                        //             $response['response'] = 'error';
                        //             $response['token'] = $this->security->get_csrf_hash();
                        //             $response['message'] = $this->session->userdata('total_socket');
                        //             $response['isflooding'] = false;

                        //             $this->response($response, 200);
                        //         }
                        //     } else {
                        //         $this->session->set_userdata('total_socket', $totalsocket);

                        //         $response['response'] = 'success';
                        //         $response['token'] = $this->security->get_csrf_hash();
                        //         $response['message'] = $this->session->userdata('total_socket');
                        //         $response['isflooding'] = false;

                        //         $this->response($response, 200);
                        //     }
                        // }

                        // Option Method 2

                        $totalsocket = $this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) != 'socket connect failed.' ? $this->darkblowsocketcommand->CreateTCPConnection(Darkblownetwork::HOST, Darkblownetwork::API_GAME_PORT, $data) : 0;
                        $query = $this->db->get_where(Darkblowdatabase::accounts, array('online' => 't'))->num_rows();

                        $foreign_activity_rules = 20;

                        if (($totalsocket - $query) > $foreign_activity_rules) {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = $totalsocket;
                            $response['isflooding'] = true;

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = $totalsocket;
                            $response['isflooding'] = false;

                            $this->response($response, 200);
                        }

                        break;
                    }
                default: {
                        $response['response'] = 'error';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Invalid Opcode.';

                        $this->response($response, 200);
                        break;
                    }
            }
        } else {
            $response['response'] = 'error';
            $response['message'] = validation_errors('', '');

            $this->response($response, 200);
        }
    }

    function getservercondition_get()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();
            $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
            if ($query) {
                if ($query->server_condition == 0) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'OFFLINE';

                    $this->response($response, 200);
                } else if ($query->server_condition == 1) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'ONLINE';

                    $this->response($response, 200);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'OFFLINE';

                    $this->response($response, 200);
                }
            } else {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'INVALID';

                $this->response($response, 200);
            }
        } else return;
    }

    function serverstatus_get()
    {
        $response = array();

        if ($this->darkblowsocketcommand->ServerCheck(Darkblownetwork::DEFAULT_GAME_PORT)) {
            $response['response'] = 'success';
            $response['message'] = 'Server Active.';

            $this->response($response, 200);
        } else {
            if ($this->darkblowsocketcommand->ServerCheck(Darkblownetwork::API_MANAGEMENT_PORT)) {
                $response['response'] = 'error';
                $response['message'] = 'Server Passive.';

                $this->response($response, 200);
            } else {
                $response['response'] = 'fatal_error';
                $response['message'] = 'Failed To Connect To Server Management System.';

                $this->response($response, 200);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
