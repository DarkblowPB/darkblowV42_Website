<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Querylib
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->database();
    }

    /**
     * Internal Assembly
     * 
     * About The Website
     * 
     * @return string
     * @copyright DarkblowStudio 2021
     */
    public function InternalAssembly(string $param)
    {
        $string = array(
            'Author' => $this->ci->encryption->encrypt('EyeTracker'),
            'Company' => $this->ci->encryption->encrypt('Darkblow Studio'),
            'Version' => $this->ci->encryption->encrypt('1.3.1'),
            'Framework' => $this->ci->encryption->encrypt('Codeigniter 3'),
            'PHP_Version' => $this->ci->encryption->encrypt('7.4')
        );

        switch ($param) 
        {
            case 'Author':
                return $string['Author'];

            case 'Company':
                return $string['Company'];

            case 'Version':
                return $string['Version'];

            case 'Framework':
                return $string['Framework'];
            
            case 'PHP_Version':
                return $string['PHP_Version'];
            
            default:
                return '';
        }
        return '';
    }

    /**
     * Insert Item.
     * 
     * Insert Item To Player Inventory.
     * 
     * @return bool
     * @copyright DarkblowStudio 2021
     */
    public function InsertItem(int $player_id, int $item_id, string $item_name, int $count, int $category, int $equip)
    {
        $query = $this->ci->db->insert('player_items', array(
            'owner_id' => $player_id,
            'item_id' => $item_id,
            'item_name' => $item_name,
            'count' => $count,
            'category' => $category,
            'equip' => $equip
        ));

        if ($query) return TRUE; else return FALSE;
    }

    /**
     * Delete Item
     * 
     * Delete Item From Player Inventory
     * 
     * @return bool
     * @copyright DarkblowStudio 2021
     */
    public function DeleteItem(int $player_id, int $item_id)
    {
        $query = $this->ci->db->where(array('owner_id' => $player_id, 'item_id' => $item_id))->delete('player_items');
        if ($query) return TRUE; else return FALSE;
    }

    /**
     * Insert Cash
     * 
     * Insert Cash To Players
     * 
     * @return bool
     * @copyright DarkblowStudio 2021
     */
    public function InsertCash(int $player_id, int $amount)
    {
        $query = $this->ci->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query)
        {
            $base_cash = $query->money;
            $total_cash = $base_cash + $amount;
            
            $update = $this->ci->db->where('player_id', $query->player_id)->update('accounts', array('money' => $total_cash));
            if ($update) return TRUE; else return FALSE;
        }
        else return FALSE;
    }
    
    /**
     * Banned Player
     * 
     * Banned Player Permanently
     * 
     * @return bool
     * @copyright DarkblowStudio 2021
     */
    public function BannedPlayer(int $player_id)
    {
        $query = $this->ci->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query)
        {
            $banned = $this->ci->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '-1'));
            if ($banned) return TRUE; else return FALSE;
        }
        else return FALSE;
    }
    
    /**
     * Unbanned Player
     * 
     * Unbanned Player Permanently
     * 
     * @return bool
     * @copyright DarkblowStudio 2021
     */
    public function UnbannedPlayer(int $player_id)
    {
        $query = $this->ci->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query)
        {
            $banned = $this->ci->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '0'));
            if ($banned) return TRUE; else return FALSE;
        }
        else return FALSE;
    }

    /**
     * Clear No Activicty Player
     * 
     * Clear No Activity Player Account
     * 
     * @return bool
     * @copyright DarkblowStudio 2021
     */
    public function ClearNoActivityPlayer()
    {
        $query = $this->ci->db->delete('accounts', array('last_login' => '0'));
        if ($query) return TRUE; else return FALSE;
    }

    /**
     * Send Email
     * 
     * Send Email To Players
     */
    public function SendEmail($email_address)
    {
        $config = array(
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'imamrasyidbackup@gmail.com',
            'smtp_pass'   => 'imamkbm123',
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        );

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from('no_reply@'.$this->ci->getsettings->Get2()->project_name.'.com', $this->ci->getsettings->Get2()->project_name);
        $this->email->to($email_address);
        $this->email->subject('Email Verification');
        $this->email->message('');
        if ($this->email->send()) return TRUE; else return FALSE;
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>