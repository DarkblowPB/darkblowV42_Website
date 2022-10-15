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
    }

    function GetEvents()
    {
        return $this->db->get_where(Darkblowdatabase::events_register, array('id' => '1'))->row();
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::shop, array('item_id' => $item_id))->row();
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
        return $this->db->order_by('item_id', 'asc')->get(Darkblowdatabase::shop)->result_array();
    }

    function UpdateEventsState()
    {
        $response = array();

        if ($this->GetEvents()->is_active == 'f') {
            $query = $this->db->where('id', '1')->update(Darkblowdatabase::events_register, array('is_active' => 't'));
            if ($query) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Enable The Events.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Enable The Events.';
            }
        } else {
            $query = $this->db->where('id', '1')->update(Darkblowdatabase::events_register, array('is_active' => 'f'));
            if ($query) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Disable The Events.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Disable The Events.';
            }
        }
    }

    function UpdateEvents()
    {
        $response = array();

        $data = array(
            'item_id' => $this->input->post('item_id', true),
            'item_count' => $this->input->post('item_count', true),
            'stock' => $this->input->post('stock', true)
        );

        $update = $this->db->update(Darkblowdatabase::events_register, array(
            'item_id' => $data['item_id'],
            'item_name' => $this->GetItemName($data['item_id']),
            'item_category' => $this->GetItemCategory2($data['item_id']),
            'item_count' => $data['item_count'],
            'stock' => $data['stock'],
            'is_active' => 't'
        ));

        if ($update) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Update The Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update The Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
