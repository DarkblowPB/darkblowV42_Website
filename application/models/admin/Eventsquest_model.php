<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsquest_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function UpdateEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->encryption->encrypt($this->input->post('start_date', true)),
            'end_date' => $this->encryption->encrypt($this->input->post('end_date', true))
        );

        $query = $this->db->get('events_quest')->num_rows();
        if ($query == 0) {
            $insert = $this->db->insert('events_quest', array(
                'start_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['years'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['month'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['days'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['hours'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
                'end_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['years'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['month'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['days'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['hours'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['minutes']
            ));
            if ($insert) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Events.';

                echo json_encode($response);
            } else {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Events.';

                echo json_encode($response);
            }
        } else {
            $update = $this->db->update('events_quest', array(
                'start_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['years'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['month'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['days'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['hours'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
                'end_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['years'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['month'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['days'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['hours'] .
                    $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['minutes']
            ));
            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Update Events.';

                echo json_encode($response);
            } else {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Update Events.';

                echo json_encode($response);
            }
        }
    }

    function GetEvents()
    {
        return $this->db->get('events_quest')->result_array();
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->encryption->encrypt($this->input->post('start_date', true))
        );

        $query = $this->db->where('start_date', $this->encryption->decrypt($data['start_date']))->delete('events_quest');
        if ($query) {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Delete This Events.';

            echo json_encode($response);
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Delete This Events.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
