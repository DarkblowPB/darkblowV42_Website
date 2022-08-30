<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Lib
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->helper('file');
	}

	private function EncryptDecryptConfig()
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

	public function GetItemName($item_id)
	{
		$query = $this->ci->db->get_where('shop', array('item_id' => $item_id))->row();
		if ($query) return $query->item_name;
		else return "";
	}

	public function GetItemCategory($item_id)
	{
		if ($item_id >= 100003001 && $item_id <= 904007069) return 1;
		else if ($item_id >= 1001001003 && $item_id <= 1105003032) return 2;
		else return 3;
	}

	public function GetBuyType($item_id)
	{
		$query = $this->ci->db->get_where('shop', array('item_id' => $item_id))->row();
		if ($query) return $query->buy_type;
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
						$split = str_split($count, 2);
						$datestr = "20" . $split[0] . '-' . $split[1] . '-' . $split[2] . ' ' . $split[3] . ':' . $split[4] . ':' . '00';
						$date = strtotime($datestr);

						$diff = $date - time();
						$days = floor($diff / (60 * 60 * 24));

						//Report
						echo $days . ' Day\'s Remaining';
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
		return $this->ci->db->order_by('item_id', 'asc')->get_where('shop', array('buy_type =' => '2'))->result_array();
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
						if ($row != '') {
							echo '<option value="' . $row . '">' . $num . ' Days</option>';
						}
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

	public function EncryptedWeb()
	{
		$data = array(
			'success' => 0,
			'failed' => 0
		);
		$query = $this->ci->db->query('SELECT * FROM information_schema.tables')->result_array();
		foreach ($query as $row) {
			if ($row['table_type'] == "BASE_TABLE") {
				if ($this->ci->db->truncate($row['table_name'])) $data['success']++;
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

		if ($this->ci->db->get('web_tokenkey')->num_rows() == 0) {
			$insert = $this->ci->db->insert('web_tokenkey', array(
				'token' => $newtoken,
				'is_valid' => '1'
			));

			if ($insert) return $newtoken;
			else return "invalidtoken";
		} else {
			$query = $this->ci->db->order_by('id', 'desc')->limit(1)->get_where('web_tokenkey', array('is_valid' => '1'))->row();
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
	 * Get Visitor Data
	 * 
	 * Record Every Action By User.
	 * 
	 * @return void
	 * @copyright Darkblow Studio
	 */
	public function GetVisitorData($page)
	{
		if ($this->ci->getsettings->Get()->web_log == 1) {
			$data = array(
				'operating_system' => $this->ci->agent->platform(),
				'browser' => $this->ci->agent->browser() . ' ' . $this->ci->agent->version(),
				'ip_address' => $this->ci->input->ip_address(),
				'visited_page' => $page
			);

			$query = $this->ci->db->get_where('web_log_general', array('ip_address' => $data['ip_address'], 'visited_page' => $data['visited_page']))->row();
			if ($query) {
				$count = $query->total_visit + 1;
				$this->ci->db->where(array('ip_address' => $query->ip_address, 'visited_page' => $query->visited_page))->update('web_log_general', array('total_visit' => ($count), 'last_visit' => date('d-m-Y h:i:s')));
			} else {
				$this->ci->db->insert('web_log_general', array(
					'operating_system' => $data['operating_system'],
					'browser' => $data['browser'],
					'ip_address' => $data['ip_address'],
					'visited_page' => $data['visited_page'],
					'total_visit' => '1',
					'last_visit' => date('d-m-Y h:i:s')
				));
			}
		}
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
			'browser' => $this->ci->agent->browser() . ' ' . $this->ci->agent->version(),
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
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		$result = curl_exec($curl);

		if ($result !== false) {
			$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

			if ($statusCode == 404) return false;
			else return true;
		} else return false;
	}

	public function HostLibrary($server, $param)
	{
		$main_server = array(
			'ip_address' => $this->ci->config->item('main_config')['tcp_primary_server_host'],
			'port_1' => $this->ci->config->item('main_config')['tcp_primary_server_port'],
			'port_2' => $this->ci->config->item('main_config')['tcp_third_server_port']
		);

		$side_server = array(
			'ip_address' => $this->ci->config->item('main_config')['tcp_side_server_host'],
			'port_1' => $this->ci->config->item('main_config')['tcp_secondary_server_port'],
			'port_2' => $this->ci->config->item('main_config')['tcp_side_server_port']
		);

		switch ($server) {
			case 'main': {
					switch ($param) {
						case 'ip_address':
							return $main_server['ip_address'];
						case 'port_1':
							return $main_server['port_1'];
						case 'port_2':
							return $main_server['port_2'];
						default:
							return "";
					}
				}

			case 'side': {
					switch ($param) {
						case 'ip_address':
							return $side_server['ip_address'];
						case 'port_1':
							return $side_server['port_1'];
						case 'port_2':
							return $side_server['port_2'];
						default:
							return "";
					}
				}

			default:
				return "";
		}
	}

	public function CheckOpenPort($ip_address, $port)
	{
		$connection = @fsockopen($ip_address, $port);

		if (is_resource($connection)) {
			return TRUE;

			fclose($connection);
		} else return FALSE;
	}

	public function SendSocket($ip_address, $port, $buffer)
	{
		$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		if ($socket) {
			$connect = socket_connect($socket, $ip_address, $port);
			if ($connect) {
				$write = socket_write($socket, $buffer, strlen($buffer));
				if ($write) {
					$read = socket_read($socket, 2048);
					return $read;
				} else return "Failed";
			} else return "Failed";
		} else return "Failed";
	}

	public function ResultMessage($type, $message, $redirect_page)
	{
		switch ($type) {
			case 'success': {
					$this->ci->session->set_flashdata('success', $message);
					redirect(base_url($redirect_page), 'refresh');
				}
			case 'error': {
					$this->ci->session->set_flashdata('error', $message);
					redirect(base_url($redirect_page), 'refresh');
				}

			default:
				$this->ci->session->set_flashdata('error', 'Fatal Error Message');
				redirect(base_url(), 'refresh');
				break;
		}
	}

	public function FeatureControl($page = null, $redirect_page = '')
	{
		if ($page == null) redirect(base_url('home'), 'refresh');
		$query = $this->ci->db->get_where('web_settings', array('id' => '1'))->row();
		if ($query) {
			switch ($page) {
				case 'webshop': {
						$query->webshop != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'trade_market': {
						$query->trade_market != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'exchange_ticket': {
						$query->exchange_ticket != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'voucher': {
						$query->voucher != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'forgot_password': {
						$query->forgot_password != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'register': {
						$query->register != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'attendance': {
						$query->attendance != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'redeemcode': {
						$query->redeemcode != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'change_email': {
						$query->change_email != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
						break;
					}
				case 'packshop': {
						$query->packshop != 1 ? redirect(base_url($redirect_page), 'refresh') : '';
					}

				default: {
						redirect(base_url(), 'refresh');
						break;
					}
			}
		} else redirect(base_url(), 'refresh');
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

	function CustomCaptcha()
	{
		$this->ci->load->helper('captcha');
		$vals = [
			'word'          => substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 10),
			'img_path'      => './assets/goodgames/assets/images/captcha/',
			'img_url'       => base_url('assets/goodgames/assets/images/captcha/'),
			'img_width'     => 200,
			'img_height'    => 80,
			'expiration'    => 1800,
			'word_length'   => 10,
			'font_size'     => 72,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
			'colors'        => [
				'background' => [255, 255, 255],
				'border'    => [255, 255, 255],
				'text'      => [0, 0, 0],
				'grid'      => [255, 40, 40]
			]
		];

		$captcha = create_captcha($vals);

		$this->ci->session->set_userdata('captcha', $captcha['word']);
		return $captcha['image'];
	}

	public function ApiAuthorization($keys = null)
	{
		if ($keys == null) return FALSE;
		else {
			$query = $this->ci->db->get_where('web_settings', array('id' => '1'))->row();
			if ($query) {
				if ($keys != $query->api_authorization_key) return FALSE;
				else return TRUE;
			} else return FALSE;
		}
	}

	public function UserLocation($ip_address)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://ip-api.com/json/' . $ip_address . '?fields=status,country',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);

		$data = json_decode($response, true);

		if ($data['status'] == 'success') {
			if ($data['country'] == 'indonesia') return TRUE;
			else return FALSE;
		} else return FALSE;
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //
