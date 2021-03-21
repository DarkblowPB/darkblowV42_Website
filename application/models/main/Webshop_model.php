<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Webshop_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getdata_webshop_detail($id)
	{
		return $this->db->where('id', $id)->get('webshop')->result_array();
	}
	public function getdata_webshop_in_row()
	{
		return $this->db->where('webshop_itemstatus', '1')->get('webshop')->num_rows();
	}
	public function getdata_webshop_limit($limit, $start)
	{
		return $this->db->where('webshop_itemstatus', '1')->order_by('id','desc')->get('webshop', $limit, $start)->result_array();
	}
	public function getdata_webshop_mostpopular()
	{
		return $this->db->order_by('webshop_totalbuy', 'desc')->limit(7)->get('webshop')->result_array();
	}
	public function getdata_webshop_related()
	{
		return $this->db->where('webshop_itemstatus', '1')->order_by('id','desc')->limit(4)->get('webshop')->result_array();
	}

	function buy_item()
	{
		$item_id = $this->input->post('item_id');
		$price = $this->input->post('price');
		// Checking Item
		$check_item = $this->db->get_where('webshop', array('webshop_itemid' => $item_id));
		$result_item = $check_item->row();
		if ($result_item) 
		{
			// Checking Status
			if ($result_item->webshop_itemstatus == 0) 
			{
				$this->session->set_flashdata('error', 'Failed To Buy Item, Due Items Has Been Pulled From The Webshop');
				redirect(base_url('webshop'), 'refresh');
			}
			if ($result_item->webshop_itemstatus == 1) 
			{
				// Checking Item
				if ($item_id >= 100003001 && $item_id <= 904007069) 
				{
					// Checking Count
					if ($price == $result_item->webshop_itemprice_3days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_3days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_3days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_3days, 'category' => '1', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_3days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_7days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_7days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_7days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_7days, 'category' => '1', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_7days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_30days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_30days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_30days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_30days, 'category' => '1', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_30days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_permanent)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_permanent;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_permanent;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_permanent, 'category' => '1', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_permanent;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
				}
				if ($item_id >= 1001001003 && $item_id <= 1105003032)
				{
					// Checking Count
					if ($price == $result_item->webshop_itemprice_3days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_3days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_3days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_3days, 'category' => '2', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_3days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_7days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_7days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_7days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_7days, 'category' => '2', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_7days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_30days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_30days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_30days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_30days, 'category' => '2', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_30days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_permanent)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_permanent;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_permanent;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_permanent, 'category' => '2', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_permanent;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
				}
				if ($item_id >= 1300002003 && $item_id <= 1508000000) 
				{
					// Checking Count
					if ($price == $result_item->webshop_itemprice_3days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_3days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_3days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_3days, 'category' => '3', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_3days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_7days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_7days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_7days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_7days, 'category' => '3', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_7days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_30days)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_30days;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_30days;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_30days, 'category' => '3', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_30days;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
					if ($price == $result_item->webshop_itemprice_permanent)
					{
						// Checking Inventory
						$check_inventory = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $result_item->webshop_itemid));
						$result_inventory = $check_inventory->row();
						if ($result_inventory) 
						{
							if ($result_inventory->equip == 1) 
							{
								$total_count = $result_inventory->count + $result_item->webshop_itemcount_permanent;
								// Update Count
								$update_count = $this->db->where(array('owner_id' => $_SESSION['uid'], 'item_id' => $result_inventory->item_id))->update('player_items', array('count' => $total_count));
								if ($update_count) 
								{
									// Fetching Accounts
									$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
									$result_fetch = $fetch_accounts->row();
									if ($result_fetch) 
									{
										$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_permanent;
										// Update Coins
										$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
										if ($update_coins) 
										{
											$this->session->set_flashdata('success', 'Successfully Bought Item.');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
											redirect($_SERVER['HTTP_REFERER'], 'refresh');
										}
									}
									else 
									{
										$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							if ($result_inventory->equip != 1)
							{
								$this->session->set_flashdata('error', 'You Already Bought This Item And Is In A State Of Use. Bought Waapon Canceled.');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
						else 
						{
							// Update Count
							$update_count = $this->db->insert('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $item_id, 'item_name' => $result_item->webshop_itemname, 'count' => $result_item->webshop_itemcount_permanent, 'category' => '3', 'equip' => '1'));
							if ($update_count) 
							{
								// Fetching Accounts
								$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']));
								$result_fetch = $fetch_accounts->row();
								if ($result_fetch) 
								{
									$remain_coins = $result_fetch->kuyraicoin - $result_item->webshop_itemprice_permanent;
									// Update Coins
									$update_coins = $this->db->where('player_id', $result_fetch->player_id)->update('accounts', array('kuyraicoin' => $remain_coins));
									if ($update_coins) 
									{
										$this->session->set_flashdata('success', 'Successfully Bought Item.');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
										redirect($_SERVER['HTTP_REFERER'], 'refresh');
									}
								}
								else 
								{
									$this->session->set_flashdata('error', 'An Error Occurs While Retrieving Player Information');
									redirect($_SERVER['HTTP_REFERER'], 'refresh');
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information');
								redirect($_SERVER['HTTP_REFERER'], 'refresh');
							}
						}
					}
				}
			}
		}
		else 
		{
			$this->session->set_flashdata('error', 'Item Not Found.');
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //