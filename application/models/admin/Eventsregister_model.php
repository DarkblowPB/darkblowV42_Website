<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsregister_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('lib');
    }

    function GetEvents()
    {
        return $this->db->get_where('events_register', array('id' => '1'))->row();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "";
    }

    function GetItemCategory($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069) return "Weapon";
        else if ($item_id >= 1001001003 && $item_id <= 1105003032) return "Chara & Headgear";
        else if ($item_id >= 1300002003 && $item_id <= 1302379000) return "Item";
        else return "Invalid Item Category";
    }

    function GetItemCategory2($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069) return "1";
        else if ($item_id >= 1001001003 && $item_id <= 1105003032) return "2";
        else if ($item_id >= 1300002003 && $item_id <= 1302379000) return "3";
        else return "-1";
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function UpdateEventsState()
    {
        $response = array();

        if ($this->GetEvents()->is_active == 'f') {
            $query = $this->db->where('id', '1')->update('events_register', array('is_active' => 't'));
            if ($query) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Enable The Events.';

                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Enable The Events.';
            }
        } else {
            $query = $this->db->where('id', '1')->update('events_register', array('is_active' => 'f'));
            if ($query) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Disable The Events.';

                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Disable The Events.';
            }
        }
    }

    function UpdateEvents()
    {
        $response = array();

        $data = array(
            'item_id' => $this->encryption->encrypt($this->input->post('item_id', true)),
            'item_count' => $this->encryption->encrypt($this->input->post('item_count', true)),
            'stock' => $this->encryption->encrypt($this->input->post('stock', true))
        );

        $update = $this->db->update('events_register', array(
            'item_id' => $this->encryption->decrypt($data['item_id']),
            'item_name' => $this->GetItemName($this->encryption->decrypt($data['item_id'])),
            'item_category' => $this->GetItemCategory2($this->encryption->decrypt($data['item_id'])),
            'item_count' => $this->encryption->decrypt($data['item_count']),
            'stock' => $this->encryption->decrypt($data['stock']),
            'is_active' => 't'
        ));

        if ($update) {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Update The Events.';

            echo json_encode($response);
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update The Events.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
