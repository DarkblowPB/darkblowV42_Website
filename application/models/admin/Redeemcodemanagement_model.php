<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Redeemcodemanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('darkblowwebhook');
    }

    /**
     * Generate Code 2
     * 
     * This Function Will Generate You 19 Digits Item Code. (Private Build)
     * 
     * @return item_code
     * @copyright Darkblow Studio
     */
    function GenerateCode2()
    {
        $response = array();

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $separator = '-';
        $prefix = 'DARK';
        $postfix = 'BLOW';

        $length = array(
            'characters_length' => strlen($characters),
            'code' => 19,
            'serial_number' => 4
        );

        $pure_code = array(
            'part_1' => '',
            'part_2' => ''
        );

        for ($i = 0; $i < $length['serial_number']; $i++) {
            $pure_code['part_1'] .= $characters[rand(0, $length['characters_length'] - 1)];
        }

        for ($i = 0; $i < $length['serial_number']; $i++) {
            $pure_code['part_2'] .= $characters[rand(0, $length['characters_length'] - 1)];
        }

        $response['code'] = $prefix . $separator . $pure_code['part_1'] . $separator . $pure_code['part_2'] . $separator . $postfix;

        $this->darkblowmessage->AjaxFlashData($response);
    }

    function CreateNewRedeemCodeV2()
    {
        $webhook_data = array();
        $response = array();

        $data = array(
            'item_id' => $this->input->post('item_id', true),
            'item_name' => $this->darkblowlib->GetItemName($this->input->post('item_id', true)) . ' - Redeem Code',
            'item_count' => $this->input->post('item_count', true),
            'item_code' => $this->input->post('item_code', true),
            'cash' => $this->input->post('cash', true),
            'type' => $this->input->post('type', true),
            'qty' => $this->input->post('qty', true),
            'valid_date' => $this->GetValidDate($this->input->post('valid_date', true)),
            'date_created' => time(),
            'date_updated' => '0',
        );

        $this->db->trans_start();
        $this->db->select('*', TRUE);
        $this->db->from(Darkblowdatabase::web_webhook);
        $this->db->where('type', (int)Darkblowwebhook::REDEEMCODE_WEBHOOK, TRUE);

        $webhook = $this->db->get()->row_array();
        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            if ($webhook != null) {
                if ($webhook['status'] == 1) {
                    $webhook_data =  [
                        'content' => '',
                        'username' => $webhook['username'] != '' || $webhook['username'] != null ? $webhook['username'] : $this->darkblowsettings->load()->project_name,
                        'avatar_url' => $webhook['avatar_url'] != '' || $webhook['avatar_url'] != null ? $webhook['avatar_url'] : '',
                        'tts' => false,
                        'embeds' => [
                            [
                                'title' => $webhook['embeds_title'] != '' || $webhook['embeds_title'] != null ? $this->darkblowsettings->load()->project_name . ' - ' . $webhook['embeds_title'] : $this->darkblowsettings->load()->project_name . ' - Redeem Code',
                                'url' => base_url('player_panel/redeemcode'),
                                'type' => 'rich',
                                'description' => $webhook['embeds_description'] != '' || $webhook['embeds_description'] != null ? $webhook['embeds_description'] : '',
                                'timestamp' => date('c', strtotime('now')),
                                'fields' => [
                                    [
                                        "name" => "Code",
                                        "value" => $data['item_code']
                                    ],
                                    [
                                        "name" => "Item Name",
                                        "value" => $this->darkblowlib->GetItemName($data['item_id']),
                                    ],
                                    [
                                        "name" => "Item Count",
                                        "value" => ($data['item_count'] / 24 / 60 / 60) . ' Days',
                                    ],
                                    [
                                        "name" => "Stock",
                                        "value" => $data['qty'] . ' Players',
                                    ],
                                    [
                                        "name" => "Valid Until",
                                        "value" => date('d-m-Y H:i:s', $data['valid_date'])
                                    ]
                                ]
                            ]
                        ]
                    ];
                    $this->darkblowwebhook->Send($webhook['type'], $webhook_data);
                }
            }
        }

        // $webhook_get = $this->db->get_where(Darkblowdatabase::web_webhook, array('type' => Darkblowwebhook::REDEEMCODE_WEBHOOK))->row();
        // if ($webhook_get) {
        //     if ($webhook_get->status == 1) {
        //         $this->load->library('darkblowwebhook');
        //         $webhook_data =  [
        //             'content' => '',
        //             'username' => $webhook_get->username != '' || $webhook_get->username != null ? $webhook_get->username : $this->darkblowsettings->load()->project_name,
        //             'avatar_url' => $webhook_get->avatar_url != '' || $webhook_get->avatar_url != null ? $webhook_get->avatar_url : '',
        //             'tts' => false,
        //             'embeds' => [
        //                 [
        //                     'title' => $webhook_get->embeds_title != '' || $webhook_get->embeds_title != null ? $this->darkblowsettings->load()->project_name . ' - ' . $webhook_get->embeds_title : $this->darkblowsettings->load()->project_name . ' - Redeem Code',
        //                     'url' => base_url('player_panel/redeemcode'),
        //                     'type' => 'rich',
        //                     'description' => $webhook_get->embeds_description != '' || $webhook_get->embeds_description != null ? $webhook_get->embeds_description : '',
        //                     'timestamp' => date('c', strtotime('now')),
        //                     'fields' => [
        //                         [
        //                             "name" => "Code",
        //                             "value" => $data['item_code']
        //                         ],
        //                         [
        //                             "name" => "Item Name",
        //                             "value" => $this->darkblowlib->GetItemName($data['item_id']),
        //                         ],
        //                         [
        //                             "name" => "Item Count",
        //                             "value" => ($data['item_count'] / 24 / 60 / 60) . ' Days',
        //                         ],
        //                         [
        //                             "name" => "Stock",
        //                             "value" => $data['qty'] . ' Players',
        //                         ],
        //                         [
        //                             "name" => "Valid Until",
        //                             "value" => date('d-m-Y H:i:s', $data['valid_date'])
        //                         ]
        //                     ]
        //                 ]
        //             ]
        //         ];
        //         $this->darkblowwebhook->Send(2, $webhook_data);
        //     }
        // }

        $query = $this->db->get_where(Darkblowdatabase::item_code, array('item_code' => $data['item_code']))->row();
        if ($query) {
            $insert = $this->db->insert(Darkblowdatabase::item_code, $data);
            if ($insert) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Create New Redeem Code.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed Create New Redeem Code.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $insert = $this->db->insert(Darkblowdatabase::item_code, $data);
            if ($insert) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Create New Redeem Code.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed Create New Redeem Code.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        }
    }

    function GetValidDate($valid_date)
    {
        $dateNow = time();
        $fixDate = strtotime('+ ' . $valid_date . ' day', $dateNow);
        return $fixDate;
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get(Darkblowdatabase::shop)->result_array();
    }

    function GetAllRedeemCode()
    {
        return $this->db->get(Darkblowdatabase::item_code)->result_array();
    }

    function GetTotalRedeem($item_code)
    {
        return $this->db->get_where(Darkblowdatabase::check_user_itemcode, array('item_code' => $item_code))->num_rows();
    }

    function DeleteCode()
    {
        $response = array();

        $data = array(
            'item_code' => $this->input->post('item_code', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::item_code, array('item_code' => $data['item_code']))->row();
        if ($query) {
            $delete = $this->db->where(Darkblowdatabase::item_code, $query->item_code)->delete(Darkblowdatabase::item_code);
            if ($delete) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Redeem Code.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Redeem Code.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Redeem Code';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
