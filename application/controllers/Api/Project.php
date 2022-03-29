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
        $response = array();

        $project = @file_get_contents('./darkblow_config.json');
        $parse = json_decode($project);

        foreach ($parse as $row) $project_version = $row->ProjectVersion->Version;

        $response['status'] = 'Success';
        $response['project_version'] = $project_version;
        $this->response($response, 200);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
