<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Getsettings
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function Get()
    {
        return $this->ci->db->get_where('web_settings', array('id' => '1'))->row();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
