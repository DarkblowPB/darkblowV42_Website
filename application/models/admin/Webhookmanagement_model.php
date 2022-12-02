<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Webhookmanagement_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function LoadWebhook()
    {
        return $this->db->order_by('id', 'desc')->get(Darkblowdatabase::web_webhook)->result_array();
    }

    public function LoadIndividualWebhookData($webhook_id)
    {
        $query = $this->db->get_where(Darkblowdatabase::web_webhook, array('id' => $webhook_id))->row();
        if ($query) return $query;
        else redirect(base_url('adm/webhookmanagement'), 'refresh');
    }

    public function AddWebhook()
    {
        sleep(1);
        $response = array();

        $data = array(
            'url' => $this->input->post('url', true),
            'username' => $this->input->post('username', true),
            'avatar_url' => $this->input->post('avatar_url', true),
            'embeds_title' => $this->input->post('embeds_title', true),
            'embeds_description' => $this->input->post('embeds_description', true),
            'type' => $this->input->post('type', true),
            'fields' => null,
            'status' => $this->input->post('status', true),
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => null
        );

        $query = $this->db->insert(Darkblowdatabase::web_webhook, $data);
        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Create New Webhook.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed Create New Webhook.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    public function EditWebhook($webhook_id)
    {
        sleep(1);
        $response = array();

        $data = array(
            'url' => $this->input->post('url', true),
            'username' => $this->input->post('username', true),
            'avatar_url' => $this->input->post('avatar_url', true),
            'embeds_title' => $this->input->post('embeds_title', true),
            'embeds_description' => $this->input->post('embeds_description', true),
            'type' => $this->input->post('type', true),
            'fields' => null,
            'status' => $this->input->post('status', true),
            'date_updated' => date('Y-m-d H:i:s')
        );

        $query = $this->db->get_where(Darkblowdatabase::web_webhook, array('id' => $webhook_id))->row();
        if ($query) {
            $update = $this->db->where('id', $query->id)->update(Darkblowdatabase::web_webhook, $data);
            if ($update) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Webhook.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed Update Webhook.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed Update Webhook.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    public function DeleteWebhook($webhook_id)
    {
        sleep(1);
        $response = array();

        $query = $this->db->get_where(Darkblowdatabase::web_webhook, array('id' => $webhook_id))->row();
        if ($query) {
            $delete = $this->db->where('id', $query->id)->delete(Darkblowdatabase::web_webhook);
            if ($delete) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Webhook.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Webhook.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Delete Webhook.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

/* End of file Webhookmanagement_model.php */
