<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Webshopmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllWebshopData()
    {
        return $this->db->order_by('id', 'desc')->get(Darkblowdatabase::webshop)->result_array();
    }

    function GetAvailableShopItem()
    {
        return $this->db->get_where(Darkblowdatabase::shop, array(
            'buy_type' => '2',
            'buy_type2' => '1',
            'buy_type3' => '2',
            'title' => '0',
            'price_gold != ' => '0',
            'price_cash != ' => '0'
        ))->result_array();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
