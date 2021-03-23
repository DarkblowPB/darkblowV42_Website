<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminrecharge_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('moderatorpanel/logger_model', 'logger');
    }

    function createManualRecharge()
    {
        // START: Template Package 001
        $primary_01 = 100003090;
        $secondary_01 = 601002049;
        $melee_01 = 702001009;
        $grenade_01 = 803007009;
        $special_01 = 904007011;
        $cash_01 = 5000;
        $webcoin_01 = 750;

        // START: Template Package 002
        $primary_02 = 100003090;
        $secondary_02 = 601002049;
        $melee_02 = 702001009;
        $grenade_02 = 803007009;
        $special_02 = 904007011;
        $cash_02 = 5000;
        $webcoin_02 = 750;

        // START: Template Package 003
        $primary_03 = 100003090;
        $secondary_03 = 601002049;
        $melee_03 = 702001009;
        $grenade_03 = 803007009;
        $special_03 = 904007011;
        $cash_03 = 5000;
        $webcoin_03 = 750;

        // START: Template Package 004
        $primary_04 = 100003090;
        $secondary_04 = 601002049;
        $melee_04 = 702001009;
        $grenade_04 = 803007009;
        $special_04 = 904007011;
        $cash_04 = 5000;
        $webcoin_04 = 750;

        $data = array(
            'player_id' => $this->input->post('player_id'),
            'recharge_package' => $this->input->post('recharge_package'),
        );

        $check_account = $this->db->get_where('accounts', array('player_id' => $data['player_id']));
        $result_account = $check_account->row();
        if ($result_account) 
        {
            // Access Validation
            if ($result_account->access_level == -1) 
            {
                $this->session->set_flashdata('Failed', 'Cannot Create Recharge For Account With Active Banned.');
                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
            }
            if ($result_account->access_level >= 0 && $result_account->access_level < 3)
            {
                if ($data['recharge_package'] == "package_1")
                {
                    $total_dcash = $result_account->money + $cash_01;
                    $total_webcoin = $result_account->kuyraicoin + $webcoin_01;
                    // Update D-Cash & Webcoin
                    $update_money = $this->db->where('player_id', $result_account->player_id)->update('accounts', array('money' => $total_dcash, 'kuyraicoin' => $total_webcoin));
                    if ($update_money) 
                    {
                        $this->logger->logger_RechargeManualSuccess($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Success', 'D-Cash & Webcoin Successfully Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                    else 
                    {
                        $this->logger->logger_RechargeManualFailed($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Failed', 'D-Cash & Webcoin Failed Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                }
                if ($data['recharge_package'] == "package_2")
                {
                    $total_dcash = $result_account->money + $cash_02;
                    $total_webcoin = $result_account->kuyraicoin + $webcoin_02;
                    // Update D-Cash & Webcoin
                    $update_money = $this->db->where('player_id', $result_account->player_id)->update('accounts', array('money' => $total_dcash, 'kuyraicoin' => $total_webcoin));
                    if ($update_money) 
                    {
                        $this->logger->logger_RechargeManualSuccess($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Success', 'D-Cash & Webcoin Successfully Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                    else 
                    {
                        $this->logger->logger_RechargeManualFailed($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Failed', 'D-Cash & Webcoin Failed Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                }
                if ($data['recharge_package'] == "package_3")
                {
                    $total_dcash = $result_account->money + $cash_03;
                    $total_webcoin = $result_account->kuyraicoin + $webcoin_03;
                    // Update D-Cash & Webcoin
                    $update_money = $this->db->where('player_id', $result_account->player_id)->update('accounts', array('money' => $total_dcash, 'kuyraicoin' => $total_webcoin));
                    if ($update_money) 
                    {
                        $this->logger->logger_RechargeManualSuccess($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Success', 'D-Cash & Webcoin Successfully Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                    else 
                    {
                        $this->logger->logger_RechargeManualFailed($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Failed', 'D-Cash & Webcoin Failed Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                }
                if ($data['recharge_package'] == "package_4")
                {
                    $total_dcash = $result_account->money + $cash_04;
                    $total_webcoin = $result_account->kuyraicoin + $webcoin_04;
                    // Update D-Cash & Webcoin
                    $update_money = $this->db->where('player_id', $result_account->player_id)->update('accounts', array('money' => $total_dcash, 'kuyraicoin' => $total_webcoin));
                    if ($update_money) 
                    {
                        $this->logger->logger_RechargeManualSuccess($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Success', 'D-Cash & Webcoin Successfully Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                    else 
                    {
                        $this->logger->logger_RechargeManualFailed($result_account->player_name, $data['recharge_package']);
                        $this->session->set_flashdata('Failed', 'D-Cash & Webcoin Failed Added For Player '.$result_account->player_id.'.');
                        redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                    }
                }
                if ($data['recharge_package'] != "package_1" || $data['recharge_package'] != "package_2" || $data['recharge_package'] != "package_3" || $data['recharge_package'] != "package_4") 
                {
                    $this->session->set_flashdata('Failed', 'Cannot Validating Recharge Package. Please Select Another Package.');
                    redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
                }
            }
            if ($result_account->access_level >= 3) 
            {
                $this->session->set_flashdata('Failed', 'Cannot Create Recharge For Account With Access Level Higher Than 2.');
                redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
            }
        }
        else 
        {
            $this->session->set_flashdata('Failed', 'Player Not Found.');
            redirect(base_url('moderatorpanel/recharge/manual_recharge'), 'refresh');
        }
    }

    function getVoucherDataAll()
    {
        return $this->db->get('item_voucher')->result_array();
    }

    function getPlayerName()
    {
        return $this->db->order_by('player_id', 'asc')->get('accounts')->result_array();
    }

    function getLoggerId()
    {
        return $this->db->where('category', "Recharge")->get('web_adminpanel_log')->result_array();
    }
    
    function createVoucher()
    {
        $data = array(
            'cash_alert' => $this->input->post('cash_alert'),
            'cash_value' => $this->input->post('cash_value'),
            'voucher_code' => $this->input->post('voucher_code')
        );
        $process = $this->db->insert('item_voucher', array(
                'cash_alert' => $data['cash_alert'],
                'cash_value' => $data['cash_value'],
                'voucher_code' => $data['voucher_code'],
                'voucher_status' => '1',
                'date' => date('d-m-Y h:i:s')
            )
        );
        if ($process)
        {
            $this->logger->logger_CreateVoucherSuccess();
            $this->session->set_flashdata('Success', 'Voucher Successfully Created.');
            redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
        }
        else
        {
            $this->logger->logger_CreateVoucherFailed();
            $this->session->set_flashdata('Failed', 'Create Voucher Failed.');
            redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>