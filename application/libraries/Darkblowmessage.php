<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowmessage
{
    protected $ci;

    const success_tag = 'success';
    const error_tag = 'error';

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function AjaxFlashData($data = array(), $csrf_hash = TRUE)
    {
        header('Content-Type: application/json; charset=utf-8');
        $response = array();
        if (is_array($data)) {
            foreach ($data as $key => $value) $response[$key] = $value;
            if ($csrf_hash) $response['token'] = $this->ci->security->get_csrf_hash();
            echo json_encode($response);
        } else {
            // Default Ajax Message
            $response['response'] = 'error';
            $response['token'] = $this->ci->security->get_csrf_hash();
            $response['message'] = 'Error Message.';

            echo json_encode($response);
        }
    }

    public function SetDefaultMessage($tag, $message)
    {
        $this->ci->session->set_flashdata(($tag == Darkblowmessage::success_tag ? Darkblowmessage::success_tag : Darkblowmessage::error_tag), $message);
    }

    public function DisplayMessage()
    {
        if ($this->ci->session->flashdata(Darkblowmessage::success_tag)) return '<div class="alert alert-success" role="alert">' . $this->ci->session->flashdata(Darkblowmessage::success_tag) . '</div>';
        else if ($this->ci->session->flashdata(Darkblowmessage::error_tag)) return '<div class="alert alert-danger" role="alert">' . $this->ci->session->flashdata(Darkblowmessage::error_tag) . '</div>';
    }

    public function DisplayErrorMessage()
    {
        return validation_errors('<div>', '</div>');
    }
}

/* End of file Darkblowmessage.php */
