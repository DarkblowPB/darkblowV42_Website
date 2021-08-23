<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/dashboard_model', 'dashboard_model');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Dashboard';
        $data['header'] = 'Dashboard';

        $data['registeredplayers'] = $this->dashboard_model->GetCountAllRegisteredPlayers();
        $data['onlineplayers'] = $this->dashboard_model->GetCountAllOnlinePlayers();
        $data['news'] = $this->dashboard_model->GetCountAllNews();
        $data['blockedplayers'] = $this->dashboard_model->GetCountAllBlockedPlayers();
        $data['fullservers'] = $this->dashboard_model->GetFullServerCount();
        $data['last_players'] = $this->dashboard_model->LastRegisteredPlayers();
        $data['last_redeem'] = $this->dashboard_model->LastRedeemCodeUsed();

        $data['content'] = 'admin/content/dashboard/content_dashboard';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function logout()
    {
        $data = array(
            'login',
            'player_name',
            'rank',
            'access_level'
        );

        $this->session->unset_userdata($data);
        echo "true";
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>