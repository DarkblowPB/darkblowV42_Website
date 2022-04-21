<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Bannedvisitor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllIPAddress()
    {
        return $this->db->get('web_ipbanned')->result_array();
    }

    function DeleteIPAddress()
    {
        $response = array();

        $data = array(
            'ip_address' => $this->encryption->encrypt($this->input->post('ip_address', true))
        );

        $query = $this->db->get_where('web_ipbanned', array('ip_address' => $this->encryption->decrypt($data['ip_address'])))->row();
        if ($query) {
            $delete = $this->db->where('ip_address', $query->ip_address)->delete('web_ipbanned');
            if ($delete) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Deleted IP Address.';

                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete IP Address.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid IP Address.';

            echo json_encode($response);
        }
    }

    function AddIPAddress()
    {
        $response = array();

        $data = array(
            'ip_address' => $this->encryption->encrypt($this->input->post('ip_address', true))
        );

        $query = $this->db->get_where('web_ipbanned', array('ip_address' => $this->encryption->decrypt($data['ip_address'])))->row();
        if ($query) {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'This IP Address Already Exists.';

            echo json_encode($response);
        } else {
            $insert = $this->db->insert('web_ipbanned', array('ip_address' => $this->encryption->decrypt($data['ip_address'])));
            if ($insert) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Add New IP Address.';

                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Add New IP Address';

                echo json_encode($response);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
