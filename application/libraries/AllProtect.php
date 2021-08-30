<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class AllProtect
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->database();
    }

    public function Web_Protection()
    {
        $check = $this->ci->db->get_where('web_ipbanned', array('ip_address' => $this->ci->input->ip_address()));
        $result = $check->row();
        if ($result) 
        {
            echo "<script>alert('You Doesnt Allowed To Visit This Website. Thanks For Your Attention.');</script>";
            return;
        }
    }

    public function ComingSoon_Protection()
    {
        
    }

    public function AdminLogin_Protection()
    {
        if (!empty($_SESSION['admin_uid']))
        {
            redirect(base_url('adm/dashboard'), 'refresh');
        }
    }

    public function AdminDashboard_Protection()
    {
        if (empty($_SESSION['admin_uid']))
        {
            redirect(base_url('adm/login'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>