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

		$response = array();
		
		// Check Code From Database Table
		$check = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['code'])))->row();
		if ($check)
		{
			// If Code Found
			// Check History Redeem Code
			$check2 = $this->db->get_where('check_user_itemcode', array('uid' => $_SESSION['uid'], 'item_code' => $check->item_code))->row();
			if ($check2)
			{
				$response['token'] = $this->security->get_csrf_hash();
				$response['response'] = 'false';
				$response['message'] = 'This Code Already Used.';
				echo json_encode($response);
			}
			else
			{
				if ($check->type == "Item")
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
								$response['token'] = $this->security->get_csrf_hash();
								$response['response'] = 'true';
								$response['message'] = 'Congratulations '.$_SESSION['player_name'].', You Received '.$check3->item_name.'.';
								echo json_encode($response);
							}
							else
							{
								$response['token'] = $this->security->get_csrf_hash();
								$response['response'] = 'false';
								$response['message'] = 'Failed To Redeem The Code.';
								echo json_encode($response);
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
								$response['token'] = $this->security->get_csrf_hash();
								$response['response'] = 'true';
								$response['message'] = 'Congratulations '.$_SESSION['player_name'].', You Received '.$cash_value.' DR-Cash.';
								echo json_encode($response);
							}
							else
							{
								$response['token'] = $this->security->get_csrf_hash();
								$response['response'] = 'false';
								$response['message'] = 'Failed To Redeem The Code.';
								echo json_encode($response);
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
							$response['token'] = $this->security->get_csrf_hash();
							$response['response'] = 'true';
							$response['message'] = 'Congratulations '.$_SESSION['player_name'].', You Received '.$check->item_name;
							echo json_encode($response);
						}
						else
						{
							$response['token'] = $this->security->get_csrf_hash();
							$response['response'] = 'false';
							$response['message'] = 'Failed To Redeem The Code.';
							echo json_encode($response);
						}
					}
				}
				else if ($check->type == "Cash")
				{
					// Fetch Player Data
					$fetch = $this->db->get_where('accounts', array('player_id' => $_SESSION['uid']))->row();
					if ($fetch)
					{
						$totalCash = $fetch->money + $check->cash;
						// Update Cash
						$update = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('money' => $totalCash));
						// Insert Log
						$insert = $this->db->insert('check_user_itemcode', array('uid' => $fetch->player_id, 'item_code' => $check->item_code, 'username' => '', 'date_redeemed' => date('d-m-Y h:i:s')));
						if ($update && $insert)
						{
							$response['token'] = $this->security->get_csrf_hash();
							$response['response'] = 'true';
							$response['message'] = 'Congratulations '.$_SESSION['player_name'].', You Received '.$check->cash.' DR-Cash';
							echo json_encode($response);
						}
						else
						{
							$response['token'] = $this->security->get_csrf_hash();
							$response['response'] = 'false';
							$response['message'] = 'Failed To Redeem The Code.';
							echo json_encode($response);
						}
					}
				}
			}
		}
		else
		{
			$response['token'] = $this->security->get_csrf_hash();
			$response['response'] = 'false';
			$response['message'] = 'Code Doesnt Exists.';
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //