<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Updater extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }

    function version_get()
    {
        $response = array();

        $launcherversion = @file_get_contents('./pblauncher/version/launcher_version.ini');

        $response['status'] = 'Success';
        $response['updater_version'] = $launcherversion;

        $this->response($response, 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
