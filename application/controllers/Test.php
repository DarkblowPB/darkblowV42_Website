<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //
use thiagoalessio\TesseractOCR\TesseractOCR;

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
    }

    public function index()
    {
        // echo (new TesseractOCR('./assets/a.png'))->run();
        echo $this->lib->password_encrypt('darkblow001');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
