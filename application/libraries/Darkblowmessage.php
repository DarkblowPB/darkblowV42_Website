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
}

/* End of file Darkblowmessage.php */
