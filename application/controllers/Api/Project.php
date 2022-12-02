<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Project extends RestController
{
    function __construct()
    {
        parent::__construct();
        // $this->darkblowlicense->DarkblowPBLicense();
    }

    function index_get()
    {
        $response = array();

        $response['status'] = 'Success';
        $response['project_version'] = $this->config->item('main_config')['project_version'];
        $this->response($response, 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
