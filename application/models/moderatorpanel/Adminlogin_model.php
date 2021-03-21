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
        $this->load->library('lib');
    }

    function admin_authlogin()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->lib->password_encrypt($this->input->post('password'))
        );
        
        // Checking Account
        $check_account = $this->db->get_where('accounts', array('login' => $data['username'], 'password' => $data['password']));
        $result_account = $check_account->row();
        if ($result_account) 
        {
            if ($result_account->access_level < 3) 
            {
                redirect('http://111.90.150.182/', 'refresh');
            }
            if ($result_account->access_level >= 3 && $result_account->access_level <= 6)
            {
                $this->session->set_userdata('admin_id', $result_account->player_id);
                $this->session->set_userdata('admin_name', $result_account->player_name);
                $this->session->set_userdata('admin_access', $result_account->access_level);
                $this->session->set_flashdata('success', 'Login Successfully, Welcome '.$_SESSION['admin_name'].'');
                redirect(base_url('moderatorpanel/home'), 'refresh');
            }
        }
        else 
        {
            redirect('http://111.90.150.182/', 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>