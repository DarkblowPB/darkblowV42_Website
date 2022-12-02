<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $time = "1672419599";
        $string = "a8d38d9ca8698820e2844e1209bf24f5";
        $length = strlen($string);

        for ($i = 0; $i < $length; $i++) {
            echo 'chr(' . ord($string[$i]) . ') . ';
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
