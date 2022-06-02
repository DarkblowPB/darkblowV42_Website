<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Players extends RestController
{

    function __construct()
    {
        parent::__construct();
    }

    function bandwithupdate_post()
    {
        $response = array();

        $this->form_validation->set_rules(
            'point',
            'Point',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Numeric Allowed.'
            )
        );
        $this->form_validation->set_rules(
            'cash',
            'Cash',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Numeric Allowed.'
            )
        );

        $data = array(
            'total_point_used' => $this->input->post('point', true),
            'total_cash_used' => $this->input->post('cash', true),
            'total_item_buyed' => '1',
        );

        $query = $this->db->get_where('web_bandwith', array('id' => '1'))->row();
        if ($query) {
            $total_point = $query->total_point_used + $data['total_point_used'];
            $total_cash = $query->total_cash_used + $data['total_cash_used'];
            $total_item = $query->total_item_buyed + 1;

            $update = $this->db->where('id', $query->id)->update('web_bandwith', array(
                'total_point_used' => $total_point,
                'total_cash_used' => $total_cash,
                'total_item_buyed' => $total_item
            ));

            if ($update) {
                $response['status'] = 'success';
                $this->response($response, 200);
            } else {
                $response['status'] = 'error';
                $this->response($response, 200);
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
