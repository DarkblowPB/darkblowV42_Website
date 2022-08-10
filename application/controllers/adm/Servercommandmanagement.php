<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Servercommandmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/servercommandmanagement_model', 'servercommandmanagement');
        $this->load->library('socketcommand');
        $this->load->library('servercommand_library');
    }

    function index()
    {
        $data['title'] = 'Server Command Management';
        $data['header'] = 'Server Command Management';

        $data['config'] = $this->config->item('main_config');

        $data['content'] = 'admin/content/servercommandmanagement/content_sendcommand';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function sendannouncement()
    {
        $data['title'] = 'Send Announcement';
        $data['header'] = 'Send Announcement';
        $data['content'] = 'admin/content/servercommandmanagement/content_announcement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function bannedplayers()
    {
        $data['title'] = 'Banned Players';
        $data['header'] = 'Banned Players';

        $data['players'] = $this->servercommandmanagement->GetAllPlayers();

        $data['content'] = 'admin/content/servercommandmanagement/content_bannedplayers';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function sendcashid()
    {
        $data['title'] = 'Send Cash By ID';
        $data['header'] = $data['title'];

        $data['players'] = $this->servercommandmanagement->GetAllPlayers();

        $data['content'] = 'admin/content/servercommandmanagement/content_sendcashid';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function sendpointid()
    {
        $data['title'] = 'Send Point By ID';
        $data['header'] = $data['title'];

        $data['players'] = $this->servercommandmanagement->GetAllPlayers();

        $data['content'] = 'admin/content/servercommandmanagement/content_sendpointid';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
