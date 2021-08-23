<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('main/home_model', 'home');
		$this->load->model('main/webshop_model','webshop');
		$this->load->helper('text');
		$this->allprotect->Web_Protection();
		$this->load->database();
		$this->load->library('encryption');
		$this->load->library('lib');
	}

	function index()
	{
		$data['title'] = 'DarkblowPB || Home';
		$data['account'] = $this->home->getdata_account();
		$data['clan'] = $this->home->getdata_clan();
		$data['allaccount'] = $this->home->getdata_allaccount();
		$data['onlineaccount'] = $this->home->getdata_onlineaccount();
		$data['quickslide'] = $this->home->getdata_quickslide();
		$data['webshop'] = $this->webshop->getdata_webshop_mostpopular();
		$data['isi'] = 'main/content/home/content_home';
		$this->load->view('main/layout/wrapper', $data, FALSE);
	}
	
	function logout()
	{
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('player_name');
		$this->session->unset_userdata('access_level');
		
		$this->session->set_flashdata('true', 'Successfully Logged Out.');
		redirect(base_url('home'), 'refresh');
	}

	function launcher_redeemcode_auth()
	{
		if (empty($_GET['username']))
		{
			echo "Username Cannot Be Empty [1]";
		}
		if (!empty($_GET['username']))
		{
			if ($_GET['username'] == "")
			{
				echo "Username Cannot Be Empty [2]";
			}
		}
		if (empty($_GET['password']))
		{
			echo "Password Cannot Be Empty [1]";
		}
		if (!empty($_GET['password']))
		{
			if ($_GET['password'] == "")
			{
				echo "Password Cannot Be Empty [2]";
			}
		}
		if ($_GET['username'] != "" && $_GET['password'] != "") 
		{
			// Checking Username & Password
			$check = $this->db->get_where('accounts', array('login' => $_GET['username'], 'password' => $_GET['password']));
			$result = $check->row();
			if ($result)
			{
				if ($result->access_level == -1)
				{
					echo "Your Account Is Blocked";
				}
				if ($result->access_level != -1)
				{
					echo "true";
				}
			}
			else 
			{
				echo "Major Error, Please Contact DEV & GM For Details Information";
			}
		}
	}
	function launcher_redeemcode_verify()
	{
		$cash_for_3days = 50000;
		$cash_for_7days = 100000;
		$cash_for_30days = 250000;

		// Fetch Player
		$fetch_player = $this->db->get_where('accounts', array('login' => $_POST['username']));
		$result_fetch_player = $fetch_player->row();
		if ($result_fetch_player)
		{
			// Check The Code
			$check_code = $this->db->get_where('item_code', array('item_code' => $_POST['code']));
			$result_code = $check_code->row();
			if ($result_code)
			{
				// Check Code Usage
				$check_code_usage = $this->db->get_where('check_user_itemcode', array('item_code' => $result_code->item_code, 'uid' => $result_fetch_player->player_id));
				$result_code_usage = $check_code_usage->row();
				if ($result_code_usage)
				{
					echo "You Already Used This Code";
				}
				else 
				{
					// Fetch Player inventory
					$fetch_player_inventory = $this->db->get_where('player_items', array('owner_id' => $result_fetch_player->player_id));
					$result_fetch_player_inventory = $fetch_player_inventory->num_rows();
					if ($result_fetch_player_inventory > 0)
					{
						// Fetch Item ID
						$fetch_item_id = $this->db->get_where('player_items', array('owner_id' => $result_fetch_player->player_id, 'item_id' => $result_code->item_id));
						$result_fetch_item_id = $fetch_item_id->row();
						if ($result_fetch_item_id)
						{
							if ($result_fetch_item_id->equip == 1)
							{
								$total_count = $result_fetch_item_id->count + $result_code->item_count;
								// Update Count
								$update_count = $this->db->where('object_id', $result_fetch_item_id->object_id)->update('player_items', array('count' => $total_count));
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
								if ($update_count && $insert_log)
								{
									echo "You Already Have ".$result_code->item_name.", As You Want, We Extends Your Weapon Duration To ".($total_count / 24 / 60 / 60)." Days.";
								}
								else 
								{
									echo "Major Error. Please Contact DEV / GM For Details Information";
								}
							}
							if ($result_fetch_item_id->equip != 1)
							{
								if (($result_code->item_count / 24 / 60 / 60) == 3)
								{
									// Exchange For Cash
									$total_cash = $result_fetch_player->money + $cash_for_3days;
									$exchange_for_cash = $this->db->where('player_id', $result_fetch_player->player_id)->update('accounts', array('money' => $total_cash));
									$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
									if ($exchange_for_cash && $insert_log)
									{
										echo "We Change Your Prize To ".$cash_for_3days." Cash, Because You Already Own The Item. Your Cash Now: ".number_format($total_cash, '0',',','.')."";
									}
									else 
									{
										echo "Major Error. Please Contact DEV / GM For Details Information";
									}
								}
								if (($result_code->item_count / 24 / 60 / 60) == 7)
								{
									// Exchange For Cash
									$total_cash = $result_fetch_player->money + $cash_for_7days;
									$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
									if ($exchange_for_cash && $insert_log)
									{
										echo "We Change Your Prize To ".$cash_for_7days." Cash, Because You Already Own The Item. Your Cash Now: ".number_format($total_cash, '0',',','.')."";
									}
									else 
									{
										echo "Major Error. Please Contact DEV / GM For Details Information";
									}
								}
								if (($result_code->item_count / 24 / 60 / 60) == 30)
								{
									// Exchange For Cash
									$total_cash = $result_fetch_player->money + $cash_for_30days;
									$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
									if ($exchange_for_cash && $insert_log)
									{
										echo "We Change Your Prize To ".$cash_for_30days." Cash, Because You Already Own The Item. Your Cash Now: ".number_format($total_cash, '0',',','.')."";
									}
									else 
									{
										echo "Major Error. Please Contact DEV / GM For Details Information";
									}
								}
							}
						}
						else 
						{
							// Insert New Item For Player
							if ($result_code->item_id >= 100003001 && $result_code->item_id <= 904007069)
							{
								$insert = $this->db->insert('player_items', array('owner_id' => $result_fetch_player->player_id, 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '1', 'equip' => '1'));
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
								if ($insert && $insert_log)
								{
									echo "Congratulations ".$result_fetch_player->login.", You Received ".$result_code->item_name." For ".($result_code->item_count / 24 / 60 / 60)." Days.";
								}
								else 
								{
									echo "Major Error. Please Contact DEV / GM For Details Information";
								}
							}
							if ($result_code->item_id >= 1001001003 && $result_code->item_id <= 1105003032)
							{
								$insert = $this->db->insert('player_items', array('owner_id' => $result_fetch_player->player_id, 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '2', 'equip' => '1'));
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
								if ($insert && $insert_log)
								{
									echo "Congratulations ".$result_fetch_player->login.", You Received ".$result_code->item_name." For ".($result_code->item_count / 24 / 60 / 60)." Days.";
								}
								else 
								{
									echo "Major Error. Please Contact DEV / GM For Details Information";
								}
							}
						}
					}
					if ($result_fetch_player_inventory <= 0)
					{
						if ($result_code->item_id < 100003001)
						{
							echo "Invalid Prize ID. Please Contact DEV / GM For Details Information";
						}
						// Insert New Item For Player
						if ($result_code->item_id >= 100003001 && $result_code->item_id <= 904007069)
						{
							$insert = $this->db->insert('player_items', array('owner_id' => $result_fetch_player->player_id, 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '1', 'equip' => '1'));
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
							if ($insert && $insert_log)
							{
								echo "Congratulations ".$result_fetch_player->login.", You Received ".$result_code->item_name." For ".($result_code->item_count / 24 / 60 / 60)." Days.";
							}
							else 
							{
								echo "Major Error. Please Contact DEV / GM For Details Information";
							}
						}
						if ($result_code->item_id >= 1001001003 && $result_code->item_id <= 1105003032)
						{
							$insert = $this->db->insert('player_items', array('owner_id' => $result_fetch_player->player_id, 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '2', 'equip' => '1'));
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $result_fetch_player->player_id, 'item_code' => $result_code->item_code, 'username' => $result_fetch_player->login));
							if ($insert && $insert_log)
							{
								echo "Congratulations ".$result_fetch_player->login.", You Received ".$result_code->item_name." For ".($result_code->item_count / 24 / 60 / 60)." Days.";
							}
							else 
							{
								echo "Major Error. Please Contact DEV / GM For Details Information";
							}
						}
						if ($result_code->item_id > 1105003032)
						{
							echo "Invalid Prize ID. Please Contact DEV / GM For Details Information";
						}
					}
				}
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //