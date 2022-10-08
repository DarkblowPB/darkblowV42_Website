<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Webshop_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function GetWebshopDetails($id)
	{
		return $this->db->get_where('webshop', array('id' => $id))->row();
	}

	function GetWebshopCount()
	{
		return $this->db->where('webshop_itemstatus', '1')->get('webshop')->num_rows();
	}

	function GetWebshopPerPage($limit, $start)
	{
		return $this->db->where('webshop_itemstatus', '1')->order_by('id', 'desc')->get('webshop', $limit, $start)->result_array();
	}

	function GetPopularWebshop()
	{
		return $this->db->order_by('webshop_totalbuy', 'desc')->limit(7)->get('webshop')->result_array();
	}

	function GetWebshopRelated()
	{
		// Coming Soon
		return null;
	}

	function GetItemDuration($item_id, $itemprice)
	{
		$query = $this->db->get_where('webshop', array('id' => $item_id))->row();
		if ($query) {
			$price = array(
				'3days' => $query->webshop_itemprice_3days,
				'7days' => $query->webshop_itemprice_7days,
				'30days' => $query->webshop_itemprice_30days,
				'permanent' => $query->webshop_itemprice_permanent
			);

			switch ($itemprice) {
				case $price['3days']:
					return "3days";
				case $price['7days']:
					return "7days";
				case $price['30days']:
					return "30days";
				case $price['permanent']:
					return "permanent";
				default:
					return "invalid";
			}
		}
	}

	function GetItemDurationV3($id, $item_price)
	{
		$query = $this->db->get_where('webshop', array('id' => $id))->row();
		if ($query) {
			$price = array(
				'3' => $query->webshop_itemprice_3days,
				'7' => $query->webshop_itemprice_7days,
				'30' => $query->webshop_itemprice_30days,
				'permanent' => $query->webshop_itemprice_permanent
			);

			switch ($item_price) {
				case 'value':
					# code...
					break;

				default:
					# code...
					break;
			}
		}
	}

	function BuyItemV2()
	{
		sleep(2);
		$data = array(
			'player_id' => $this->encryption->encrypt($this->input->post('player_id')),
			'item_id' => $this->encryption->encrypt($this->input->post('item_id')),
			'item_price' => $this->encryption->encrypt($this->input->post('item_price'))
		);

		$response = array();

		$query = $this->db->get_where('webshop', array('id' => $this->encryption->decrypt($data['item_id'])))->row();
		if ($query) {
			if ($query->webshop_itemstatus != 1) {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_56');
				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				// Fetch Player Data
				$fetch = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
				if ($fetch) {
					if ($fetch->kuyraicoin < $this->encryption->decrypt($data['item_price'])) {
						$response['response'] = 'false';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = $this->lang->line('STR_ERROR_57');
						$this->darkblowmessage->AjaxFlashData($response);
					} else {
						// Fetch Player Item
						$fetch2 = $this->db->get_where('player_items', array('owner_id' => $fetch->player_id, 'item_id' => $query->webshop_itemid))->row();
						if ($fetch2) {
							// If Weapon Not Equipped Yet
							if ($fetch2->equip == 1) {
								if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "3days") {
									$totalcount = $fetch2->count + 259200;
									$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_3days;
									// Update Item Duration
									$update = $this->db->where(array('owner_id' => $fetch2->owner_id, 'item_id' => $fetch2->item_id))->update('player_items', array('count' => $totalcount));
									// Update Webcoin
									$update2 = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
									if ($update && $update2) {
										$response['response'] = 'true';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_SUCCESS_18');
										$this->darkblowmessage->AjaxFlashData($response);
									} else {
										$response['response'] = 'false';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_ERROR_16');
										$this->darkblowmessage->AjaxFlashData($response);
									}
								} else if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "7days") {
									$totalcount = $fetch2->count + 604800;
									$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_7days;
									// Update Item Duration
									$update = $this->db->where(array('owner_id' => $fetch2->owner_id, 'item_id' => $fetch2->item_id))->update('player_items', array('count' => $totalcount));
									// Update Webcoin
									$update2 = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
									if ($update && $update2) {
										$response['response'] = 'true';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_SUCCESS_18');
										$this->darkblowmessage->AjaxFlashData($response);
									} else {
										$response['response'] = 'false';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_ERROR_16');
										$this->darkblowmessage->AjaxFlashData($response);
									}
								} else if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "30days") {
									$totalcount = $fetch2->count + 2592000;
									$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_30days;
									// Update Item Duration
									$update = $this->db->where(array('owner_id' => $fetch2->owner_id, 'item_id' => $fetch2->item_id))->update('player_items', array('count' => $totalcount));
									// Update Webcoin
									$update2 = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
									if ($update && $update2) {
										$response['response'] = 'true';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_SUCCESS_18');
										$this->darkblowmessage->AjaxFlashData($response);
									} else {
										$response['response'] = 'false';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_ERROR_16');
										$this->darkblowmessage->AjaxFlashData($response);
									}
								} else if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "permanent") {
									$totalcount = 1;
									$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_permanent;
									// Update Item Duration
									$update = $this->db->where(array('owner_id' => $fetch2->owner_id, 'item_id' => $fetch2->item_id))->update('player_items', array('count' => $totalcount, 'equip' => '3'));
									// Update Webcoin
									$update2 = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
									if ($update && $update2) {
										$response['response'] = 'true';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_SUCCESS_18');
										$this->darkblowmessage->AjaxFlashData($response);
									} else {
										$response['response'] = 'false';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_ERROR_16');
										$this->darkblowmessage->AjaxFlashData($response);
									}
								} else {
									$response['response'] = 'false';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_ERROR_58');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else if ($fetch2->equip == 2) {

								if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "permanent") {
									$totalcount = 1;
									$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_permanent;
									// Update Item Duration
									$update = $this->db->where(array('owner_id' => $fetch2->owner_id, 'item_id' => $fetch2->item_id))->update('player_items', array('count' => $totalcount, 'equip' => '3'));
									// Update Webcoin
									$update2 = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
									if ($update && $update2) {
										$response['response'] = 'true';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_SUCCESS_18');
										$this->darkblowmessage->AjaxFlashData($response);
									} else {
										$response['response'] = 'false';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = $this->lang->line('STR_ERROR_16');
										$this->darkblowmessage->AjaxFlashData($response);
									}
								} else {
									$response['response'] = 'false';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_INFO_15');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else if ($fetch2->equip == 3) {
								$response['response'] = 'false';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_ERROR_59');
								$this->darkblowmessage->AjaxFlashData($response);
							}
						} else {
							if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "3days") {
								$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_3days;
								// Insert New Item
								$insert = $this->db->insert('player_items', array('owner_id' => $fetch->player_id, 'item_id' => $query->webshop_itemid, 'item_name' => $query->webshop_itemname, 'count' => $query->webshop_itemcount_3days, 'category' => $query->webshop_itemcategory, 'equip' => '1'));
								// Update Webcoin
								$update = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
								if ($insert && $update) {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_18');
									$this->darkblowmessage->AjaxFlashData($response);
								} else {
									$response['response'] = 'false';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_ERROR_16');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "7days") {
								$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_7days;
								// Insert New Item
								$insert = $this->db->insert('player_items', array('owner_id' => $fetch->player_id, 'item_id' => $query->webshop_itemid, 'item_name' => $query->webshop_itemname, 'count' => $query->webshop_itemcount_7days, 'category' => $query->webshop_itemcategory, 'equip' => '1'));
								// Update Webcoin
								$update = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
								if ($insert && $update) {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_18');
									$this->darkblowmessage->AjaxFlashData($response);
								} else {
									$response['response'] = 'false';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_ERROR_16');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "30days") {
								$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_30days;
								// Insert New Item
								$insert = $this->db->insert('player_items', array('owner_id' => $fetch->player_id, 'item_id' => $query->webshop_itemid, 'item_name' => $query->webshop_itemname, 'count' => $query->webshop_itemcount_30days, 'category' => $query->webshop_itemcategory, 'equip' => '1'));
								// Update Webcoin
								$update = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
								if ($insert && $update) {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_18');
									$this->darkblowmessage->AjaxFlashData($response);
								} else {
									$response['response'] = 'false';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_ERROR_16');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else if ($this->GetItemDuration($this->encryption->decrypt($data['item_id']), $this->encryption->decrypt($data['item_price'])) == "permanent") {
								$totalwebcoin = $fetch->kuyraicoin - $query->webshop_itemprice_permanent;
								// Insert New Item
								$insert = $this->db->insert('player_items', array('owner_id' => $fetch->player_id, 'item_id' => $query->webshop_itemid, 'item_name' => $query->webshop_itemname, 'count' => $query->webshop_itemcount_permanent, 'category' => $query->webshop_itemcategory, 'equip' => '3'));
								// Update Webcoin
								$update = $this->db->where('player_id', $fetch->player_id)->update('accounts', array('kuyraicoin' => $totalwebcoin));
								if ($insert && $update) {
									$response['response'] = 'true';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_SUCCESS_18');
									$this->darkblowmessage->AjaxFlashData($response);
								} else {
									$response['response'] = 'false';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = $this->lang->line('STR_ERROR_16');
									$this->darkblowmessage->AjaxFlashData($response);
								}
							} else {
								$response['response'] = 'false';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_ERROR_58');
								$this->darkblowmessage->AjaxFlashData($response);
							}
						}
					}
				} else {
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = $this->lang->line('STR_ERROR_60');
					$this->darkblowmessage->AjaxFlashData($response);
				}
			}
		} else {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_61');
			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //