<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Trade extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->lang->load(array('header', 'string', 'message'));
        $this->lib->GetVisitorData('Trade Market');

        $this->allprotect->Web_Protection();
        $this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
        $this->allprotect->DarkblowCopierGuard();

        $this->load->model('main/trade_model', 'trade');

        if ($this->getsettings->Get2()->trade_market != 1) redirect(base_url('home'), 'refresh');
    }

    function index()
    {
        $data['title'] = 'Trade Market';

        $data['items'] = $this->trade->GetAllItems();

        $data['isi'] = 'main/content/trade/content_trade';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function addpost()
    {
        $this->main_protect->mainProtectA();
        $data['title'] = 'Post New Items';

        $data['items'] = $this->trade->GetPlayerInventoryItems();

        $data['isi'] = 'main/content/trade/content_create';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function do_post()
    {
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
        if ($this->form_validation->run()) $this->trade->CreateNewItem();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }

    function do_buy()
    {
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
        if ($this->form_validation->run()) $this->trade->BuyItem();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
