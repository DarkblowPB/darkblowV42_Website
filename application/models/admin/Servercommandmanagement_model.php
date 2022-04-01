<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Servercommandmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function GetServerState()
    {
        if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), '39190') && $this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), '39191'))
            return TRUE;
        else return FALSE;
    }

    function GetAllPlayers()
    {
        return $this->db->where(array('access_level' => '0', 'email != ' => 'empty@empty.empty'))->order_by('player_id', 'asc')->get('accounts')->result_array();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "";
    }

    function SendPacket()
    {
        $response = array();

        $data = array(
            'command_type' => $this->encryption->encrypt($this->input->post('command_type', true))
        );

        switch ($this->encryption->decrypt($data['command_type'])) {
            case 'SendAnnouncement': {
                    if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'))) {
                        if ($this->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'), 'SendAnnouncement>' . $this->input->post('message', true)) == 'Success') {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Send Announcement.';

                            echo json_encode($response);
                            break;
                        } else {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Send Announcement.';

                            echo json_encode($response);
                        }
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Server Is Not Started. Failed Send Request.';

                        echo json_encode($response);
                    }
                    break;
                }

            case 'BannedPlayers': {
                    if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'))) {
                        if ($this->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'), 'BannedPlayers>' . $this->input->post('player_id', true)) == 'Success') {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Banned Players.';

                            echo json_encode($response);
                        } else {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Banned Players.';

                            echo json_encode($response);
                        }
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Server Is Not Started. Failed Send Request.';

                        echo json_encode($response);
                    }
                    break;
                }

            case 'KickAllPlayers': {
                    if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'))) {
                        if ($this->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'), 'KickAllPlayers') == 'Success') {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Kick All Players.';

                            echo json_encode($response);
                        } else {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Kick All Players.';

                            echo json_encode($response);
                        }
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Server Is Not Started. Failed Send Request.';

                        echo json_encode($response);
                    }
                    break;
                }

            case 'StartServer': {
                    if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_2'))) {
                        if ($this->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_2'), 'Start') == 'Success') {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Start Server.';

                            echo json_encode($response);
                        } else {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Start Server.';

                            echo json_encode($response);
                        }
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Server Command Management Is Not Started. Failed Send Request.';

                        echo json_encode($response);
                    }
                    break;
                }

            case 'StopServer': {
                    if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_2'))) {
                        if ($this->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_2'), 'Close') == 'Success') {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Stop Server.';

                            echo json_encode($response);
                        } else {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Stop Server.';

                            echo json_encode($response);
                        }
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Server Command Management Is Not Started. Failed Send Request.';

                        echo json_encode($response);
                    }
                    break;
                }

            default:
                break;
        }
    }

    function SendSocket($ip_address, $port, $buffer)
    {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket) {
            $connect = socket_connect($socket, $ip_address, $port);
            if ($connect) {
                $write = socket_write($socket, $buffer, strlen($buffer));
                if ($write) {
                    $read = socket_read($socket, 2048);
                    return $read;
                } else return "Failed";
            } else return "Failed";
        } else return "Failed";
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
