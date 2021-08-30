<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Exchange_ticket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->main_protect->mainProtectA();
		$this->allprotect->Web_Protection();
        $this->load->model('main/exchangeticket_model', 'exchangeticket');

        if ($this->getsettings->Get2()->exchange_ticket != 1)
        {
            redirect(base_url('home'), 'refresh');
        }
    }
    function index()
    {
        $data['title'] = 'Exchange Ticket';
        $data['item_list'] = $this->exchangeticket->list_item();
        $data['ticket'] = $this->exchangeticket->get_ticket($_SESSION['uid'], '1301513000');

        $data['isi'] = 'main/content/player_panel/content_exchangeticket';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
    function  exchange_item()
    {
        if (empty($_GET['item_id']))
        {
            $this->session->set_flashdata('false', 'Failed To Exchange Item');
            redirect(base_url('player_panel/exchange_ticket'), 'refresh');
        }
        if (!empty($_GET['item_id']))
        {
            $this->exchangeticket->validate($_GET['item_id']);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>