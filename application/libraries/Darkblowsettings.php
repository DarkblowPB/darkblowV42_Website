<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowsettings
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function LoadMainSettings()
    {
        $this->ci->db->trans_start();
        $this->ci->db->select('*', TRUE);
        $this->ci->db->from(Darkblowdatabase::web_settings);
        $this->ci->db->where('id', '1', TRUE);

        $result = $this->ci->db->get()->row_array();
        $this->ci->db->trans_complete();

        if ($result != null) return $result;
        else return null;
    }

    public function load()
    {
        $query = $this->ci->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
        if ($query) return $query;
    }
}

/* End of file Darkblowsettings.php */
