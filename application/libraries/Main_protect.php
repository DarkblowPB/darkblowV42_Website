<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_protect
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function mainProtectA()
    {
        if (empty($_SESSION['uid'])) 
        {
            redirect(base_url('login'), 'refresh');
        }
    }

    public function mainProtectB()
    {
        if (!empty($_SESSION['uid'])) 
        {
            redirect(base_url('home'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>