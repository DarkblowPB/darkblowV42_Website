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
    
    /**
     * Model Protection
     * 
     * This Function Is Protector For Model
     * Return Error Message If Session Is Empty.
     */
    public function Model_Protection()
    {
        $response = array();
        
        if (empty($_SESSION['uid']))
        {
            $response['response'] = 'false';
            $response['token'] = $this->ci->security->get_csrf_hash();
            $response['message'] = 'You Cannot Force Execute Function To Database.';
            echo json_encode($response);
        }
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

    function Changepassword_Protection()
	{
		$check = $this->ci->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
		$result = $check->row();
		if ($result) 
		{
			if ($result->hint_question == null)
			{
				redirect(base_url('player_panel/create_hint'), 'refresh');
			}
			if ($result->hint_answer == null) 
			{
				redirect(base_url('player_panel/create_hint'), 'refresh');
			}
		}
	}

    public function ComingSoon_Protection()
    {
        
    }

    public function Maintenance_Protection()
    {
        if ($this->ci->getsettings->Get2()->website_condition != 1)
        {
            redirect(base_url('maintenance'), 'refresh');
        }
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