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

    function Send(int $webhook_type = 0, array $message)
    {
        $this->ci->db->trans_start();
        $this->ci->db->select('*', TRUE);
        $this->ci->db->from(Darkblowdatabase::web_webhook);
        $this->ci->db->where('type', $webhook_type, TRUE);

        $webhook = $this->ci->db->get()->row_array();
        $this->ci->db->trans_complete();
        if ($this->ci->db->trans_status()) {
            if ($webhook != null) {
                $ch = curl_init($webhook['url']);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                curl_exec($ch);
                curl_close($ch);
            } else return;
        } else return;
    }
}

/* End of file Darkblowwebhook.php */
