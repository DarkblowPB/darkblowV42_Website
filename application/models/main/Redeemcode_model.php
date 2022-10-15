<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Redeemcode_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();

		$this->lang->load('message');
	}

	function GetCodeSystem()
	{
		$config = $this->config->item('main_config')['codesystem'];

		if (strtolower($config) == 'api') return base_url('api/server/sendcommand');
		else if (strtolower($config) == 'manual') return base_url('player_panel/redeemcode/do_redeem');
		else return base_url('player_panel/redeemcode/do_redeem');
	}

	function CodeValidationManual()
	{
		$response = array();

		$data = array(
			'code' => $this->input->post('code', true),
			'player_id' => $this->session->userdata('uid')
		);

		$query = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $data['player_id']))->row();
		if ($query) {
			$query2 = $this->db->get_where(Darkblowdatabase::item_code, array('item_code' => $data['code']))->row();
			if ($query2) {
				if (time() > $query2->valid_date) {
					$response['response'] = 'error';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Code Already Expired.';

					$this->darkblowmessage->AjaxFlashData($response);
				} else if ($query2->qty < 1) {
					$response['response'] = 'error';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Reward Out Of Stock.';

					$this->darkblowmessage->AjaxFlashData($response);
				} else {
					$query3 = $this->db->get_where(Darkblowdatabase::check_user_itemcode, array('uid' => $query->player_id, 'item_code' => $query2->item_code))->row();
					if ($query3) {
						$response['response'] = 'error';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Code Already Used.';

						$this->darkblowmessage->AjaxFlashData($response);
					} else {
						$query4 = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $query->player_id, 'item_id' => $query2->item_id))->row();
						if ($query4) {
							switch ($query4->equip) {
								case '1': {
										$countNow = $query4->count;
										$addCount = $query2->item_count;

										$update = $this->db->where('object_id', $query4->object_id)->update(Darkblowdatabase::player_items, array('count' => ($countNow + $addCount)));
										$update2 = $this->db->where('id', $query2->id)->update(Darkblowdatabase::item_code, array('qty' => ($query2->qty - 1)));
										$insert = $this->db->insert(Darkblowdatabase::check_user_itemcode, array(
											'uid' => $query->player_id,
											'item_code' => $query2->item_code,
											'username' => $query->login,
											'date_redeemed' => date('d-m-Y H:i:s')
										));
										if ($update && $update2 && $insert) {
											$response['response'] = 'success';
											$response['token'] = $this->security->get_csrf_hash();
											$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($query2->item_id) . '.';

											$this->darkblowmessage->AjaxFlashData($response);
										} else {
											$response['response'] = 'error';
											$response['token'] = $this->security->get_csrf_hash();
											$response['message'] = 'Failed To Add Weapon To Your Inventory.';

											$this->darkblowmessage->AjaxFlashData($response);
										}
										break;
									}
								case '2': {
										$query5 = $this->db->get_where(Darkblowdatabase::shop, array('item_id' => $query2->item_id))->row();
										if ($query5) {
											switch ($query5->buy_type) {
												case '0': {
														$response['response'] = 'error';
														$response['token'] = $this->security->get_csrf_hash();
														$response['message'] = 'Invalid Item Reward.';

														$this->darkblowmessage->AjaxFlashData($response);
														break;
													}

												case '1': { // unit
														$countNow = $query4->count;
														$addCount = $query2->item_count;
														$update = $this->db->where('object_id', $query4->object_id)->update(Darkblowdatabase::player_items, array('count' => ($countNow + $addCount)));
														$update2 = $this->db->where('id', $query2->id)->update(Darkblowdatabase::item_code, array('qty' => ($query2->qty - 1)));
														$insert = $this->db->insert(Darkblowdatabase::check_user_itemcode, array(
															'uid' => $query->player_id,
															'item_code' => $query2->item_code,
															'username' => $query->login,
															'date_redeemed' => date('d-m-Y H:i:s')
														));
														if ($update && $update2 && $insert) {
															$response['response'] = 'success';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($query2->item_id) . '.';

															$this->darkblowmessage->AjaxFlashData($response);
														} else {
															$response['response'] = 'error';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Failed To Add Weapon To Your Inventory.';

															$this->darkblowmessage->AjaxFlashData($response);
														}
														break;
													}

												case '2': {
														$countNow = $query4->count;
														$addDays = $query2->item_count / 24 / 60 / 60;
														$timeFirst = strtotime('20' . $countNow);
														$timeSecond = strtotime('+' . $addDays . 'day', $timeFirst);
														$fixDate = date('ymdHi', $timeSecond);

														$update = $this->db->where('object_id', $query4->object_id)->update(Darkblowdatabase::player_items, array('count' => $fixDate));
														$update2 = $this->db->where('id', $query2->id)->update(Darkblowdatabase::item_code, array('qty' => ($query2->qty - 1)));
														$insert = $this->db->insert(Darkblowdatabase::check_user_itemcode, array(
															'uid' => $query->player_id,
															'item_code' => $query2->item_code,
															'username' => $query->login,
															'date_redeemed' => date('d-m-Y H:i:s')
														));
														if ($update && $update2 && $insert) {
															$response['response'] = 'success';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($query2->item_id) . '.';

															$this->darkblowmessage->AjaxFlashData($response);
														} else {
															$response['response'] = 'error';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Failed To Add Weapon To Your Inventory.';

															$this->darkblowmessage->AjaxFlashData($response);
														}
														break;
													}
												default:
													$response['response'] = 'error';
													$response['token'] = $this->security->get_csrf_hash();
													$response['message'] = 'Fatal Error.';

													$this->darkblowmessage->AjaxFlashData($response);
													break;
											}
										} else {
											$response['response'] = 'error';
											$response['token'] = $this->security->get_csrf_hash();
											$response['message'] = 'Invalid Item Reward.';

											$this->darkblowmessage->AjaxFlashData($response);
										}
										break;
									}
								case '3': {
										$response['response'] = 'error';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = 'You Already Have This Reward Item For Permanent Duration.';

										$this->darkblowmessage->AjaxFlashData($response);
										break;
									}
								default: {
										$response['response'] = 'error';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = 'Fatal Error. Please Contact DEV / GM For More Information.';

										$this->darkblowmessage->AjaxFlashData($response);
										break;
									}
							}
						} else {
							$insert = $this->db->insert(Darkblowdatabase::player_items, array(
								'owner_id' => $query->player_id,
								'item_id' => $query2->item_id,
								'item_name' => $this->darkblowlib->GetItemName($query2->item_id),
								'count' => $query2->item_count,
								'category' => $this->darkblowlib->GetItemCategory($query2->item_id),
								'equip' => '1'
							));
							$insert2 = $this->db->insert(Darkblowdatabase::check_user_itemcode, array(
								'uid' => $query->player_id,
								'item_code' => $query2->item_code,
								'username' => $query->login,
								'date_redeemed' => time()
							));
							$update = $this->db->where('id', $query2->id)->update(Darkblowdatabase::item_code, array('qty' => ($query2->qty - 1)));

							if ($insert && $insert2 && $update) {
								$response['response'] = 'success';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($query2->item_id) . '.';

								$this->darkblowmessage->AjaxFlashData($response);
							} else {
								$response['response'] = 'error';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Failed To Redeem Code.';

								$this->darkblowmessage->AjaxFlashData($response);
							}
						}
					}
				}
			} else {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Code Doesnt Exist.';

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Failed To Fetch Account Data.';

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //