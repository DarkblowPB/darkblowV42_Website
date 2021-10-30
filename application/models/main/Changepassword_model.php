<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
	}

	function SendNotificationEmail($username, $password)
	{
		$config = array(
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com', // Your SMTP Host
			'smtp_user' => 'imamrasyidbackup@gmail.com',  // Your Email
			'smtp_pass'   => 'imamkbm123',  // Your Password
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		);

		$this->load->library('email');

		$this->email->initialize($config);
		$this->email->from('no-reply@yourdomain.com', 'Your Project Name');
		$this->email->to($email);
		$this->email->subject('Password Changed!');
		$this->email->message('<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Email Confirmation</title>
			<style>
				*{
					font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
				}
				body{
					margin: auto;
					padding-top: 25px;
					padding-bottom: 25px;
					width: 50%;
					height: auto;
				}
				table{
					border: 1px solid;
					border-radius: 3px;
					width: 700px;
					height: auto;
				}
				td{
					margin: 10px;
					padding: 10px;
				}
				a{
					text-decoration: none;
					color: #007bff;
				}
		
				.bg-primary{
					background-color: #dd163b;
					color: #fff;
				}
				.bg-light{
					background-color: #f8f9fa;
					color: #212529;
				}
				.btn{
					background-color: #dd163b;
					border: 1px solid transparent;
					border-radius: .25rem;
					color: #fff;
					padding: 10px 15px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
				}
		
				#header{
					font-size: 14px;
					font-weight: bold;
					text-transform: uppercase;
				}
				#content{
					margin: auto;
					width: 75%;
				}
				#data{
					font-weight: bold;
				}
				#warning{
					color: #dc3545;
				}
			</style>
		</head>
		<body>
			<table align="center">
				<thead class="bg-primary">
					<th colspan="2"><a href="javascript:void(0)" style="text-decoration: none;"><img src="'.base_url().'assets/goodgames/assets/images/settings/'.$this->getsettings->Get2()->project_logo.'" alt="'.$this->getsettings->Get2()->project_name.'"></a></th>
				</thead>
				<tbody class="bg-light">
					<tr>
						<td colspan="2" id="header" align="center">Password Changed - '.$this->getsettings->Get2()->project_name.'</td>
					</tr>
					<tr>
						<td align="center">
							Hai email@domain.com, Your <b>Password</b> Has Been Changed. If You Not Doing This, Please Contact DEV / GM For More Details.
						</td>
					</tr>
					<tr>
						<td>
							<table id="content">
								<tbody>
									<tr>
										<td width="35%">Username</td>
										<td width="5%">:</td>
										<td id="data">'.$username.'</td>
									</tr>
									<tr>
										<td width="35%">New Password</td>
										<td width="5%">:</td>
										<td id="data">'.$password.'</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" class="bg-primary">Copyright &copy; <b>DarkblowPB Reborn</b> 2021. All rights reserved.</td>
					</tr>
				</tbody>
			</table>
		</body>
		</html>');
		if ($this->email->send())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function ChangePasswordV2()
	{
		$response = array();

		$data = array(
			'old_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('old_password', true))),
			'new_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('new_password', true))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('confirm_password', true))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question', true)),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer', true))
		);

		$query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'], 'password' => $this->encryption->decrypt($data['old_password'])))->row();
		if ($query)
		{
			if ($query->email_verification == '0')
			{
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Please Confirm Your Email First.';

				echo json_encode($response);
			}
			if ($query->email_verification == '1')
			{
				if ($this->encryption->decrypt($data['new_password']) == $this->encryption->decrypt($data['old_password']))
				{
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'New Password Cannot Be Same Like Old Password.';

					echo json_encode($response);
				}
				else
				{
					$update = $this->db->where('player_id', $query->player_id)->update('accounts', array(
						'password' => $this->encryption->decrypt($data['new_password'])
					));
					if ($update)
					{
						if ($this->SendNotificationEmail($query->login, $this->input->post('new_password', true)))
						{
							$response['response'] = 'true';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Successfully Change Password.';
		
							echo json_encode($response);
						}
						else
						{
							$response['response'] = 'false';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Failed To Change Password.';

							echo json_encode($response);
						}
					}
					else
					{
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Failed To Change Password.';
	
						echo json_encode($response);
					}
				}
			}
		}
		else
		{
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Old Password.';

			echo json_encode($response);
		}
	}
	
	/**
	 * Changepassword Validation
	 * 
	 * This Is Old Function, So Its Deprecated
	 * 
	 * Do Not Use This Function
	 * 
	 * @return void
	 * @copyright Darkblow Studio
	 */
	function changepassword_validation()
	{
		$response = array();

		$data = array(
			'old_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('old_password'))),
			'new_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('new_password'))),
			'confirm_password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('confirm_password'))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer'))
		);

		$query = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid'],'password' => $this->encryption->decrypt($data['old_password'])))->row();
		if ($query)
		{
			if ($this->encryption->decrypt($data['new_password']) == $query->password)
			{
				// If New Password Same Like Old Password
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'New Password Cannot Be Same As Old Password.';
				echo json_encode($response);
			}
			else
			{
				if ($this->encryption->decrypt($data['hint_question']) != $query->hint_question)
				{
					// If Wrong Hint Question
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Invalid Hint Question.';
					echo json_encode($response);
				}
				else if ($this->encryption->decrypt($data['hint_answer']) != $query->hint_answer)
				{
					// If Wrong Hint Answer
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Invalid Hint Answer';
					echo json_encode($response);
				}
				else
				{
					// Update Password
					$update = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('password' => $this->encryption->decrypt($data['new_password'])));
					if ($update)
					{
						// If Successfully Update Password
						$response['response'] = 'true';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Successfully Change The Password.';
						echo json_encode($response);
					}
					else
					{
						// If Failed Update Password
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Failed To Change The Password.';
						echo json_encode($response);
					}
				}
			}
		}
		else
		{
			// If Wrong Old Password
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Invalid Old Password.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //