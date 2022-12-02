<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowmail
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function SendEmail(string $from, string $to, string $subject, string $message)
    {
        $config = array(
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => $this->ci->config->item('main_config')['smtp_host'], // Your SMTP Host
            'smtp_user' => $this->ci->config->item('main_config')['smtp_email'],  // Your Email
            'smtp_pass'   => $this->ci->config->item('main_config')['smtp_password'],  // Your Password
            'smtp_crypto' => 'ssl',
            'smtp_port'   => $this->ci->config->item('main_config')['smtp_port'], // Your SMTP Port
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        );

        $this->ci->load->library('email');

        $this->ci->email->initialize($config);
        $this->ci->email->from($from, $this->ci->darkblowsettings->load()->project_name);
        $this->ci->email->to($to);
        $this->ci->email->subject($subject);
        $this->ci->email->message($message);
        if ($this->ci->email->send()) {
            $this->email->clear();
            return TRUE;
        } else {
            $this->email->clear();
            return FALSE;
        }
    }
}

/* End of file Darkblowmail.php */
