<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Eventsrankup_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function GetRankUpEvents()
    {
        return $this->db->get('events_rankup')->row();
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

        $query = $this->db->update('events_rankup', array(
            'start_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['years'].$this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['month'].$this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['days'].$this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['hours'].$this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
            'end_date' => $this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['years'].$this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['month'].$this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['days'].$this->lib->ExplodeDate($this->encryption->decrypt($data['end_date']))['hours'].$this->lib->ExplodeDate($this->encryption->decrypt($data['start_date']))['minutes'],
            'percent_xp' => $this->encryption->decrypt($data['exp']),
            'percent_gp' => $this->encryption->decrypt($data['point'])
        ));

        if ($query)
        {
            $getdbdata = $this->db->get('events_rankup')->result_array();

            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Update Events.';

            echo json_encode($response);
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Update Events.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>