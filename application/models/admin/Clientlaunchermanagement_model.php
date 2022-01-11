<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientlaunchermanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('upload');
        $this->load->library('lib');
    }

    function GetFilesURL()
    {
        sleep(1);
        $response = array();
        
        $data = array(
            'files_id' => $this->encryption->encrypt($this->input->post('files_id', true))
        );

        $query = $this->db->get_where('web_download_clientlauncher', array('id' => $this->encryption->decrypt($data['files_id'])))->row();
        if ($query)
        {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['url'] = $query->file_url;
            $response['message'] = '';

            echo json_encode($response);
        }
    }

    function EditFiles($files_id)
    {
        $response = array();

        $data = array(
            'file_id' => $this->encryption->encrypt($this->input->post('file_id', true)),
            'file_name' => $this->encryption->encrypt($this->input->post('file_name', true)),
            'file_url' => $this->encryption->encrypt($this->input->post('file_url', true)),
            'file_type' => $this->encryption->encrypt($this->input->post('file_type', true)),
            'file_size' => $this->encryption->encrypt($this->input->post('file_size', true)),
            'file_version' => $this->encryption->encrypt($this->input->post('file_version', true))
        );

        if ($this->lib->GetReachPointState($this->encryption->decrypt($data['file_url'])))
        {
            $query = $this->db->get_where('web_download_clientlauncher', array('id' => $this->encryption->decrypt($data['file_id'])))->row();
            if ($query)
            {
                $update = $this->db->where('id', $query->id)->update('web_download_clientlauncher', array(
                    'file_name' => $this->encryption->decrypt($data['file_name']),
                    'file_url' => $this->encryption->decrypt($data['file_url']),
                    'type' => $this->encryption->decrypt($data['file_type']),
                    'size' => $this->encryption->decrypt($data['file_size']),
                    'version' => $this->encryption->decrypt($data['file_version'])
                ));
                if ($update)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Edit The File.';
                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Edit The File.';
                    echo json_encode($response);
                }
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'File Not Found.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Cannot Reach Url. Please Use Another URL';
        }
    }

    function DeleteFiles($files_id)
    {
        $response = array();

        $query = $this->db->get_where('web_download_clientlauncher', array('id' => $files_id))->row();
        if ($query)
        {
            $delete = $this->db->where('id', $query->id)->delete('web_download_clientlauncher');
            if ($delete)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Selected File.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Selected File.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'File Not Found.';
            echo json_encode($response);
        }
    }

    function GetAllFiles()
    {
        return $this->db->order_by('id', 'desc')->get('web_download_clientlauncher')->result_array();
    }

    function GetSpecifiedFile($files_id)
    {
        $query = $this->db->get_where('web_download_clientlauncher', array('id' => $files_id))->row();
        if ($query) return $query;
        else redirect(base_url('adm/clientlaunchermanagement'), 'refresh');
    }

    function UploadFiles_ExternalURL()
    {
        $response = array();

        $data = array(
            'file_name' => $this->encryption->encrypt($this->input->post('file_name', true)),
            'file_url' => $this->encryption->encrypt($this->input->post('file_url', true)),
            'file_type' => $this->encryption->encrypt($this->input->post('file_type', true)),
            'file_size' => $this->encryption->encrypt($this->input->post('file_size', true)),
            'file_version' => $this->encryption->encrypt($this->input->post('file_version', true))
        );

        if ($this->lib->GetReachPointState($this->encryption->decrypt($data['file_url'])))
        {
            $query = $this->db->insert('web_download_clientlauncher', array(
                'file_name' => $this->encryption->decrypt($data['file_name']),
                'file_url' => $this->encryption->decrypt($data['file_url']),
                'type' => $this->encryption->decrypt($data['file_type']),
                'size' => $this->encryption->decrypt($data['file_size']),
                'version' => $this->encryption->decrypt($data['file_version']),
                'date' => date('d-m-Y')
            ));
            if ($query)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Added New Files.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Add New Files.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Cannot Reach Url. Please Use Another Url.';

            echo json_encode($response);
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

        if ($this->upload->do_upload('file'))
        {
            $data = $this->upload->data();
            $query = $this->db->insert('web_download_clientlauncher', array(
                'file_name' => $data['raw_name'],
                'file_url' => $data['full_path'],
                'type' => $data['file_type'],
                'size' => $data['file_size'],
                'version' => '',
                'date' => date('d-m-Y')
            ));
            if ($query)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Uploaded New Files.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Upload New Files.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->upload->display_errors();
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>