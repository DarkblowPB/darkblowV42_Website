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
        $app = new Ovo();
        // echo $app->sendOtp('+6285877985260');
        // echo $app->OTPVerify('+6285877985260', 'd660ce2b-a774-4f10-b264-3e0b8c6eebdc', '9858');
        echo $app->getAuthToken('+6285877985260', 'd660ce2b-a774-4f10-b264-3e0b8c6eebdc', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb2RlaGFzaCI6Ik1qbG1NR1U0TjJJek9UbGxORFptWVRrMU1URXpOR1l5WW1Fek5UYzBZamsiLCJyYW5kb20iOiJORE15TkRZMk5UTXgiLCJ2ZXJzaW9uIjoxfQ.e2iraOgBRw-f3Xyox3IyF_CK_AiM_AJFbERw2YEMICY', '230900');
    }

    function index2()
    {
        $token = 'eyJhbGciOiJSUzI1NiJ9.eyJleHBpcnlJbk1pbGxpU2Vjb25kcyI6NjA0ODAwMDAwLCJjcmVhdGVUaW1lIjoxNjUwMjQ0NTIyMTEzLCJzZWNyZXQiOiJod3Y3ZHFtdWMrekQ1MjBaRGVBemZxRG1HV21qOHplaTNxM043V2NjZjhKczhZdktzblVoc3FEUm5UMjcwanhabTBZNUJXSGlrOFJJVGIxK21zeWp2ZkhXTlBLSkg5TFpiMHJJMEdXdnhlamhWRURTR3BwMHkyNTNwMDN3cUY4Y2lCYXQvamp3UWZDdEl4cW1rL2xEVTBmb21XS2dqcElQOUFaVzNPaGh2RDcrZ0pxQmRwS3BHZHNETUlRV1NORWNtZ1VwZUt6N2ZrVWt4NmduMTM1TFE3ZUtFY3NXeWQyUitScUVxZ1gxR1R1aHNuMko2bmV6b2Y2eEhwQXRueTREa0czVXl2ODhoWkJqbkdKVk4wUHQ3VWdQYVZNMnJ2dWZmZk8xUFNpKzI0YlVwOS9rM2RYdUxhc3VBQkpkV2l5ejVXYkwyK3hhdGRxenQrNFFkL1RtNitkR0wzcnhNQ09jekVrcVZGanBpNUk9In0.gpflPkyBK-k44bWdaj6dHOeUujm723nodfT-BdbJJreWItU-6-A0wJPI1nQGileYi7vYk2aNmmvZtw5HBLugbxIPuWDDBwWNs9hLjy03flnlr51oq984wyxyeUH_uIeztu8YE6gdIXcnbvc2lKj0IpMCpHGuRpDyC5o5aL0jG8Tc2xEUiGe2jgAmJDl4zluifoSPVKlrqGYKJClqJLKKIkukoCLSJdu9iynINiTnMVnX_Kyfp4DLaNmtmswydnd19NxXRqEmFx61ScXHzCSLwoJInRPnPoeFW-ziAd_8xUnTWqSmXPqW89lDApEAFggguHNpd0R6lrtRDMLsHb8F_w';
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
