<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_protect
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function adminProtectA()
    {
        if (empty($_SESSION['admin_id'])) 
        {
            redirect(base_url('moderatorpanel/login'), 'refresh');
        }
    }

    public function adminProtectB()
    {
        if (!empty($_SESSION['admin_id'])) 
        {
            redirect(base_url('moderatorpanel/home'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>