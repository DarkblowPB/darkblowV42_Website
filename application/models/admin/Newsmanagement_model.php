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
        $this->load->library('upload');
    }

    function GetAllNews()
    {
        return $this->db->order_by('id', 'desc')->get(Darkblowdatabase::web_quickslide)->result_array();
    }

    function GetDetails($news_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::web_quickslide, array('id' => $news_id))->row_array();
        if ($query != []) return $query;
        else redirect(base_url('adm/newsmanagement'), 'refresh');
    }

    function AddNews()
    {
        sleep(1);
        $response = array();

        $data = array(
            'quickslide_title' => $this->input->post('quickslide_title', true),
            'quickslide_description' => $this->input->post('quickslide_description'),
            'quickslide_state' => $this->input->post('quickslide_state', true),
            'quickslide_date' => date('Y-m-d H:i:s')
        );

        $upload_config = array(
            'upload_path' => './assets/goodgames/assets/images/img_news/',
            'allowed_types' => 'jpg|jpeg|png',
            'max_size' => 2048,
            'max_width' => 1112,
            'max_height' => 360,
            'encrypt_name' => TRUE,
            'file_ext_tolower' => TRUE
        );

        $this->upload->initialize($upload_config);

        if (!$this->upload->do_upload('quickslide_image')) {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->upload->display_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $data['quickslide_img'] = $this->upload->data()['file_name'];

            $this->db->trans_start();
            $this->db->insert(Darkblowdatabase::web_quickslide, $data, TRUE);
            $this->db->trans_complete();

            if ($this->db->trans_status()) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Create News.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Create News.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        }
    }

    function EditNews()
    {
        sleep(1);
        $response = array();

        $id = $this->input->post('news_id', true);

        $query = $this->db->get_where(Darkblowdatabase::web_quickslide, array('id' => $id))->row_array();
        if ($query != []) {
            $data = array(
                'quickslide_title' => $this->input->post('quickslide_title', true),
                'quickslide_description' => $this->input->post('quickslide_description'),
                'quickslide_state' => $this->input->post('quickslide_state', true)
            );

            $upload_config = array(
                'upload_path' => './assets/goodgames/assets/images/img_news/',
                'allowed_types' => 'jpg|jpeg|png',
                'file_name' => $query['quickslide_img'],
                'file_ext_tolower' => TRUE,
                'overwrite' => TRUE,
                'max_size' => 2048,
                'max_width' => 1112,
                'max_height' => 360,
                'encrypt_name' => TRUE
            );

            $this->upload->initialize($upload_config);

            if (!$this->upload->do_upload('quickslide_image')) {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = $this->upload->display_errors();

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $data['quickslide_img'] = $this->upload->data()['file_name'];

                $this->db->trans_start();
                $this->db->insert(Darkblowdatabase::web_quickslide, $data, TRUE);
                $this->db->trans_complete();

                if ($this->db->trans_status()) {
                    $response['response'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Create News.';

                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'error';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Create News.';

                    $this->darkblowmessage->AjaxFlashData($response);
                }
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid News Data.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function DeleteNews()
    {
        $response = array();

        $data = array(
            'news_id' => $this->input->post('news_id', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::web_quickslide, array('id' => $data['news_id']))->row();
        if ($query) {
            if ($query->quickslide_img != null) if (file_exists('./assets/goodgames/assets/images/img_news/' . $query->quickslide_img)) unlink('./assets/goodgames/assets/images/img_news/' . $query->quickslide_img);
            $query2 = $this->db->where('id', $query->id)->delete(Darkblowdatabase::web_quickslide);
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
