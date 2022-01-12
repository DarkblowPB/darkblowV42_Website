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

        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Exchange Ticket');
        
		$this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
		$this->allprotect->DarkblowCopierGuard();
		
		$this->main_protect->mainProtectA();
        $this->load->library('lib');
        $this->load->model('main/exchangeticket_model', 'exchangeticket');

        if ($this->getsettings->Get2()->exchange_ticket != 1) redirect(base_url('home'), 'refresh');
    }
    
    function index()
    {
        $data['title'] = 'Exchange Ticket';
        $data['item_list'] = $this->exchangeticket->GetAllItems();
        $data['ticket'] = $this->exchangeticket->GetTicketID($this->session->userdata('uid'), $this->getsettings->Get2()->event_ticket);

        $data['isi'] = 'main/content/event/content_exchangeticket';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_exchange()
    {
        $response = array();

        $this->form_validation->set_rules(
            'id',
            'Item ID',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Contains Numeric Characters.'
            )
        );
        if ($this->form_validation->run()) $this->exchangeticket->ExchangeItemV3();
        else
        {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>