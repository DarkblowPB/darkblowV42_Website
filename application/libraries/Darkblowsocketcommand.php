<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowsocketcommand
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->library('darkblownetwork');
    }

    /**
     * Secret Token Generator
     * 
     * Token Data
     * 
     * @author Darkblow Studio
     * @package Site Server Communication
     * @return string
     */
    public function GenerateSecretToken()
    {
        $list = array(
            0 => "cQyIcqRFPdFBrsyasNVxIQ701z2H4LWB6IdqJfTe89igPsXEadkAZTmOfLSw92SX",
            1 => "bESd845Y4pMqKHVEaYOExVSzHEjFpToFiR73bFm0uqokw5TXswzojTHJ5bqYoid9",
            2 => "rfoC54CSDM41pruIkoBmq6iqq3jaPLli0ABPwGhXPjrN9BzzlyiH0zKlhIdF7qUl",
            3 => "lwTDPeT30NFhfGp9EBIXRe3iVkUfpiVnMQ8Dstb0dXkea27aZCTivLJMPcoMgArH",
            4 => "cKCHm9BRxZle0jvyiHqpyxgY031nNmpGmlmCeUH02IcVzjsKxmW921vfeoB9LKqX",
            5 => "4S5gCAp3cY0JvbiUbjZLwQWT1G9LUeB3NpmZkx9CxBuzVPTOYWIwFqjulNFNZMzm",
            6 => "ZHEx0BwaGurTylLVHUx9rYKoU9hI3xuFrYupBWqB8aedppMxXXOl0lVd59MEySDG",
            7 => "zv1eoH4wwAmc7B5jaUzaq5PJk2s9bRzHNiZVu0krBRZz2RmtAR3Isjv3zSUaLaiE",
            8 => "5PNAyPKOYry5nA8ArHj4QuV20WXq0MSfdES9ErUQ2KohrGcu5JG0XeWy9x4Ae2yf",
            9 => "SlnQdopjjY4j5bBMNCuZFac43o9BQY0yYnRNbV2vM6pmWkQOgCQWechW0KPW8HCA"
        );
        $random = rand(0, 9);

        return $list[$random];
    }

    /**
     * Secret Key Generator
     * 
     * Key Data
     * 
     * @author Darkblow Studio
     * @package Site Server Communication
     * @return string
     */
    public function GenerateSecretKeys()
    {
        return "darkblowpbreborn_2021";
    }

    public function ServerCheck($port = '')
    {
        $host = Darkblownetwork::HOST;
        $ports = array(
            Darkblownetwork::DEFAULT_AUTH_PORT,
            Darkblownetwork::DEFAULT_BATTLE_PORT,
            Darkblownetwork::DEFAULT_GAME_PORT,
            Darkblownetwork::API_GAME_PORT,
            Darkblownetwork::API_MANAGEMENT_PORT
        );

        if ($port != '') {
            switch ($port) {
                case Darkblownetwork::DEFAULT_AUTH_PORT: {
                        $connection = @fsockopen($host, $ports[0]);
                        if (is_resource($connection)) {
                            fclose($connection);
                            return TRUE;
                        } else {
                            fclose($connection);
                            return FALSE;
                        }
                        break;
                    }
                case Darkblownetwork::DEFAULT_BATTLE_PORT: {
                        $connection = @fsockopen($host, $ports[1]);
                        if (is_resource($connection)) {
                            fclose($connection);
                            return TRUE;
                        } else {
                            fclose($connection);
                            return FALSE;
                        }
                        break;
                    }
                case Darkblownetwork::DEFAULT_GAME_PORT: {
                        $connection = @fsockopen($host, $ports[2]);
                        if (is_resource($connection)) {
                            fclose($connection);
                            return TRUE;
                        } else {
                            fclose($connection);
                            return FALSE;
                        }
                    }
                case Darkblownetwork::API_GAME_PORT: {
                        $connection = @fsockopen($host, $ports[3]);
                        if (is_resource($connection)) {
                            fclose($connection);
                            return TRUE;
                        } else {
                            fclose($connection);
                            return FALSE;
                        }
                    }
                case Darkblownetwork::API_MANAGEMENT_PORT: {
                        $connection = @fsockopen($host, $ports[4]);
                        if (is_resource($connection)) {
                            fclose($connection);
                            return TRUE;
                        } else {
                            fclose($connection);
                            return FALSE;
                        }
                    }

                default:
                    return FALSE;
            }
        } else return FALSE;
    }

    public function CreateTCPConnection($host = '', $port = '', $data = array())
    {
        // IP Address Validator
        $query = $this->ci->db->get_where(Darkblowdatabase::web_ipbanned, array('ipaddress' => $this->ci->input->ip_address()))->row();
        if ($query) return "Blocked IP Address";
        else {
            // If IP Address Is Valid
            $socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

            if ($socket === false) {
                return "socket create failed.";
            } else {
                $result = @socket_connect($socket, $host, $port);
                if ($result === false) return "socket connect failed.";
                else {
                    if (is_array($data)) {
                        $result = @socket_write($socket, json_encode($data), strlen(json_encode($data)));
                        if ($result === false) return "socket write failed.";
                        else {
                            $receivedData = @socket_read($socket, 2048);
                            return $receivedData;
                        }
                    } else return "Invalid Data Type.";
                }
            }
        }
    }
}

/* End of file Darkblowsocketcommand.php */
