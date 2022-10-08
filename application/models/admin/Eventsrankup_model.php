<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsrankup_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetRankUpEvents()
    {
        return $this->db->get(Darkblowdatabase::events_rankup)->row();
    }

    function UpdateEvents()
    {
        sleep(1);
        $response = array();

        $data = array(
            'start_date' => $this->encryption->encrypt($this->input->post('start_date', true)),
            'end_date' => $this->encryption->encrypt($this->input->post('end_date', true)),
            'point' => $this->encryption->encrypt($this->input->post('point', true)),
            'exp' => $this->encryption->encrypt($this->input->post('exp', true))
        );

        $query = $this->db->update(Darkblowdatabase::events_rankup, array(
            'start_date' => $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['start_date']))['years'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['start_date']))['month'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['start_date']))['days'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['start_date']))['hours'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
            'end_date' => $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['end_date']))['years'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['end_date']))['month'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['end_date']))['days'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['end_date']))['hours'] . $this->darkblowlib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
            'percent_xp' => $this->encryption->decrypt($data['exp']),
            'percent_gp' => $this->encryption->decrypt($data['point'])
        ));

        if ($query) {

            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Update Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
