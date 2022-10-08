<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Bannedvisitor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/bannedvisitor_model', 'bannedvisitor');
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
    }

    function index()
    {
        $data['title'] = 'Banned Visitor';
        $data['header'] = 'Banned Visitor';

        $data['ip'] = $this->bannedvisitor->GetAllIPAddress();

        $data['content'] = 'admin/content/bannedvisitor/content_bannedvisitor';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_add()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'ip_address',
            'IP ADDRESS',
            'required|is_unique[web_ipbanned.ipaddress]',
            array(
                'required' => '%s Cannot Be Empty.',
                'is_unique' => '%s Already Registered'
            )
        );
        if ($this->form_validation->run()) $this->bannedvisitor->AddIPAddress();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'id',
            'Id',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Use Numeric Character.'
            )
        );
        if ($this->form_validation->run()) $this->bannedvisitor->DeleteIPAddress();
        else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors('', '');

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
