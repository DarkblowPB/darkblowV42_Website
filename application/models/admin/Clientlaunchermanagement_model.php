<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Clientlaunchermanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('upload');
    }

    function GetFilesURL()
    {
        sleep(1);
        $response = array();

        $data = array(
            'files_id' => $this->input->post('files_id', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::web_download_clientlauncher, array('id' => $data['files_id']))->row();
        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['url'] = $query->file_url;

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['url'] = '';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function EditFiles()
    {
        $response = array();

        $file_id = $this->input->post('file_id', true);

        $data = array(
            'file_name' => $this->input->post('file_name', true),
            'file_description' => $this->input->post('file_description', true),
            'file_size' => $this->input->post('file_size', true),
            'file_cloud_type' => $this->input->post('file_cloud_type', true),
            'file_type' => $this->input->post('file_type', true),
            'file_url' => $this->input->post('file_url', true),
            'date_updated' => date('Y-m-d H:i:s'),
        );

        $query = $this->db->get_where(Darkblowdatabase::web_download_clientlauncher, array('id' => $file_id))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_download_clientlauncher, $data);
            if ($update) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update File.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update File.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'File Not Found.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function DeleteFiles($files_id)
    {
        $response = array();

        $query = $this->db->get_where(Darkblowdatabase::web_download_clientlauncher, array('id' => $files_id))->row();
        if ($query) {
            $delete = $this->db->where('id', $query->id)->delete(Darkblowdatabase::web_download_clientlauncher);
            if ($delete) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Selected File.';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Selected File.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'File Not Found.';
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function GetAllFiles()
    {
        return $this->db->order_by('id', 'desc')->get(Darkblowdatabase::web_download_clientlauncher)->result_array();
    }

    function GetSpecifiedFile($files_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::web_download_clientlauncher, array('id' => $files_id))->row();
        if ($query) return $query;
        else redirect(base_url('adm/clientlaunchermanagement'), 'refresh');
    }

    function UploadFiles_ExternalURL()
    {
        $response = array();

        $data = array(
            'file_name' => $this->input->post('file_name', true),
            'file_url' => $this->input->post('file_url', true),
            'file_type' => $this->input->post('file_type', true),
            'file_size' => $this->input->post('file_size', true),
            'file_version' => $this->input->post('file_version', true)
        );

        if ($this->darkblowlib->GetReachPointState($data['file_url'])) {
            $query = $this->db->insert(Darkblowdatabase::web_download_clientlauncher, array(
                'file_name' => $data['file_name'],
                'file_url' => $data['file_url'],
                'type' => $data['file_type'],
                'size' => $data['file_size'],
                'version' => $data['file_version'],
                'date' => date('d-m-Y')
            ));
            if ($query) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Added New Files.';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Add New Files.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Cannot Reach Url. Please Use Another Url.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function UploadFiles_ExternalURLV2()
    {
        $response = array();

        $data = array(
            'file_name' => $this->input->post('file_name', true),
            'file_description' => $this->input->post('file_description', true),
            'file_cloud_type' => $this->input->post('file_cloud_type', true),
            'file_type' => $this->input->post('file_type', true),
            'file_url' => $this->input->post('file_url', true),
            'file_size' => $this->input->post('file_size', true),
            'file_total_download' => '0',
            'date_created' => time(),
            'date_updated' => '0'
        );

        $query = $this->db->insert(Darkblowdatabase::web_download_clientlauncher, $data);
        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Upload File.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Upload File.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function UploadFiles_DirectURL()
    {
        $response = array();

        $config = array(
            'upload_path' => './assets/goodgames/assets/download/',
            'allowed_types' => 'zip|rar',
            'file_ext_tolower' => TRUE,
            'encrypt_name' => TRUE,
            'remove_spaces' => TRUE,
            'detect_mime' => TRUE,
        );

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
            $query = $this->db->insert(Darkblowdatabase::web_download_clientlauncher, array(
                'file_name' => $data['raw_name'],
                'file_url' => $data['full_path'],
                'type' => $data['file_type'],
                'size' => $data['file_size'],
                'version' => '',
                'date' => date('d-m-Y')
            ));
            if ($query) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Uploaded New Files.';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Upload New Files.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->upload->display_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
