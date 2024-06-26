<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Trade extends DARKBLOW_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string', 'message'));
        $this->load->model('main/trade_model', 'trade_model');
    }

    function index()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Trade Market';

        $data['items'] = $this->trade_model->GetAllItems();

        $data['isi'] = 'main/content/trade/content_trade';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function addpost()
    {
        if ($this->input->is_ajax_request()) return;

        $data['title'] = 'Post New Items';

        $data['items'] = $this->trade_model->GetPlayerInventoryItems();

        $data['isi'] = 'main/content/trade/content_create';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_post()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();

            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules(
                'item_id',
                'Item Name',
                'required',
                array('required' => '%s Cannot Be Empty.')
            );
            $this->form_validation->set_rules(
                'item_price',
                'Item Price',
                'required|numeric',
                array(
                    'required' => '%s Cannot Be Empty.',
                    'numeric' => '%s Only Accepted Numeric Character.'
                )
            );
            if ($this->form_validation->run()) $this->trade_model->CreateNewItem();
            else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else return;
    }

    function do_buy()
    {
        if ($this->input->is_ajax_request()) {
            $response = array();

            $this->form_validation->set_error_delimiters('', '');

            $this->form_validation->set_rules(
                'trade_id',
                'Trade ID',
                'required|numeric',
                array(
                    'required' => '%s Cannot Be Empty.',
                    'numeric' => '%s Must Be Numeric Characters.'
                )
            );
            if ($this->form_validation->run()) $this->trade_model->BuyItem();
            else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else return;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
