<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class AllProtect
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->database();
    }

    /**
     * DarkblowCopierGuard
     * 
     * This Function Will Protect Your Site From Clonner, Coppier, Ripper.
     * 
     * If This Function Activated The Session Timeout Not Working As Well.
     * 
     * Not Recommended For Activate This Function.
     * 
     * @return void
     * @copyright Darkblow Studio
     */
    public function DarkblowCopierGuard()
    {
        // $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // if (preg_match("/webzip|httrack|wget|FlickBot|downloader|productionbot|superbot|PersonaPilot|NPBot|WebCopier|vayala|imagefetch|Microsoft URL Control|mac finder|emailreaper|emailsiphon|emailwolf|emailmagnet|emailsweeper|Indy Library|FrontPage|cherry picker|WebCopier|netzip|Share Program|TurnitinBot|full web bot|zeus/i", $user_agent))
        // {
        //     set_status_header(403);
        // }
    }

    /**
     * Model Protection
     * 
     * This Function Is Protector For Model
     * 
     * Return Error Message If Session Is Empty.
     * 
     * @return void
     * @copyright Darkblow Studio
     */
    public function Model_Protection()
    {
        $response = array();

        if ($this->IsBannedIpAddress()) {
            $response['status'] = 'error';
            $response['token'] = $this->ci->security->get_csrf_hash();
            $response['message'] = 'You Cannot Force Execute Function To Our Database.';

            echo json_encode($response);
        }
    }

    public function IsBannedIpAddress()
    {
        $query = $this->ci->db->get_where('web_ipbanned', array('ip_address' => $this->ci->input->ip_address()))->row();
        if ($query) return true;
        else return false;
    }

    /**
     * Web Protection
     * 
     * This Function Is Protector For User That Have Banned IP.
     * 
     * @return void
     * @copyright Darkblow Studio
     */
    public function Web_Protection()
    {
        $check = $this->ci->db->get_where('web_ipbanned', array('ip_address' => $this->ci->input->ip_address()));
        $result = $check->row();
        if ($result) redirect(base_url('banned'), 'refresh');
    }


    public function Banned_Protection2()
    {
        $check = $this->ci->db->get_where('web_ipbanned', array('ip_address' => $this->ci->input->ip_address()))->row();
        if (!$check) redirect(base_url('home'), 'refresh');
    }

    public function Changepassword_Protection()
    {
        if (!empty($this->ci->session->userdata('uid'))) {
            $check = $this->ci->db->get_where('accounts', array('player_id' => $this->ci->session->userdata('uid')));
            $result = $check->row();
            if ($result) {
                if ($result->hint_question == null) redirect(base_url('player_panel/create_hint'), 'refresh');
                if ($result->hint_answer == null) redirect(base_url('player_panel/create_hint'), 'refresh');
            }
        } else redirect(base_url('login'), 'refresh');
    }

    public function BlockedAccount_Protection()
    {
        if (!empty($this->ci->session->userdata('access_level'))) {
            if ($this->ci->session->userdata('access_level') == '-1') {
                $this->ci->session->unset_userdata('uid');
                $this->ci->session->unset_userdata('player_name');
                $this->ci->session->unset_userdata('access_level');

                redirect(base_url('home'), 'refresh');
            }
        }
    }

    public function Maintenance_Protection()
    {
        if ($this->ci->getsettings->Get2()->website_condition != 1) redirect(base_url('maintenance'), 'refresh');
    }

    public function AdminLogin_Protection()
    {
        if (!empty($this->ci->session->userdata('admin_uid'))) redirect(base_url('adm/dashboard'), 'refresh');
    }

    public function AdminDashboard_Protection()
    {
        if (empty($this->ci->session->userdata('admin_uid'))) {
            redirect(base_url('adm/login'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
