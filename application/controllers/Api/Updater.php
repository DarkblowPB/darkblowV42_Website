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
        $launcherversion = @file_get_contents('./pblauncher/version/launcher_version.ini');
        $this->response(["status" => 'Success', 'updater_version' => $launcherversion], 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>