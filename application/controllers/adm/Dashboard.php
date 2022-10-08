<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
        $this->load->model('admin/dashboard_model', 'dashboard_model');
    }

    function index()
    {
        $data['title'] = 'Dashboard';
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
        $this->session->unset_userdata('admin_uid');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_access_level');

        redirect(base_url('adm/login'), 'refresh');
    }

    function do_load_rewards()
    {
        $data = array();
        $query = $this->db->order_by('item_id', 'asc')->get(Darkblowdatabase::shop)->result_array();
        if ($query) {
            foreach ($query as $key => $value) {
                $data['items'][] = array(
                    'id' => (int)$value['item_id'],
                    'text' => (string)$value['item_name']
                );
            }
            echo json_encode($data);
        } else echo json_encode([]);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
