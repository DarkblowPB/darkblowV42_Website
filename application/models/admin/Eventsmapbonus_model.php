<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Eventsmapbonus_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetMap($map_id = '')
    {
        $map_list = array(
            0 => 'STR_STAGE_EMPTY',
            1 => 'Portacaba',
            2 => 'Redrock',
            3 => 'Old Library',
            4 => 'Mstation',
            5 => 'Midnight Zone',
            6 => 'Uptown',
            7 => 'Burning Hall',
            8 => 'Dsquad',
            9 => 'STR_STAGE_EMPTY',
            10 => 'Saint Mansion',
            11 => 'Eastern Road',
            12 => 'Downtown', // Deathmatch
            13 => 'Luxville', // Deathmatch
            14 => 'Blowcity',
            15 => 'Stormtube',
            16 => 'Giran2',
            17 => 'STR_STAGE_EMPTY',
            18 => 'Training Camp',
            19 => 'Sentrybase', // Deathmatch
            20 => 'STR_STAGE_EMPTY',
            21 => 'STR_STAGE_EMPTY',
            22 => 'Facerock',
            23 => 'STR_STAGE_EMPTY',
            24 => 'Sandstrorm',
            25 => 'Downtown', // Bomb Mission
            26 => 'Luxville',
            27 => 'Outpost',
            28 => 'Blowcity',
            29 => 'Stormtube',
            30 => 'Sentrybase',
            31 => 'Hospital',
            32 => 'Midtown',
            33 => 'Shopping Center',
            34 => 'Sandstorm',
            35 => 'Breakdown',
            36 => 'STR_STAGE_EMPTY',
            37 => 'STR_STAGE_EMPTY',
            38 => 'Helispot',
            39 => 'Black Panther',
            40 => 'Breeding Nest',
            41 => 'Uptown (Dino)',
            42 => 'Breeding Nest',
            43 => 'STR_STAGE_EMPTY',
            44 => 'STR_STAGE_EMPTY',
            45 => 'STR_STAGE_EMPTY',
            46 => 'STR_STAGE_EMPTY',
            47 => 'Dragon Alley',
            48 => 'STR_STAGE_EMPTY',
            49 => 'Cargoship',
            50 => 'STR_STAGE_EMPTY',
            51 => 'STR_STAGE_EMPTY',
            52 => 'Saint Mansion (Cross Counter)',
            53 => 'Dsquad (Cross Counter)',
            54 => 'Portacaba (Cross Counter)',
            55 => 'Mstation (Cross Counter)',
            56 => 'Training Camp (Cross Counter)',
            57 => 'STR_STAGE_EMPTY',
            58 => 'STR_STAGE_EMPTY',
            59 => 'STR_STAGE_EMPTY',
            60 => 'STR_STAGE_EMPTY',
            61 => 'Grand Bazaar',
            62 => 'Dino Lab',
            63 => 'STR_STAGE_EMPTY',
            64 => 'Taipei City Mall',
            65 => 'STR_STAGE_EMPTY',
            66 => 'Airport',
            67 => 'STR_STAGE_EMPTY',
            68 => 'Metro',
            69 => 'STR_STAGE_EMPTY',
            70 => 'STR_STAGE_EMPTY',
            71 => 'STR_STAGE_EMPTY',
            72 => 'STR_STAGE_EMPTY',
            73 => 'STR_STAGE_EMPTY',
            74 => 'STR_STAGE_EMPTY',
            75 => 'STR_STAGE_EMPTY',
            76 => 'STR_STAGE_EMPTY',
            77 => 'Rush Hour',
            78 => 'Cargo Port',
            79 => 'STR_STAGE_EMPTY',
            80 => 'Safe House',
            81 => 'STR_STAGE_EMPTY',
            82 => 'West Station',
            83 => 'Hard Rock',
            84 => 'STR_STAGE_EMPTY',
            85 => 'STR_STAGE_EMPTY',
            86 => 'STR_STAGE_EMPTY',
            87 => 'STR_STAGE_EMPTY',
            88 => 'STR_STAGE_EMPTY',
            89 => 'STR_STAGE_EMPTY',
            90 => 'STR_STAGE_EMPTY',
            91 => 'STR_STAGE_EMPTY',
            92 => 'Ballistic',
            93 => 'Rampart Town',
            94 => 'Fallu City',
            95 => 'STR_STAGE_EMPTY',
            96 => 'STR_STAGE_EMPTY',
            97 => 'STR_STAGE_EMPTY',
            98 => 'STR_STAGE_EMPTY',
            99 => 'STR_STAGE_EMPTY',
            100 => 'STR_STAGE_EMPTY',
            101 => 'New Library',
            102 => 'STR_STAGE_EMPTY',
            103 => 'STR_STAGE_EMPTY',
            104 => 'STR_STAGE_EMPTY',
            105 => 'Marine Wave',
            106 => 'STR_STAGE_EMPTY',
            107 => 'STR_STAGE_EMPTY',
            108 => 'STR_STAGE_EMPTY',
            109 => 'Ampera Bridge',
            110 => 'Mihawk',
            111 => 'Broken Alley',
            112 => 'Provence',
            113 => 'STR_STAGE_EMPTY',
            114 => 'STR_STAGE_EMPTY',
            115 => 'STR_STAGE_EMPTY',
            116 => 'Road Side',
            117 => 'STR_STAGE_EMPTY',
            118 => 'STR_STAGE_EMPTY',
            119 => 'Fort Santiago',
            120 => 'STR_STAGE_EMPTY',
            121 => 'Hospital',
        );
        if ($map_id == '') return $map_list;
        else return $map_list[$map_id];
    }

    function GetStageType($stage_id = '')
    {
        $stage_list = array(
            0 => 'None',
            1 => 'Death Match',
            2 => 'Bomb Mission',
            3 => 'Destroy',
            4 => 'Annihilation',
            5 => 'Defense',
            6 => 'Sudden Death',
            7 => 'Boss',
            8 => 'Head Hunter',
            9 => 'Head Killer',
            10 => 'Tutorial',
            11 => 'Domination',
            12 => 'Cross Counter',
            13 => 'Chaos',
            14 => 'Escort',
        );

        if ($stage_id == '') return $stage_list;
        else return $stage_list[$stage_id];
    }

    function GetAllItems()
    {
        return $this->db->order_by('item_id', 'asc')->get(Darkblowdatabase::shop)->result_array();
    }

    function GetAllEvents()
    {
        return $this->db->get(Darkblowdatabase::events_mapbonus)->result_array();
    }

    function AddNewEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true),
            'map_id' => $this->input->post('map_id', true),
            'stage_type' => $this->input->post('stage_type', true),
            'percent_gp' => $this->input->post('percent_gp', true),
            'percent_xp' => $this->input->post('percent_xp', true)
        );

        $query = $this->db->insert(Darkblowdatabase::events_mapbonus, array(
            'start_date' => $this->darkblowlib->ExplodeDate($data['start_date'])['years'] . $this->darkblowlib->ExplodeDate($data['start_date'])['month'] . $this->darkblowlib->ExplodeDate($data['start_date'])['days'] . $this->darkblowlib->ExplodeDate($data['start_date'])['hours'] . $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
            'end_date' => $this->darkblowlib->ExplodeDate($data['end_date'])['years'] . $this->darkblowlib->ExplodeDate($data['end_date'])['month'] . $this->darkblowlib->ExplodeDate($data['end_date'])['days'] . $this->darkblowlib->ExplodeDate($data['end_date'])['hours'] . $this->darkblowlib->ExplodeDate($data['start_date'])['minutes'],
            'map_id' => $data['map_id'],
            'stage_type' => $data['stage_type'],
            'percent_xp' => $data['percent_xp'],
            'percent_gp' => $data['percent_gp']
        ));

        if ($query) {
            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Add New Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Add New Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function DeleteEvents()
    {
        $response = array();

        $data = array(
            'start_date' => $this->input->post('start_date', true),
            'end_date' => $this->input->post('end_date', true)
        );

        $query = $this->db->get_where(Darkblowdatabase::events_mapbonus, array('start_date' => $data['start_date'], 'end_date' => $data['end_date']))->row();
        if ($query) {
            $delete = $this->db->where(array('start_date' => $query->start_date, 'end_date' => $query->end_date))->delete(Darkblowdatabase::events_mapbonus);
            if ($delete) {
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Delete Events.';

                $this->darkblowmessage->AjaxFlashData($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete Events.';

                $this->darkblowmessage->AjaxFlashData($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Events.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
