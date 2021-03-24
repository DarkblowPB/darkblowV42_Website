<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Redeemcode_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function code_validation()
	{
		$data = array('code' => $this->input->post('code'));
		
		// Checking Code
		$check_code = $this->db->get_where('item_code', array('item_code' => $data['code']));
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
					$this->session->set_flashdata('error', 'You Have Used This Code');
					redirect(base_url('player_panel/redeemcode'), 'refresh');
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
									$this->session->set_flashdata('success', 'You Already Have '.$result_code->item_name.', Item Duration Added Successfully.');
									redirect(base_url('player_panel/redeemcode'), 'refresh');	
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								redirect(base_url('player_panel/redeemcode'), 'refresh');
							}
						}
						if ($result_inventory->equip != 1) 
						{
							$this->session->set_flashdata('error', 'You Already Have '.$result_code->item_name.' Inside Your Inventory And Is In A State Of Use.<br>Redeem Code Has Been Canceled.');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
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
									$count = $result_code->item_count / 24 / 60 / 60;
									$this->session->set_flashdata('success', 'Congratulations '.$_SESSION['player_name'].', You Received '.$result_code->item_name.' For '.$count.' Days');
									redirect(base_url('player_panel/redeemcode'), 'refresh');	
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
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									$count = $result_code->item_count / 24 / 60 / 60;
									$this->session->set_flashdata('success', 'Congratulations '.$_SESSION['player_name'].', You Received '.$result_code->item_name.' For '.$count.' Days');
									redirect(base_url('player_panel/redeemcode'), 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								redirect(base_url('player_panel/redeemcode'), 'refresh');
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
									$count = $result_code->item_count / 24 / 60 / 60;
									$this->session->set_flashdata('success', 'Congratulations '.$_SESSION['player_name'].', You Received '.$result_code->item_name.' For '.$count.' Days');
									redirect(base_url('player_panel/redeemcode'), 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								redirect(base_url('player_panel/redeemcode'), 'refresh');
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
					$this->session->set_flashdata('error', 'You Have Used This Code');
					redirect(base_url('player_panel/redeemcode'), 'refresh');
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
							$this->session->set_flashdata('success', 'Congratulation '.$_SESSION['player_name'].', You Received '.$result_code.' D-Cash.<br>Total Balance: '.$total_money.' D-Cash');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
						else 
						{
							$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
							redirect(base_url('player_panel/redeemcode'), 'refresh');
						}
					}
					else 
					{
						$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
						redirect(base_url('player_panel/redeemcode'), 'refresh');
					}
				}
			}
		}
		else 
		{
			$this->session->set_flashdata('error', 'Code Doesnt Exists');
			redirect(base_url('player_panel/redeemcode'), 'refresh');
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //