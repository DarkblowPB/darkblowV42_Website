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
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminreport_model', 'adminreport');
        $this->load->model('moderatorpanel/logger_model', 'logger');
		$this->allprotect->Web_Protection();
    }
    function index()
    {
        $data['title'] = 'DarkblowPB || Report';
        $data['header'] = 'Report';
        
        $data['report'] = $this->adminreport->getReportAll();
        
        $data['content'] = 'moderatorpanel/content/report/content_datareport';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function view()
    {
        if ($_GET['id'] == null) 
        {
            redirect(base_url('moderatorpanel/report'), 'refresh');
        }
        if ($_GET['id'] != null) 
        {
            $data['title'] = 'DarkblowPB || View Report';
            $data['header'] = 'View Report';
            $data['report'] = $this->adminreport->getReportId($_GET['id']);
            $data['content'] = 'moderatorpanel/content/report/content_viewreport';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>