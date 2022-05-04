<?php

use chriskacerguis\RestServer\RestController;


defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends RestController
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function buyitem_post()
    {
        $response = array();

        $data = array(
            'owner_id' => $this->input->post('owner_id', true),
            'item_id' => $this->input->post('item_id', true),
            'count' => $this->input->post('count', true),
            'date_created' => time(),
            'date_updated' => '0'
        );

        $query = $this->db->insert('web_log_shop', $data);
        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Record Item.';
            $this->response($response, 200);
        } else {
            $response['response'] = 'failed';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed Record Item.';
            $this->response($response, 200);
        }
    }
}

/* End of file Shop.php */
