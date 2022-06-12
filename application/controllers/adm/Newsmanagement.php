<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Newsmanagement extends CI_Controller
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

    function details($post_id = null)
    {
        if ($post_id == null) redirect(base_url('adm/newsmanagement'), 'refresh');
        else {
            $data['title'] = 'News Details';
            $data['header'] = 'News Details';

            $data['news'] = $this->newsmanagement->GetDetails($post_id);

            $data['content'] = 'admin/content/newsmanagement/content_details';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function add()
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
        if ($this->form_validation->run()) $this->newsmanagement->Test();
        else {
            $data['title'] = 'Create New News';
            $data['header'] = 'Create New News';
            $data['content'] = 'admin/content/newsmanagement/content_add';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function edit($news_id = null)
    {
        if ($news_id == null) redirect(base_url('adm/newsmanagement'), 'refresh');
        else {
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
            if ($this->form_validation->run()) $this->newsmanagement->EditNews($news_id);
            else {
                $data['title'] = 'Edit News';
                $data['header'] = 'Edit News';

                $data['news'] = $this->newsmanagement->GetDetails($news_id);

                $data['content'] = 'admin/content/newsmanagement/content_edit';
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            }
        }
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
        if ($this->form_validation->run()) $this->newsmanagement->Test();
        else {
            $this->session->set_flashdata('false', 'Hehe Error :)');
            redirect(base_url('adm/newsmanagement/add'), 'refresh');
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'news_id',
            'News Data',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.'
            )
        );
        if ($this->form_validation->run()) $this->newsmanagement->DeleteNews();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
