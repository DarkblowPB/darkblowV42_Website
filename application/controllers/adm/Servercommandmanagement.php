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
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>