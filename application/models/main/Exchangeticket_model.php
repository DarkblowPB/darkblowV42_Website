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
    }

    function GetTicketID($p_id, $ticket_id)
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

    function GetAllItems()
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

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query)
        {
            return $query->item_name;
        }
        else
        {
            return "";
        }
    }

    function GetItemCategory($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069)
        {
            return "1";
        }
        else if ($item_id >= 1001001007 && $item_id <= 1105003032)
        {
            return "2";
        }
        else if ($item_id >= 1300002003 && $item_id <= 1302379000)
        {
            return "3";
        }
        else
        {
            return "-1";
        }
    }

    function ExchangeItemV2()
    {
        $response = array();
        $data = array(
            'id' => $this->encryption->encrypt($this->input->post('id', true))
        );
        $result = array(
            'success' => 0,
            'failed' => 0,
            'warning' => 0
        );

        $query = array(
            'fetch_account' => $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row(),
            'fetch_ticket' => $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $this->getsettings->Get2()->event_ticket))->row(),
            'fetch_exchange' => $this->db->get_where('web_exchangeticket', array('id' => $this->encryption->decrypt($data['id'])))->row()
        );

        if ($query['fetch_exchange'])
        {
            if ($query['fetch_exchange']->visible == 'f')
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Item Not Available For Exchange.';
                echo json_encode($response);
            }
            else if ($query['fetch_exchange']->visible == 't')
            {
                if ($query['fetch_ticket'])
                {
                    if ($query['fetch_ticket'] <= 0)
                    {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Your Ticket Not Enough For Exchange This Item.';
                        echo json_encode($response);
                    }
                    else
                    {
                        $item = explode(',', $query['fetch_exchange']->item_id);
                        $count = count($item);

                        for ($i=0; $i < $count - 1; $i++)
                        {
                            
                        }
                    }
                }
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Invalid Exchange Items.';
                echo json_encode($response);
            }
        }
    }

    /**
     * validate
     * 
     * This Function Is Decprecated. Do Not Use This Function.
     */
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