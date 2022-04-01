<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Main_protect
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->database();
    }

    public function mainProtectA()
    {
        if (empty($this->ci->session->userdata('uid'))) redirect(base_url('login'), 'refresh');
    }

    public function mainProtectB()
    {
        if (!empty($this->ci->session->userdata('uid'))) redirect(base_url('home'), 'refresh');
    }

    public function mainProtectC()
    {
        $query = $this->ci->db->get_where('accounts', array('player_id' => $this->ci->session->userdata('uid')))->row();
        if ($query) {
            if ($query->hint_question != "") redirect(base_url('player_panel/home'), 'refresh');
            else if ($query->hint_answer != "") redirect(base_url('player_panel/home'), 'refresh');
        } else redirect(base_url('login'), 'refresh');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
