<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowwebhook
{
    protected $ci;

    const REGISTER_WEBHOOK = 1;
    const REDEEMCODE_WEBHOOK = 2;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function Send($webhook_type, array $message)
    {
        $query = $this->ci->db->get_where(Darkblowdatabase::web_webhook, array('type' => $webhook_type))->row();
        if ($query) {
            $data['webhook_url'] = $query->url;
            if (!is_array($message)) return;

            $ch = curl_init($data['webhook_url']);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            curl_exec($ch);
            curl_close($ch);
        }
    }
}

/* End of file Darkblowwebhook.php */
