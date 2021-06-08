<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('lib');
		$this->load->library('encryption');
	}
	public function auth_register()
	{
		$data = array(
			'login' => $this->encryption->encrypt(pg_escape_string($this->input->post('login'))),
			'email' => $this->encryption->encrypt($this->input->post('email')),
			'password' => $this->encryption->encrypt(pg_escape_string($this->lib->password_encrypt($this->input->post('password')))),
			'hint_question' => $this->encryption->encrypt($this->input->post('hint_question')),
			'hint_answer' => $this->encryption->encrypt($this->input->post('hint_answer')),
			'date_registered' => $this->encryption->encrypt(date('d-m-Y h:i:s'))
		);
		
		// Checking Username
		$check_username = $this->db->get_where('accounts', array('login' => $data['login']));
		$result_username = $check_username->row();
		if ($result_username) 
		{
			$this->session->set_flashdata('error', 'Username Already Registered');
			redirect(base_url('register'), 'refresh');
		}
		else 
		{
			// Check Events
			$events = $this->db->get('events_register')->num_rows();
			if ($events > 0)
			{
				$events1 = $this->db->get('events_register')->row();
				if ($events1)
				{
					if (date('Ymd') >= $events1->date_start && date('Ymd') <= $events1->date_end)
					{
						// If Events Enabled
						if ($events1->qty > 0)
						{
							// Insert Account
							$insert_account = $this->db->insert('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password']), 'lastip' => $this->input->ip_address(), 'email' => $this->encryption->decrypt($data['email']), 'hint_question' => $this->encryption->decrypt($data['hint_question']), 'hint_answer' => $this->encryption->decrypt($data['hint_answer']), 'date_registered' => $this->encryption->decrypt($data['date_registered'])));
							if ($insert_account)
							{
								// Fetch Account
								$fetch_account = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['login'])));
								$result_fetch_account = $fetch_account->row();
								if ($result_fetch_account)
								{
									if ($events1->item_id >= 100003001 && $events1->item_id <= 904007069)
									{
										// Insert Events Item
										$insert_item = $this->db->insert('player_items', array('owner_id' => $result_fetch_account->player_id, 'item_id' => $events1->item_id, 'item_name' => $events1->item_name, 'count' => $events1->item_count, 'category' => '1', 'equip' => '1'));
										$math = $events1->qty - 1;
										$update_qty = $this->db->update('events_register', array('qty' => $math));
										if ($insert_item && $update_qty)
										{
											$this->session->set_flashdata('success', 'Registered Successfully');
											redirect(base_url('register'), 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
											redirect(base_url('register'), 'refresh');
										}
									}
									if ($events1->item_id >= 1001001003 && $events1->item_id <= 1105003032)
									{
										// Insert Events Item
										$insert_item = $this->db->insert('player_items', array('owner_id' => $result_fetch_account->player_id, 'item_id' => $events1->item_id, 'item_name' => $events1->item_name, 'count' => $events1->item_count, 'category' => '2', 'equip' => '1'));
										$math = $events1->qty - 1;
										$update_qty = $this->db->update('events_register', array('qty' => $math));
										if ($insert_item && $update_qty)
										{
											$this->session->set_flashdata('success', 'Registered Successfully');
											redirect(base_url('register'), 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
											redirect(base_url('register'), 'refresh');
										}
									}
									if ($events1->item_id >= 1300002003 && $events1->item_id <= 1302379000)
									{
										// Insert Events Item
										$insert_item = $this->db->insert('player_items', array('owner_id' => $result_fetch_account->player_id, 'item_id' => $events1->item_id, 'item_name' => $events1->item_name, 'count' => $events1->item_count, 'category' => '3', 'equip' => '1'));
										$math = $events1->qty - 1;
										$update_qty = $this->db->update('events_register', array('qty' => $math));
										if ($insert_item && $update_qty)
										{
											$this->session->set_flashdata('success', 'Registered Successfully');
											redirect(base_url('register'), 'refresh');
										}
										else 
										{
											$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
											redirect(base_url('register'), 'refresh');
										}
									}
								}
								else
								{
									$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
									redirect(base_url('register'), 'refresh');
								}
							}
						}
						else 
						{
							// Insert Account
							$insert_account = $this->db->insert('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password']), 'lastip' => $this->input->ip_address(), 'email' => $this->encryption->decrypt($data['email']), 'hint_question' => $this->encryption->decrypt($data['hint_question']), 'hint_answer' => $this->encryption->decrypt($data['hint_answer']), 'date_registered' => $this->encryption->decrypt($data['date_registered'])));
							if ($insert_account)
							{
								$this->session->set_flashdata('success', 'Registered Successfully');
								redirect(base_url('register'), 'refresh');
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
								redirect(base_url('register'), 'refresh');
							}
						}
					}
					else 
					{
						$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
						redirect(base_url('register'), 'refresh');
					}
				}
			}
			else 
			{
				$insert_account = $this->db->insert('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password']), 'lastip' => $this->input->ip_address(), 'email' => $this->encryption->decrypt($data['email']), 'hint_question' => $this->encryption->decrypt($data['hint_question']), 'hint_answer' => $this->encryption->decrypt($data['hint_answer']), 'date_registered' => $this->encryption->decrypt($data['date_registered'])));
				if ($insert_account)
				{
					$this->session->set_flashdata('success', 'Registered Successfully');
					redirect(base_url('register'), 'refresh');
				}
				else 
				{
					$this->session->set_flashdata('error', 'Major Error, Please Contact DEV / GM For Detail Information');
					redirect(base_url('register'), 'refresh');
				}
			}
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //