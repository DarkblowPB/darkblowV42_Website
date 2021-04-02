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
        $check = $this->ci->db->get_where('web_ipbanned', array('ip_address' => $this->input->ip_address()));
        $result = $check->row();
        if ($result) 
        {
            echo "<script>alert('You Doesnt Allowed To Visit This Website. Thanks For Your Attention.');</script>";
            redirect('https://anakanjing.com', 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>