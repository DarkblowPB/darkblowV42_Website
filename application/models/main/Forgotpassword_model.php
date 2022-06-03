<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Forgotpassword_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->library('querylib');
    }

    function GenerateForgotPasswordLink()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $characters_length = strlen($characters);
        $token = '';
        $token_length = 128;

        for ($i = 0; $i < $token_length; $i++) $token .= $characters[rand(0, $characters_length - 1)];

        return $token;
    }

    function ForgotPasswordValidationV1()
    {
        $response = array();

        $data = array(
            'email' => $this->input->post('email', true)
        );

        $query = $this->db->get_where('accounts', array('email' => $data['email']))->row();
        if ($query) {

            // Required Data
            $token = $this->GenerateForgotPasswordLink();
            $link = base_url('forgotpassword/verifyid/' . $token);
            $expired_date = strtotime('+3 day', time());
            $message = 'Hey ' . $query->email . ', We confirmed you trying to reset your password at ' . $this->lib->ParseUnixTimeStamp(time()) . '.<br>
                        If you not trying to reset your password, please secure your account now. keep your hint secret. Anyway, click this link to reset your password: ' . $link . '<br>
                        This link will expire on ' . $this->lib->ParseUnixTimeStamp($expired_date) . '.<br><br>
                        Copyright ' . $this->getsettings->Get()->project_name . ' ' . date('Y') . '. All Rights Reserved.';

            if ($this->querylib->SendEmail('no-reply@darkblowpbreborn.com', $query->email, 'Reset Password', $message)) {
                $this->db->insert('web_log_forgotpassword', array(
                    'email' => $query->email,
                    'secret_token' => $token,
                    'valid_date' => $expired_date,
                    'status' => '1',
                    'date_created' => time(),
                    'date_updated' => null
                ));
                $response['response'] = 'success';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Send Forgot Password Request. Please Check Your Email.';

                echo json_encode($response);
            } else {
                $response['response'] = 'error';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed Send Forgot Password Request. Please Try Again Later.';

                echo json_encode($response);
            }
        } else {
            $response['response'] = 'error';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Invalid Email.';

            echo json_encode($response);
        }
    }

    function VerifyToken($param)
    {
        $query = $this->db->get_where('web_log_forgotpassword', array('secret_token' => $param))->row();
        if ($query) {
            if (time() < $query->valid_date) {
                switch ($query->status) {
                    case 1:
                        return TRUE;
                    case 0:
                    default:
                        return FALSE;
                }
            } else return false;
        } else return false;
    }

    function SetNewPassword($param)
    {
        $data = array(
            'secret_token' => $param,
            'password' => $this->lib->password_encrypt($this->input->post('new_password', true)),
            'confirm_password' => $this->lib->password_encrypt($this->input->post('confirm_password', true))
        );

        $query = $this->db->get_where('web_log_forgotpassword', array(
            'secret_token' => $data['secret_token']
        ))->row();
        if ($query) {
            if (time() < $query->valid_date) {
                switch ($query->status) {
                    case 1: {
                            $query2 = $this->db->get_where('accounts', array('email' => $query->email))->row();
                            if ($query2) {
                                $update = $this->db->where('player_id', $query2->player_id)->update('accounts', array(
                                    'password' => $data['password']
                                ));
                                $update2 = $this->db->where('id', $query->id)->update('web_log_forgotpassword', array('status' => '0'));

                                if ($update && $update2) echo "<script>alert('Password Successfully Reseted.') window.location='" . base_url('login') . "'</script>";
                            } else redirect(base_url(), 'refresh');
                            break;
                        }
                    case 0:
                    default: {
                            redirect(base_url(), 'refresh');
                            break;
                        }
                }
            } else redirect(base_url(), 'refresh');
        } else redirect(base_url(), 'refresh');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
