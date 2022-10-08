<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowsettings
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->library('darkblowdatabase');
    }

    public function load()
    {
        $query = $this->ci->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
        if ($query) return $query;
    }
}

/* End of file Darkblowsettings.php */
