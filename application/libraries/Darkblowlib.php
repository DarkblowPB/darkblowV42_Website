<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Darkblowlib
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	protected function EncryptDecryptConfig()
	{
		$config = array(
			'ciphering' => $this->ci->config->item('main_config')['encryption_ciphering'],
			'options' => $this->ci->config->item('main_config')['options'],
			'encryption_iv' => $this->ci->config->item('main_config')['encryption_iv'],
			'encryption_key' => $this->ci->config->item('main_config')['encryption_key']
		);

		return $config;
	}

	public function Encrypt($param)
	{
		// Store the cipher method
		$ciphering = $this->EncryptDecryptConfig()['ciphering'];

		// Use OpenSSl Encryption method
		$options = $this->EncryptDecryptConfig()['options'];

		// Non-NULL Initialization Vector for encryption
		$encryption_iv = $this->EncryptDecryptConfig()['encryption_iv'];

		// Store the encryption key
		$encryption_key = $this->EncryptDecryptConfig()['encryption_key'];

		// Use openssl_encrypt() function to encrypt the data
		$encryption = openssl_encrypt($param, $ciphering, $encryption_key, $options, $encryption_iv);

		return $encryption;
	}

	public function Decrypt($param)
	{
		// Store the cipher method
		$ciphering = $this->EncryptDecryptConfig()['ciphering'];

		// Use OpenSSl Encryption method
		$options = $this->EncryptDecryptConfig()['options'];

		// Non-NULL Initialization Vector for decryption
		$decryption_iv = $this->EncryptDecryptConfig()['encryption_iv'];

		// Store the decryption key
		$decryption_key = $this->EncryptDecryptConfig()['encryption_key'];

		// Use openssl_decrypt() function to decrypt the data
		$decryption = openssl_decrypt($param, $ciphering, $decryption_key, $options, $decryption_iv);

		return $decryption;
	}

	public function GetItemDetails($object_id)
	{
		if (is_numeric($object_id) && $object_id > 0) {
			$this->ci->db->trans_start();
			$this->ci->db->select('*', TRUE);
			$this->ci->db->from(Darkblowdatabase::player_items);
			$this->ci->db->where('object_id', $object_id, TRUE);

			$result = $this->ci->db->get()->row_array();
			$this->ci->db->trans_complete();

			if ($result != null) return $result;
			else return null;
		}
	}

	public function GetItemName($item_id)
	{
		$this->ci->db->trans_start();
		$this->ci->db->select('*', TRUE);
		$this->ci->db->from(Darkblowdatabase::shop);
		$this->ci->db->where('item_id', $item_id, TRUE);

		$result = $this->ci->db->get()->row_array();
		$this->ci->db->trans_complete();

		if ($result != null) return $result['item_name'];
		else return '';
	}

	public function GetItemCategory($item_id)
	{
		if ($item_id >= 100003001 && $item_id <= 904007069) return 1;
		else if ($item_id >= 1001001003 && $item_id <= 1105003032) return 2;
		else return 3;
	}

	public function GetBuyType($item_id)
	{
		$this->ci->db->trans_start();
		$this->ci->db->select('*', TRUE);
		$this->ci->db->from(Darkblowdatabase::shop);
		$this->ci->db->where('item_id', $item_id, TRUE);

		$result = $this->ci->db->get()->row_array();
		$this->ci->db->trans_complete();

		if ($result != null) return $result['buy_type'];
		else return 0;
	}

	public function GetItemDuration($buy_type, $count, $equip = null)
	{
		switch ($buy_type) {
			case '1': {
					if ($equip != null)
						if ($equip != 1) echo 'Invalid';
						else if ($count == 1) echo $count . ' Unit';
						else echo $count . ' Unit\'s';
					break;
				}
			case '2': {
					if ($equip == 1) {
						$result = $count / 24 / 60 / 60;
						if ($result == 1) echo $result . ' Day';
						else echo $result . ' Day\'s';
					} else if ($equip == 2) {
						$splitvalue = str_split($count, 2); // $split[0] = Year, $split[1] = Month, $split[2] = Day, $split[3] = Hours, $split[4] = Minutes;
						$addyears = $splitvalue[0] + 10;
						$dateformat = "20" . $addyears . '-' . $splitvalue[1] . '-' . $splitvalue[2] . ' ' . $splitvalue[3] . ':' . $splitvalue[4] . ':' . '00';
						$getunixfromdateformat = strtotime($dateformat);
						$getunixfromnow = time();
						$remaindays = $getunixfromdateformat - $getunixfromnow;
						echo round(($remaindays / 86400)) . ' Day\'s Remaining';
					} else echo 'Permanent';
					break;
				}

			default: {
					echo 'Invalid Duration';
					break;
				}
		}
	}

	public function GetItemRewardList()
	{
		$this->ci->db->trans_start();
		$this->ci->db->select('*', TRUE);
		$this->ci->db->from(Darkblowdatabase::shop);
		$this->ci->db->where('buy_type', '2', TRUE);
		$this->ci->db->where('item_id >= ', '100003004', TRUE);
		$this->ci->db->where('item_id <= ', '1105003032', TRUE);
		$this->ci->db->order_by('item_id', 'ASC', TRUE);

		$result = $this->ci->db->get()->result_array();
		$this->ci->db->trans_complete();

		return $result;
	}

	public function GetItemDurationList($type, $days, $totaldays)
	{
		$num = 1;
		$count = 0;
		$day = 86400;
		$list = '';
		for ($i = 1; $i < $totaldays + 1; $i++) {
			$list .= ($count += ($day)) . ',';
		}

		switch ($type) {
			case 'create': {
					$explode = explode(',', $list);
					foreach ($explode as $row) {
						if ($row != '') echo '<option value="' . $row . '">' . $num . ' Days</option>';
						$num++;
					}
					break;
				}
			case 'edit': {
					$explode = explode(',', $list);
					foreach ($explode as $row) {
						if ($row != '') {
							if ($row == $days) echo $row = '<option value="' . $row . '" selected>' . $num . ' Days</option>';
							else echo '<option value="' . $row . '">' . $num . ' Days</option>';
						}
						$num++;
					}
					break;
				}

			default:
				# code...
				break;
		}
	}

	public function TruncateDatabase()
	{
		$data = array(
			'success' => 0,
			'failed' => 0
		);

		$this->ci->db->trans_start();
		$this->ci->db->select('*', TRUE);
		$this->ci->db->from('information_schema.tables');

		$result = $this->ci->db->get()->result_array();
		$this->ci->db->trans_complete();

		foreach ($result as $key => $value) {
			if ($value['table_type'] == 'BASE_TABLE') {
				$this->ci->db->trans_start();
				$this->ci->db->truncate($value['table_name']);
				$this->ci->db->trans_complete();

				if ($this->ci->db->trans_status()) $data['success']++;
				else $data['failed']++;
			}
		}
	}

	public function password_encrypt($password)
	{
		$ingredient = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
		$encrypt_result = hash_hmac('md5', $password, $ingredient);
		return $encrypt_result;
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
		$resultdate['years'] = $split1[1] - 10;
		$resultdate['month'] = $explode2;
		$resultdate['days'] = $split2[0];
		$resultdate['hours'] = $explode5[0];
		$resultdate['minutes'] = $explode6;

		return $resultdate;
	}

	/**
	 * Date Convert Function
	 * Enable When Use Date Format (dd/mm/yyyy) / (yyyy/mm/dd)
	 */
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
		$newtoken = '';

		$newtoken .= $this->GenerateRandomToken();

		if ($this->ci->db->get(Darkblowdatabase::web_tokenkey)->num_rows() == 0) {
			$insert = $this->ci->db->insert(Darkblowdatabase::web_tokenkey, array(
				'token' => $newtoken,
				'is_valid' => '1'
			));

			if ($insert) return $newtoken;
			else return "invalidtoken";
		} else {
			$query = $this->ci->db->order_by('id', 'desc')->limit(1)->get_where(Darkblowdatabase::web_tokenkey, array('is_valid' => '1'))->row();
			if ($query) return $query->token;
			else return "invalidtoken";
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

		for ($i = 0; $i < $length['token_length']; $i++) $value['token'] .= $characters[rand(0, $length['characters_length'] - 1)];

		return $value['token'];
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
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		$result = curl_exec($curl);

		if ($result !== false) {
			$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

			if ($statusCode == 404) return false;
			else return true;
		} else return false;
	}

	public function CheckOpenPort($ip_address, $port)
	{
		$connection = @fsockopen($ip_address, $port);

		if (is_resource($connection)) {
			return TRUE;

			fclose($connection);
		} else return FALSE;
	}

	public function ParseUnixTimeStamp($unixtimestamp)
	{
		return date('d-m-Y H:i:s', $unixtimestamp);
	}

	public function ObfuscateEmail($email)
	{
		$em   = explode("@", $email);
		$name = implode('@', array_slice($em, 0, count($em) - 1));
		$len  = floor(strlen($name) / 2);

		echo substr($name, 0, $len) . str_repeat('*', $len) . "@" . end($em);
	}

	public function GenerateRandomTokenV2($token_length = null)
	{
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$length = strlen($characters);
		$token = '';

		if ($token_length == null) return "Invalid_Token";
		else {
			for ($i = 0; $i < $token_length; $i++) $token .= $characters[rand(0, $length - 1)];
			return $token;
		}
	}

	public function ApiAuthorization($keys = null)
	{
		if ($keys == null) return FALSE;
		else {
			$query = $this->ci->db->get_where(Darkblowdatabase::web_settings, array('id' => '1'))->row();
			if ($query) {
				if ($keys != $query->api_authorization_key) return FALSE;
				else return TRUE;
			} else return FALSE;
		}
	}

	public function GetServerMaxPlayers()
	{
		$query = $this->ci->db->get_where(Darkblowdatabase::info_gameservers, array('id' => '1'))->row();
		if ($query) return $query->max_players;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //
