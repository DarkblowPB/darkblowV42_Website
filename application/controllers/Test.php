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

    public function index()
    {
        $date = '2007/08/30';
        $weekday = date('l', strtotime($date)); // note: first arg to date() is lower-case L 
        echo $weekday;
    }

    public function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = array('', 'K', 'M', 'G', 'T');

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
