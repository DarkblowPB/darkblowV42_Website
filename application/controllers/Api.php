<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->library('lib');
		$this->load->library('encryption');
    }

    function verify_user()
    {
        $data = array(
            'login' => $this->encryption->encrypt(pg_escape_string($this->input->post('login'))),
            'password' => $this->encryption->encrypt(pg_escape_string($this->lib->password_encrypt($this->input->post('password'))))
        );

        $query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password'])))->row();
        if ($query)
        {
            echo "true";
        }
        else 
        {
            echo "false";
        }
    }

    function fetch_user()
    {
        $response = [];
		$data = array(
			'login' => $this->encryption->encrypt(pg_escape_string($this->input->post('login'))),
			'password' => $this->encryption->encrypt(pg_escape_string($this->lib->password_encrypt($this->input->post('password'))))
        );
        $query = $this->db->get_where('accounts', array('login' => $this->encryption->decrypt($data['login']), 'password' => $this->encryption->decrypt($data['password'])))->result_array();
        if ($query)
        {
            foreach ($query as $row) 
            {
                $userData = array(
                    'login' => $row['login'],
                    'password' => $row['password'],
                    'player_id' => $row['player_id'],
                    'player_name' => $row['player_name'],
                    'clan_id' => $row['clan_id'],
                    'rank' => $row['rank'],
                    'gp' => $row['gp'],
                    'exp' => $row['exp'],
                    'pc_cafe' => $row['pc_cafe'],
                    'access_level' => $row['access_level'],
                    'lastip' => $row['lastip'],
                    'email' => $row['email'],
                    'kuyraicoin' => $row['kuyraicoin'],
                    'hint_question' => $row['hint_question'],
                    'hint_answer' => $row['hint_answer'],
                    'date_registered' => $row['date_registered']
                );
                array_push($response, $userData);
            }
        }
        echo json_encode($response);
    }

    function fetch_webshop()
    {
        $response = [];
        $data = array(
            'token' => $this->encryption->encrypt($this->input->post('token'))
        );

        if ($this->encryption->decrypt($data['token']) != "darkblowpb_2021")
        {
            return;
        }

        $query = $this->db->get_where('webshop', array('webshop_itemstatus' => '1'))->result_array();
        if ($query)
        {
            foreach ($query as $row) 
            {
                $allData = array(
                    'id' => $row['id'],
                    'webshop_itemid' => $row['webshop_itemid'],
                    'webshop_itemname' => $row['webshop_itemname'],
                    'webshop_itemdescription' => $row['webshop_itemdescription'],
                    'webshop_itemrating' => $row['webshop_itemrating'],
                    'webshop_itemcategory' => $row['webshop_itemcategory'],
                    'webshop_itemstatus' => $row['webshop_itemstatus'],
                    'webshop_totalbuy' => $row['webshop_totalbuy'],
                    'webshop_itemimg' => $row['webshop_itemimg'],
                    'webshop_itemcount_3days' => $row['webshop_itemcount_3days'],
                    'webshop_itemprice_3days' => $row['webshop_itemcount_3days'],
                    'webshop_itemcount_7days' => $row['webshop_itemcount_7days'],
                    'webshop_itemprice_7days' => $row['webshop_itemcount_7days'],
                    'webshop_itemcount_30days' => $row['webshop_itemcount_30days'],
                    'webshop_itemprice_30days' => $row['webshop_itemcount_30days'],
                    'webshop_itemcount_permanent' => $row['webshop_itemcount_permanent'],
                    'webshop_itemprice_permanent' => $row['webshop_itemcount_permanent']
                );
                array_push($response, $allData);
            }
        }
        echo json_encode($response);
    }

    function redeemcode()
	{
		$data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id')),
			'code' => $this->encryption->encrypt($this->input->post('code'))
		);
		
		// Checking Code
		$check_code = $this->db->get_where('item_code', array('item_code' => $this->encryption->decrypt($data['code'])));
		$result_code = $check_code->row();
		if ($result_code) 
		{
			if ($result_code->type == "Item") 
			{
				// Check Usable
				$check_usable = $this->db->get_where('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
				$result_usable = $check_usable->row();
				if ($result_usable) 
				{
					echo "You Already Used This Code.";
				}
				else 
				{
					// Checking Inventory
					$check_inventory = $this->db->get_where('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id));
					$result_inventory = $check_inventory->row();
					if ($result_inventory) 
					{
						// Checking Equip
						if ($result_inventory->equip == 1) 
						{
							$total_count = $result_code->item_count + $result_inventory->count;
							// Update Count
							$update_count = $this->db->where('item_id', $result_inventory->item_id)->update('player_items', array('count' => $total_count));
							if ($update_count) 
							{
								// Insert To Check_User_Itemcode
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
                                    echo 'You Already Have '.$result_code->item_name.', Item Duration Added Successfully.';
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								
							}
						}
						if ($result_inventory->equip != 1) 
						{
                            echo 'You Already Have '.$result_code->item_name.' Inside Your Inventory And Is In A State Of Use. Redeem Code Has Been Canceled.';
							
						}
					}
					else 
					{
						// Checking Item Category
						if ($result_code->item_id >= 100003001 && $result_code->item_id <= 904007069) 
						{
							// Insert To Player_items
							$insert = $this->db->insert('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '1', 'equip' => '1'));
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									$count = $result_code->item_count / 24 / 60 / 60;
									echo 'Congratulations , You Received '.$result_code->item_name.' For '.$count.' Days';
										
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								
							}
						}
						if ($result_code->item_id >= 1001001003 && $result_code->item_id <= 1105003032) 
						{
							// Insert To Player_items
							$insert = $this->db->insert('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '2', 'equip' => '1'));
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									$count = $result_code->item_count / 24 / 60 / 60;
									echo 'Congratulations , You Received '.$result_code->item_name.' For '.$count.' Days';
									
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								
							}
						}
						if ($result_code->item_id > 1105003032) 
						{
							// Insert To Player_items
							$insert = $this->db->insert('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '3', 'equip' => '1'));
							if ($insert) 
							{
								$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
								if ($insert_log) 
								{
									$count = $result_code->item_count / 24 / 60 / 60;
									echo 'Congratulations , You Received '.$result_code->item_name.' For '.$count.' Days';
									
								}
							}
							else 
							{
								$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
								
							}
						}
					}
				}
			}
			if ($result_code->type == "Cash") 
			{
				// Checking Usable
				$check_usable = $this->db->get_where('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
				$result_usable = $check_usable->row();
				if ($result_usable) 
				{
                    echo 'You Already Used This Code';
					
				}
				else 
				{
					// Fetch Accounts
					$fetch_accounts = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])));
					$result_fetch = $fetch_accounts->row();
					if ($result_fetch) 
					{
						$total_money = $result_fetch->money + $result_code->cash;
						// Update Cash
						$update_cash = $this->db->where('player_id', $this->encryption->decrypt($data['player_id']))->update('accounts', array('money' => $total_money));
						if ($update_cash) 
						{
                            echo 'Congratulation , You Received '.$result_code.' D-Cash.<br>Total Balance: '.$total_money.' D-Cash';
							
						}
						else 
						{
							$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
							
						}
					}
					else 
					{
						$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
						
					}
				}
			}
			if ($result_code->type == "Double")
			{
				// Checking Usable
				$check1 = $this->db->get_where('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
				$check2 = $check1->row();
				if ($result2)
				{
					$this->session->set_flashdata('error', 'You Have Used This Code');
					
				}
				else 
				{
					$accounts = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
					$money = $accounts->money;
					$targetmoney = $result_code->cash;
					$total = $money + $targetmoney;
					// Checking Item Category
					if ($result_code->item_id >= 100003001 && $result_code->item_id <= 904007069) 
					{
						// Insert To Player_items
						$insert = $this->db->insert('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '1', 'equip' => '1'));
						$updatecash = $this->db->where('player_id', $this->encryption->decrypt($data['player_id']))->update('accounts', array('money' => $total));
						if ($insert && $updatecash)
						{
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
							if ($insert_log) 
							{
								$count = $result_code->item_count / 24 / 60 / 60;
								echo 'Congratulations , You Received '.$result_code->item_name.' For '.$count.' Days';
									
							}
						}
						else 
						{
							$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
							
						}
					}
					if ($result_code->item_id >= 1001001003 && $result_code->item_id <= 1105003032) 
					{
						// Insert To Player_items
						$insert = $this->db->insert('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '2', 'equip' => '1'));
						$updatecash = $this->db->where('player_id', $this->encryption->decrypt($data['player_id']))->update('accounts', array('money' => $total));
						if ($insert && $updatecash)
						{
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
							if ($insert_log) 
							{
								$count = $result_code->item_count / 24 / 60 / 60;
								echo 'Congratulations , You Received '.$result_code->item_name.' For '.$count.' Days';
								
							}
						}
						else 
						{
							$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
							
						}
					}
					if ($result_code->item_id > 1105003032) 
					{
						// Insert To Player_items
						$insert = $this->db->insert('player_items', array('owner_id' => $this->encryption->decrypt($data['player_id']), 'item_id' => $result_code->item_id, 'item_name' => $result_code->item_name, 'count' => $result_code->item_count, 'category' => '3', 'equip' => '1'));
						$updatecash = $this->db->where('player_id', $this->encryption->decrypt($data['player_id']))->update('accounts', array('money' => $total));
						if ($insert && $updatecash)
						{
							$insert_log = $this->db->insert('check_user_itemcode', array('uid' => $this->encryption->decrypt($data['player_id']), 'item_code' => $result_code->item_code));
							if ($insert_log) 
							{
								$count = $result_code->item_count / 24 / 60 / 60;
								echo 'Congratulations , You Received '.$result_code->item_name.' For '.$count.' Days';
								
							}
						}
						else 
						{
							$this->session->set_flashdata('error', 'Major Error, Please Contact DEV & GM For Detail Information.');
							
						}
					}
				}
			}
			if ($result_code->type != "Cash" || $result_code->type != "Item" || $result_code->type != "Double")
			{
				$this->session->set_flashdata('error', 'Code Invalid. Maybe It Is System Error, Please Contact DEV/GM For More Details Detail');
				
			}
		}
		else 
		{
			echo 'Code Doesnt Exists.';
			
		}
	}
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>