<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Trade extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->Web_Protection();
		$this->allprotect->Maintenance_Protection();
        $this->allprotect->BlockedAccount_Protection();
        $this->load->model('main/trade_model', 'trade');

        if ($this->getsettings->Get2()->trade_market != 1)
        {
            redirect(base_url('home'), 'refresh');
        }
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
        if ($this->form_validation->run() == TRUE)
        {
            $this->trade->CreateNewItem();
        }
        else
        {
            echo validation_errors();
        }
    }

    function do_buy()
    {
        $this->trade->BuyItem();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>