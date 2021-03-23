<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->adminAuthCheck_Empty();
        $this->load->model('moderatorpanel/Adminaccountconfig_model', 'configakun');
    }
    function index()
    {
        $data['title'] = 'DarkblowPB || Account Configuration';
        $data['header'] = 'Configuration';

        $data['config'] = $this->configakun->getAccountConfig();

        $data['content'] = 'moderatorpanel/content/config/content_config';
        $this->load->view('moderatorpanel/layout/wrapper', $data, TRUE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>