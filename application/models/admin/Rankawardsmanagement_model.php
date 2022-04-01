<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Rankawardsmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllRankRewards()
    {
        return $this->db->order_by('rank_id', 'asc')->get('info_rank_awards')->result_array();
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function GetAllRank()
    {
        return $this->db->order_by('id')->get('web_rankinfo')->result_array();
    }

    function GetRank($rank_id)
    {
        $query = $this->db->get_where('web_rankinfo', array('id' => $rank_id))->row();
        if ($query) return $query->rank_name;
        else return "";
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "";
    }

    function AddNewAwards()
    {
        $response = array();

        $data = array(
            'rank_id' => $this->encryption->encrypt($this->input->post('rank_id', true)),
            'item_id' => $this->encryption->encrypt($this->input->post('item_id', true)),
            'item_count' => $this->encryption->encrypt($this->input->post('item_count', true)),
            'item_equip' => '1'
        );

        $query = $this->db->insert('info_rank_awards', array(
            'rank_id' => $this->encryption->decrypt($data['rank_id']),
            'item_id' => $this->encryption->decrypt($data['item_id']),
            'item_count' => $this->encryption->decrypt($data['item_count']),
            'item_name' => $this->GetItemName($this->encryption->decrypt($data['item_id'])),
            'item_equip' => $data['item_equip']
        ));
        if ($query) {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Add New Awards.';

            echo json_encode($response);
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Add New Awards.';

            echo json_encode($response);
        }
    }

    function DeleteAwards()
    {
        $response = array();

        $data = array(
            'rank_id' => $this->encryption->encrypt($this->input->post('rank_id', true)),
            'item_id' => $this->encryption->encrypt($this->input->post('item_id', true))
        );

        $query = $this->db->get_where('info_rank_awards', array('rank_id' => $this->encryption->decrypt($data['rank_id']), 'item_id' => $this->encryption->decrypt($data['item_id'])))->row();
        if ($query) {
            // Delete
            $delete = $this->db->where(array('rank_id' => $query->rank_id, 'item_id' => $query->item_id))->delete('info_rank_awards');
            if ($delete) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Awards.';

                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Awards.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Data.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
