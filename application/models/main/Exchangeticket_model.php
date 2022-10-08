<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Exchangeticket_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetTicketID($p_id, $ticket_id)
    {
        // Check Player Ticket
        $query_ticket = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $p_id, 'item_id' => $ticket_id));
        $ticket = $query_ticket->row();
        if ($ticket) return $ticket->count;
        else return "0";
    }

    function ticket($ticket_id)
    {
        $query_ticket = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $this->session->userdata('uid'), 'item_id' => $ticket_id));
        $ticket = $query_ticket->row();
        if ($ticket) return $ticket->item_id;
        else return "0";
    }

    function GetAllItems()
    {
        return $this->db->get_where(Darkblowdatabase::web_exchangeticket, array('visible' => 't'))->result_array();
    }

    function check_item_status($item_id)
    {
        $query_check = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $this->session->userdata('uid'), 'item_id' => $item_id));
        $check = $query_check->row();
        if ($check) return "Already Own";
        else return "Not Own";
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
