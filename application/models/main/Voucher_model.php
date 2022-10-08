<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Voucher_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('message');
	}

	function SetCategory($item_id)
	{
		if ($item_id >= 100003001 && $item_id <= 904007069) return "1";
		else if ($item_id >= 1001001003 && $item_id <= 1105003032) return "2";
		else if ($item_id >= 1300002003 && $item_id <= 1302379000) return "3";
		else return "0";
	}

	function GetItemName($item_id)
	{
		$query = $this->db->get_where(Darkblowdatabase::shop, array('item_id' => $item_id))->row();
		if ($query) return $query->item_name;
		else return "";
	}

	function RedeemVoucherV3()
	{
		$response = array();

		$data = array(
			'voucher_code' => $this->encryption->encrypt($this->input->post('voucher_code', true))
		);

		$state = array(
			'success' => 0,
			'failed' => 0,
			'converted' => 0,
			'total_cash' => 0,
			'total_webcoin' => 0
		);

		$query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $this->encryption->decrypt($data['voucher_code'])))->row();
		if ($query) {
			if ($query->active == 'f') {
				$response['response'] = 'false';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_ERROR_55');

				$this->darkblowmessage->AjaxFlashData($response);
			} else {
				$explode = explode(',', $query->voucher_item);
				$count = count($explode);

				$query3 = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid')))->row();
				if ($query3) {
					$updatecash2 = $this->db->where('player_id', $query3->player_id)->update(Darkblowdatabase::accounts, array('money' => ($query3->money + $query->voucher_cash)));
					$updatewebcoin = $this->db->where('player_id', $query3->player_id)->update(Darkblowdatabase::accounts, array('kuyraicoin' => ($query3->kuyraicoin + $query->voucher_webcoin)));
					if ($updatecash2 && $updatewebcoin) {
						$state['success']++;
						$state['total_cash'] .= ($state['total_cash'] + $query->voucher_cash);
						$state['total_webcoin'] .= ($state['total_webcoin'] + $query->voucher_webcoin);
					} else $state['failed']++;
				} else {
					$response['response'] = 'false';
					$response['token'] = $this->security->get_csrf_hash();
					$response['message'] = $this->lang->line('STR_ERROR_53');

					$this->darkblowmessage->AjaxFlashData($response);
				}

				for ($i = 0; $i < $count; $i++) {
					$query2 = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $this->session->userdata('uid'), 'item_id' => $explode[$i]))->row();
					if ($query2) {
						if ($query2->equip == 1) {
							$updatecount = $this->db->where(array('owner_id' => $query2->owner_id, 'item_id' => $query2->item_id))->update(Darkblowdatabase::player_items, array('count' => ($query2->count + 7776000)));
							if ($updatecount) $state['success']++;
							else $state['failed']++;
						} else {
							$fetchaccount = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $query2->owner_id))->row();
							if ($fetchaccount) {
								$updatecash = $this->db->where('player_id', $fetchaccount->player_id)->update(Darkblowdatabase::accounts, array('money' => ($fetchaccount->money + 100000)));
								if ($updatecash) {
									$state['converted']++;
									$state['total_cash'] .= ($state['total_cash'] + 100000);
								} else $state['failed']++;
							} else {
								$response['response'] = 'false';
								$response['token'] = $this->security->get_csrf_hash();
								$response['message'] = $this->lang->line('STR_ERROR_53');

								$this->darkblowmessage->AjaxFlashData($response);
							}
						}
					} else {
						$insertnewitem = $this->db->insert(Darkblowdatabase::player_items, array(
							'owner_id' => $this->session->userdata('uid'),
							'item_id' => $explode[$i],
							'item_name' => $this->GetItemName($explode[$i]),
							'count' => '7776000',
							'category' => $this->SetCategory($explode[$i]),
							'equip' => '1'
						));
						if ($insertnewitem) $state['success']++;
						else $state['failed']++;
					}
				}

				$this->db->where('voucher_code', $this->encryption->decrypt($data['voucher_code']))->update(Darkblowdatabase::item_voucher, array('active' => 'f'));

				$response['response'] = 'true';
				$response['token'] = $this->security->get_csrf_hash();
				$response['message'] = $this->lang->line('STR_SUCCESS_8') . $this->session->userdata('player_name') . ',' . $this->lang->line('STR_SUCCESS_9') . $state['success'] . $this->lang->line('STR_SUCCESS_15') . $state['total_cash'] . $this->lang->line('STR_SUCCESS_16') . $state['total_webcoin'] . $this->lang->line('STR_SUCCESS_17') . '[' . $state['failed'] . ']';

				$this->darkblowmessage->AjaxFlashData($response);
			}
		} else {
			$response['response'] = 'false';
			$response['token'] = $this->security->get_csrf_hash();
			$response['message'] = $this->lang->line('STR_ERROR_55');

			$this->darkblowmessage->AjaxFlashData($response);
		}
	}

	function RedeemVoucherV4()
	{
		$response = array();

		$data = array(
			'voucher_code' => $this->input->post('voucher_code', true)
		);

		$status = array(
			'success' => 0,
			'failed' => 0
		);

		$query = $this->db->get_where(Darkblowdatabase::item_voucher, array('voucher_code' => $data['voucher_code']))->row();
		if ($query) {
			switch ($query->active) {
				case 't': {
						// Declare Rewards

						$explode = explode(',', $query->voucher_item);
						$count = count($explode);

						for ($i = 0; $i < $count; $i++) {
							$query2 = $this->db->get_where(Darkblowdatabase::player_items, array('owner_id' => $this->session->userdata('uid'), 'item_id' => $explode[$i]))->row();
							if ($query2) {
								switch ($query2->equip) {
									case 1: {
											$update = $this->db->where('object_id', $query2->object_id)->update(Darkblowdatabase::player_items, array('count' => ($query2->count + 2592000)));
											if ($update) $status['success'] += 1;
											else $status['failed'] += 1;
											break;
										}
									case 2: {
											$countNow = $query2->count;
											$addDays = 2592000 / 24 / 60 / 60;
											$timeFirst = strtotime('20' . $countNow);
											$timeSecond = strtotime('+' . $addDays . 'day', $timeFirst);
											$fixDate = date('ymdHi', $timeSecond);

											$update2 = $this->db->where('object_id', $query2->object_id)->update(Darkblowdatabase::player_items, array('count' => $fixDate));
											if ($update2) $status['success'] += 1;
											else $status['failed'] += 1;
											break;
										}

									case 3:
									default: {
											$status['failed'] += 1;
											break;
										}
								}
							} else {
								$insert = $this->db->insert(Darkblowdatabase::player_items, array(
									'owner_id' => $this->session->userdata('uid'),
									'item_id' => $explode[$i],
									'item_name' => $this->darkblowlib->GetItemName($explode[$i]),
									'count' => '2592000',
									'category' => $this->darkblowlib->GetItemCategory($explode[$i]),
									'equip' => '1'
								));
								if ($insert) $status['success'] += 1;
								else $status['failed'] += 1;
							}
						}

						$query3 = $this->db->get_where(Darkblowdatabase::accounts, array('player_id' => $this->session->userdata('uid')))->row();
						if ($query3) {
							$update3 = $this->db->where('player_id', $query3->player_id)->update(Darkblowdatabase::accounts, array(
								'money' => ($query3->money + $query->voucher_cash),
								'kuyraicoin' => ($query3->kuyraicoin + $query->voucher_webcoin)
							));
							if ($update3) $status['success'] += 1;
							else $status['failed'] += 1;
						} else $status['failed'] += 1;

						$query4 = $this->db->where('id', $query->id)->update(Darkblowdatabase::item_voucher, array('active' => 'f'));
						$query5 = $this->db->insert(Darkblowdatabase::check_user_voucher, array(
							'uid' => $this->session->userdata('uid'),
							'voucher' => $query->voucher_code,
							'date_claimed' => time()
						));
						if ($query4 && $query5) $status['success'] += 1;
						else $status['failed'] += 1;

						if ($status['failed'] > 0) {
							$response['response'] = 'error';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Failed To Redeem Voucher.';

							$this->darkblowmessage->AjaxFlashData($response);
						} else {
							$response['response'] = 'success';
							$response['token'] = $this->security->get_csrf_hash();
							$response['message'] = 'Successfully Redeem Voucher. Please Relogin To See Rewards.';

							$this->darkblowmessage->AjaxFlashData($response);
						}
						break;
					}
				case 'f':
				default: {
						$response['response'] = 'error';
						$response['token'] = $this->security->get_csrf_hash();
						$response['message'] = 'Voucher Already Used.';

						$this->darkblowmessage->AjaxFlashData($response);
						break;
					}
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //
