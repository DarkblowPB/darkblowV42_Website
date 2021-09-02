<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function LoginValidation()
    {
        sleep(1);
        $data = array(
            'username' => $this->encryption->encrypt($this->input->post('username', true)),
            'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password', true)))
        );

        $response = array();

        $query = $this->db->get_where('accounts', array(
            'login' => $this->encryption->decrypt($data['username']),
            'password' => $this->encryption->decrypt($data['password'])
        ))->row();
        if ($query)
        {
            if ($query->access_level >= 3 && $query->access_level <= 6)
            {
                $sessionData = array(
                    'admin_uid' => $query->player_id,
                    'admin_name' => $query->player_name,
                    'admin_access_level' => $query->access_level
                );

                $this->session->set_userdata($sessionData);

                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Logged In. Welcome '.$_SESSION['admin_name'].'.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Login. You Are Not Real Admin F*ck.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Login. You Are Not Real Admin F*ck.';
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>