<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Exchangeticket_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encryption');
    }

    function get_ticket($p_id, $ticket_id)
    {
        // Check Player Ticket
        $query_ticket = $this->db->get_where('player_items', array('owner_id' => $p_id, 'item_id' => $ticket_id));
        $ticket = $query_ticket->row();
        if ($ticket)
        {
            return $ticket->count;
        }
        else 
        {
            return "0";
        }
    }

    function ticket($ticket_id)
    {
        $query_ticket = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $ticket_id));
        $ticket = $query_ticket->row();
        if ($ticket)
        {
            return $ticket->item_id;
        }
        else 
        {
            return "0";
        }
    }

    function list_item()
    {
        return $this->db->get_where('web_exchangeticket', array('visible' => 't'))->result_array();
    }

    function check_item_status($item_id)
    {
        $query_check = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id));
        $check = $query_check->row();
        if ($check)
        {
            return "Already Own";
        }
        else 
        {
            return "Not Own";
        }
    }

    function validate($item_id)
    {
        $data = array('item_id' => $this->encryption->encrypt($item_id));

        if (!empty($_SESSION['uid']))
        {
            $query_check_visibility = $this->db->get_where('web_exchangeticket', array('item_id' => $this->encryption->decrypt($data['item_id'])));
            $check_visibility = $query_check_visibility->row();
            {
                if ($check_visibility->stock > 0 && $check_visibility->visible == "t")
                {
                    $query_own_ticket = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => '1301513000'));
                    $own_ticket = $query_own_ticket->row();
                    if ($own_ticket)
                    {
                        if ($own_ticket->count < $check_visibility->item_price)
                        {
                            $this->session->set_flashdata('false', 'Your Ticket Is Not Enough');
                            redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                        }
                        if ($own_ticket->count >= $check_visibility->item_price)
                        {
                            $query_owned = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $check_visibility->item_id));
                            $owned = $query_owned->row();
                            if ($owned)
                            {
                                if ($owned->equip == 1)
                                {
                                    $ticket_remain = $own_ticket->count - $check_visibility->item_price;
                                    $qty_remain = $check_visibility->stock - 1;

                                    $change_state = $this->db->where(array('owner_id' => $owned->owner_id, 'item_id' => $owned->item_id))->update('player_items', array('count' => '1', 'equip' => '3'));
                                    $update_ticket = $this->db->where(array('owner_id' => $owned->owner_id, 'item_id' => '1301513000'))->update('player_items', array('count' => $ticket_remain));
                                    $update_qty = $this->db->where(array('item_id' => $check_visibility->item_id))->update('web_exchangeticket', array('stock' => $qty_remain));
                                    if ($change_state && $update_ticket && $update_qty)
                                    {
                                        $this->session->set_flashdata('true', 'Congratulations, You Successfully Exchange Item '.$owned->item_name. ' To Permanent Status.');
                                        redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                    }
                                    else 
                                    {
                                        $this->session->set_flashdata('false', 'Major Error, Please Contact DEV / GM For Detail Information [1]');
                                        redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                    }
                                }
                                if ($owned->equip != 1)
                                {
                                    $delete_state = $this->db->where(array('owner_id' => $owned->owner_id, 'item_id' => $owned->item_id))->delete('player_items');
                                    if ($delete_state)
                                    {
                                        $ticket_remain = $own_ticket->count - $check_visibility->item_price;
                                        $qty_remain = $check_visibility->stock - 1;

                                        $insert_new_item = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $check_visibility->item_id, 'item_name' => $check_visibility->item_name, 'count' => $check_visibility->item_count, 'category' => '1', 'equip' => '3'));
                                        $update_ticket = $this->db->where(array('owner_id' => $owned->owner_id, 'item_id' => '1301513000'))->update('player_items', array('count' => $ticket_remain));
                                        $update_qty = $this->db->where(array('item_id' => $check_visibility->item_id))->update('web_exchangeticket', array('stock' => $qty_remain));
                                        if ($insert_new_item && $update_ticket && $update_qty)
                                        {
                                            $this->session->set_flashdata('true', 'Congratulations, You Successfully Exchange Item '.$check_visibility->item_name. '.');
                                            redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                        }
                                        else 
                                        {
                                            $this->session->set_flashdata('false', 'Major Error, Please Contact DEV / GM For Detail Information [2]');
                                            redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                        }
                                    }
                                    else 
                                    {
                                        $this->session->set_flashdata('false', 'Major Error, Please Contact DEV / GM For Detail Information [3]');
                                        redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                    }
                                }
                            }
                            else 
                            {
                                $ticket_remain = $own_ticket->count - $check_visibility->item_price;
                                $qty_remain = $check_visibility->stock - 1;

                                $insert_new_item = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $check_visibility->item_id, 'item_name' => $check_visibility->item_name, 'count' => $check_visibility->item_count, 'category' => '1', 'equip' => '3'));
                                $update_ticket = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => '1301513000'))->update('player_items', array('count' => $ticket_remain));
                                $update_qty = $this->db->where(array('item_id' => $check_visibility->item_id))->update('web_exchangeticket', array('stock' => $qty_remain));
                                if ($insert_new_item && $update_ticket && $update_qty)
                                {
                                    $this->session->set_flashdata('true', 'Congratulations, You Successfully Exchange Item '.$check_visibility->item_name. '.');
                                    redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                }
                                else 
                                {
                                    $this->session->set_flashdata('false', 'Major Error, Please Contact DEV / GM For Detail Information [2]');
                                    redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                                }
                            }
                        }
                    }
                    else 
                    {
                        $this->session->set_flashdata('false', 'Major Error, Please Contact DEV / GM For Detail Information [5]');
                        redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                    }
                }
                else 
                {
                    $this->session->set_flashdata('false', 'Item Not Found');
                    redirect(base_url('player_panel/exchange_ticket'), 'refresh');
                }
            }
        }
        if (empty($_SESSION['uid']))
        {
            redirect(base_url('login'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>