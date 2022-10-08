<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Vouchermanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get(Darkblowdatabase::shop)->result_array();
    }

    function GetAllVoucher()
    {
        return $this->db->order_by('id', 'desc')->get(Darkblowdatabase::item_voucher)->result_array();
    }

    function GetVoucherDetails($voucher_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::item_voucher, array('id' => $voucher_id))->row();
        if ($query) return $query;
        else redirect(base_url('adm/vouchermanagement'), 'refresh');
    }

    function AddNewVoucher($type)
    {
        sleep(1);
        $response = array();

        switch ($type) {
            case 'small': {
                    $data = array(
                        'reward_1' => $this->encryption->encrypt($this->input->post('reward_1', true)),
                        'reward_2' => $this->encryption->encrypt($this->input->post('reward_2', true)),
                        'reward_3' => $this->encryption->encrypt($this->input->post('reward_3', true)),
                        'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code')),
                        'cash_amount' => $this->encryption->encrypt($this->input->post('cash_amount')),
                        'webcoin_amount' => $this->encryption->encrypt($this->input->post('webcoin_amount'))
                    );

                    $query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
                    if ($query) {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Voucher Code Already Exists.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    } else {
                        $insert = $this->db->insert(Darkblowdatabase::item_voucher, array(
                            'voucher_item' => $this->encryption->decrypt($data['reward_1']) . ','
                                . $this->encryption->decrypt($data['reward_2']) . ','
                                . $this->encryption->decrypt($data['reward_3']),
                            'voucher_cash' => $this->encryption->decrypt($data['cash_amount']),
                            'voucher_webcoin' => $this->encryption->decrypt($data['webcoin_amount']),
                            'voucher_code' => $this->encryption->decrypt($data['voucher_code']),
                            'active' => 't'
                        ));

                        if ($insert) {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        } else {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        }
                    }
                    break;
                }
            case 'medium': {
                    $data = array(
                        'reward_1' => $this->encryption->encrypt($this->input->post('reward_1', true)),
                        'reward_2' => $this->encryption->encrypt($this->input->post('reward_2', true)),
                        'reward_3' => $this->encryption->encrypt($this->input->post('reward_3', true)),
                        'reward_4' => $this->encryption->encrypt($this->input->post('reward_4', true)),
                        'reward_5' => $this->encryption->encrypt($this->input->post('reward_5', true)),
                        'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code')),
                        'cash_amount' => $this->encryption->encrypt($this->input->post('cash_amount')),
                        'webcoin_amount' => $this->encryption->encrypt($this->input->post('webcoin_amount'))
                    );

                    $query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
                    if ($query) {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Voucher Code Already Exists.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    } else {
                        $insert = $this->db->insert(Darkblowdatabase::item_voucher, array(
                            'voucher_item' => $this->encryption->decrypt($data['reward_1']) . ','
                                . $this->encryption->decrypt($data['reward_2']) . ','
                                . $this->encryption->decrypt($data['reward_3']) . ','
                                . $this->encryption->decrypt($data['reward_4']) . ','
                                . $this->encryption->decrypt($data['reward_5']),
                            'voucher_cash' => $this->encryption->decrypt($data['cash_amount']),
                            'voucher_webcoin' => $this->encryption->decrypt($data['webcoin_amount']),
                            'voucher_code' => $this->encryption->decrypt($data['voucher_code']),
                            'active' => 't'
                        ));

                        if ($insert) {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        } else {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        }
                    }
                    break;
                }
            case 'large': {
                    $data = array(
                        'reward_1' => $this->encryption->encrypt($this->input->post('reward_1', true)),
                        'reward_2' => $this->encryption->encrypt($this->input->post('reward_2', true)),
                        'reward_3' => $this->encryption->encrypt($this->input->post('reward_3', true)),
                        'reward_4' => $this->encryption->encrypt($this->input->post('reward_4', true)),
                        'reward_5' => $this->encryption->encrypt($this->input->post('reward_5', true)),
                        'reward_6' => $this->encryption->encrypt($this->input->post('reward_6', true)),
                        'reward_7' => $this->encryption->encrypt($this->input->post('reward_7', true)),
                        'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code')),
                        'cash_amount' => $this->encryption->encrypt($this->input->post('cash_amount')),
                        'webcoin_amount' => $this->encryption->encrypt($this->input->post('webcoin_amount'))
                    );

                    $query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
                    if ($query) {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Voucher Code Already Exists.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    } else {
                        $insert = $this->db->insert(Darkblowdatabase::item_voucher, array(
                            'voucher_item' => $this->encryption->decrypt($data['reward_1']) . ','
                                . $this->encryption->decrypt($data['reward_2']) . ','
                                . $this->encryption->decrypt($data['reward_3']) . ','
                                . $this->encryption->decrypt($data['reward_4']) . ','
                                . $this->encryption->decrypt($data['reward_5']) . ','
                                . $this->encryption->decrypt($data['reward_6']) . ','
                                . $this->encryption->decrypt($data['reward_7']),
                            'voucher_cash' => $this->encryption->decrypt($data['cash_amount']),
                            'voucher_webcoin' => $this->encryption->decrypt($data['webcoin_amount']),
                            'voucher_code' => $this->encryption->decrypt($data['voucher_code']),
                            'active' => 't'
                        ));

                        if ($insert) {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        } else {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        }
                    }
                    break;
                }
            case 'extra_large': {
                    $data = array(
                        'reward_1' => $this->encryption->encrypt($this->input->post('reward_1', true)),
                        'reward_2' => $this->encryption->encrypt($this->input->post('reward_2', true)),
                        'reward_3' => $this->encryption->encrypt($this->input->post('reward_3', true)),
                        'reward_4' => $this->encryption->encrypt($this->input->post('reward_4', true)),
                        'reward_5' => $this->encryption->encrypt($this->input->post('reward_5', true)),
                        'reward_6' => $this->encryption->encrypt($this->input->post('reward_6', true)),
                        'reward_7' => $this->encryption->encrypt($this->input->post('reward_7', true)),
                        'reward_8' => $this->encryption->encrypt($this->input->post('reward_8', true)),
                        'reward_9' => $this->encryption->encrypt($this->input->post('reward_9', true)),
                        'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code', true)),
                        'cash_amount' => $this->encryption->encrypt($this->input->post('cash_amount', true)),
                        'webcoin_amount' => $this->encryption->encrypt($this->input->post('webcoin_amount', true))
                    );

                    $query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
                    if ($query) {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Voucher Code Already Exists.';

                        $this->darkblowmessage->AjaxFlashData($response);
                    } else {
                        $insert = $this->db->insert(Darkblowdatabase::item_voucher, array(
                            'voucher_item' => $this->encryption->decrypt($data['reward_1']) . ','
                                . $this->encryption->decrypt($data['reward_2']) . ','
                                . $this->encryption->decrypt($data['reward_3']) . ','
                                . $this->encryption->decrypt($data['reward_4']) . ','
                                . $this->encryption->decrypt($data['reward_5']) . ','
                                . $this->encryption->decrypt($data['reward_6']) . ','
                                . $this->encryption->decrypt($data['reward_7']) . ','
                                . $this->encryption->decrypt($data['reward_8']) . ','
                                . $this->encryption->decrypt($data['reward_9']),
                            'voucher_cash' => $this->encryption->decrypt($data['cash_amount']),
                            'voucher_webcoin' => $this->encryption->decrypt($data['webcoin_amount']),
                            'voucher_code' => $this->encryption->decrypt($data['voucher_code']),
                            'active' => 't'
                        ));

                        if ($insert) {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        } else {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Create New Voucher.';

                            $this->darkblowmessage->AjaxFlashData($response);
                        }
                    }
                    break;
                }

            default: {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Hehe Error :)';

                    $this->darkblowmessage->AjaxFlashData($response);
                    break;
                }
        }
    }

    function GenerateVoucherCode()
    {
        $response = array();

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $separator = '-';

        $length = array(
            'characters_length' => strlen($characters),
            'code' => 19,
            'serial_number' => 4
        );

        $pure_code = array(
            'part_1' => '',
            'part_2' => '',
            'part_3' => '',
            'part_4' => '',
            'part_5' => ''
        );

        for ($i = 0; $i < $length['serial_number']; $i++) $pure_code['part_1'] .= $characters[rand(0, $length['characters_length'] - 1)];

        for ($i = 0; $i < $length['serial_number']; $i++) $pure_code['part_2'] .= $characters[rand(0, $length['characters_length'] - 1)];

        for ($i = 0; $i < $length['serial_number']; $i++) $pure_code['part_3'] .= $characters[rand(0, $length['characters_length'] - 1)];

        for ($i = 0; $i < $length['serial_number']; $i++) $pure_code['part_4'] .= $characters[rand(0, $length['characters_length'] - 1)];

        for ($i = 0; $i < $length['serial_number']; $i++) $pure_code['part_5'] .= $characters[rand(0, $length['characters_length'] - 1)];

        $response['code'] = $pure_code['part_1'] . $separator . $pure_code['part_2'] . $separator . $pure_code['part_3'] . $separator . $pure_code['part_4'] . $separator . $pure_code['part_5'];

        $this->darkblowmessage->AjaxFlashData($response);
    }

    function DeleteVoucher()
    {
        sleep(1);
        $response = array();

        $data = array(
            'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code', true))
        );

        $query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
        if ($query) {
            $delete = $this->db->where('voucher_code', $query->voucher_code)->delete(Darkblowdatabase::item_voucher);
            if ($delete) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Voucher.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Voucher.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
