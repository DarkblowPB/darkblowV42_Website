<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Encryption extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');

        if (empty($_SESSION['uid']))
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function darkblowstudio_01()
    {
        $this->lib->EncryptedWeb();
    }
    
    function darkblowstudio_02()
    {
        $this->lib->CreateAccount();
    }

    function darkblowstudio_03()
    {
        $data = array(
            'query' => $this->encryption->encrypt($this->input->get('query', true))
        );

        switch ($this->encryption->decrypt($data['query']))
        {
            case 'banned':
                {
                    $data['title'] = 'GOD MENU - BANNED';
                    $data['players'] = $this->db->get_where('accounts', array('access_level !=' => '-1'))->result_array();
                    $this->load->view('main/content/encryption/content_banned', $data, FALSE);
                    break;
                }
            case 'unbanned':
                {
                    
                }
            case 'banned':
                {

                }
            case 'banned':
                {

                }
            case 'banned':
                {

                }
            
            default:
                break;
        }
    }

    function do_banned()
    {
        sleep(1);
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player',
            'required|numeric',
            array(
                'required' => 'Please Select %s.',
                'numeric' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run())
        {
            $data = array(
                'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
            );

            $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
            if ($query)
            {
                if ($query->access_level == '-1')
                {
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'This Player Already Banned Permanently.';
                    echo json_encode($response);
                }
                else
                {
                    $banned = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '-1'));
                    if ($banned)
                    {
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name == '' || empty($query->player_name))
                        {
                            $response['message'] = 'Successfully Banned '.$query->login.'.';
                        }
                        else
                        {
                            $response['message'] = 'Successfully Banned '.$query->player_name.'.';
                        }
                        echo json_encode($response);
                    }
                    else
                    {
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name == '' || empty($query->player_name))
                        {
                            $response['message'] = 'Successfully Banned '.$query->login.'.';
                        }
                        else
                        {
                            $response['message'] = 'Successfully Banned '.$query->player_name.'.';
                        }
                        echo json_encode($response);
                    }
                }
            }
        }
        else
        {
            $this->form_validation->set_error_delimiters('', '');

            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>