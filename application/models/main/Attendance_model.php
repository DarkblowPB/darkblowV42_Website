<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#2192     //
// ==================== //

defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function GetAttendData()
    {
        return $this->db->get('events_attendance')->result_array();
    }

    function GetPlayerAttendDate($event_id)
    {
        $query = $this->db->get_where('check_user_attendance', array('player_id' => $_SESSION['uid'], 'event_id' => $event_id))->row();
        if ($query) return TRUE; else return FALSE;
    }

    function GetTodayEventID()
    {
        $query = $this->db->get_where('events_attendance', array('date' => date('d-m-Y')))->row();
        if ($query)
        {
            return $query->id;
        }
        else
        {
            return "0";
        }
    }

    function GetCashFromItem($event_id)
    {
        $query = $this->db->get_where('events_attendance', array('id' => $event_id))->row();
        if ($query)
        {
            switch ($query->item_count)
            {
                case '64800':
                    return 1000;
                case '259200':
                    return 3000;
                case '604800':
                    return 7000;
                case '2592000':
                    return 30000;
                case 'permanent':
                    return 50000;
                
                default:
                    return 0;
            }
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
            return '1';
        }
        else if ($item_id >= 1001001007 && $item_id <= 1105003032)
        {
            return '2';
        }
        else
        {
            return '3';
        }
    }

    function GetEquipState($event_id)
    {
        $query = $this->db->get_where('events_attendance', array('id' => $event_id))->row();
        if ($query)
        {
            if ($query->item_count == 64800 || $query->item_count == 259200 || $query->item_count == 604800 || $query->item_count == 2592000)
            {
                return 1;
            }
            else
            {
                return 3;
            }
        }
        else
        {
            return 0;
        }
    }

    function ClaimReward()
    {
        sleep(1);
        $response = array();

        $data = array(
            'event_id' => $this->encryption->encrypt($this->input->post('event_id', true)),
            'date' => $this->encryption->encrypt($this->input->post('date', true))
        );

        $date = array(
            'full_date' => date('d-m-Y'),
            'days' => date('d'),
            'months' => date('m'),
            'years' => date('Y')
        );

        $query = $this->db->get_where('events_attendance', array('id' => $this->encryption->decrypt($data['event_id']), 'date' => $date['full_date']))->row();
        if ($query)
        {
            // Checking Claim History
            $query2 = $this->db->get_where('check_user_attendance', array('player_id' => $_SESSION['uid'], 'date_claimed' => $date['full_date'], 'event_id' => $query->id))->row();
            if ($query2)
            {
                // if User Already Claimed
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'You Already Claimed Reward Today.';

                echo json_encode($response);
            }
            else
            {
                // If User Didn't Claim The Reward
                // Insert To Their Inventory

                $check = $this->db->get_where('player_items', array('owner_id' => $_SESSION['uid'], 'item_id' => $query->item_id))->row();
                if ($check)
                {
                    if ($check->equip == 1)
                    {
                        // If Player Already Have The Item
                        // Update Duration

                        $total_duration = $check->count + $query->item_count;

                        $update = $this->db->where(array('owner_id' => $check->owner_id, 'item_id' => $check->item_id))->update('player_items', array('count' => $total_duration));
                        $insert = $this->db->insert('check_user_attendance', array(
                            'player_id' => $_SESSION['uid'],
                            'item_reward' => $query->item_id,
                            'item_count' => $query->item_count,
                            'date_claimed' => $query->date,
                            'event_id' => $query->id
                        ));
                        if ($update && $insert)
                        {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Claim The Reward.';

                            echo json_encode($response);
                        }
                        else
                        {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To Claim The Reward.';

                            echo json_encode($response);
                        }
                    }
                    else
                    {
                        // Convert Item To DR-Cash
                        // Update PLayer Cash

                        $update = $this->db->where(array('player_id' => $_SESSION['uid']))->update('accounts', array('money' => $this->GetCashFromItem($query->item_count)));
                        $insert = $this->db->insert('check_user_attendance', array(
                            'player_id' => $_SESSION['uid'],
                            'item_reward' => $query->item_id,
                            'item_count' => $query->item_count,
                            'date_claimed' => $query->date,
                            'event_id' => $query->id
                        ));
                        if ($update && $insert)
                        {
                            $response['response'] = 'true';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Claim The Reward.';

                            echo json_encode($response);
                        }
                        else
                        {
                            $response['response'] = 'false';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Failed To CLaim The Reward.';

                            echo json_encode();
                        }
                    }
                }
                else
                {
                    // If Player Not Have The Item
                    // Insert New Item To Player Inventory

                    $insert = $this->db->insert('player_items', array(
                        'owner_id' => $_SESSION['uid'],
                        'item_id' => $query->item_id,
                        'item_name' => $query->item_name,
                        'count' => $query->item_count,
                        'category' => $this->GetItemCategory($query->item_id),
                        'equip' => $this->GetEquipState($query->id)
                    ));
                    $insert2 = $this->db->insert('check_user_attendance', array(
                        'player_id' => $_SESSION['uid'],
                        'item_reward' => $query->item_id,
                        'item_count' => $query->item_count,
                        'date_claimed' => $query->date,
                        'event_id' => $query->id
                    ));
                    if ($insert && $insert2)
                    {
                        $response['response'] = 'true';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Claim The Reward.';

                        echo json_encode($response);
                    }
                    else
                    {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed Claim The Reward.';

                        echo json_encode($response);
                    }
                }
            }
        }
        else
        {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Attendance Event Found.';

            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>