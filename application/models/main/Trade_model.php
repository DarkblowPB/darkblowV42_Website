<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Trade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->lang->load('message');
    }

    function SetCategory($item_id)
    {
        if ($item_id >= 100003001 && $item_id <= 904007069) return "1";
        else if ($item_id >= 1001001003 && $item_id <= 1105003032) return "2";
        else if ($item_id >= 1300002003 && $item_id <= 1302379000) return "3";
        else return "0";
    }

    function ConvertBaseNameItem($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "???";
    }

    function GetPlayerName($player_id)
    {
        $query = $this->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query) return $query->player_name;
        else return "";
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
        if ($result > 0) return $result;
        else return "0";
    }

    function GetPlayerInventoryItems()
    {
        return $this->db->order_by('object_id', 'desc')->get_where('player_items', array('owner_id' => $this->session->userdata('uid'), 'equip' => '1'))->result_array();
    }

    function CreateNewItem()
    {
        $response = array();

        $data = array(
            'item_id' => $this->encryption->encrypt($this->input->post('item_id', true)),
            'item_price' => $this->encryption->encrypt($this->input->post('item_price', true))
        );

        $query = $this->db->get_where('player_items', array('owner_id' => $this->session->userdata('uid'), 'item_id' => $this->encryption->decrypt($data['item_id'])))->row();
        if ($query) {
            if ($query->equip != 1) {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = $this->lang->line('STR_ERROR_46');

                echo json_encode($response);
            } else {
                $query2 = $this->db->get_where('trade_market', array('item_owner' => $query->owner_id, 'item_id' => $query->item_id))->row();
                if ($query2) {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = $this->lang->line('STR_ERROR_47');

                    echo json_encode($response);
                } else {
                    $insertitem = $this->db->insert('trade_market', array(
                        'item_id' => $this->encryption->decrypt($data['item_id']),
                        'item_name' => $this->ConvertBaseNameItem($this->encryption->decrypt($data['item_id'])),
                        'item_category' => $this->SetCategory($this->encryption->decrypt($data['item_id'])),
                        'item_duration' => $query->count,
                        'item_price' => $this->encryption->decrypt($data['item_price']),
                        'item_owner' => $this->session->userdata('uid'),
                        'day' => date('d'),
                        'month' => date('m'),
                        'year' => date('Y'),
                        'valid_duration' => '1 Month'
                    ));
                    $deletefrominventory = $this->db->where(array('owner_id' => $query->owner_id, 'item_id' => $query->item_id))->delete('player_items');
                    if ($insertitem && $deletefrominventory) {
                        $response['response'] = 'true';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = $this->lang->line('STR_SUCCESS_13');

                        echo json_encode($response);
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = $this->lang->line('STR_ERROR_48');

                        echo json_encode($response);
                    }
                }
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->lang->line('STR_ERROR_49');

            echo json_encode($response);
        }
    }

    function BuyItem()
    {
        $response = array();

        $data = array(
            'trade_id' => $this->encryption->encrypt($this->input->post('trade_id', true))
        );

        $query = $this->db->get_where('trade_market', array('id' => $this->encryption->decrypt($data['trade_id'])))->row();
        if ($query) {
            $fetchaccount2 = $this->db->get_where('accounts', array('player_id' => $query->item_owner))->row();
            $fetchaccount = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
            if ($fetchaccount) {
                if ($fetchaccount->player_id == $query->item_owner) {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = $this->lang->line('STR_ERROR_50');

                    echo json_encode($response);
                } else {
                    if ($fetchaccount->kuyraicoin < ($query->item_price + 250)) {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = $this->lang->line('STR_ERROR_51');

                        echo json_encode($response);
                    } else {
                        $query2 = $this->db->get_where('player_items', array('owner_id' => $fetchaccount->player_id, 'item_id' => $query->item_id))->row();
                        if ($query2) {
                            if ($query2->equip == 1) {
                                $updatecount = $this->db->where(array('owner_id' => $query2->owner_id, 'item_id' => $query2->item_id))->update('player_items', array('count' => ($query2->count + $query->item_duration)));
                                $updatewebcoin = $this->db->where('player_id', $query2->owner_id)->update('accounts', array('kuyraicoin' => ($fetchaccount->kuyraicoin - ($query->item_price + 250))));
                                $updatetradeitem = $this->db->where('id', $this->encryption->decrypt($data['trade_id']))->update('trade_market', array('year' => '1970'));
                                $updateitemownercash = $this->db->where('player_id', $query->item_owner)->update('accounts', array('kuyraicoin' => ($fetchaccount2->kuyraicoin + ($query->item_price + 500))));
                                if ($updatecount && $updatewebcoin && $updatetradeitem && $updateitemownercash) {
                                    $response['response'] = 'true';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = $this->lang->line('STR_SUCCESS_14');

                                    echo json_encode($response);
                                } else {
                                    $response['token'] = 'false';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = $this->lang->line('STR_FATAL_ERROR_1');

                                    echo json_encode($response);
                                }
                            } else {
                                $response['response'] = 'false';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = $this->lang->line('STR_ERROR_52');

                                echo json_encode($response);
                            }
                        } else {
                            $insertnewitem = $this->db->insert('player_items', array(
                                'owner_id' => $this->session->userdata('uid'),
                                'item_id' => $query->item_id,
                                'item_name' => $query->item_name,
                                'count' => $query->item_duration,
                                'category' => $query->item_category,
                                'equip' => '1'
                            ));
                            $updatewebcoin = $this->db->where('player_id', $this->session->userdata('uid'))->update('accounts', array('kuyraicoin' => ($fetchaccount->kuyraicoin - ($query->item_price + 250))));
                            $updatetradeitem = $this->db->where('id', $this->encryption->decrypt($data['trade_id']))->update('trade_market', array('year' => '1970'));
                            $updateitemownercash = $this->db->where('player_id', $query->item_owner)->update('accounts', array('kuyraicoin' => ($fetchaccount2->kuyraicoin + ($query->item_price + 500))));

                            if ($insertnewitem && $updatewebcoin && $updatetradeitem && $updateitemownercash) {
                                $response['response'] = 'true';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = $this->lang->line('STR_SUCCESS_14');

                                echo json_encode($response);
                            } else {
                                $response['response'] = 'true';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = $this->lang->line('STR_ERROR_52');

                                echo json_encode($response);
                            }
                        }
                    }
                }
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = $this->lang->line('STR_ERROR_53');

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->lang->line('STR_ERROR_54');

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
