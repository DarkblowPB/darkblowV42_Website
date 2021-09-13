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

    function ConvertBaseNameItem($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query)
        {
            return $query->item_name;
        }
        else
        {
            return "???";
        }
    }

    function GetPlayerName($player_id)
    {
        $query = $this->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query)
        {
            return $query->player_name;
        }
        else
        {
            return "";
        }
    }

    function GetAllItems()
    {
        return $this->db->get_where('trade_market', array('month' => date('m'), 'year' => date('Y')))->result_array();

    }

    function GetDurationLeftEachMonth()
    {
        $lastDays = date('t');
        $dayNow = date('d');

        $result = $lastDays - $dayNow;
        if ($result > 0)
        {
            return $result;
        }
        else
        {
            return "0";
        }
    }

    function GetPlayerInventoryItems()
    {
        return $this->db->order_by('object_id', 'desc')->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'equip' => '1'))->result_array();
    }

    function CreateNewItem()
    {
        $response = array();

        $data = array(
            'item_id' => $this->encryption->encrypt($this->input->post('item_id')),
            'item_price' => $this->encryption->encrypt($this->input->post('item_price'))
        );

        // Fetch Player Inventory
        $fetch1 = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $this->encryption->decrypt($data['item_id'])))->row();
        if ($fetch1)
        {
            if ($fetch1->equip != 1)
            {
                echo "false";
            }
            else
            {
                // Insert Data
                $insert = $this->db->insert('trade_market', array(
                    'item_id' => $this->encryption->decrypt($data['item_id']),
                    'item_name' => $this->ConvertBaseNameItem($this->encryption->decrypt($data['item_id'])),
                    'item_category' => $fetch1->category,
                    'item_duration' => $fetch1->count,
                    'item_price' => $this->encryption->decrypt($data['item_price']),
                    'item_owner' => $_SESSION['uid'],
                    'day' => date('d'),
                    'month' => date('m'),
                    'year' => date('Y'),
                    'valid_duration' => '1 Month'
                ));
                if ($insert)
                {
                    // Delete Item From Player Inventory
                    $delete = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $this->encryption->decrypt($data['item_id'])))->delete('player_items');
                    if ($delete)
                    {
                        $response['response'] = 'true';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Post Item.';
                        echo json_encode($response);
                    }
                    else
                    {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed To Post The Item.';
                        echo json_encode($response);
                    }
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Cannot Trade Equipped Item.';
                    echo json_encode($response);
                }
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'This Item Is Unavailable For Trade.';
            echo json_encode($response);
        }
    }

    function BuyItem()
    {
        $data = array('id' => $this->encryption->encrypt($this->input->post('trade_id')));

        $query = $this->db->get_where('trade_market', array('id' => $this->encryption->decrypt($data['id'])))->row();
        if ($query)
        {
            $itemDate = $query->day.'-'.$query->month;
            $dateNow = date('d-m');
            if ($itemDate != $dateNow)
            {
                echo "false";
            }
            else
            {
                // Check Player Data
                $fetch = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row();
                if ($fetch)
                {
                    // Check Webcoin Count
                    if ($fetch->kuyraicoin < $query->item_price)
                    {
                        echo "false2";
                    }
                    else
                    {
                        // Check Player inventory
                        $fetch2 = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $query->item_id))->row();
                        if ($fetch2)
                        {
                            if ($fetch2->equip == 1)
                            {
                                $totalCount = $fetch2->count + $query->item_duration;
                                $totalCoin = $fetch->kuyraicoin - $query->item_price;
                                
                                // Add Duration
                                $update = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $query->item_id))->update('player_items', array('count' => $totalCount));
                                if ($update)
                                {
                                    // Update Trade Item Year to 1970 -> Not Deleting From Table But Change Year Value For History
                                    $update2 = $this->db->where('id', $query->id)->update('trade_market', array('year' => '1970'));
                                    
                                    // Update Webcoin
                                    $update3 = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('kuyraicoin' => $totalCoin));
                                    if ($update2 && $update3)
                                    {
                                        // Fetch Owner Data
                                        $fetch3 = $this->db->get_where('accounts', array('player_id' => $query->item_owner))->row();
                                        if ($fetch3)
                                        {
                                            $getPercentage = (5 / 100) * $query->item_price;
                                            $totalCoin2 = $fetch3->kuyraicoin + $getPercentage;
                                            // Update Owner Webcoin
                                            $this->db->where('player_id', $fetch3->player_id)->update('accounts', array('kuyraicoin' => $totalCoin2));
                                            echo "true";
                                        }
                                    }
                                    else
                                    {
                                        echo "false3";
                                    }
                                }
                                else
                                {
                                    echo "false4";
                                }
                            }
                            else
                            {
                                echo "false5";
                            }
                        }
                        else
                        {
                            // Add New Item To Inventory Player
                            $insert = $this->db->insert('player_items', array(
                                'owner_id' => $_SESSION['uid'],
                                'item_id' => $query->item_id,
                                'item_name' => $query->item_name,
                                'count' => $query->item_duration,
                                'category' => $query->item_category,
                                'equip' => '1'
                            ));
                            if ($insert)
                            {
                                $totalCoin = $fetch->kuyraicoin - $query->item_price;
                                // Update Trade Item Year to 1970 -> Not Deleting From Table But Change Year Value For History
                                $update4 = $this->db->where('id', $query->id)->update('trade_market', array('year' => '1970'));
                                // Update Webcoin
                                $update5 = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('kuyraicoin' => $totalCoin));
                                if ($update4 && $update5)
                                {
                                    // Fetch Owner Data
                                    $fetch3 = $this->db->get_where('accounts', array('player_id' => $query->item_owner))->row();
                                    if ($fetch3)
                                    {
                                        $getPercentage = (10 / 100) * $query->item_price;
                                        $totalCoin2 = $fetch3->kuyraicoin + $getPercentage;
                                        // Update Owner Webcoin
                                        $this->db->where('player_id', $fetch3->player_id)->update('accounts', array('kuyraicoin' => $totalCoin2));
                                        echo "true2";
                                    }
                                }
                                else
                                {
                                    echo "false6";
                                }
                            }
                            else
                            {
                                echo "false7";
                            }
                        }
                    }
                }
                else
                {
                    echo "false8";
                }
            }
        }
        else
        {
            echo "false9";
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>