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

		$now = time();

		$this->db->trans_start();
		$this->db->select('*', TRUE);
		$this->db->from(Darkblowdatabase::accounts);
		$this->db->where('player_id', $data['player_id'], TRUE);

		$accounts = $this->db->get()->row_array();
		$this->db->trans_complete();

		if ($this->db->trans_status()) {
			if ($accounts != null) {
				$this->db->trans_start();
				$this->db->select('*', TRUE);
				$this->db->from(Darkblowdatabase::item_code);
				$this->db->where('item_code', $data['code'], TRUE);

				$item_code = $this->db->get()->row_array();
				$this->db->trans_complete();

				if ($this->db->trans_status()) {
					if ($item_code != null) {
						if ($now > $item_code['valid_date']) {
							$response['response'] = 'error';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Code Already Expired.';

							$this->darkblowmessage->AjaxFlashData($response);
						} else {
							if ($item_code['qty'] < 1) {
								$response['response'] = 'error';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Reward Out Of Stock.';

								$this->darkblowmessage->AjaxFlashData($response);
							} else {
								$this->db->trans_start();
								$this->db->select('*', TRUE);
								$this->db->from(Darkblowdatabase::check_user_itemcode);
								$this->db->where('uid', $accounts['player_id'], TRUE);
								$this->db->where('item_code', $item_code['item_code'], TRUE);

								$check_user_itemcode = $this->db->get()->row_array();
								$this->db->trans_complete();

								if ($this->db->trans_status()) {
									if ($check_user_itemcode != null) {
										$response['response'] = 'error';
										$response['token'] = $this->security->get_csrf_hash();
										$response['message'] = 'Code Already Used.';

										$this->darkblowmessage->AjaxFlashData($response);
									} else {
										switch ($item_code['type']) {
											case 'Item': {
													$this->db->trans_start();
													$this->db->select('*', TRUE);
													$this->db->from(Darkblowdatabase::player_items);
													$this->db->where('owner_id', $accounts['player_id'], TRUE);
													$this->db->where('item_id', $item_code['item_id'], TRUE);

													$player_items = $this->db->get()->row_array();
													$this->db->trans_complete();

													if ($this->db->trans_status()) {
														if ($player_items != null) {
															switch ($player_items['equip']) {
																case '1': {
																		$count_now = $player_items['count'];
																		$add_count = $item_code['item_count'];

																		$this->db->trans_start();
																		$this->db->where('object_id', $player_items['object_id'], TRUE);
																		$this->db->update(Darkblowdatabase::player_items, array(
																			'count' => ($count_now + $add_count)
																		));
																		$this->db->trans_complete();

																		$this->db->trans_start();
																		$this->db->where('item_code', $item_code['item_code'], TRUE);
																		$this->db->update(Darkblowdatabase::item_code, array(
																			'qty' => ($item_code['qty'] - 1)
																		));
																		$this->db->trans_complete();

																		$this->db->trans_start();
																		$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																			'uid' => $accounts['player_id'],
																			'item_code' => $item_code['item_code'],
																			'username' => $accounts['login'],
																			'date_redeemed' => date('Y-m-d H:i:s')
																		), TRUE);
																		$this->db->trans_complete();

																		if ($this->db->trans_status()) {
																			$response['response'] = 'success';
																			$response['token'] = $this->security->get_csrf_hash();
																			$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																			$this->darkblowmessage->AjaxFlashData($response);
																		} else {
																			$response['response'] = 'error';
																			$response['token'] = $this->security->get_csrf_hash();
																			$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																			$this->darkblowmessage->AjaxFlashData($response);
																		}
																		break;
																	}
																case '2': {
																		$this->db->trans_start();
																		$this->db->select('*', TRUE);
																		$this->db->from(Darkblowdatabase::shop);
																		$this->db->where('item_id', $item_code['item_id'], TRUE);

																		$shop = $this->db->get()->row_array();
																		$this->db->trans_complete();

																		if ($this->db->trans_status()) {
																			if ($shop != null) {
																				switch ($shop['buy_type']) {
																					case '1': {
																							$count_now = $player_items['count'];
																							$add_count = $item_code['item_count'];

																							$this->db->trans_start();
																							$this->db->where('object_id', $player_items['object_id'], TRUE);
																							$this->db->update(Darkblowdatabase::player_items, array(
																								'count' => ($count_now + $add_count)
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->where('item_code', $item_code['item_code'], TRUE);
																							$this->db->update(Darkblowdatabase::item_code, array(
																								'qty' => ($item_code['qty'] - 1)
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																								'uid' => $accounts['player_id'],
																								'item_code' => $item_code['item_code'],
																								'username' => $accounts['login'],
																								'date_redeemed' => date('Y-m-d H:i:s')
																							), TRUE);
																							$this->db->trans_complete();

																							if ($this->db->trans_status()) {
																								$response['response'] = 'success';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							} else {
																								$response['response'] = 'error';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							}
																							break;
																						}
																					case '2': {
																							$count_now = $player_items['count'];
																							$add_count = $item_code['item_count'] / 24 / 60 / 60;
																							$time_first = strtotime('20' . $count_now);
																							$time_second = strtotime('+' . $add_count . 'day', $time_first);
																							$fix_date = date('ymdHi', $time_second);

																							$this->db->trans_start();
																							$this->db->where('object_id', $player_items['object_id'], TRUE);
																							$this->db->update(Darkblowdatabase::player_items, array(
																								'count' => $fix_date
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->where('item_code', $item_code['item_code'], TRUE);
																							$this->db->update(Darkblowdatabase::item_code, array(
																								'qty' => ($item_code['qty'] - 1)
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																								'uid' => $accounts['player_id'],
																								'item_code' => $item_code['item_code'],
																								'username' => $accounts['login'],
																								'date_redeemed' => date('Y-m-d H:i:s')
																							), TRUE);
																							$this->db->trans_complete();

																							if ($this->db->trans_status()) {
																								$response['response'] = 'success';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							} else {
																								$response['response'] = 'error';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							}
																							break;
																						}
																					case '3': {
																							break;
																						}
																					default:
																						# code...
																						break;
																				}
																			} else {
																				$response['response'] = 'error';
																				$response['token'] = $this->security->get_csrf_hash();
																				$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'];

																				$this->darkblowmessage->AjaxFlashData($response);
																			}
																		} else {
																			$response['response'] = 'error';
																			$response['token'] = $this->security->get_csrf_hash();
																			$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'];

																			$this->darkblowmessage->AjaxFlashData($response);
																		}
																		break;
																	}
																case '3': {
																		$response['response'] = 'error';
																		$response['token'] = $this->security->get_csrf_hash();
																		$response['message'] = 'Failed to Redeem The Code. Error: You Already Have This Item For Permanent Duration.';

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
															$this->db->trans_start();
															$this->db->insert(Darkblowdatabase::player_items, array(
																'owner_id' => $accounts['player_id'],
																'item_id' => $item_code['item_id'],
																'item_name' => $this->darkblowlib->GetItemName($item_code['item_id']),
																'count' => $item_code['item_count'],
																'category' => $this->darkblowlib->GetItemCategory($item_code['item_id']),
																'equip' => '1'
															), TRUE);
															$this->db->trans_complete();

															$this->db->trans_start();
															$this->db->where('item_code', $item_code['item_code'], TRUE);
															$this->db->update(Darkblowdatabase::item_code, array(
																'qty' => ($item_code['qty'] - 1)
															));
															$this->db->trans_complete();

															$this->db->trans_start();
															$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																'uid' => $accounts['player_id'],
																'item_code' => $item_code['item_code'],
																'username' => $accounts['login'],
																'date_redeemed' => date('Y-m-d H:i:s')
															), TRUE);
															$this->db->trans_complete();

															if ($this->db->trans_status()) {
																$response['response'] = 'success';
																$response['token'] = $this->security->get_csrf_hash();
																$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																$this->darkblowmessage->AjaxFlashData($response);
															} else {
																$response['response'] = 'error';
																$response['token'] = $this->security->get_csrf_hash();
																$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																$this->darkblowmessage->AjaxFlashData($response);
															}
														}
													} else {
														$response['response'] = 'error';
														$response['token'] = $this->security->get_csrf_hash();
														$response['message'] = 'Failed To Redeem The Code. Error: ' . $this->db->error()['message'];

														$this->darkblowmessage->AjaxFlashData($response);
													}
													break;
												}
											case 'Cash': {
													$money_now = $accounts['money'];
													$add_money = $item_code['cash'];

													$this->db->trans_start();
													$this->db->where('player_id', $accounts['player_id'], TRUE);
													$this->db->update(Darkblowdatabase::accounts, array(
														'money' => ($money_now + $add_money)
													));
													$this->db->trans_complete();

													$this->db->trans_start();
													$this->db->where('item_code', $item_code['item_code'], TRUE);
													$this->db->update(Darkblowdatabase::item_code, array(
														'qty' => ($item_code['qty'] - 1)
													));
													$this->db->trans_complete();

													$this->db->trans_start();
													$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
														'uid' => $accounts['player_id'],
														'item_code' => $item_code['item_code'],
														'username' => $accounts['login'],
														'date_redeemed' => date('Y-m-d H:i:s')
													), TRUE);
													$this->db->trans_complete();

													if ($this->db->trans_status()) {
														$response['response'] = 'success';
														$response['token'] = $this->security->get_csrf_hash();
														$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

														$this->darkblowmessage->AjaxFlashData($response);
													} else {
														$response['response'] = 'error';
														$response['token'] = $this->security->get_csrf_hash();
														$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

														$this->darkblowmessage->AjaxFlashData($response);
													}
													break;
												}
											case 'Double': {
													$money_now = $accounts['money'];
													$add_money = $item_code['cash'];

													$this->db->trans_start();
													$this->db->where('player_id', $accounts['player_id'], TRUE);
													$this->db->update(Darkblowdatabase::accounts, array(
														'money' => ($money_now + $add_money)
													));
													$this->db->trans_complete();

													$this->db->trans_start();
													$this->db->select('*', TRUE);
													$this->db->from(Darkblowdatabase::player_items);
													$this->db->where('owner_id', $accounts['player_id'], TRUE);
													$this->db->where('item_id', $item_code['item_id'], TRUE);

													$player_items = $this->db->get()->row_array();
													$this->db->trans_complete();

													if ($this->db->trans_status()) {
														if ($player_items != null) {
															switch ($player_items['equip']) {
																case '1': {
																		$count_now = $player_items['count'];
																		$add_count = $item_code['item_count'];

																		$this->db->trans_start();
																		$this->db->where('object_id', $player_items['object_id'], TRUE);
																		$this->db->update(Darkblowdatabase::player_items, array(
																			'count' => ($count_now + $add_count)
																		));
																		$this->db->trans_complete();

																		$this->db->trans_start();
																		$this->db->where('item_code', $item_code['item_code'], TRUE);
																		$this->db->update(Darkblowdatabase::item_code, array(
																			'qty' => ($item_code['qty'] - 1)
																		));
																		$this->db->trans_complete();

																		$this->db->trans_start();
																		$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																			'uid' => $accounts['player_id'],
																			'item_code' => $item_code['item_code'],
																			'username' => $accounts['login'],
																			'date_redeemed' => date('Y-m-d H:i:s')
																		), TRUE);
																		$this->db->trans_complete();

																		if ($this->db->trans_status()) {
																			$response['response'] = 'success';
																			$response['token'] = $this->security->get_csrf_hash();
																			$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																			$this->darkblowmessage->AjaxFlashData($response);
																		} else {
																			$response['response'] = 'error';
																			$response['token'] = $this->security->get_csrf_hash();
																			$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																			$this->darkblowmessage->AjaxFlashData($response);
																		}
																		break;
																	}
																case '2': {
																		$this->db->trans_start();
																		$this->db->select('*', TRUE);
																		$this->db->from(Darkblowdatabase::shop);
																		$this->db->where('item_id', $item_code['item_id'], TRUE);

																		$shop = $this->db->get()->row_array();
																		$this->db->trans_complete();

																		if ($this->db->trans_status()) {
																			if ($shop != null) {
																				switch ($shop['buy_type']) {
																					case '1': {
																							$count_now = $player_items['count'];
																							$add_count = $item_code['item_count'];

																							$this->db->trans_start();
																							$this->db->where('object_id', $player_items['object_id'], TRUE);
																							$this->db->update(Darkblowdatabase::player_items, array(
																								'count' => ($count_now + $add_count)
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->where('item_code', $item_code['item_code'], TRUE);
																							$this->db->update(Darkblowdatabase::item_code, array(
																								'qty' => ($item_code['qty'] - 1)
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																								'uid' => $accounts['player_id'],
																								'item_code' => $item_code['item_code'],
																								'username' => $accounts['login'],
																								'date_redeemed' => date('Y-m-d H:i:s')
																							), TRUE);
																							$this->db->trans_complete();

																							if ($this->db->trans_status()) {
																								$response['response'] = 'success';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							} else {
																								$response['response'] = 'error';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							}
																							break;
																						}
																					case '2': {
																							$count_now = $player_items['count'];
																							$add_count = $item_code['item_count'] / 24 / 60 / 60;
																							$time_first = strtotime('20' . $count_now);
																							$time_second = strtotime('+' . $add_count . 'day', $time_first);
																							$fix_date = date('ymdHi', $time_second);

																							$this->db->trans_start();
																							$this->db->where('object_id', $player_items['object_id'], TRUE);
																							$this->db->update(Darkblowdatabase::player_items, array(
																								'count' => $fix_date
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->where('item_code', $item_code['item_code'], TRUE);
																							$this->db->update(Darkblowdatabase::item_code, array(
																								'qty' => ($item_code['qty'] - 1)
																							));
																							$this->db->trans_complete();

																							$this->db->trans_start();
																							$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																								'uid' => $accounts['player_id'],
																								'item_code' => $item_code['item_code'],
																								'username' => $accounts['login'],
																								'date_redeemed' => date('Y-m-d H:i:s')
																							), TRUE);
																							$this->db->trans_complete();

																							if ($this->db->trans_status()) {
																								$response['response'] = 'success';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							} else {
																								$response['response'] = 'error';
																								$response['token'] = $this->security->get_csrf_hash();
																								$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																								$this->darkblowmessage->AjaxFlashData($response);
																							}
																							break;
																						}
																					case '3': {
																							break;
																						}
																					default:
																						# code...
																						break;
																				}
																			} else {
																				$response['response'] = 'error';
																				$response['token'] = $this->security->get_csrf_hash();
																				$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'];

																				$this->darkblowmessage->AjaxFlashData($response);
																			}
																		} else {
																			$response['response'] = 'error';
																			$response['token'] = $this->security->get_csrf_hash();
																			$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'];

																			$this->darkblowmessage->AjaxFlashData($response);
																		}
																		break;
																	}
																case '3': {
																		$response['response'] = 'error';
																		$response['token'] = $this->security->get_csrf_hash();
																		$response['message'] = 'Failed to Redeem The Code. Error: You Already Have This Item For Permanent Duration.';

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
															$this->db->trans_start();
															$this->db->insert(Darkblowdatabase::player_items, array(
																'owner_id' => $accounts['player_id'],
																'item_id' => $item_code['item_id'],
																'item_name' => $this->darkblowlib->GetItemName($item_code['item_id']),
																'count' => $item_code['item_count'],
																'category' => $this->darkblowlib->GetItemCategory($item_code['item_id']),
																'equip' => '1'
															), TRUE);
															$this->db->trans_complete();

															$this->db->trans_start();
															$this->db->where('item_code', $item_code['item_code'], TRUE);
															$this->db->update(Darkblowdatabase::item_code, array(
																'qty' => ($item_code['qty'] - 1)
															));
															$this->db->trans_complete();

															$this->db->trans_start();
															$this->db->insert(Darkblowdatabase::check_user_itemcode, array(
																'uid' => $accounts['player_id'],
																'item_code' => $item_code['item_code'],
																'username' => $accounts['login'],
																'date_redeemed' => date('Y-m-d H:i:s')
															), TRUE);
															$this->db->trans_complete();

															if ($this->db->trans_status()) {
																$response['response'] = 'success';
																$response['token'] = $this->security->get_csrf_hash();
																$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->darkblowlib->GetItemName($item_code['item_id']) . '.';

																$this->darkblowmessage->AjaxFlashData($response);
															} else {
																$response['response'] = 'error';
																$response['token'] = $this->security->get_csrf_hash();
																$response['message'] = 'Failed to Redeem The Code. Error: ' . $this->db->error()['message'] . '.';

																$this->darkblowmessage->AjaxFlashData($response);
															}
														}
													} else {
														$response['response'] = 'error';
														$response['token'] = $this->security->get_csrf_hash();
														$response['message'] = 'Failed To Redeem The Code. Error: ' . $this->db->error()['message'];

														$this->darkblowmessage->AjaxFlashData($response);
													}
													break;
												}
											default:
												# code...
												break;
										}
									}
								} else {
									$response['response'] = 'error';
									$response['token'] = $this->security->get_csrf_hash();
									$response['message'] = 'Failed To Redeem The Code. Error: ' . $this->db->error()['message'];

									$this->darkblowmessage->AjaxFlashData($response);
								}
							}
						}
					} else {
						$response['response'] = 'error';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Failed To Redeem The Code. Error: Redeem Code Not Found';

						$this->darkblowmessage->AjaxFlashData($response);
					}
				} else {
					$response['response'] = 'error';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = 'Failed To Redeem The Code. Error: ' . $this->db->error()['message'];

					$this->darkblowmessage->AjaxFlashData($response);
				}
			} else {
				$response['response'] = 'error';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = 'Failed To Redeem The Code. Error: Player Not Found.';

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'error';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = 'Failed To Redeem The Code. Error: ' . $this->db->error()['message'];

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //