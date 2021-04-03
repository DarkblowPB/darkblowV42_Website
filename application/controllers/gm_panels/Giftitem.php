<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Giftitem extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function index()
    {
        if (empty($_GET['player_id'])) 
        {
            echo "Error 01";
        }
        if (empty($_GET['item_id'])) 
        {
            echo "Error 02";
        }
        if (empty($_GET['count'])) 
        {
            echo "Error 03";
        }
        if (!empty($_GET['player_id']) && !empty($_GET['item_id']) && !empty($_GET['count']))
        {
            $player1 = $this->db->get_where('accounts', array('player_id' => pg_escape_string($_GET['player_id'])));
            $player2 = $player1->row();
            if ($player2) 
            {
                if ($player2->access_level == -1)
                {
                    echo "Error 04";
                }
                if ($player2->access_level >= 3 && $player2->access_level <= 6) 
                {
                    echo "Warning 01";
                }

                $inventory1 = $this->db->get_where('player_items', array('owner_id' => $player2->palyer_id, 'item_id' => pg_escape_string($_GET['item_id'])));
                $inventory2 = $inventory1->row();
                if ($inventory2) 
                {
                    if ($inventory2->equip == 1) 
                    {
                        $total_count = $inventory2->count + pg_escape_string($_GET['count']);
                        $update = $this->db->where(array('owner_id' => $inventory2->owner_id, 'item_id' => $inventory2->item_id))->update('player_items', array('count' => $total_count));
                        if ($update) 
                        {
                            echo "Success 01";
                        }
                        else 
                        {
                            echo "Error 05";
                        }
                    }
                    if ($inventory2->equip != 1) 
                    {
                        echo "Error 06";
                    }
                }
                else 
                {
                    $shop1 = $this->db->get_where('shop', array('item_id' => pg_escape_string($_GET['item_id'])));
                    $shop2 = $shop1->row();
                    if ($shop2) 
                    {
                        if (pg_escape_string($_GET['count']) == "3Days") 
                        {
                            $item_name = "Item By DEV";
                            $insert = $this->db->insert('player_items', array('owner_id' => pg_escape_string($_GET['player_id']), 'item_id' => $shop2->item_id, 'item_name' => $item_name, 'count' => '259200'));
                            if ($insert) 
                            {
                                echo "Success 02";
                            }
                            else 
                            {
                                echo "Error 07";
                            }
                        }
                        if (pg_escape_string($_GET['count']) == "7 Days") 
                        {
                            $item_name = "Item By DEV";
                            $insert = $this->db->insert('player_items', array('owner_id' => pg_escape_string($_GET['player_id']), 'item_id' => $shop2->item_id, 'item_name' => $item_name, 'count' => '604800'));
                            if ($insert) 
                            {
                                echo "Success 03";
                            }
                            else 
                            {
                                echo "Error 08";
                            }
                        }
                    }
                    else
                    {
                        echo "Error 09";
                    }
                }
            }
            else 
            {
                echo "Error 10";
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>