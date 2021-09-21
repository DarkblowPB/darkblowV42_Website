<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encryption');
    }

    function SetCategory($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069)
		{
			return "1";
		}
		else if ($item_id >= 1001001003 && $item_id <= 1105003032)
		{
			return "2";
		}
		else if ($item_id >= 1300002003 && $item_id <= 1302379000)
		{
			return "3";
		}
		else
		{
			return "0";
		}
    }

    function RedeemVoucherV3()
    {
        
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>