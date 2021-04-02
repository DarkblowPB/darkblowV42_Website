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
        $this->main_protect->mainProtectA();
        $this->load->model('main/report_model', 'report');
		$this->load->AllProtect->Web_Protection();
    }

    function index()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'report_title',
            'Report Title',
            'required',
            array(
                'required' => '%s Cannot Be Empty'
            )
        );
        $valid->set_rules(
            'report_description',
            'Report Description',
            'required',
            array(
                'required' => '%s Cannot Be Empty'
            )
        );
        if ($valid->run()) 
        {
            $config['upload_path'] = 'assets/goodgames/assets/images/img_report/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '5120';
            $config['max_width'] = '1920';
            $config['max_height'] = '1080';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('report_proof')) 
            {
                $data['title'] = 'DarkblowPB || Report';
                $data['error'] = $this->upload->display_errors();
                $data['isi'] = 'main/content/report/content_report';
                $this->load->view('main/layout/wrapper', $data, FALSE);
            }
            else 
            {
                $upload_image = array(
                    'upload_data' => $this->upload->data()
                );

                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/goodgames/assets/images/img_report/'.$upload_image['upload_data']['file_name'];
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 800;
                $config['height'] = 600;

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i = $this->input;
                $data = array(
                    'report_title' => $i->post('report_title'),
                    'report_description' => $i->post('report_description'),
                    'report_proof' => $upload_image['upload_data']['file_name'],
                    'player_name' => $_SESSION['playername'],
                    'date' => date('d-m-Y h:i:s'),
                    'status' => "0"
                );
                if ($data) 
                {
                    
                    $this->report->insertReport($data);
                    $this->session->set_flashdata('success', 'Report Sended Successfully, We Will Response Your Report As Soon As Possible');
                    redirect(base_url('report'), 'refresh');
                }
                else 
                {
                    $this->session->set_flashdata('error', 'Something Went Wrong');
                    redirect(base_url('report'), 'refresh');
                }
            }
        }
        else 
        {
            $data['title'] = 'DarkblowPB || Report';
            $data['isi'] = 'main/content/report/content_report';
            $this->load->view('main/layout/wrapper', $data, FALSE);
        }
    }

    function viewall()
    {
        $data['title'] = 'DarkblowPB || View Report';
        $data['report'] = $this->report->getReportId($_SESSION['playername']);
        $data['isi'] = 'main/content/report/content_viewreport';
        $this->load->view('main/layout/wrapper', $data, FALSE);
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>