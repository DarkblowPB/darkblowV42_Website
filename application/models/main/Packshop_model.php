<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Packshop_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load(array('string'));
    }

    public function LoadData()
    {
        return $this->db->order_by('id', 'desc')->get('web_packshop')->result_array();
    }

    public function BuyPack()
    {
        $response = array();
        $result = array(
            'success' => 0,
            'failed' => 0
        );
        $data = array(
            'id_pack' => $this->input->post('id_pack', true)
        );
        $query = $this->db->get_where('web_packshop', array('id' => $data['id_pack']))->row();
        $query0 = $this->db->get_where('accounts', array('player_id' => $this->session->userdata('uid')))->row();
        if ($query) {
            $explode = explode(',', $query->package_reward);
            $countExplode = count($explode);

            for ($i = 0; $i < $countExplode; $i++) {
                $query2 = $this->db->get_where('player_items', array('item_id' => $explode[$i]))->row();
                if ($query2) {
                    if ($query2->equip == 1) {
                        $count = $query2->count;
                        $update = $this->db->where(array('owner_id' => $query2->owner_id, 'item_id' => $query2->item_id))->update('player_items', array('count' => ($count + $query->package_duration)));
                        if ($update) $result['success']++;
                        else $result['failed']++;
                    } else $result['failed']++;
                } else {
                    $query3 = $this->db->insert('player_items', array(
                        'owner_id' => $this->session->userdata('uid'),
                        'item_id' => $explode[$i],
                        'item_name' => $this->darkblowlib->GetItemName($explode[$i]),
                        'count' => $query->package_duration,
                        'category' => $this->darkblowlib->GetItemCategory($explode[$i]),
                        'equip' => '1'
                    ));
                    if ($query3) $result['success']++;
                    else $result['failed']++;
                }
            }
            $this->db->where('id', $query->id)->update('web_packshop', array('package_qty' => ($query->package_qty - 1)));
            $this->db->where('player_id', $query0->player_id)->update('accounts', array('kuyraicoin' => ($query0->kuyraicoin - $query->package_price)));

            $response['response'] = 'success';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Buy Package. [Success: (' . $result['success'] . '); Failed: (' . $result['failed'] . ')]';

            $this->darkblowmessage->AjaxFlashData($response);
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Package.';

            $this->darkblowmessage->AjaxFlashData($response);
        }
    }
}

/* End of file Packshop_model.php */
