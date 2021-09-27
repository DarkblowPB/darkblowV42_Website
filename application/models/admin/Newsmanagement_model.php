<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllNews()
    {
        return $this->db->order_by('id', 'desc')->get('web_quickslide')->result_array();
    }

    function GetDetails($news_id)
    {
        $query = $this->db->get_where('web_quickslide', array('id' => $news_id))->row();
        if ($query)
        {
            return $query;
        }
        else
        {
            redirect(base_url('adm/newsmanagement'), 'refresh');
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
            'allowed_types' => 'jpg|png|jpeg',
            'max_size' => '2048',
            'max_width' => '1920',
            'max_height' => '1080',
            'encrypt_name' => TRUE,
            'remove_spaces' => TRUE,
        );

        $this->load->library('upload', $config);

        // If Empty Image
        if (!empty($_FILES['image']['name']))
        {
            $_FILES['file']['name'] = $_FILES['image']['name'];
            $_FILES['file']['type'] = $_FILES['image']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'];
            $_FILES['file']['error'] = $_FILES['image']['error'];
            $_FILES['file']['size'] = $_FILES['image']['size'];

            if ($this->upload->do_upload('file'))
            {
                $file_data = $this->upload->data();
    
                $query = $this->db->insert('web_quickslide', array(
                    'quickslide_title' => $this->encryption->decrypt($data['quickslide_title']),
                    'quickslide_description' => $this->encryption->decrypt($data['quickslide_description']),
                    'quickslide_img' => $file_data['file_name'],
                    'quickslide_date' => date('d-m-Y')
                ));
    
                if ($query)
                {
                    $this->session->set_flashdata('true', 'Successfully Add New News. [WITH IMAGE]');
                    redirect(base_url('adm/newsmanagement'), 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('false', 'Failed To Add New News.');
                    redirect(base_url('adm/newsmanagement'), 'refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('false', validation_errors());
                redirect(base_url('adm/newsmanagement'), 'refresh');
            }
        }
        // If Contains Image
        else
        {
            $query = $this->db->insert('web_quickslide', array(
                'quickslide_title' => $this->encryption->decrypt($data['quickslide_title']),
                'quickslide_description' => $this->encryption->decrypt($data['quickslide_description']),
                'quickslide_img' => 'no_pic.png',
                'quickslide_date' => date('d-m-Y')
            ));
    
            if ($query)
            {
                $this->session->set_flashdata('true', 'Successfully Add New News. [NO IMAGE]');
                redirect(base_url('adm/newsmanagement'), 'refresh');
            }
            else
            {
                $this->session->set_flashdata('false', 'Failed To Add New News.');
                redirect(base_url('adm/newsmanagement'), 'refresh');
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>