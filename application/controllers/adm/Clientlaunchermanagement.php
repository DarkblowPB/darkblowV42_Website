<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Clientlaunchermanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
        $this->allprotect->AdminDashboard_Protection();
        $this->load->model('admin/clientlaunchermanagement_model', 'clientlauncher');
    }

    function index()
    {
        $data['title'] = 'Client & Launcher Management';
        $data['header'] = 'Client & Launcher Management';

        $data['files'] = $this->clientlauncher->GetAllFiles();

        $data['content'] = 'admin/content/clientlaunchermanagement/content_clientlaunchermanagement';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function details($files_id = null)
    {
        if ($files_id == null) redirect(base_url('adm/clientlaunchermanagement'), 'refresh');
        else {
            $data['title'] = 'File Details';
            $data['header'] = 'File Details';

            $data['files'] = $this->clientlauncher->GetSpecifiedFile($files_id);

            $data['content'] = 'admin/content/clientlaunchermanagement/content_details';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function edit($files_id = null)
    {
        if ($files_id == null) redirect(base_url('adm/clientlaunchermanagement'), 'refresh');
        else {
            $data['title'] = 'Edit File';
            $data['header'] = 'Edit File';

            $data['files'] = $this->clientlauncher->GetSpecifiedFile($files_id);

            $data['content'] = 'admin/content/clientlaunchermanagement/content_edit';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function upload($type = null)
    {
        if ($type == null) redirect(base_url('adm/clientlaunchermanagement'), 'refresh');
        else {
            switch ($type) {
                case 'external': {
                        $data['title'] = 'Upload New Files (External URL)';
                        $data['header'] = 'Upload New Files (External URL)';
                        $data['content'] = 'admin/content/clientlaunchermanagement/content_upload_external';
                        $this->load->view('admin/layout/wrapper', $data, FALSE);
                        break;
                    }
                case 'direct': {
                        $data['title'] = 'Upload New Files (Direct URL)';
                        $data['header'] = 'Upload New Files (Direct URL)';
                        $data['content'] = 'admin/content/clientlaunchermanagement/content_upload_direct';
                        $this->load->view('admin/layout/wrapper', $data, FALSE);
                        break;
                    }

                default: {
                        redirect(base_url('adm/clientlaunchermanagement'), 'refresh');
                        break;
                    }
            }
        }
    }

    function do_upload_directurl()
    {
        $this->clientlauncher->UploadFiles_DirectURL();
    }

    function do_upload_externalurl()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'file_name',
            'File Name',
            'required|is_unique[web_download_clientlauncher.file_name]',
            array('required' => '%s Cannot Be Empty.', 'is_unique' => 'Please Use Another %s')
        );
        $this->form_validation->set_rules(
            'file_cloud_type',
            'Cloud Type',
            'required|in_list[googledrive,mediafire,sendspace,other]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'file_type',
            'File Type',
            'required|in_list[client,partial,launcher,support]',
            array('required' => '%s Cannot Be Empty', 'in_list' => 'Invalid %s')
        );
        $this->form_validation->set_rules(
            'file_url',
            'File URL',
            'required|valid_url',
            array('required' => '%s Cannot Be Empty.', 'valid_url' => 'Invalid %s')
        );
        $this->form_validation->set_rules(
            'file_size',
            'File Size',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        if ($this->form_validation->run()) $this->clientlauncher->UploadFiles_ExternalURLV2();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }

    function do_edit()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'file_name',
            'File Name',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        $this->form_validation->set_rules(
            'file_cloud_type',
            'Cloud Type',
            'required|in_list[googledrive,mediafire,sendspace,other]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'file_type',
            'File Type',
            'required|in_list[client,partial,launcher,support]',
            array('required' => '%s Cannot Be Empty', 'in_list' => 'Invalid %s')
        );
        $this->form_validation->set_rules(
            'file_url',
            'File URL',
            'required|valid_url',
            array('required' => '%s Cannot Be Empty.', 'valid_url' => 'Invalid %s')
        );
        $this->form_validation->set_rules(
            'file_size',
            'File Size',
            'required',
            array('required' => '%s Cannot Be Empty')
        );
        if ($this->form_validation->run()) $this->clientlauncher->EditFiles($this->input->post('file_id'));
        else {

            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'files_id',
            'Files ID',
            'required',
            array('required' => '%s Cannot Be Empty.')
        );
        if ($this->form_validation->run()) $this->clientlauncher->DeleteFiles($this->input->post('files_id', true));
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }

    function do_geturl()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules(
            'files_id',
            'Files ID',
            'required|numeric',
            array('required' => '%s Cannot Be Empty.', 'numeric' => '%s Only Can Using Numeric Characters.')
        );
        if ($this->form_validation->run()) $this->clientlauncher->GetFilesURL();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['url'] = '';
            $response['message'] = validation_errors();

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
