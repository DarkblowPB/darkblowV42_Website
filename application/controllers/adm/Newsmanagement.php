<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Newsmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/newsmanagement_model', 'newsmanagement');
    }

    function index()
    {
        $data['title'] = 'News Management';
        $data['header'] = 'News Management';

        $data['news'] = $this->newsmanagement->GetAllNews();

        $data['content'] = 'admin/content/newsmanagement/content_newsmanagement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function details()
    {
        $data['title'] = 'News Details';
        $data['header'] = 'News Details';
        
        $data['news'] = $this->newsmanagement->GetDetails($this->input->get('post_id', true));

        $data['content'] = 'admin/content/newsmanagement/content_details';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $data['title'] = 'Create New News';
        $data['header'] = 'Create New News';
        $data['content'] = 'admin/content/newsmanagement/content_add';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_add()
    {
        $this->form_validation->set_rules(
            'quickslide_title',
            'Title',
            'required|max_length[255]',
            array(
                'required' => '%s Cannot Be Empty.',
                'max_length' => '%s Only Can Contains 255 Characters.'
            )
        );
        $this->form_validation->set_rules(
            'quickslide_description',
            'Description',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run())
        {
            $this->newsmanagement->AddNewNews();
        }
        else
        {
            $this->session->set_flashdata('false', 'Hehe Error :)');
            redirect(base_url('adm/newsmanagement/add'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>