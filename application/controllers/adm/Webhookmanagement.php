<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Webhookmanagement extends DARKBLOW_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/webhookmanagement_model', 'webhook');
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    public function index()
    {
        $data = array(
            'title' => 'Webhook Management',
            'webhook' => $this->webhook->LoadWebhook(),
            'content' => 'admin/content/webhookmanagement/content_webhookmanagement',
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $data = array(
            'title' => 'Add New Webhook',
            'content' => 'admin/content/webhookmanagement/content_add'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function do_add()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'url',
            'Webhook URL',
            'required',
            array(
                'required' => '%s Cannot Be Empty.'
            )
        );
        $this->form_validation->set_rules(
            'type',
            'webhook Type',
            'required|is_unique[web_webhook.type]',
            array(
                'required' => '%s Cannot Be Empty.',
                'is_unique' => '%s already registered.',
            )
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required|numeric|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => 'Invalid %s.',
                'in_list' => 'Invalid %s Selection',
            )
        );
        if ($this->form_validation->run()) $this->webhook->AddWebhook();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors('', '');
        }
    }

    public function edit($webhook_id)
    {
        $data = array(
            'title' => 'Edit Webhook',
            'webhook' => $this->webhook->LoadIndividualWebhookData($webhook_id),
            'content' => 'admin/content/webhookmanagement/content_edit',
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function do_edit($webhook_id)
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'url',
            'Webhook URL',
            'required',
            array(
                'required' => '%s Cannot Be Empty.'
            )
        );
        $this->form_validation->set_rules(
            'type',
            'webhook Type',
            'required',
            array(
                'required' => '%s Cannot Be Empty.',
            )
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required|numeric|in_list[0,1]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => 'Invalid %s.',
                'in_list' => 'Invalid %s Selection',
            )
        );
        if ($this->form_validation->run()) $this->webhook->EditWebhook($webhook_id);
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors('', '');

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    public function do_delete()
    {
        $this->webhook->DeleteWebhook($this->input->post('data_id', true));
    }
}

/* End of file Webhookmanagement.php */
