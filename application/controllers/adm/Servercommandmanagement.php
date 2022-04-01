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
}

// This Code Generated Automatically By EyeTracker Snippets. //
