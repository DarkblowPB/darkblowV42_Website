<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function index()
    {
        
    }

    function getplayerdata()
    {
        $response = [];
        $username = $this->input->get('username');

        if ($username != null)
        {
            $db_check = $this->db->get_where('accounts', array('login' => $username))->result_array();
            if ($db_check)
            {
                foreach ($db_check as $row)
                {
                    $data = array(
                        'login' => $row['login'],
                        'password' => $row['password'],
                        'player_id' => $row['player_id'],
                        'player_name' => $row['player_name'],
                        'clan_id' => $row['clan_id'],
                        'rank' => $row['rank'],
                        'gp' => $row['gp'],
                        'exp' => $row['exp'],
                        'pc_cafe' => $row['pc_cafe'],
                        'fights' => $row['fights'],
                        'fights_win' => $row['fights_win'],
                        'fights_lost' => $row['fights_lost'],
                        'kills_count' => $row['kills_count'],
                        'deaths_count' => $row['deaths_count'],
                        'headshots_count' => $row['headshots_count'],
                        'escapes' => $row['escapes'],
                        'access_level' => $row['access_level'],
                        'lastip' => $row['lastip'],
                        'email' => $row['email'],
                        'money' => $row['money'],
                        'online' => $row['online'],
                        'fights_draw' => $row['fights_draw'],
                        'totalkills_count' => $row['totalkills_count'],
                        'totalfights_count' => $row['totalfights_count'],
                        'last_mac' => $row['last_mac'],
                        'kuyraicoin' => $row['kuyraicoin'],
                        'hint_question' => $row['hint_question'],
                        'hint_answer' => $row['hint_answer'],
                        'date_registered' => $row['date_registered']
                    );
                    array_push($response, $data);
                }
            }
        }
        echo json_encode($response);
    }

    function Login()
    {
        $data = array(
            'login' => $this->input->get('login'),
            'password' => $this->lib->password_encrypt($this->input->get('password'))
        );

        $check = $this->db->get_where('accounts', array('login' => $data['login'], 'password' => $data['password']))->row();
        if ($check)
        {
            echo "Success";
        }
        else 
        {
            echo "Failed";
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>