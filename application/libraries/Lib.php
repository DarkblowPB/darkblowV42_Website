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
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>