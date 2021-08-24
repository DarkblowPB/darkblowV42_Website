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
        $this->load->model('main/trade_model', 'trade');
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Trade Market';

        $data['items'] = $this->trade->GetAllItems();

        $data['isi'] = 'main/content/trade/content_trade';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }

    function addpost()
    {
		$this->main_protect->mainProtectA();
        $data['title'] = 'DarkblowPB || Post New Items';

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