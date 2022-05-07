<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Servercommand extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('servercommand_library');
    }

    function send_post()
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

            switch ($data['command_type']) {
                case 'Start Server': {
                        if ($this->servercommand_library->SendTcpCommand('third', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Start Server.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed Start Server.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case 'Shutdown Server': {
                        if ($this->servercommand_library->SendTcpCommand('third', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Shutdown Server.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed Shutdown Server.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case 'Reload Events': {
                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Reload Events.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed Reload Events.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case 'Send Announcement': {
                        $data['message'] = $this->input->post('message', true);
                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Start Server.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed Start Server.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case 'Kick All Players': {
                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
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
                        break;
                    }
                case 'Banned Player': {
                        $data['player_id'] = $this->input->post('player_id', true);
                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Banned Players.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Banned Players.';

                            $this->response($response, 200);
                        }
                        break;
                    }
                case 'Attendance': {
                        $data['event_id'] = $this->input->post('event_id', true);

                        // Get Accounts
                        $query = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
                        if ($query) {
                            // Get Event Data
                            $query2 = $this->db->get_where('events_attendance', array('id' => $data['event_id'], 'date' => date('d-m-Y')))->row();
                            if ($query2) {
                                $query3 = $this->db->get_where('check_user_attendance', array('event_id' => $query2->id, 'player_id' => $query->player_id, 'date_claimed' => date('d-m-Y')))->row();
                                if ($query3) {
                                    $response['response'] = 'error';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'You Already Check In Today.';

                                    $this->response($response, 200);
                                } else {
                                    $data['player_id'] = $query->player_id;
                                    $data['item_id'] = $query2->item_id;
                                    $data['category'] = $this->lib->GetItemCategory($query2->item_id);
                                    $data['item_name'] = $query2->item_name;
                                    $data['count'] = $query2->item_count;
                                    if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                                        $insert = $this->db->insert('check_user_attendance', array(
                                            'event_id' => $query2->id,
                                            'player_id' => $query->player_id,
                                            'item_reward' => $query2->item_id,
                                            'item_count' => $query2->item_count,
                                            'date_claimed' => $query2->date,
                                        ));
                                        $update = $this->db->where('id', $query->id)->update('events_attendance', array('total_claim' => ($query->total_claim + 1)));
                                        if ($insert && $update) {
                                            $response['response'] = 'success';
                                            $response['token'] = $this->security->get_csrf_hash();
                                            $response['message'] = 'Successfully Attendance. Please Check Your Inventory.';

                                            $this->response($response, 200);
                                        } else {
                                            $response['response'] = 'success';
                                            $response['token'] = $this->security->get_csrf_hash();
                                            $response['message'] = 'Item Has Been Sended To Your Inventory. But Logging System Failed.';

                                            $this->response($response, 200);
                                        }
                                    } else {
                                        $response['response'] = 'error';
                                        $response['token'] = $this->security->get_csrf_hash();
                                        $response['message'] = 'Failed To Attendance.';

                                        $this->response($response, 200);
                                    }
                                }
                            } else {
                                $response['response'] = 'error';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Invalid Attendance Data.';

                                $this->response($response, 200);
                            }
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Get Your Account Data.';

                            $this->response($response, 200);
                        }
                        break;
                    }

                case 'Redeem Code': {
                        $data['player_id'] = $this->input->post('player_id', true);
                        $data['code'] = $this->input->post('code', true);

                        $query = $this->db->get_where('accounts', array('palyer_id' => $data['player_id']))->row();
                        if ($query) {
                            $query2 = $this->db->get_where('item_code', array('item_code' => $data['code']))->row();
                            if ($query2) {
                                $dateNow = time();
                                $totalQty = $query2->qty - 1;
                                if ($dateNow < $query2->valid_date) {
                                    $query3 = $this->db->get_where('check_user_itemcode', array('uid' => $query->player_id, 'item_code' => $query2->item_code))->row();
                                    if ($query3) {
                                        $response['response'] = 'error';
                                        $response['token'] = $this->security->get_csrf_hash();
                                        $response['message'] = 'Code Already Used.';

                                        $this->response($response, 200);
                                    } else {
                                        if ($totalQty <= 0) {
                                            $response['response'] = 'error';
                                            $response['token'] = $this->security->get_csrf_hash();
                                            $response['message'] = 'Reward Out Of Stock.';

                                            $this->response($response, 200);
                                        } else {
                                            $data['item_id'] = $query2->item_id;
                                            $data['category'] = $this->lib->GetItemCategory($query2->item_id);
                                            $data['item_name'] = $this->lib->GetItemName($query2->item_id) . ' - Redeem Code';
                                            $data['count'] = $query2->item_count;

                                            if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                                                $response['response'] = 'success';
                                                $response['token'] = $this->security->get_csrf_hash();
                                                $response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->lib->GetItemName($query2->item_id) . '.';

                                                $this->response($response, 200);
                                            } else {
                                                $response['response'] = 'error';
                                                $response['token'] = $this->security->get_csrf_hash();
                                                $response['message'] = 'Failed To Redeem The Code.';

                                                $this->response($response, 200);
                                            }
                                        }
                                    }
                                } else {
                                    $response['response'] = 'error';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Code Already Expired.';

                                    $this->response($response, 200);
                                }
                            } else {
                                $response['response'] = 'error';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Invalid Redeem Code.';

                                $this->response($response, 200);
                            }
                        }
                        break;
                    }

                case "Send Cash ID": {
                        $data['player_id'] = $this->input->post('player_id', true);
                        $data['count'] = $this->input->post('cash_amount', true);

                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
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

                case "Refill Shop": {
                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Refill Shop.';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['csrf_token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Refill Shop.';

                            $this->response($response, 200);
                        }
                        break;
                    }

                case "Send Point ID": {
                        $data['player_id'] = $this->input->post('player_id', true);
                        $data['count'] = $this->input->post('point_amount', true);

                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
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

                default:
                    break;
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function startserver_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
            );

            if ($this->servercommand_library->CheckOpenPort('third')) {
                if ($this->input->post('command_type', true) == 'Start Server') {
                    $data['command_type'] = 'Start Server';

                    if ($this->servercommand_library->SendTcpCommand('third', $data) == 'Success') {
                        $response['status'] = 'success';
                        $response['csrf_token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Start Server.';

                        $this->response($response, 200);
                    } else {
                        $response['status'] = 'error';
                        $response['csrf_token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed Start Server.';

                        $this->response($response, 200);
                    }
                } else {
                    $response['status'] = 'error';
                    $response['csrf_token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Invalid Command Type.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['csrf_token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To The Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['csrf_token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function shutdownserver_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
            );

            if ($this->servercommand_library->CheckOpenPort('third')) {
                if ($this->input->post('command_type', true) == 'Shutdown Server') {
                    $data['command_type'] = 'Shutdown Server';

                    if ($this->servercommand_library->SendTcpCommand('third', $data) == 'Success') {
                        $response['status'] = 'success';
                        $response['csrf_token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Shutdown Server.';

                        $this->response($response, 200);
                    } else {
                        $response['status'] = 'error';
                        $response['csrf_token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed Shutdown Server.';

                        $this->response($response, 200);
                    }
                } else {
                    $response['status'] = 'error';
                    $response['csrf_token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Invalid Command Type.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['csrf_token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To The Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['csrf_token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function kickallplayers_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
            );

            if ($this->servercommand_library->CheckOpenPort('primary')) {
                $data['command_type'] = 'Kick All Players';
                if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                    $response['status'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Kick All Players.';

                    $this->response($response, 200);
                } else {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Kick All Players.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function reloadevents_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
            );

            if ($this->servercommand_library->CheckOpenPort('primary')) {
                $data['command_type'] = 'Reload Events';
                if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                    $response['status'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Reload Events.';

                    $this->response($response, 200);
                } else {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed Reload Events.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function sendannouncement_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
            );

            if ($this->servercommand_library->CheckOpenPort('primary')) {
                $data['command_type'] = 'Send Announcement';
                $data['message'] = $this->input->post('message', true);
                if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                    $response['status'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Send Announcement.';

                    $this->response($response, 200);
                } else {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed Send Announcement.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function bannedplayer_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
            );

            if ($this->servercommand_library->CheckOpenPort('primary')) {
                $data['command_type'] = 'Banned Player';
                $data['player_id'] = $this->input->post('player_id', true);
                if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                    $response['status'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Banned Player.';

                    $this->response($response, 200);
                } else {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed Banned Player.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function attendance_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true)
            );

            $data2 = array(
                'event_id' => $this->input->post('event_id', true)
            );

            $query = $this->db->get_where('events_attendance', array('id' => $data2['event_id'], 'date' => date('d-m-Y')))->row();
            if ($query) {
                $query2 = $this->db->get_where('check_user_attendance', array('player_id' => $this->session->userdata('uid'), 'date_claimed' => date('d-m-Y'), 'event_id' => $query->id))->row();
                if ($query2) {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'You Already Attendance Today';

                    $this->response($response, 200);
                } else {
                    if ($this->servercommand_library->CheckOpenPort('primary')) {
                        $data['command_type'] = "Attendance";
                        $data['player_id'] = $this->session->userdata('uid');
                        $data['item_id'] = $query->item_id;
                        $data['category'] = $this->lib->GetItemCategory($query->item_id);
                        $data['item_name'] = $query->item_name;
                        $data['count'] = $query->item_count;
                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                            $insert = $this->db->insert('check_user_attendance', array(
                                'player_id' => $this->session->userdata('uid'),
                                'item_reward' => $query->item_id,
                                'item_count' => $query->item_count,
                                'date_claimed' => $query->date,
                                'event_id' => $query->id
                            ));
                            $update = $this->db->where('id', $query->id)->update('events_attendance', array('total_claim' => ($query->total_claim + 1)));
                            if ($insert && $update) {
                                $response['status'] = 'success';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Successfully Attendance. Please Check Your Inventory.';

                                $this->response($response, 200);
                            } else {
                                $response['status'] = 'success';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Item Has Been Sended To Your Inventory. But Logging System Failed.';

                                $this->response($response, 200);
                            }
                        }
                    } else {
                        if ($this->servercommand_library->CheckOpenPort('secondary')) {
                            $data['command_type'] = "Attendance";
                            $data['player_id'] = $this->session->userdata('uid');
                            $data['item_id'] = $query->item_id;
                            $data['category'] = $this->lib->GetItemCategory($query->item_id);
                            $data['item_name'] = $query->item_name;
                            $data['count'] = $query->item_count;
                            if ($this->servercommand_library->SendTcpCommand('secondary', $data) == 'Success') {
                                $insert = $this->db->insert('check_user_attendance', array(
                                    'player_id' => $this->session->userdata('uid'),
                                    'item_reward' => $query->item_id,
                                    'item_count' => $query->item_count,
                                    'date_claimed' => $query->date,
                                    'event_id' => $query->id
                                ));
                                $update = $this->db->where('id', $query->id)->update('events_attendance', array('total_claim' => ($query->total_claim + 1)));
                                if ($insert && $update) {
                                    $response['status'] = 'success';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Successfully Attendance. Please Check Your Inventory.';

                                    $this->response($response, 200);
                                } else {
                                    $response['status'] = 'success';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Item Has Been Sended To Your Inventory. But Logging System Failed.';

                                    $this->response($response, 200);
                                }
                            } else {
                                $response['status'] = 'error';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Connection to server canceled.';

                                $this->response($response, 200);
                            }
                        } else {
                            $response['status'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Connection to server canceled.';

                            $this->response($response, 200);
                        }
                    }
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Invalid Event.';

                echo json_encode($response);
            }
        } else {
            $response['status'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function redeemcode_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );

        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
                'player_id' => $this->session->userdata('uid'),
                'code' => $this->input->post('code', true)
            );

            $query = $this->db->get_where('item_code', array('item_code' => $data['code']))->row();
            if ($query) {
                $query2 = $this->db->get_where('check_user_itemcode', array('uid' => $this->session->userdata('uid'), 'item_code' => $query->item_code))->row();
                if ($query2) {
                    $response['response'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'You Already Redeem This Code.';

                    $this->response($response, 200);
                } else {
                    if ($this->servercommand_library->CheckOpenPort('primary')) {
                        $data['command_type'] = 'Redeem Code';
                        $data['redeemcode_type'] = $query->type;
                        if ($query->type == 'Item') {
                            $data['item_id'] = $query->item_id;
                            $data['category'] = $this->lib->GetItemCategory($query->item_id);
                            $data['item_name'] = $query->item_name;
                            $data['count'] = $query->item_count;
                        }
                        if ($query->type == 'Cash') $data['cash'] = $query->cash;

                        if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $insert = $this->db->insert('check_user_itemcode', array(
                                'uid' => $this->session->userdata('uid'),
                                'item_code' => $query->item_code,
                                'date_redeemed' => date('d-m-Y h:i:s')
                            ));
                            if ($insert && $query->type == 'Item') $response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $query->item_name . '.';
                            if ($insert && $query->type == 'Cash') $response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . 'You Received ' . number_format($query->cash, 0, ',', '.') . ' DR-Cash';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Connect To Server. [1]';

                            $this->response($response, 200);
                        }
                    } else if ($this->servercommand_library->CheckOpenPort('secondary')) {
                        $data['command_type'] = 'Redeem Code';
                        $data['redeemcode_type'] = $query->type;
                        $data['item_id'] = $query->item_id;
                        $data['category'] = $this->lib->GetItemCategory($query->item_id);
                        $data['item_name'] = $query->item_name;
                        $data['count'] = $query->item_count;

                        if ($this->servercommand_library->SendTcpCommand('secondary', $data) == 'Success') {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $insert = $this->db->insert('check_user_itemcode', array(
                                'uid' => $this->session->userdata('uid'),
                                'item_code' => $query->item_code,
                                'date_redeemed' => date('d-m-Y h:i:s')
                            ));
                            if ($insert && $query->type == 'Item') $response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $query->item_name . '.';
                            if ($insert && $query->type == 'Cash') $response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . 'You Received ' . number_format($query->cash, 0, ',', '.') . ' DR-Cash';

                            $this->response($response, 200);
                        } else {
                            $response['response'] = 'error';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Connect To Server. [2]';

                            $this->response($response, 200);
                        }
                    } else {
                        $response['response'] = 'error';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed To Connect Server.';

                        $this->response($response, 200);
                    }
                }
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Code Doesn\'t Exists.';

                $this->response($response, 200);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    function sendcashid_post()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'Opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
            )
        );
        $this->form_validation->set_rules(
            'secret_token',
            'Secret Token',
            'required|alpha_numeric|max_length[64]',
            array(
                'required' => '%s Cannot Be Empty.',
                'alpha_numeric' => '%s Only Can Using Alphabetic And Numeric Combination.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true),
                'player_id' => $this->input->post('player_id', true),
                'count' => $this->input->post('cash_amount', true)
            );

            if ($this->servercommand_library->CheckOpenPort('primary')) {
                $data['command_type'] = 'Send Cash ID';
                if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                    $response['status'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Send Cash.';

                    $this->response($response, 200);
                } else {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Send Cash.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To Server.';

                $this->response($response, 200);
            }
        } else {
            $response['status'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }

    public function refillshop_post()
    {

        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'opcode',
            'Opcode',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.',
                'max_length' => '%s Invalid Length.'
            )
        );
        $this->form_validation->set_rules(
            'secret_token',
            'Secret Token',
            'required|alpha_numeric|max_length[64]',
            array(
                'required' => '%s Cannot Be Empty.',
                'alpha_numeric' => '%s Only Can Using Alphabetic And Numeric Combination.',
                'max_length' => '%s Invalid Length.'
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
                'required' => '%s Cannot Be Empty.'
            )
        );
        if ($this->form_validation->run()) {
            $data = array(
                'real_ipaddress' => $this->input->ip_address(),
                'opcode' => $this->input->post('opcode', true),
                'secret_token' => $this->input->post('secret_token', true),
                'secret_keys' => $this->input->post('secret_keys', true)
            );
            if ($this->servercommand_library->CheckOpenPort('primary')) {
                $data['command_type'] = 'Refill Shop';
                if ($this->servercommand_library->SendTcpCommand('primary', $data) == 'Success') {
                    $response['status'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Send Cash.';

                    $this->response($response, 200);
                } else {
                    $response['status'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Send Cash.';

                    $this->response($response, 200);
                }
            } else {
                $response['status'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Connect To Server.';

                $this->response($response, 200);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->response($response, 200);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
