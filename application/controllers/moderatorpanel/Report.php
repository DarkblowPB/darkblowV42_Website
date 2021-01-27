<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->login_library->primaryAuthCheck_Empty();
        $this->load->model('moderatorpanel/Adminreport_model', 'adminreport');
    }
    function index()
    {
        $data['title'] = 'DarkblowPB || Report';
        $data['header'] = 'Report';
        
        $data['report'] = $this->adminreport->getReportAll();
        
        $data['content'] = 'moderatorpanel/content/report/content_datareport';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>