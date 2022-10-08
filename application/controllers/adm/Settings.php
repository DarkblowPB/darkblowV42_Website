<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/settings_model', 'settings');
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        redirect(base_url('adm/dashborad'), 'refresh');
    }

    function generalsettings()
    {
        $data['title'] = 'General Settings';

        $data['settings'] = $this->settings->GetAllSettings();

        $data['header'] = 'General Settings';
        $data['content'] = 'admin/content/settings/content_generalsettings';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function featuresettings()
    {
        $data['title'] = 'Feature Settings';
        $data['header'] = 'Feature Settings';
        $data['content'] = 'admin/content/settings/content_featuresettings';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function socialsettings()
    {
        $data['title'] = 'Social Settings';
        $data['header'] = $data['title'];
        $data['content'] = 'admin/content/settings/content_socialsettings';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_submit_generalsettings_images()
    {
        $this->settings->SetImage();
    }

    function do_submit_generalsettings()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $data = array(
            'submit_form' => $this->input->post('submit_form')
        );

        if ($data['submit_form'] == "submit01") {

            $this->form_validation->set_rules(
                'server_condition',
                'Server Condition',
                'required|in_list[0,1]',
                array(
                    'required' => '%s Cannot Be Empty.',
                    'in_list' => 'Invalid %s.'
                )
            );
            $this->form_validation->set_rules(
                'website_condition',
                'Website Condition',
                'required|in_list[0,1]',
                array(
                    'required' => '%s Cannot Be Empty.',
                    'in_list' => 'Invalid %s.'
                )
            );
            if ($this->form_validation->run()) $this->settings->SetCondition();
            else {
                $this->form_validation->set_error_delimiters('', '');

                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else if ($data['submit_form'] == "submit02") {
            $this->form_validation->set_rules(
                'project_name',
                'Project Name',
                'required',
                array('required' => '%s Cannot Be Empty.')
            );
            $this->form_validation->set_rules(
                'meta_author',
                'Meta Author',
                'required',
                array('required' => '%s Cannot Be Empty.')
            );
            $this->form_validation->set_rules(
                'meta_description',
                'Meta Description',
                'required',
                array('required' => '%s Cannot Be Empty.')
            );
            $this->form_validation->set_rules(
                'meta_keywords',
                'Meta Keywords',
                'required',
                array('required' => '%s Cannot Be Empty.')
            );
            if ($this->form_validation->run()) $this->settings->SetGeneral();
            else {
                $this->form_validation->set_error_delimiters('', '');
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = validation_errors();
                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_submit_featuresettings()
    {
        $response = array();
        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'enable_webshop',
            'Webshop State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_trademarket',
            'Trade Market State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_exchangeticket',
            'Exchange Ticket State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_redeemcode',
            'Redeem Code State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_voucher',
            'Voucher State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_forgotpassword',
            'Forgot Password State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_register',
            'Register State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_attendance',
            'Attendance State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_email_verification',
            'Email Verification State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_google_register',
            'Google Register State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_log_system',
            'Log System State',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'enable_packshop',
            'Packshop',
            'required|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run()) $this->settings->SetFeature();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_submit_socialsettings()
    {
        $response = array();

        $this->form_validation->set_rules(
            'facebook_embed_link',
            'Facebook',
            'valid_url',
            array(
                'valid_url' => '%s invalid.'
            )
        );
        $this->form_validation->set_rules(
            'instagram_embed_link',
            'Instagram',
            'valid_url',
            array(
                'valid_url' => '%s invalid.'
            )
        );
        $this->form_validation->set_rules(
            'youtube_embed_link',
            'Youtube',
            'valid_url',
            array(
                'valid_url' => '%s invalid.'
            )
        );
        if ($this->form_validation->run()) $this->settings->SetSocial();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors('', '');

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
