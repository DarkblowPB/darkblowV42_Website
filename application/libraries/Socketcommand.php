<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Socketcommand
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    /**
     * Load System Config
     * 
     * @author Darkblow Studio
     * @package Site Server Communication
     * @param $config
     * @return string
     */
    public function LoadConfig($config)
    {
        if ($config == null || $config == '') return '';
        else {
            $ConfigData = $this->ci->config->item('main_config');
            if ($ConfigData != null) return $ConfigData[$config] != null ? $ConfigData[$config] : "";
            else return "";
        }
    }

    /**
     * Site Server Communication Opcodes
     * 
     * Specified Package Number To Execute Communication
     * 
     * @author Darkblow Studio
     * @package Site Server Communication
     * @param $opcode
     * @return int
     */
    public function Opcodes($opcode)
    {
        switch ($opcode) {
            case 'Start Server':
                return 1;
            case 'Shutdown Server':
                return 2;
            case 'Reload Events':
                return 3;
            case 'Send Announcement':
                return 4;
            case 'Kick All Players':
                return 5;
            case 'Banned Player':
                return 6;
            case 'Attendance':
                return 7;
            case 'Redeem Code':
                return 8;
            case 'Send Cash ID':
                return 9;
            case 'Refill Shop':
                return 10;
            case 'Send Point ID':
                return 11;

            default:
                return 0;
        }
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

    /**
     * Tcp Socket Connection Checker
     * 
     * Will Return Bool If Host Found And Port Open
     * 
     * @author Darkblow Studio
     * @package Site Server Communication
     * @return bool
     */
    public function CheckConnection(string $host, string $port)
    {
        $socket = @fsockopen($host, $port);
        if (is_resource($socket)) {
            fclose($socket);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Tcp Socket Connection
     * 
     * This Function Is Core Of Site Server Communication
     * 
     * Using Web Socket To Send Encrypted Json Data To Server
     * 
     * And Will Return String From Server As A Response Of Command
     * 
     * @author Darkblow Studio
     * @package Site Server Communication
     * @return string
     */
    public function CreateConnection($host, $port, $data)
    {
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket) {
            $connect = socket_connect($socket, $host, $port);
            if ($connect) {
                $write = socket_write($socket, json_encode($data), strlen(json_encode($data)));
                if ($write) {
                    $read = socket_read($socket, 1028);
                    return strtolower($read);
                } else return "Failed";
            } else return "Failed";
        } else return "Failed";
    }
}

/* End of file Socketcommand.php */
