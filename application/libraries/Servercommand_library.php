<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Servercommand_library
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->helper('file');
    }

    public function PrimaryHost()
    {
        $host_config = read_file('./darkblow_config.json');
        $host_decode = json_decode($host_config);

        foreach ($host_decode as $row)
        {
            $data = array(
                'host' => $row->CredentialsConfig->primary_host->host,
                'port' => $row->CredentialsConfig->primary_host->port
            );
        }

        return $data;
    }

    public function SecondaryHost()
    {
        $host_config = read_file('./darkblow_config.json');
        $host_decode = json_decode($host_config);

        foreach ($host_decode as $row)
        {
            $data = array(
                'host' => $row->CredentialsConfig->secondary_host->host,
                'port' => $row->CredentialsConfig->secondary_host->port
            );
        }

        return $data;
    }
    
    public function ThirdHost()
    {
        $host_config = read_file('./darkblow_config.json');
        $host_decode = json_decode($host_config);

        foreach ($host_decode as $row)
        {
            $data = array(
                'host' => $row->CredentialsConfig->third_host->host,
                'port' => $row->CredentialsConfig->third_host->port
            );
        }

        return $data;
    }
    
    public function SendTcpCommand($host = null, $data = null)
    {
        if ($host == null)
            return "Failed";
        else if ($data == null)
            return "Failed";
        else
        {
            if ($host == 'primary')
            {
                $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                if ($socket)
                {
                    $connect = socket_connect($socket, $this->PrimaryHost()['host'], $this->PrimaryHost()['port']);
                    if ($connect)
                    {
                        $write = socket_write($socket, json_encode($data), strlen(json_encode($data)));
                        if ($write)
                        {
                            $read = socket_read($socket, 2048);
                            // $read = Success
                            if ($read == 'Success')
                                return "Success";
                            else
                                return "Failed";
                        }
                        else
                        {
                            return "Failed";
                        }
                    }
                    else
                    {
                        return "Failed";
                    }
                }
                else
                {
                    return "Failed";
                }
            }
            else if ($host == 'secondary')
            {
                $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                if ($socket)
                {
                    $connect = socket_connect($socket, $this->SecondaryHost()['host'], $this->SecondaryHost()['port']);
                    if ($connect)
                    {
                        $write = socket_write($socket, json_encode($data), strlen(json_encode($data)));
                        if ($write)
                        {
                            $read = socket_read($socket, 2048);
                            // $read = Success
                            if ($read == 'Success')
                                return "Success";
                            else
                                return "Failed";
                        }
                        else
                        {
                            return "Failed";
                        }
                    }
                    else
                    {
                        return "Failed";
                    }
                }
                else
                {
                    return "Failed";
                }
            }
            else if ($host == 'third')
            {
                $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                if ($socket)
                {
                    $connect = socket_connect($socket, $this->ThirdHost()['host'], $this->ThirdHost()['port']);
                    if ($connect)
                    {
                        $write = socket_write($socket, json_encode($data), strlen(json_encode($data)));
                        if ($write)
                        {
                            $read = socket_read($socket, 2048);
                            // $read = Success
                            if ($read == 'Success')
                                return "Success";
                            else
                                return "Failed";
                        }
                        else
                        {
                            return "Failed";
                        }
                    }
                    else
                    {
                        return "Failed";
                    }
                }
                else
                {
                    return "Failed";
                }
            }
            else
            {
                return "Failed";
            }
        }
    }

    public function CheckOpenPort($host)
	{
        if ($host == 'primary')
        {
            $connection = @fsockopen($this->PrimaryHost()['host'], $this->PrimaryHost()['port']);
    
            if (is_resource($connection))
            {
                return TRUE;
    
                fclose($connection);
            }
    
            else
            {
                return FALSE;
            }
        }
        else if ($host == 'secondary')
        {
            $connection = @fsockopen($this->SecondaryHost()['host'], $this->SecondaryHost()['port']);
    
            if (is_resource($connection))
            {
                return TRUE;
    
                fclose($connection);
            }
    
            else
            {
                return FALSE;
            }
        }
        else if ($host == 'third')
        {
            $connection = @fsockopen($this->ThirdHost()['host'], $this->ThirdHost()['port']);
    
            if (is_resource($connection))
            {
                return TRUE;
    
                fclose($connection);
            }
    
            else
            {
                return FALSE;
            }
        }
        else return FALSE;
	}

    public function GenerateOpcode($command_type = null)
    {
        if ($command_type == null)
            return 0;
        else
        {
            switch ($command_type) 
            {
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
                
                default:
                    return 0;
            }
        }
    }

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

    public function GenerateSecretKeys()
    {
        return "darkblowpbreborn_2021";
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>