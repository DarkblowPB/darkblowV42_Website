<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Playersmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
    }

    function GetAllPlayers()
    {
        return $this->db->get('accounts')->result_array();
    }

    function GetRankInfo()
    {
        return $this->db->order_by('id', 'asc')->get('web_rankinfo')->result_array();
    }

    function RegisterCustomPlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'login' => $this->encryption->encrypt($this->input->post('login', true)),
            'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password', true))),
            'player_name' => $this->encryption->encrypt($this->input->post('player_name', true)),
            'rank' => $this->encryption->encrypt($this->input->post('rank', true)),
            'gp' => $this->encryption->encrypt($this->input->post('gp', true)),
            'pc_cafe' => $this->encryption->encrypt($this->input->post('pc_cafe', true)),
            'money' => $this->encryption->encrypt($this->input->post('money', true))
        );

        $query = $this->db->insert('accounts', array(
            'login' => $this->encryption->decrypt($data['login']),
            'password' => $this->encryption->decrypt($data['password']),
            'player_name' => $this->encryption->decrypt($data['player_name']),
            'rank' => $this->encryption->decrypt($data['rank']),
            'gp' => $this->encryption->decrypt($data['gp']),
            'pc_cafe' => $this->encryption->decrypt($data['pc_cafe']),
            'money' => $this->encryption->decrypt($data['money'])
        ));

        if ($query)
        {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Created Custom Player.';
            echo json_encode($response);
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Create Custom Player.';
            echo json_encode($response);
        }
    }

    function DeletePlayer()
    {
        sleep(1);
        $response = array();
        
        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            if ($query->player_name == "[DEV] EyeTracker")
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Player.';
            }
            else
            {
                $delete = $this->db->where('player_id', $query->player_id)->delete('accounts');
                if ($delete)
                {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Delete This Player.';
                    echo json_encode($response);
                }
                else
                {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Delete This Player.';
                    echo json_encode($response);
                }
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function ResetPlayer()
    {
        sleep(1);
        $response = array();
        $defaultData = array(
            'rank' => '31',
            'gp' => '250000',
            'exp' => '1690000',
            'pc_cafe' => '1',
            'last_rankup_date' => '1010000',
            'money' => '10000',
            'weapon_primary' => '100003004',
            'weapon_secondary' => '601002003',
            'weapon_melee' => '702001001',
            'weapon_thrown_normal' => '803007001',
            'weapon_thrown_special' => '904007002',
            'char_red' => '1001001005',
            'char_blue' => '1001002006',
            'char_helmet' => '1102003001',
            'char_dino' => '1006003041',
            'char_beret' => '0',
            'kuyraicoin' => '1000'
        );
        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', $defaultData);
            if ($update)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Reset This Player.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Reset This Player.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function UnbannedPlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '0'));
            if ($update)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Unbanned This Player.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Unbanned This Player.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function BannedPlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '-1'));
            if ($update)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Banned This Player.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Banned This Player.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function FixInventory()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', array(
                'weapon_primary' => '100003004',
                'weapon_secondary' => '601002003',
                'weapon_melee' => '702001001',
                'weapon_thrown_normal' => '803007001',
                'weapon_thrown_special' => '904007002',
                'char_red' => '1001001005',
                'char_blue' => '1001002006',
                'char_helmet' => '1102003001',
                'char_dino' => '1006003041',
                'char_beret' => '0'
            ));
            if ($update)
            {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Reset Equipment To Default.';
                echo json_encode($response);
            }
            else
            {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Reset Equipment.';
                echo json_encode($response);
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Player Not Found.';
            echo json_encode($response);
        }
    }

    function GetWeaponName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query)
        {
            return $query->item_name;
        }
        else
        {
            return "";
        }
    }

    function GetSpecifiedPlayer($player_id)
    {
        $query = $this->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query)
        {
            return $query;
        }
        else
        {
            redirect(base_url('adm/playersmanagement'), 'refresh');
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>