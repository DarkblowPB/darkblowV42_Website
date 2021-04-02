<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Log extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminlog_model', 'adminlog');
		$this->load->AllProtect->Web_Protection();
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || All Log History';
        $data['header'] = 'Log History';

        $data['log_admin'] = $this->adminlog->getLogAll();

        $data['content'] = 'moderatorpanel/content/log/content_log';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>