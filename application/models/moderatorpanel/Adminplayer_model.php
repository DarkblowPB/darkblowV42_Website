<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminplayer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('moderatorpanel/logger_model', 'logger');
    }

    function getPlayerAll()
    {
        return $this->db->query('SELECT player_id, player_name, access_level FROM accounts WHERE access_level <= 2 ORDER BY player_id DESC')->result_array();
    }

    function getname_weapon($param)
    {
        $check = $this->db->get_where('shop', array('item_id' => $param));
        $result = $check->row();
        if ($result) 
        {
            echo $result->item_name;
        }
        else 
        {
            echo "";
        }
    }

    function getPlayerId($id)
    {
        $check = $this->db->get_where('accounts', array('player_id' => $id));
        $result = $check->row();
        if ($result) 
        {
            if ($result->access_level >= 3) 
            {
                $this->session->set_flashdata('Failed', 'You Cant Banned Player With Level Access Higher Than 2');
                redirect(base_url('moderatorpanel/player'), 'refresh');
            }
            if ($result->access_level >= 0 && $result->access_level < 3) 
            {
                return $result;
            }
            if ($result->access_level < 0) 
            {
                $this->session->set_flashdata('Failed', 'This Player Already Banned Permanently');
                redirect(base_url('moderatorpanel/player'), 'refresh');
            }
        }
        else 
        {
            $this->session->set_flashdata('Failed', 'Player Not Found');
            redirect(base_url('moderatorpanel/player'), 'refresh');
        }
    }

    function banned_player()
    {
        $data = array(
            'player_id' => $this->input->post('player_id'),
            'player_name' => $this->input->post('player_name'),
            'banned_type' => $this->input->post('banned_type')
        );

        if ($data['player_id'] != $_GET['id']) 
        {
            $this->session->set_flashdata('Failed', 'Failed To Banned Players');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }
        // Fetch Account
        $fetch_account = $this->db->get_where('accounts', array('player_id' => $data['player_id'], 'player_name' => $data['player_name']));
        $result_fetch = $fetch_account->row();
        if ($result_fetch) 
        {
            // Update Access_Level
            $update_access = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('access_level' => '-1'));
            if ($update_access) 
            {
                $this->session->set_flashdata('Success', 'You Successfully Banned Permanently Player With ID: '.$result_fetch->player_id.'');
                redirect(base_url('moderatorpanel/player'), 'refresh');
            }
            else 
            {
                $this->session->set_flashdata('Failed', 'Major Error, Please Contact DEV & GM For Detail Information.');
                redirect($_SERVER['HTTP_REFERER'], 'refresh');
            }
        }
    }

    function unbanned_player()
    {
        $data = array('player_id' => $this->input->post('player_id'));
        // Checking Account
        $check_account = $this->db->get_where('accounts', array('player_id' => $data['player_id']));
        $result_check = $check_account->row();
        if ($result_check) 
        {
            if ($result_check->access_level == 0) 
            {
                $this->session->set_flashdata('Failed', 'This Player Already Active, Unbanned Has Been Canceled.');
                redirect(base_url('moderatorpanel/player'), 'refresh');
            }
            if ($result_check->access_level == -1) 
            {
                // Update Access_Level
                $update_access = $this->db->where('player_id', $result_check->player_id)->update('accounts', array('access_level' => '0'));
                if ($update_access) 
                {
                    $this->session->set_flashdata('Success', 'Successfully Unbanned Player With ID: '. $result_check->player_id.'.');
                    redirect(base_url('moderatorpanel/player'), 'refresh');
                }
                else 
                {
                    $this->session->set_flashdata('Failed', 'Major Error, Please Contact DEV & GM For Detail Information.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
    
    function getInventoryId($id)
    {
        return $this->db->where('owner_id' , $id)->get('player_items')->num_rows();
    }

    function getItem_unused($id)
    {
        $this->db->select('*');
        $this->db->from('player_items');
        $this->db->where('owner_id', $id);
        $this->db->where('equip', '1');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getItem_used($id)
    {
        $this->db->select('*');
        $this->db->from('player_items');
        $this->db->where('owner_id', $id);
        $this->db->where('equip', '2');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getItem_permanent($id)
    {
        $this->db->select('*');
        $this->db->from('player_items');
        $this->db->where('owner_id', $id);
        $this->db->where('equip', '3');
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getInventoryIdAll($id)
    {
        return $this->db->order_by('object_id', 'desc')->where('owner_id', $id)->get('player_items')->result_array();
    }

    function getItem($object_id)
    {
        return $this->db->where('object_id', $object_id)->get('player_items')->result_array();
    }

    function deleteInventoryId($object_id)
    {
        $this->db->where('object_id', $object_id);
        $this->db->delete('player_items');
    }

    function extendItem()
    {
        $data = array(
            'object_id' => $this->input->get('object_id'),
            'owner_id' => $this->input->get('owner_id'),
            'duration_value' => $this->input->post('duration_value')
        );

        if ($data['duration_value'] > 259000)
        {
            return $this->session->set_flashdata('false', 'KAMU KONTOL. GAUSAH DIUBAH DARI INSPECT');
        }
        
        $update = $this->db->where('object_id', $data['object_id'])->update('player_items', array('count' => $data['duration_value']));
    }

    function getItemDetails($param) // $param returns Object ID
    {
        $query = $this->db->get_where('player_items', array('object_id' => $param))->row();
        if ($query)
        {
            return $query;
        }
        else 
        {
            return redirect(base_url('moderatorpanel/player'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>