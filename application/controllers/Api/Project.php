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
        $this->load->helper('file');
    }

    function index_get()
    {
        $project = @file_get_contents('./darkblow_config.json');
        $parse = json_decode($project);

        foreach ($parse as $row)
        {
            $project_version = $row->ProjectVersion->Version;
        }

        $this->response(["status" => 'Success', "project_version" => $project_version], 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>