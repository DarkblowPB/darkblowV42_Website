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
        $this->load->library('lib');
    }

    function index()
    {
        $day = '86400';
        $explode = explode(',', $this->lib->GetItemDurationList());
        foreach ($explode as $row) {
            if ($row != '') {
                if ($row == $day) $row .= ' YES';
                echo $row . '<br>';
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
