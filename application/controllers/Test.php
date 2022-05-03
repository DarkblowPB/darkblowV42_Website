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
        // $time = time();
        // echo strtotime('+30 day', $time);
        // $app = new Ovo();
        // echo $app->sendOtp('+6285877985260');
        // echo $app->OTPVerify('+6285877985260', 'd660ce2b-a774-4f10-b264-3e0b8c6eebdc', '9858');
        // echo $app->getAuthToken('+6285877985260', 'd660ce2b-a774-4f10-b264-3e0b8c6eebdc', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb2RlaGFzaCI6Ik1qbG1NR1U0TjJJek9UbGxORFptWVRrMU1URXpOR1l5WW1Fek5UYzBZamsiLCJyYW5kb20iOiJORE15TkRZMk5UTXgiLCJ2ZXJzaW9uIjoxfQ.e2iraOgBRw-f3Xyox3IyF_CK_AiM_AJFbERw2YEMICY', '230900');

        $count = 2201302052;
        $split = str_split($count, 2);
        $unix = strtotime('202201302052');
        // echo strtotime('20' . '2201302052');
        echo date('d-m-Y H:i', $unix);
    }

    function index2()
    {
        $token = '';
        $app = new Ovo($token);
        echo $app->getOvoCash();
        // $decode = json_decode($app->transactionHistory(), true);
        //   var_dump($decode['data']);
        //   die;
        //   echo $decode['data']['orders'];
        //   echo $app->transactionHistory();
        //   foreach ($decode['data']['orders'] as $row) {
        //       echo $row['next'];
        //   }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
