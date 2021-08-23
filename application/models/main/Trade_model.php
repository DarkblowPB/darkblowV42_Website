<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Trade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAllItems()
    {
        return $this->db->order_by('id', 'desc')->get('trade_market')->result_array();
    }

    function CreateNewItem()
    {
        $data = array(
            'item_id' => $this->encryption->encrypt($this->input->post('item_id')),
            'item_name' => $this->encryption->encrypt($this->input->post('item_name')),
            'item_duration' => $this->encryption->encrypt($this->input->post('item_duration')),
            'item_price' => $this->encryption->encrypt($this->input->post('item_price')),
            'item_owner' => $this->encryption->encrypt($_SESSION['player_name']),
            'date_created' => date('d-m-Y'),
            'valid_duration' => '1 Month'
        );

        $query = $this->db->insert('trade_market', array(
            'item_id' => $this->encryption->encrypt($data['item_id']),
            'item_name' => $this->encryption->encrypt($data['item_name']),
            'item_duration' => $this->encryption->encrypt($data['item_duration']),
            'item_price' => $this->encryption->encrypt($data['item_price']),
            'item_owner' => $this->encryption->encrypt($data['item_owner']),
            'date_created' => $data['date_created'],
            'valid_duration' => $data['valid_duration']
        ));
        if ($query)
        {
            // Delete Items From Player Inventory
            $fetchPlayer = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid']))->row();
            if ($fetchPlayer)
            {
                $delete = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $this->encryption->decrypt($data['item_id'])));
                if ($delete)
                {
                    $this->session->set_flashdata('true', 'Successfully Pull New Item.');
                    redirect(base_url('trade'), 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('false', 'Failed to Pull New Item.');
                    redirect(base_url('trade'), 'refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('false', 'No Items Found On Your Inventory.');
                redirect(base_url('trade'), 'refresh');
            }
        }
        else
        {
            $this->session->set_flashdata('false', 'Failed to Pull New Item.');
            redirect(base_url('trade'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>