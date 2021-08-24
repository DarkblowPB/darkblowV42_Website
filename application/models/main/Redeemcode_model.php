<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function GetTotalCashPlayer($player_id)
	{
		$query = $this->db->get_where('accounts', array('player_id' => $player_id))->row();
		if ($query)
		{
			return $query->money;
		}
		else
		{
			return 0;
		}
	}

	function GetCashValueFromItem($item_duration)
	{
		if ($item_duration == 86400)
		{
			return 5000;
		}
		else if ($item_duration == 259200)
		{
			return 15000;
		}
		else if ($item_duration == 604800)
		{
			return 35000;
		}
		else if ($item_duration == 2592000)
		{
			return 150000;
		}
		else
		{
			return 0;
		}
	}

	function GetItemCategory($item_id)
	{
		if ($item_id >= 100003001 && $item_id <= 904007069)
		{
			return "1";
		}
		else if ($item_id >= 1001001003 && $item_id <= 1105003032)
		{
			return "2";
		}
		else if ($item_id >= 1300002003 && $item_id <= 1302379000)
		{
			return "3";
		}
		else
		{
			return "0";
		}
	}

	function CodeValidationV2()
	{
		$data = array(
			'code' => $this->encryption->encrypt($this->input->post('code'))
		);
		
		// Check Code From Database Table
		$check = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['code'])))->row();
		if ($check)
		{
			// If Code Found
			// Check History Redeem Code
			$check2 = $this->db->get_where('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $check->item_code))->row();
			if ($check2)
			{
				echo "false";
			}
			else
			{
				// Check Player Inventory
				$check3 = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $check->item_id))->row();
				if ($check3)
				{
					// Check Item Status
					if ($check3->equip == 1)
					{
						// Update Duration
						$get = $check3->count + $check->item_count;
						$update = $this->db->where(array('owner_id' => $check3->owner_id, 'item_id' => $check3->item_id))->update('player_items', array('count' => $get));
						// Insert Log
						$insert = $this->db->insert('check_user_itemcode', array('uid' => $check3->owner_id, 'item_code' => $check->item_code, 'username' => '', 'date_redeemed' => date('d-m-Y h:i:s')));
						if ($update && $insert)
						{
							echo "true";
						}
						else
						{
							echo "false";
						}
					}
					else
					{
						// Converting Item To DR-Cash
						$cash_value = $this->GetCashValueFromItem($check->item_count);
						$total_value = $cash_value + $this->GetTotalCashPlayer($check3->owner_id);
						// Update Player Money
						$update = $this->db->where('player_id', $check3->owner_id)->update('accounts', array('money' => $total_value));
						if ($update)
						{
							echo "true";
						}
						else
						{
							echo "false";
						}
					}
				}
				else
				{
					// Insert New Item
					$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $check->item_id, 'item_name' => $check->item_name, 'count' => $check->item_count, 'category' => $this->GetItemCategory($check->item_id), 'equip' => '1'));
					// Insert Log
					$insert2 = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $check->item_code, 'username' => '', 'date_redeemed' => date('d-m-Y h:i:s')));
					if ($insert && $insert2)
					{
						echo "true";
					}
					else
					{
						echo "false";
					}
				}
			}
		}
		else
		{
			echo "false";
		}
	}
	
	// [Deprecated]
	function code_validation()
	{
		$data = array(
			'code' => $this->encryption->encrypt($this->input->post('code'))
		);
		
		// Checking Code
		$check_code = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['code'])));
		$result_code = $check_code->row();
		if ($result_code) 
		{
			if ($result_code->type == "Item") 
			{
				// Check Usable
				$check_usable = $this->db->get_where('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
				$result_usable = $check_usable->row();
				if ($result_usable) 
				{
					echo "false";
				}
				else 
				{
					// Checking Inventory
					$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id));
					$result_inventory = $check_inventory->row();
					if ($result_inventory) 
					{
						// Checking Equip
						if ($result_inventory->equip == 1) 
						{
							$total_count = $result_code->item_count + $result_inventory->count;
							// Update Count
							$update_count = $this->db->where('item_id', $result_inventory->item_id)->update('player_items', array('count' => $total_count));
							if ($update_count) 
							{
								// Insert To Check_User_Itemcode
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									echo "true";
								}
								else
								{
									echo "false";
								}
							}
							else 
							{
								echo "false";
							}
						}
						if ($result_inventory->equip != 1) 
						{
							echo "false";
						}
					}
					else 
					{
						// Checking Item Category
						if ($result_code->item_id >= 100003001 && $result_code->item_id <= 904007069) 
						{
							// Insert To Player_items
							$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '1', 'equip' => '1'));
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									echo "true";
								}
								else
								{
									echo "false";
								}
							}
							else 
							{
								echo "false";
							}
						}
						if ($result_code->item_id >= 1001001003 && $result_code->item_id <= 1105003032) 
						{
							// Insert To Player_items
							$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '2', 'equip' => '1'));
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									echo "true";
								}
								else
								{
									echo "false";
								}
							}
							else 
							{
								echo "false";
							}
						}
						if ($result_code->item_id > 1105003032) 
						{
							// Insert To Player_items
							$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '3', 'equip' => '1'));
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									echo "true";
								}
								else
								{
									echo "false";
								}
							}
							else 
							{
								echo "false";
							}
						}
					}
				}
			}
			if ($result_code->type == "Cash") 
			{
				// Checking Usable
				$check_usable = $this->db->get_where('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
				$result_usable = $check_usable->row();
				if ($result_usable) 
				{
					echo "false";
				}
				else 
				{
					// Fetch Accounts
					$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
					$result_fetch = $fetch_accounts->row();
					if ($result_fetch) 
					{
						$total_money = $result_fetch->money + $result_code->cash;
						// Update Cash
						$update_cash = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('money' => $total_money));
						if ($update_cash) 
						{
							echo "true";
						}
						else 
						{
							echo "false";
						}
					}
					else 
					{
						echo "false";
					}
				}
			}
			if ($result_code->type == "Double")
			{
				// Checking Usable
				$check1 = $this->db->get_where('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
				$check2 = $check1->row();
				if ($check2)
				{
					echo "false";
				}
				else 
				{
					$accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row();
					$money = $accounts->money;
					$targetmoney = $result_code->cash;
					$total = $money + $targetmoney;
					// Checking Item Category
					if ($result_code->item_id >= 100003001 && $result_code->item_id <= 904007069) 
					{
						// Insert To Player_items
						$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '1', 'equip' => '1'));
						$updatecash = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('money' => $total));
						if ($insert && $updatecash)
						{
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
							if ($insert_log) 
							{
								echo "true"	;
							}
							else
							{
								echo "false";
							}
						}
						else 
						{
							$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
					}
					if ($result_code->item_id >= 1001001003 && $result_code->item_id <= 1105003032) 
					{
						// Insert To Player_items
						$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '2', 'equip' => '1'));
						$updatecash = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('money' => $total));
						if ($insert && $updatecash)
						{
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
							if ($insert_log) 
							{
								echo "true";
							}
							else
							{
								echo "false";
							}
						}
						else 
						{
							echo "false";
						}
					}
					if ($result_code->item_id > 1105003032) 
					{
						// Insert To Player_items
						$insert = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '3', 'equip' => '1'));
						$updatecash = $this->db->where('player_id', $_SESSION['uid'])->update('accounts', array('money' => $total));
						if ($insert && $updatecash)
						{
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
							if ($insert_log) 
							{
								echo "true";
							}
							else
							{
								echo "false";
							}
						}
						else 
						{
							echo "false";
						}
					}
				}
			}
			if ($result_code->type != "Cash" || $result_code->type != "Item" || $result_code->type != "Double")
			{
				echo "false";
			}
		}
		else 
		{
			echo "false";
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //