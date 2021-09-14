<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Getsettings
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->database();
    }

    function Get2()
    {
        return $this->ci->db->get_where('web_settings', array('id' => '1'))->row();
    }

    function Get()
    {
        return $this->ci->db->get_where('web_settings', array('id' => '1'))->row();
    }

    function Fetch()
    {
        $response = array();
        $query = $this->ci->db->get_where('web_settings', array('id' => '1'))->row();
        if ($query)
        {
            if ($query->server_condition == 0)
            {
                $response['response'] = 'true';
                $response['token'] = $this->ci->security->get_csrf_hash();
                $response['message'] = 'OFFLINE';
                echo json_encode($response);
            }
            else if ($query->server_condition == 1)
            {
                $response['response'] = 'true';
                $response['token'] = $this->ci->security->get_csrf_hash();
                $response['message'] = 'ONLINE';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->ci->security->get_csrf_hash();
                $response['message'] = 'OFFLINE';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'true';
            $response['token'] = $this->ci->security->get_csrf_hash();
            $response['message'] = 'INVALID';
            echo json_encode($response);
        }
    }

    function GetOnlinePlayers()
    {
        $response = array();

        $response['response'] = $this->ci->db->get_where('accounts', array('online' => 't'))->num_rows();
        echo json_encode($response);
    }

    function GetRegisteredPlayers()
    {
        $response = array();

        $response['response'] = $this->ci->db->get_where('accounts', array('access_level <' => '3'))->num_rows();
        echo json_encode($response);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>