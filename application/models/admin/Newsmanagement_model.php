<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Newsmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllNews()
    {
        return $this->db->order_by('id', 'desc')->get('web_quickslide')->result_array();
    }

    function GetDetails($news_id)
    {
        $query = $this->db->get_where('web_quickslide', array('id' => $news_id))->row();
        if ($query) return $query;
        else redirect(base_url('adm/newsmanagement'), 'refresh');
    }

    function AddNews()
    {
        $response = array();

        $data = array(
            'quickslide_title' => $this->input->post('quickslide_title'),
            'quickslide_description' => $this->input->post('quickslide_description'),
            'quickslide_date' => date('Y-m-d'),
            'quickslide_state' => '1'
        );

        if (isset($_FILES['quickslide_image']['name'])) {
            $config = array(
                'upload_path' => './assets/goodgames/assets/images/img_news/',
                'allowed_types' => 'jpg|jpeg|png',
                'max_size' => 2048,
                'max_width' => 1920,
                'max_height' => 1080,
                'encrypt_name' => TRUE,
                'file_ext_tolower' => TRUE
            );

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('quickslide_image')) {
                $insert = $this->db->insert('web_quickslide', $data);
                if ($insert) {
                    $response['response'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Add News.';

                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Add News.';

                    $this->darkblowmessage->AjaxFlashData($response);
                }
            } else {
                $data['quickslide_img'] = $this->upload->data()['file_name'];

                $insert = $this->db->insert('web_quickslide', $data);
                if ($insert) {
                    $response['response'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Add News.';

                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Add News.';

                    $this->darkblowmessage->AjaxFlashData($response);
                }
            }
        }
    }

    function EditNews()
    {
        $response = array();

        $id = $this->input->post('quickslide_id', true);

        $data = array(
            'quickslide_title' => $this->input->post('quickslide_title', true),
            'quickslide_description' => $this->input->post('quickslide_description', true),
            'quickslide_date' => date('Y-m-d'),
            'quickslide_state' => '1'
        );

        if (isset($_FILES['quickslide_image']['name'])) {
            $config = array(
                'upload_path' => './assets/goodgames/assets/images/img_news/',
                'allowed_types' => 'jpg|jpeg|png',
                'max_size' => 2048,
                'max_width' => 1920,
                'max_height' => 1080,
                'encrypt_name' => TRUE,
                'file_ext_tolower' => TRUE
            );

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('quickslide_image')) {
                $query = $this->db->get_where('web_quickslide', array('id' => $id))->row();
                if ($query) {
                    $update = $this->db->where('id', $query->id)->update('web_quickslide', $data);
                    if ($update) {
                        $response['response'] = 'success';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Update News.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    } else {
                        $response['response'] = 'error';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed To Update News.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    }
                }
            } else {
                $data['quickslide_img'] = $this->upload->data()['file_name'];
                $query = $this->db->get_where('web_quickslide', array('id' => $id))->row();
                if ($query) {
                    if ($query->quickslide_img != null) {
                        if (file_exists('./assets/goodgames/assets/images/img_news/' . $query->quickslide_img)) unlink('./assets/goodgames/assets/images/img_news/' . $query->quickslide_img);
                    }

                    $update = $this->db->where('id', $query->id)->update('web_quickslide', $data);
                    if ($update) {
                        $response['response'] = 'success';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Update News.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    } else {
                        $response['response'] = 'error';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed To Update News.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    }
                }
            }
        }
    }

    function DeleteNews()
    {
        $response = array();

        $data = array(
            'news_id' => $this->encryption->encrypt($this->input->post('news_id', true))
        );

        $query = $this->db->get_where('web_quickslide', array('id' => $this->encryption->decrypt($data['news_id'])))->row();
        if ($query) {
            if ($query->quickslide_img != null) {
                if (file_exists('./assets/goodgames/assets/images/img_news/' . $query->quickslide_img)) unlink('./assets/goodgames/assets/images/img_news/' . $query->quickslide_img);
            }
            $query2 = $this->db->where('id', $query->id)->delete('web_quickslide');
            if ($query2) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete News Data.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete News Data.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'News Data Not Found.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
