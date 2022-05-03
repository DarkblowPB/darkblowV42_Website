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

		$custom_config = @file_get_contents('./darkblow_config.json');
		$custom_decode = json_decode($custom_config);
		foreach ($custom_decode as $row) {
			if ($row->CodeSystem == "API" || $row->CodeSystem == 'api')
				return base_url('api/servercommand/redeemcode');
			else if ($row->CodeSystem == 'MANUAL' || $row->CodeSystem == 'Manual')
				return base_url('player_panel/redeemcode/do_redeem');
		}
	}

	function GetItemName($item_id)
	{
		$query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
		if ($query) return $query->item_name;
		else return "";
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
									$insert = $this->db->insert('check_user_itemcode', array(
										'uid' => $query->player_id,
										'item_code' => $query2->item_code,
										'username' => $query->login,
										'date_redeemed' => date('d-m-Y H:i:s')
									));
									if ($update && $insert) {
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
													$insert = $this->db->insert('check_user_itemcode', array(
														'uid' => $query->player_id,
														'item_code' => $query2->item_code,
														'username' => $query->login,
														'date_redeemed' => date('d-m-Y H:i:s')
													));
													if ($update && $insert) {
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
													$insert = $this->db->insert('check_user_itemcode', array(
														'uid' => $query->player_id,
														'item_code' => $query2->item_code,
														'username' => $query->login,
														'date_redeemed' => date('d-m-Y H:i:s')
													));
													if ($update && $insert) {
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

	function CodeValidationV2()
	{
		sleep(1);
		$data = array(
			'code' => $this->encryption->encrypt($this->input->post('code')),
			'player_id' => $this->encryption->encrypt($this->session->userdata('uid'))
		);

		$response = array();

		// Check Code From Database Table
		$check = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['code'])))->row();
		if ($check) {
			// If Code Found
			// Check History Redeem Code
			$check2 = $this->db->get_where('check_user_itemcode', array('uid' => $this->session->userdata('uid'), 'item_code' => $check->item_code))->row();
			if ($check2) {
				$response['token'] = $this->security->get_csrf_hash();
				$response['response'] = 'error';
				$response['message'] = $this->lang->line('STR_ERROR_40');
				echo json_encode($response);
			} else {
				if ($check->type == "Item") {
					$insert = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $check->item_code, 'username' => '', 'date_redeemed' => date('d-m-Y h:i:s')));
					if ($insert) {
						$config = array(
							'separator' => '>'
						);
						$buffer = array(
							'command_type' => 'RedeemCode',
							'item_id' => $check->item_id,
							'category' => $this->lib->GetItemCategory($check->item_id),
							'item_name' => $this->GetItemName($check->item_id),
							'item_count' => $check->item_count,
							'player_id' => $this->encryption->decrypt($data['player_id']),
							'type' => 'Item',
							'cash' => '0'
						);
						if ($this->lib->CheckOpenPort($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'))) {
							if ($this->lib->SendSocket($this->lib->HostLibrary('main', 'ip_address'), $this->lib->HostLibrary('main', 'port_1'), $buffer['command_type'] . $config['separator'] . $buffer['item_id'] . $config['separator'] . $buffer['category'] . $config['separator'] . $buffer['item_name'] . $config['separator'] . $buffer['item_count'] . $config['separator'] . $buffer['player_id'] . $config['separator'] . $buffer['type'] . $config['separator'] . $buffer['cash']) == 'Success') {
								$response['response'] = 'success';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_SUCCESS_8') . $this->session->userdata('player_name') . ',' . $this->lang->line('STR_SUCCESS_9') . $this->GetItemName($check->item_id) . '.';

								echo json_encode($response);
							} else {
								$response['response'] = 'error';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_ERROR_22');
							}
						} else {
							if ($this->lib->SendSocket($this->lib->HostLibrary('side', 'ip_address'), $this->lib->HostLibrary('side', 'port_1'), $buffer['command_type'] . $config['separator'] . $buffer['item_id'] . $config['separator'] . $buffer['category'] . $config['separator'] . $buffer['item_name'] . $config['separator'] . $buffer['item_count'] . $config['separator'] . $buffer['player_id'] . $config['separator'] . $buffer['type'] . $config['separator'] . $buffer['cash']) == 'Success') {
								$response['response'] = 'success';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = 'Congratulations ' . $this->session->userdata('player_name') . ', You Received ' . $this->GetItemName($check->item_id) . '.';

								echo json_encode($response);
							} else {
								$response['response'] = 'error';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_ERROR_22');
							}
						}
					}
				} else if ($check->type == "Cash") {
					$response['response'] = 'error';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = $this->lang->line('STR_ERROR_41');

					echo json_encode($response);
				}
			}
		} else {
			$response['token'] = $this->security->get_csrf_hash();
			$response['response'] = 'error';
			$response['message'] = $this->lang->line('STR_ERROR_42');
			echo json_encode($response);
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //