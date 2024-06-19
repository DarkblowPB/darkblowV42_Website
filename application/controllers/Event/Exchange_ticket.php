<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Exchange_ticket extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main/exchangeticket_model', 'exchangeticket');
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Exchange Ticket';
        $data['item_list'] = $this->exchangeticket->GetAllItems();
        $data['ticket'] = $this->exchangeticket->GetTicketID($this->session->userdata('uid'), $this->darkblowsettings->load()->event_ticket);

        $data['isi'] = 'main/content/event/content_exchangeticket';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_exchange()
    {
        if ($this->input->is_ajax_request()) {
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
            else {
                $this->form_validation->set_error_delimiters('', '');

                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else return;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
