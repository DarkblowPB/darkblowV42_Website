<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Playersmanagement extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->darkblowprotection->RunningLegality();
        // $this->darkblowlicense->DarkblowPBLicense();
        $this->darkblowprotection->RequireLoginAdmin_Protection();
        $this->darkblowprotection->PageDump_Protection();
        $this->darkblowprotection->RequireAccessAdmin_Protection();
        $this->load->model('admin/playersmanagement_model', 'playersmanagement');
    }

    function index()
    {
        $data = array(
            'title' => 'All Players',
            'header' => 'All Players',
            'players' => $this->playersmanagement->GetAllPlayers(),
            'content' => 'admin/content/playersmanagement/content_allplayers'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function details($player_id = null)
    {
        if ($player_id == null) redirect(base_url('adm/playersmanagement'), 'refresh');
        else {
            $data['title'] = 'Player Details';
            $data['header'] = $data['title'];

            $data['player'] = $this->playersmanagement->GetSpecifiedPlayer($player_id);

            $data['content'] = 'admin/content/playersmanagement/content_details';
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
    }

    function createcustomplayer()
    {
        $data['title'] = 'Create Custom Player';
        $data['header'] = 'Create Custom Player';

        $data['rank'] = $this->playersmanagement->GetRankInfo();

        $data['content'] = 'admin/content/playersmanagement/content_createcustomplayer';
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function senditem()
    {
        redirect(base_url('adm/playersmanagement'), 'refresh');
        // $data['title'] = 'Send Item Player';
        // $data['header'] = 'Send Item Player';

        // $data['players'] = $this->playersmanagement->GetAllPlayers2();
        // $data['items'] = $this->playersmanagement->GetAllShop();

        // $data['content'] = 'admin/content/playersmanagement/content_senditem';

        // $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function do_resetpassword()
    {
        $response = array();
        $this->form_validation->set_rules(
            'player_id',
            'Player ID',
            'required|numeric',
            array(
                'required' => '%s cannot be empty.',
                'numeric' => '%s only numeric allowed.'
            )
        );
        if ($this->form_validation->run()) {
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_senditem()
    {
        $response = array();

        $this->form_validation->set_error_delimiters('', '');

        $this->form_validation->set_rules(
            'player_id',
            'Players',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'item_id',
            'Items',
            'required|numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'item_count',
            'Item Duration',
            'required|numeric|in_list[315576000,64800,259200,604800,2592000]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Must Be Numeric Charaters.',
                'in_list' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run()) $this->playersmanagement->SendItem();
        else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_fixinventory()
    {
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player ID',
            'required|numeric',
            array('require' => '%s Cannot Be Empty.', 'numeric' => '%s Must Be Numeric Character.')
        );

        if ($this->form_validation->run()) $this->playersmanagement->FixInventory();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_banned()
    {
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player ID',
            'required|numeric',
            array('require' => '%s Cannot Be Empty.', 'numeric' => '%s Must Be Numeric Character.')
        );

        if ($this->form_validation->run()) $this->playersmanagement->BannedPlayer();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_unbanned()
    {
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player ID',
            'required|numeric',
            array('require' => '%s Cannot Be Empty.', 'numeric' => '%s Must Be Numeric Character.')
        );

        if ($this->form_validation->run()) $this->playersmanagement->UnbannedPlayer();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_reset()
    {
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player ID',
            'required|numeric',
            array('required' => '%s Cannot Be Empty.', 'numeric' => '%s Must Be Numeric Character.')
        );
        if ($this->form_validation->run()) $this->playersmanagement->ResetPlayer();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_delete()
    {
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player ID',
            'required|numeric',
            array('required' => '%s Cannot Be Empty.', 'numeric' => '%s Must Be Numeric Character.')
        );
        if ($this->form_validation->run()) $this->playersmanagement->DeletePlayer();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_createcustomplayer()
    {
        $response = array();

        $this->form_validation->set_rules(
            'login',
            'Username',
            'required|is_unique[accounts.login]|min_length[4]|max_length[16]|alpha_numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'is_unique' => '%s Already Exists.',
                'min_length' => '%s Must Contains 4 Characters Or More.',
                'max_length' => '%s Only Can Contains 16 Characters.',
                'alpha_numeric' => '%s Only Can Using Combination Alphabetic & Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|min_length[4]|max_length[16]|alpha_numeric',
            array(
                'required' => '%s Cannot Be Empty.',
                'min_length' => '%s Must Contains 4 Characters Or More.',
                'max_length' => '%s Only Can Contains 16 Characters.',
                'alpha_numeric' => '%s Only Can Using Combination Alphabetic & Numeric Characters.'
            )
        );
        $this->form_validation->set_rules(
            'player_name',
            'Nickname',
            'required|min_length[2]|max_length[16]|alpha_numeric|is_unique[accounts.player_name]',
            array(
                'required' => '%s Cannot Be Empty.',
                'min_length' => '%s Must Contains 2 Characters Or More.',
                'max_length' => '%s Only Can Using 16 Combination Alphabetic & Numeric Characters.',
                'is_unique' => '%s Already Exists'
            )
        );
        $this->form_validation->set_rules(
            'rank',
            'Rank',
            'required|in_list[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'gp',
            'Points',
            'required|numeric|min_length[1]|max_length[6]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.',
                'min_length' => '%s Must Contains 1 Digit Numeric Value Or More.',
                'max_length' => '%s Only Can Using 6 Digits Numeric Value.'
            )
        );
        $this->form_validation->set_rules(
            'pc_cafe',
            'PC Cafe',
            'required|in_list[1,2,5]',
            array(
                'required' => '%s Cannot Be Empty.',
                'in_list' => 'Invalid %s.'
            )
        );
        $this->form_validation->set_rules(
            'money',
            'DR-Cash',
            'required|numeric|min_length[1]|max_length[6]',
            array(
                'required' => '%s Cannot Be Empty.',
                'numeric' => '%s Only Can Using Numeric Characters.',
                'min_length' => '%s Must Contains 1 Digit Numeric Value Or More.',
                'max_length' => '%s Only Can Using 6 Digits Numeric Value.'
            )
        );
        if ($this->form_validation->run()) $this->playersmanagement->RegisterCustomPlayerV2();
        else {
            $this->form_validation->set_error_delimiters('', '');

            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            $this->darkblowmessage->AjaxFlashData($response);
        }
    }

    function do_loadplayers()
    {
        $this->playersmanagement->LoadPlayersData();
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
