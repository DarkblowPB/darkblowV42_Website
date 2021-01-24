<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('main/register_model', 'register');
    }

    function login_auth($username, $password)
    {
        $this->db->select('login, password, player_id, player_name, access_level');
        $this->db->from('accounts');
        $this->db->where(array('login' => $username, 'password' => $this->register->password_encrypt($password)));
        $result = $this->db->get();
        return $result->row();
    }
    
    // function ipaddress()
    // {
    //     // Get real visitor IP behind CloudFlare network
    //     if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    //             $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    //             $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    //     }
    //     $client  = @$_SERVER['HTTP_CLIENT_IP'];
    //     $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    //     $remote  = $_SERVER['REMOTE_ADDR'];

    //     if(filter_var($client, FILTER_VALIDATE_IP))
    //     {
    //         $ip = $client;
    //     }
    //     else if(filter_var($forward, FILTER_VALIDATE_IP))
    //     {
    //         $ip = $forward;
    //     }
    //     else
    //     {
    //         $ip = $remote;
    //     }

    //     return $ip;
    // }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>