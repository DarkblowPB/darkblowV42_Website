<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Recharge extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $data['title'] = 'Recharge';
        $data['isi'] = 'main/content/recharge/content_recharge';
        $this->load->view('main/layout/wrapper', $data);
    }
}

/* End of file Recharge.php */
