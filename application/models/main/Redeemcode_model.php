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
		$this->load->library('lib');
		$this->lang->load('message');
	}

	function GetCodeSystem()
	{
		$config = $this->config->item('main_config')['codesystem'];

		if (strtolower($config) == 'api') return base_url('api/servercommand/redeemcode');
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

		$query = $this->db->get_where('accounts', array('player_id' => $data['player_id']))->row();
		if ($query) {
			$query2 = $this->db->get_where('item_code', array('item_code' => $data['code']))->row();
			if ($query2) {
				$dateNow = time();
				$totalQty = $query2->qty - 1;
				if ($dateNow > $query2->valid_date) {
					$response['response'] = 'error';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Code Already Expired.';

					echo json_encode($response);
				} else if ($totalQty <= 0) {
					$response['response'] = 'error';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Reward Out Of Stock.';

					echo json_encode($response);
				} else {
					$query3 = $this->db->get_where('check_user_itemcode', array('uid' => $query->player_id, 'item_code' => $query2->item_code))->row();
					if ($query3) {
						$response['response'] = 'error';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Code Already Used.';

						echo json_encode($response);
					} else {
						$query4 = $this->db->get_where('player_items', array('owner_id' => $query->player_id, 'item_id' => $query2->item_id))->row();
						if ($query4) {
							switch ($query4->equip) {
								case '1': {
										$countNow = $query4->count;
										$addCount = $query2->item_count;

										$update = $this->db->where('object_id', $query4->object_id)->update('player_items', array('count' => ($countNow + $addCount)));
										$update2 = $this->db->where('id', $query2->id)->update('item_code', array('qty' => ($query2->qty - 1)));
										$insert = $this->db->insert('check_user_itemcode', array(
											'uid' => $query->player_id,
											'item_code' => $query2->item_code,
											'username' => $query->login,
											'date_redeemed' => date('d-m-Y H:i:s')
										));
										if ($update && $update2 && $insert) {
											$response['response'] = 'success';
											$response['token'] = $this->security->get_csrf_hash();
											$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->lib->GetItemName($query2->item_id) . '.';

											echo json_encode($response);
										} else {
											$response['response'] = 'error';
											$response['token'] = $this->security->get_csrf_hash();
											$response['message'] = 'Failed To Add Weapon To Your Inventory.';

											echo json_encode($response);
										}
										break;
									}
								case '2': {
										$query5 = $this->db->get_where('shop', array('item_id' => $query2->item_id))->row();
										if ($query5) {
											switch ($query5->buy_type) {
												case '0': {
														$response['response'] = 'error';
														$response['token'] = $this->security->get_csrf_hash();
														$response['message'] = 'Invalid Item Reward.';

														echo json_encode($response);
														break;
													}

												case '1': { // unit
														$countNow = $query4->count;
														$addCount = $query2->item_count;
														$update = $this->db->where('object_id', $query4->object_id)->update('player_items', array('count' => ($countNow + $addCount)));
														$update2 = $this->db->where('id', $query2->id)->update('item_code', array('qty' => ($query2->qty - 1)));
														$insert = $this->db->insert('check_user_itemcode', array(
															'uid' => $query->player_id,
															'item_code' => $query2->item_code,
															'username' => $query->login,
															'date_redeemed' => date('d-m-Y H:i:s')
														));
														if ($update && $update2 && $insert) {
															$response['response'] = 'success';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->lib->GetItemName($query2->item_id) . '.';

															echo json_encode($response);
														} else {
															$response['response'] = 'error';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Failed To Add Weapon To Your Inventory.';

															echo json_encode($response);
														}
														break;
													}

												case '2': {
														$countNow = $query4->count;
														$addDays = $query2->item_count / 24 / 60 / 60;
														$timeFirst = strtotime('20' . $countNow);
														$timeSecond = strtotime('+' . $addDays . 'day', $timeFirst);
														$fixDate = date('ymdHi', $timeSecond);

														$update = $this->db->where('object_id', $query4->object_id)->update('player_items', array('count' => $fixDate));
														$update2 = $this->db->where('id', $query2->id)->update('item_code', array('qty' => ($query2->qty - 1)));
														$insert = $this->db->insert('check_user_itemcode', array(
															'uid' => $query->player_id,
															'item_code' => $query2->item_code,
															'username' => $query->login,
															'date_redeemed' => date('d-m-Y H:i:s')
														));
														if ($update && $update2 && $insert) {
															$response['response'] = 'success';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->lib->GetItemName($query2->item_id) . '.';

															echo json_encode($response);
														} else {
															$response['response'] = 'error';
															$response['token'] = $this->security->get_csrf_hash();
															$response['message'] = 'Failed To Add Weapon To Your Inventory.';

															echo json_encode($response);
														}
														break;
													}
												default:
													$response['response'] = 'error';
													$response['token'] = $this->security->get_csrf_hash();
													$response['message'] = 'Fatal Error.';

													echo json_encode($response);
													break;
											}
										} else {

											$response['response'] = 'error';
											$response['token'] = $this->security->get_csrf_hash();
											$response['message'] = 'Invalid Item Reward.';

											echo json_encode($response);
										}
										break;
									}
								case '3': {
										$response['response'] = 'error';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = 'You Already Have This Reward Item For Permanent Duration.';

										echo json_encode($response);
										break;
									}
								default: {
										$response['response'] = 'error';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = 'Fatal Error. Please Contact DEV / GM For More Information.';

										echo json_encode($response);
										break;
									}
							}
						} else {
							$insert = $this->db->insert('player_items', array(
								'owner_id' => $query->player_id,
								'item_id' => $query2->item_id,
								'item_name' => $this->lib->GetItemName($query2->item_id),
								'count' => $query2->item_count,
								'category' => $this->lib->GetItemCategory($query2->item_id),
								'equip' => '1'
							));
							$insert2 = $this->db->insert('check_user_itemcode', array(
								'uid' => $query->player_id,
								'item_code' => $query2->item_code,
								'username' => $query->login,
								'date_redeemed' => time()
							));
							$update = $this->db->where('id', $query2->id)->update('item_code', array('qty' => ($query2->qty - 1)));

							if ($insert && $insert2 && $update) {
								$response['response'] = 'success';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->lib->GetItemName($query2->item_id) . '.';

								echo json_encode($response);
							} else {
								$response['response'] = 'error';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Failed To Redeem Code.';

								echo json_encode($response);
							}
						}
					}
				}
			} else {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Code Doesnt Exist.';

				echo json_encode($response);
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Failed To Fetch Account Data.';

			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //