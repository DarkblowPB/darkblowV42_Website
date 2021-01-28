<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Launcherredeemcode_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('main/register_model', 'register');
    }

    function getSessionId()
    {
        return $this->db->where('player_id', $_SESSION['launcher_pid'])->get('accounts')->row();
    }

    function launcher_Login($login, $password)
    {
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where(array('login' => $login, 'password' => $this->register->password_encrypt($password)));
        $result = $this->db->get();
        return $result->row();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>