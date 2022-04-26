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

    function AddNewNewsV2()
    {
        $config = array(
            'upload_path' => './assets/goodgames/assets/images/img_slider/',
            'allowed_types' => 'jpg|jpeg|png',
            'max_size' => 4086,
        );
        $data = array(
            'quickslide_title' => $this->input->post('quickslide_title', true),
            'quickslide_description' => $this->input->post('quickslide_description', true)
        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
        }
    }

    function AddNewNews()
    {
        $data = array(
            'quickslide_title' => $this->encryption->encrypt($this->input->post('quickslide_title', true)),
            'quickslide_description' => $this->encryption->encrypt($this->input->post('quickslide_description', true))
        );

        $config = array(
            'upload_path' => './assets/goodgames/assets/images/img_slider/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => 2048,
            'max_width' => 1920,
            'max_height' => 1080
        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            if (empty($_FILES['image']['file_name'])) {
                $query = $this->db->insert('web_quickslide', array(
                    'quickslide_title' => $this->encryption->decrypt($data['quickslide_title']),
                    'quickslide_description' => $this->encryption->decrypt($data['quickslide_description']),
                    'quickslide_img' => 'no-image.png',
                    'quickslide_date' => date('d-m-Y'),
                    'quickslide_state' => '0'
                ));
                if ($query) {
                    $this->session->set_flashdata('true', 'Successfully Add New News.');
                    redirect(base_url('adm/newsmanagement'), 'refresh');
                } else {
                    $this->session->set_flashdata('false', 'Failed To Add New News.');
                    redirect(base_url('adm/newsmanagement/add'), 'refresh');
                }
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('adm/newsmanagement/add'), 'refresh');
            }
        } else {
            $data2 = array(
                'upload_data' => $this->upload->data()
            );

            $query = $this->db->insert('web_quickslide', array(
                'quickslide_title' => $this->encryption->decrypt($data['quickslide_title']),
                'quickslide_description' => $this->encryption->decrypt($data['quickslide_description']),
                'quickslide_img' => $data2['upload_data']['file_name'],
                'quickslide_date' => date('d-m-Y'),
                'quickslide_state' => '0'
            ));

            if ($query) {
                $this->session->set_flashdata('true', 'Successfully Add New News.');
                redirect(base_url('adm/newsmanagement'), 'refresh');
            } else {
                $this->session->set_flashdata('false', 'Failed To Add New News.');
                redirect(base_url('adm/newsmanagement/add'), 'refresh');
            }
        }
    }

    function EditNews()
    {
        $data = array(
            'quickslide_title' => $this->encryption->encrypt($this->input->post('quickslide_title', true)),
            'quickslide_description' => $this->encryption->encrypt($this->input->post('quickslide_description', true))
        );

        $config = array(
            'upload_path' => './assets/goodgames/assets/images/img_news/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => 2048,
            'max_width' => 1920,
            'max_height' => 1080
        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            if (empty($_FILES['image']['file_name'])) {
                $query = $this->db->get_where('web_quickslide', array('id' => $this->input->get('news_id', true)))->row();
                if ($query) {
                    $query2 = $this->db->where('id', $query->id)->update('web_quickslide', array(
                        'quickslide_title' => $this->encryption->decrypt($data['quickslide_title']),
                        'quickslide_description' => $this->encryption->decrypt($data['quickslide_description']),
                        'quickslide_date' => date('d-m-Y')
                    ));
                    if ($query2) {
                        $this->session->set_flashdata('true', 'Successfully Edit News.');
                        redirect(base_url('adm/newsmanagement'), 'refresh');
                    } else {
                        $this->session->set_flashdata('false', 'Failed To Edit News.');
                        redirect(base_url('adm/newsmanagement/edit?news_id=' . $query->id), 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('false', 'News Data Not Found.');
                    redirect(base_url('adm/newsmanagemet'), 'refresh');
                }
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url('adm/newsmanagement/edit?news_id=' . $this->input->get('news_id', true)), 'refresh');
            }
        } else {
            $data2 = array(
                'upload_data' => $this->upload->data()
            );

            $query = $this->db->get_where('web_quickslide', array('id' => $this->input->get('news_id', true)))->row();
            if ($query) {
                $query2 = $this->db->where('id', $query->id)->update('web_quickslide', array(
                    'quickslide_title' => $this->encryption->decrypt($data['quickslide_title']),
                    'quickslide_description' => $this->encryption->decrpyt($data['quickslide_description']),
                    'quickslide_img' => $data2['upload_data']['file_name'],
                    'quickslide_date' => date('d-m-Y')
                ));
                if ($query2) {
                    $this->session->set_flashdata('true', 'Successfully Edit News.');
                    redirect(base_url('adm/newsmanagement'), 'refresh');
                } else {
                    $this->session->set_flashdata('false', 'Failed To Edit News.');
                    redirect(base_url('adm/newsmanagement/edit?news_id=' . $query->id), 'refresh');
                }
            } else {
                $this->session->set_flashdata('false', 'News Data Not Found.');
                redirect(base_url('adm/newsmanagemet'), 'refresh');
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
            $query2 = $this->db->where('id', $query->id)->delete('web_quickslide');
            if ($query2) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete News Data.';

                echo json_encode($response);
            } else {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete News Data.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'News Data Not Found.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
