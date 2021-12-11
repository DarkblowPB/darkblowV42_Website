<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Servercommandmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/servercommandmanagement_model', 'servercommandmanagement');
        $this->load->library('servercommand_library');
    }

    function index()
    {
        $data['title'] = 'Server Command Management';
        $data['header'] = 'Server Command Management';
        $data['content'] = 'admin/content/servercommandmanagement/content_sendcommand';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function sendcommand()
    {
        if (empty($this->input->get('command_type', true)))
        {
            redirect(base_url('adm/servercommandmanagement'), 'refresh');
        }
        else
        {
            if ($this->input->get('command_type', true) == '')
            {
                redirect(base_url('adm/servercommandmanagement'), 'refresh');
            }
            else
            {
                switch ($this->input->get('command_type', true))
                {
                    case 'SendAnnouncement':
                        {
                            $data['title'] = 'Send Announcement';
                            $data['header'] = 'Send Announcement';
                            $data['content'] = 'admin/content/servercommandmanagement/content_sendannouncement';

                            break;
                        }

                    case 'BannedPlayers':
                        {
                            $data['title'] = 'Banned Players';
                            $data['header'] = 'Banned Players';

                            $data['players'] = $this->servercommandmanagement->GetAllPlayers();

                            $data['content'] = 'admin/content/servercommandmanagement/content_bannedplayers';
                            break;
                        }
                    
                    default:
                        {
                            redirect(base_url('adm/dashboard'), 'refresh');
                            break;
                        }
                }

                $this->load->view('admin/layout/wrapper', $data, FALSE);
            }
        }
    }
    
    function do_sendcommand()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        
        $this->form_validation->set_rules(
            'opcode',
            'Opcode',
            'required|numeric|max_length[1]|in_list[1,2]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Accepted Numeric Character.',
                'max_length' => '%s Invalid Length.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'secret_token',
            'Secret Token',
            'required|alpha_numeric|min_length[64]|max_length[64]',
            array(
                'required' => '%s Cannot Be Empty.',
                'alpha_numeric' => '%s Only Accepted Alphabetic & Numeric Characters.',
                'min_length' => '%s Must Be 64 Characters.',
                'max_length' => '%s Only Can Accepted 64 Characters.'
            )
        );
        $this->form_validation->set_rules(
            'secret_keys',
            'Secret Keys',
            'required|alpha_numeric|in_list[darkblowpbreborn_2021]',
            array(
                'required' => '%s Cannot Be Empty.',
                'alpha_numeric' => '%s Only Accepted Alphabetic & Numeric Characters.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'command_type',
            'Command Type',
            'required|in_list[Start Server,Shutdown Server]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run())
        {
            if ($this->servercommand_library->CheckOpenPort('third'))
            {
                if ($this->servercommand_library->SendTcpCommand('third', $data) == 'Success')
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Start Server';
                }
                else
                {
                    echo 'Failed';
                }
            }
            else
            {
                echo 'Server Mati';
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>