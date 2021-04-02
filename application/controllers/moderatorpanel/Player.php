<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Player extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->admin_protect->adminProtectA();
        $this->load->model('moderatorpanel/Adminplayer_model', 'adminplayer');
        $this->load->model('moderatorpanel/admincreateplayer_model', 'createplayer');
        $this->load->model('moderatorpanel/logger_model', 'logger');
        $this->load->library('lib');
		$this->load->AllProtect->Web_Protection();
    }

    function index()
    {
        $data['title'] = 'DarkblowPB || Data Players';
        $data['header'] = 'Data Players';
        $data['player'] = $this->adminplayer->getPlayerAll();
        $data['content'] = 'moderatorpanel/content/player/content_dataplayer';
        $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
    }

    function view()
    {
        if ($_GET['id'] == null)
        {
            redirect(base_url('moderatorpanel/player'), 'refresh');
        }
        if ($_GET['id'] != null) 
        {
            $data['title'] = 'DarkblowPB || View Details';
            $data['header'] = 'Player Details';

            $data['details'] = $this->adminplayer->getPlayerId($_GET['id']);
            $data['p_id'] = $_GET['id'];
            
            $data['inventory'] = $this->adminplayer->getInventoryId($_GET['id']);
            $data['unused'] = $this->adminplayer->getItem_unused($_GET['id']);
            $data['used'] = $this->adminplayer->getItem_used($_GET['id']);
            $data['permanent'] = $this->adminplayer->getItem_permanent($_GET['id']);
            
            $data['content'] = 'moderatorpanel/content/player/content_viewplayer';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
    }

    function inventory()
    {
        if (date('h') >= "00" && date('h') <= "23")
        {
            if ($_GET['id'] == null) 
            {
                redirect(base_url('moderatorpanel/player'), 'refresh');
            }
            if ($_GET['id'] != null) 
            {
                $data['title'] = 'DarkblowPB || View Inventory';
                $data['header'] = 'View Inventory';
                
                $data['inventory'] = $this->adminplayer->getInventoryIdAll($_GET['id']);
                $data['player'] = $this->adminplayer->getPlayerId($_GET['id']);
                
                $data['content'] = 'moderatorpanel/content/player/content_viewinventory';
                $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
            }
        }
        else 
        {
            $this->session->set_flashdata('error', 'This Feature Only Available At 00:00 - 05:00 AM GMT+7 (Asia/Jakarta)');
            redirect(base_url('moderatorpanel/home'), 'refresh');
        }
    }
    
    function banned()
    {
        if ($_GET['id'] == null) 
        {
            redirect(base_url('moderatorpanel/player'), 'refresh');
        }
        if ($_GET['id'] != null) 
        {
            $this->form_validation->set_rules(
                'player_id',
                'Player ID',
                'required',
                array('required' => '%s Cannot Be Empty')
            );
            $this->form_validation->set_rules(
                'player_name',
                'Player Name',
                'required',
                array('required' => '%s Cannot Be Empty')
            );
            $this->form_validation->set_rules(
                'banned_type',
                'Banned Type',
                'required',
                array('required' => '%s Cannot Be Empty')
            );
            if ($this->form_validation->run() === FALSE) 
            {
                $data['title'] = 'DarkblowPB || Banned Player';
                $data['header'] = 'Banned Player Form';
                $data['player'] = $this->adminplayer->getPlayerId($_GET['id']);
                $data['content'] = 'moderatorpanel/content/player/content_bannedplayer';
                $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
            }
            else 
            {
                $this->adminplayer->banned_player();
            }
        }
    }

    function create_player()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'username',
            'Username',
            'trim|required|alpha_numeric|min_length[4]|max_length[16]|is_unique[accounts.login]|strtolower',
            array(
                'required' => '%s Cannot Be Empty',
                'alpha_numeric' => '%s Only Character & Number Allowed',
                'min_length' => '%s Must Be 4 Character Or More',
                'max_length' => '%s Maximal Length Reached (max. 16 Character)',
                'is_unique' => '%s Already Exist'
            )
        );
        $valid->set_rules(
            'password',
            'Password',
            'trim|required|alpha_numeric|min_length[4]|max_length[16]|strtolower',
            array(
                'required' => '%s Cannot Be Empty',
                'alpha_numeric' => '%s Only Character & Number Allowerd',
                'min_length' => '%s Must Be 4 Character Or More',
                'max_length' => '%s Maximal Length Reached (max. 16 Character)'
            )
        );
        $valid->set_rules(
            're_password',
            'Re Password',
            'trim|required|alpha_numeric|min_length[4]|max_length[16]|strtolower|matches[password]',
            array(
                'required' => '%s Cannot Be Empty',
                'alpha_numeric' => '%s Only Character & Number Allowed',
                'min_length' => '%s Must Be 4 Character Or More',
                'max_length' => '%s Maximal Length Reached (max. 16 Character)',
                'matches' => '%s Doesnt Match'
            )
        );
        $valid->set_rules(
            'player_name',
            'Player Name',
            'trim|required|alpha_numeric|min_length[4]|max_length[16]|is_unique[accounts.player_name]',
            array(
                'required' => '%s Cannot Be Empty',
                'alpha_numeric' => '%s Only Character & Number Allowed',
                'min_length' => '%s Must Be 4 Character Or More',
                'max_length' => '%s Maximal Length Reached (max. 16 Character)',
                'is_unique' => '%s Already Exist'
            )
        );
        $valid->set_rules(
            'rank',
            'Rank',
            'required|numeric|max_length[2]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 2 Numeric Character'
            )
        );
        $valid->set_rules(
            'points',
            'Points',
            'required|numeric|max_length[6]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 6 Numeric Character'
            )
        );
        $valid->set_rules(
            'exp',
            'Exp',
            'required|numeric|max_length[6]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 6 Numeric Character'
            )
            );
        $valid->set_rules(
            'pc_cafe',
            'Badge',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 1 Numeric Character'
            )
        );
        $valid->set_rules(
            'access_level',
            'Access Level',
            'required|numeric|max_length[1]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 1 Numeric Character'
            )
        );
        $valid->set_rules(
            'email',
            'Email',
            'trim|strtolower|required|valid_email|min_length[10]|max_length[30]|is_unique[accounts.email]',
            array(
                'required' => '%s Cannot Be Empty',
                'valid_email' => '%s Not Valid',
                'min_length' => '%s Must Be 4 Character Or More',
                'max_length' => '%s Maximal Length Reached (max. 30 Character)',
                'is_unique' => '%s Already Exist'
            )
        );
        $valid->set_rules(
            'd_cash',
            'D-Cash',
            'required|numeric|max_length[5]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 5 Numeric Character'
            )
        );
        $valid->set_rules(
            'webcoin',
            'Webcoin',
            'required|numeric|max_length[5]',
            array(
                'required' => '%s Cannot Be Empty',
                'numeric' => '%s Must Be Numeric Character',
                'max_length' => '%s Maximal 5 Numeric Character'
            )
        );
        if ($valid->run() === FALSE) 
        {
            $data['title'] = 'DarkblowPB || Create Player';
            $data['header'] = 'Create Player';

            $data['createplayer'] = $this->createplayer->getRankList();

            $data['content'] = 'moderatorpanel/content/player/content_createplayer';
            $this->load->view('moderatorpanel/layout/wrapper', $data, FALSE);
        }
        else 
        {
            $i = $this->input;

            $data = array(
                'login' => $i->post('username'),
                'password' => $this->lib->password_encrypt($i->post('password')),
                'player_name' => $i->post('player_name'),
                'rank' => $i->post('rank'),
                'gp' => $i->post('points'),
                'exp' => $i->post('exp'),
                'pc_cafe' => $i->post('pc_cafe'),
                'access_level' => $i->post('access_level'),
                'email' => $i->post('email'),
                'money' => $i->post('d_cash'),
                'kuyraicoin' => $i->post('webcoin')
            );
            if ($data) 
            {
                $this->createplayer->addPlayer($data);
                $this->logger->logger_CreateAccountSuccess();
                $this->session->set_flashdata('Success', 'Create Player Successfully');
                redirect(base_url('moderatorpanel/player/create_player'), 'refresh');
            }
            else 
            {
                $this->logger->logger_CreateAccountFailed();
                $this->session->set_flashdata('Failed', 'Create Player Failed');
                redirect(base_url('moderatorpanel/player/create_player'), 'refresh');
            }
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>