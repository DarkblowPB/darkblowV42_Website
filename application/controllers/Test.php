<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use Namdevel\Ovo;

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $formated_date = date('d-m-Y G:i:s');
        $non_formated_date = time();

        echo 'Date Format: ' . $formated_date;
        echo '<br><br>Date Non Format: ' . $non_formated_date . '<br>Jika di convert jadi Date Formated: ' . date('d-m-Y H:i:s', $non_formated_date);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
