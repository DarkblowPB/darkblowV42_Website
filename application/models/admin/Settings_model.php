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
        return $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
    }

    function SetCondition()
    {
        sleep(1);
        $data = array(
            'server_condition' => $this->input->post('server_condition', true),
            'website_condition' => $this->input->post('website_condition', true)
        );

        $response = array();

        $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_settings, array(
                'server_condition' => $data['server_condition'],
                'website_condition' => $data['website_condition']
            ));

            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Server & Website Condition';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Server & Website Condition';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Get Website Settings Data.';
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function SetGeneral()
    {
        sleep(1);
        $response = array();

        $data = array(
            'project_name' => $this->input->post('project_name', true),
            'meta_author' => $this->input->post('meta_author', true),
            'meta_description' => $this->input->post('meta_description', true),
            'meta_keywords' => $this->input->post('meta_keywords', true),
            'running_text' => $this->input->post('running_text', true),
            'discord_embed_link' => $this->input->post('discord_embed_link', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_settings, array(
                'project_name' => $data['project_name'],
                'meta_author' => $data['meta_author'],
                'meta_description' => $data['meta_description'],
                'meta_keywords' => $data['meta_keywords'],
                'running_text' => $data['running_text'],
                'discord_embed_link' => $data['discord_embed_link']
            ));
            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Website Credentials.';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Website Credentials.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update Website Credentials.';
            $this->darkblowmessage->AjaxFlashData($response);
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

            $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
            if ($query) {
                $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_settings, array(
                    'project_logo' => $fileData['file_name']
                ));
                if ($update) $this->SetImage2();
                else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Upload Project Logo.';
                    $this->darkblowmessage->AjaxFlashData($response);
                }
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Get Web Settings.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = $this->upload->display_errors();
            $this->darkblowmessage->AjaxFlashData($response);
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

            $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
            if ($query) {
                $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_settings, array(
                    'project_icon' => $fileData['file_name']
                ));
                if ($update) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Updated Website Images.';
                    $this->darkblowmessage->AjaxFlashData($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Upload Project Icon.';
                    $this->darkblowmessage->AjaxFlashData($response);
                }
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Get Web Settings.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        }
    }

    function SetFeature()
    {
        sleep(1);
        $data = array(
            'enable_webshop' => $this->input->post('enable_webshop', true),
            'enable_trademarket' => $this->input->post('enable_trademarket', true),
            'enable_exchangeticket' => $this->input->post('enable_exchangeticket', true),
            'enable_redeemcode' => $this->input->post('enable_redeemcode', true),
            'enable_voucher' => $this->input->post('enable_voucher', true),
            'enable_forgotpassword' => $this->input->post('enable_forgotpassword', true),
            'enable_register' => $this->input->post('enable_register', true),
            'enable_attendance' => $this->input->post('enable_attendance', true),
            'enable_email_verification' => $this->input->post('enable_email_verification', true),
            'enable_google_register' => $this->input->post('enable_google_register', true),
            'enable_log_system' => $this->input->post('enable_log_system', true),
            'enable_packshop' => $this->input->post('enable_packshop', true)
        );

        $response = array();

        $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_settings, array(
                'webshop' => $data['enable_webshop'],
                'trade_market' => $data['enable_trademarket'],
                'exchange_ticket' => $data['enable_exchangeticket'],
                'redeemcode' => $data['enable_redeemcode'],
                'voucher' => $data['enable_voucher'],
                'forgot_password' => $data['enable_forgotpassword'],
                'register' => $data['enable_register'],
                'attendance' => $data['enable_attendance'],
                'email_verification' => $data['enable_email_verification'],
                'google_register' => $data['enable_google_register'],
                'web_log' => $data['enable_log_system'],
                'packshop' => $data['enable_packshop']
            ));

            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Updated Feature Settings.';
                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Updated Feature Settings.';
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Get Web Settings.';
            $this->darkblowmessage->AjaxFlashData($response);
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

        $query = $this->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_settings, $data);
            if ($update) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Social Settings.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Social Settings.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Settings.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
