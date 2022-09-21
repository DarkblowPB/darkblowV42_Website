<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Settings_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAllSettings()
    {
        return $this->db->get_where('web_settings', array('id' => '1'))->row();
    }

    function SetCondition()
    {
        sleep(1);
        $data = array(
            'server_condition' => $this->encryption->encrypt($this->input->post('server_condition', true)),
            'website_condition' => $this->encryption->encrypt($this->input->post('website_condition', true))
        );

        $response = array();

        $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update('web_settings', array(
                'server_condition' => $this->encryption->decrypt($data['server_condition']),
                'website_condition' => $this->encryption->decrypt($data['website_condition'])
            ));

            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Server & Website Condition';
                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Server & Website Condition';
                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Get Website Settings Data.';
            echo json_encode($response);
        }
    }

    function SetGeneral()
    {
        sleep(1);
        $response = array();

        $data = array(
            'project_name' => $this->encryption->encrypt($this->input->post('project_name', true)),
            'meta_author' => $this->encryption->encrypt($this->input->post('meta_author', true)),
            'meta_description' => $this->encryption->encrypt($this->input->post('meta_description', true)),
            'meta_keywords' => $this->encryption->encrypt($this->input->post('meta_keywords', true)),
            'running_text' => $this->encryption->encrypt($this->input->post('running_text', true)),
            'discord_embed_link' => $this->encryption->encrypt($this->input->post('discord_embed_link', true))
        );

        $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update('web_settings', array(
                'project_name' => $this->encryption->decrypt($data['project_name']),
                'meta_author' => $this->encryption->decrypt($data['meta_author']),
                'meta_description' => $this->encryption->decrypt($data['meta_description']),
                'meta_keywords' => $this->encryption->decrypt($data['meta_keywords']),
                'running_text' => $this->encryption->decrypt($data['running_text']),
                'discord_embed_link' => $this->encryption->decrypt($data['discord_embed_link'])
            ));
            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Website Credentials.';
                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Website Credentials.';
                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update Website Credentials.';
            echo json_encode($response);
        }
    }

    function SetImage()
    {
        sleep(1);
        $response = array();

        $config = array(
            'upload_path' => './assets/goodgames/assets/images/settings/',
            'allowed_types' => 'png|jpg|jpeg|gif|ico',
            'max_size' => 4096,
            'encrypt_name' => TRUE,
            'remove_spaces' => TRUE
        );

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('project_logo')) {
            $fileData = $this->upload->data();

            $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
            if ($query) {
                $update = $this->db->where('id', $query->id)->update('web_settings', array(
                    'project_logo' => $fileData['file_name']
                ));
                if ($update) $this->SetImage2();
                else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Upload Project Logo.';
                    echo json_encode($response);
                }
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Get Web Settings.';
                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->upload->display_errors();
            echo json_encode($response);
        }
    }

    function SetImage2()
    {
        sleep(1);
        $response = array();

        $config = array(
            'upload_path' => './assets/goodgames/assets/images/settings/',
            'allowed_types' => 'png|jpg|jpeg|gif|ico',
            'max_size' => 4096,
            'encrypt_name' => TRUE,
            'remove_spaces' => TRUE
        );

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('project_icon')) {
            $fileData = $this->upload->data();

            $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
            if ($query) {
                $update = $this->db->where('id', $query->id)->update('web_settings', array(
                    'project_icon' => $fileData['file_name']
                ));
                if ($update) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Updated Website Images.';
                    echo json_encode($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Upload Project Icon.';
                    echo json_encode($response);
                }
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Get Web Settings.';
                echo json_encode($response);
            }
        }
    }

    function SetFeature()
    {
        sleep(1);
        $data = array(
            'enable_webshop' => $this->encryption->encrypt($this->input->post('enable_webshop', true)),
            'enable_trademarket' => $this->encryption->encrypt($this->input->post('enable_trademarket', true)),
            'enable_exchangeticket' => $this->encryption->encrypt($this->input->post('enable_exchangeticket', true)),
            'enable_redeemcode' => $this->encryption->encrypt($this->input->post('enable_redeemcode', true)),
            'enable_voucher' => $this->encryption->encrypt($this->input->post('enable_voucher', true)),
            'enable_forgotpassword' => $this->encryption->encrypt($this->input->post('enable_forgotpassword', true)),
            'enable_register' => $this->encryption->encrypt($this->input->post('enable_register', true)),
            'enable_attendance' => $this->encryption->encrypt($this->input->post('enable_attendance', true)),
            'enable_email_verification' => $this->encryption->encrypt($this->input->post('enable_email_verification', true)),
            'enable_google_register' => $this->encryption->encrypt($this->input->post('enable_google_register', true)),
            'enable_log_system' => $this->encryption->encrypt($this->input->post('enable_log_system', true)),
            'enable_packshop' => $this->encryption->encrypt($this->input->post('enable_packshop', true))
        );

        $response = array();

        $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update('web_settings', array(
                'webshop' => $this->encryption->decrypt($data['enable_webshop']),
                'trade_market' => $this->encryption->decrypt($data['enable_trademarket']),
                'exchange_ticket' => $this->encryption->decrypt($data['enable_exchangeticket']),
                'redeemcode' => $this->encryption->decrypt($data['enable_redeemcode']),
                'voucher' => $this->encryption->decrypt($data['enable_voucher']),
                'forgot_password' => $this->encryption->decrypt($data['enable_forgotpassword']),
                'register' => $this->encryption->decrypt($data['enable_register']),
                'attendance' => $this->encryption->decrypt($data['enable_attendance']),
                'email_verification' => $this->encryption->decrypt($data['enable_email_verification']),
                'google_register' => $this->encryption->decrypt($data['enable_google_register']),
                'web_log' => $this->encryption->decrypt($data['enable_log_system']),
                'packshop' => $this->encryption->decrypt($data['enable_packshop'])
            ));

            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Updated Feature Settings.';
                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Updated Feature Settings.';
                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Get Web Settings.';
            echo json_encode($response);
        }
    }

    function SetSocial()
    {
        $response = array();

        $data = array(
            'facebook_embed_link' => $this->input->post('facebook_embed_link', true),
            'instagram_embed_link' => $this->input->post('instagram_embed_link', true),
            'youtube_embed_link' => $this->input->post('youtube_embed_link', true)
        );

        $query = $this->db->get_where('web_settings', array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update('web_settings', $data);
            if ($update) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Social Settings.';

                echo json_encode($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Social Settings.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Settings.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
