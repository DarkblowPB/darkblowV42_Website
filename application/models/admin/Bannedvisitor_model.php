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
        return $this->db->order_by('id', 'desc')->get('web_ipbanned')->result_array();
    }

    function AddIPAddress()
    {
        sleep(1);
        $response = array();

        $data = array(
            'ipaddress' => $this->input->post('ip_address', true),
            'reason' => $this->input->post('reason', true),
        );

        $query = $this->db->insert('web_ipbanned', $data);
        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Add Ip Address.';

            echo json_encode($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Add Ip Address.';

            echo json_encode($response);
        }
    }

    function DeleteIPAddress()
    {
        sleep(1);
        $response = array();

        $data = array(
            'id' => $this->input->post('id', true)
        );

        $query = $this->db->get_where('web_ipbanned', array('id' => $data['id']))->row();
        if ($query) {
            $delete = $this->db->where('id', $query->id)->delete('web_ipbanned');
            if ($delete) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Ip Address.';

                echo json_encode($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Ip Address.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Data Not Found.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
