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
