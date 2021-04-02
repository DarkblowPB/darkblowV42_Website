<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class News extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/adminnews_model', 'adminnews');
        $this->load->model('moderatorpanel/logger_model', 'logger');
		$this->allprotect->Web_Protection();
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || News';
        $data['header'] = 'News';
        $data['news'] = $this->adminnews->getNewsAll();
        $data['content'] = 'moderatorpanel/content/news/content_datanews';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
    
    function news_create()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'news_title',
            'News Title',
            'required|min_length[10]|max_length[255]|is_unique[web_quickslide.quickslide_title]',
            array(
                'required' => '%s Cannot Be Empty',
                'min_length' => '%s Must Have 10 Characters Or More',
                'max_length' => '%s Max Length Reached (max. 255 Characters)',
                'is_unique' => '%s Already Exist'
            )
        );
        $valid->set_rules(
            'news_description',
            'News Description',
            'required',
            array(
                'required' => '%s Cannot Be Empty'
            )
        );
        if ($valid->run()) 
        {
            $config['upload_path'] = 'assets/goodgames/assets/images/img_slider/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '5120';
            $config['max_width'] = '1920';
            $config['max_height'] = '1080';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('news_img')) 
            {
                $data['title'] = 'DarkblowPB || Create News';
                $data['header'] = 'Create News';
                $data['error'] = $this->upload->display_errors();
                $data['content'] = 'moderatorpanel/content/news/content_createnews';
                $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
            }
            else 
            {
                $upload_image = array(
                    'upload_data' => $this->upload->data()
                );

                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/goodgames/assets/images/img_slider/'.$upload_image['upload_data']['file_name'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 1110;
                $config['height'] = 359;

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i = $this->input;
                $data = array(
                    'quickslide_title' => $i->post('news_title'),
                    'quickslide_description' => $i->post('news_description'),
                    'quickslide_img' => $upload_image['upload_data']['file_name'],
                    'quickslide_date' => date('Y-m-d')
                );
                if ($data) 
                {
                    $this->adminnews->insertNews($data);
                    $this->logger->logger_CreateNewsSuccess($i->post('news_title'));
                    $this->session->set_flashdata('Success', 'Successfully Created News');
                    redirect(base_url('moderatorpanel/news/news_create'), 'refresh');
                }
                else 
                {
                    $this->logger->logger_CreateNewsFailed($i->post('news_title'));
                    $this->session->set_flashdata('Failed', 'Failed Created News');
                    redirect(base_url('moderatorpanel/news/news_create'), 'refresh');
                }
            }
        }
        $data['title'] = 'DarkblowPB || Create News';
        $data['header'] = 'Create News';
        $data['content'] = 'moderatorpanel/content/news/content_createnews';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }
    
    function news_delete()
    {
        if ($_GET['id'] == null) 
        {
            redirect(base_url('moderatorpanel/news'), 'refresh');
        }
        if ($_GET['id'] != null) 
        {
            $this->adminnews->deleteNewsId($_GET['id']);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>