<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

class Playersmanagement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('lib');
    }

    function SendEmail($email)
    {

        $config = array(
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com', // Your SMTP Host
            'smtp_user' => 'kombokebumenofficial@gmail.com',  // Your Email
            'smtp_pass'   => 'kombokebumen123!@#',  // Your Password
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n",
            'priority' => 5
        );

        $this->email->initialize($config);

        $this->email->from('no-reply@darkblowpbreborn.com', 'DarkblowPB Reborn');
        $this->email->to($email);
        $this->email->subject('Reset Password');
        $this->email->message('<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="x-apple-disable-message-reformatting">
      <title></title>
      <!--[if mso]>
      <noscript>
        <xml>
          <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
      </noscript>
      <![endif]-->
      <style>
        table, td, div, h1, p, span {font-family: Arial, sans-serif;}
      </style>
    </head>
    <body style="margin:0;padding:0;">
      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
          <td align="center" style="padding:0;">
            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
              <tr>
                <td align="center" style="padding:40px 0 30px 0;background: black;">
                  <img src="https://i.postimg.cc/nrj1kZGX/download.jpg" alt="" style="height:auto;display:block;" />
                </td>
              </tr>
              <tr>
                <td style="padding:36px 30px 42px 30px;">
                  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                    <tr>
                      <td colspan="2" style="padding:0 0 36px 0;color:#153643;">
                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif; text-align: center;">INFORMATION</h1>
                        <p style="margin:0 0 -12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">Hi email@email.com, We accept your request to reset password: <br></p>
                      </td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid black;">Username</td>
                        <td style="border-bottom: 1px solid black; font-weight: bold;">asd</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border-bottom: 1px solid black;">New Password</td>
                        <td style="border-bottom: 1px solid black; font-weight: bold;">asd</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td style="padding:30px;background:black;">
                  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                    <tr>
                      <td style="padding:0;width:70%; text-align: center;" align="left">
                        <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                          Copyright &copy; Darkblowpb Reborn ' . date('Y') . '. All rights reserved.
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
    </html>');
        if ($this->email->send()) return true;
        else return false;
    }

    function ResetPasswordPlayers($id)
    {
        $response = array();
        $query = $this->db->get_where('accounts', array('player_id' => $id))->row();
        if ($query) {
            if ($query->access_level == -1) {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed to reset password this player.';

                echo json_encode($response);
            } else {
            }
        }
    }

    function GetItemName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "???";
    }

    function GetAllShop()
    {
        return $this->db->order_by('item_id', 'asc')->get('shop')->result_array();
    }

    function SendItem()
    {
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true)),
            'item_id' => $this->encryption->encrypt($this->input->post('item_id', true)),
            'item_count' => $this->encryption->encrypt($this->input->post('item_count', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query) {
            $query2 = $this->db->get_where('player_items', array('owner_id' => $query->player_id, 'item_id' => $this->encryption->decrypt($data['item_id'])))->row();
            if ($query2) {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Send Item. Player Already Have This Item.';

                echo json_encode($response);
            } else {
                if ($this->encryption->decrypt($data['item_count']) != '1') {
                    $query3 = $this->db->insert('player_items', array(
                        'owner_id' => $query->player_id,
                        'item_id' => $this->encryption->decrypt($data['item_id']),
                        'item_name' => $this->GetItemName($this->encryption->decrypt($data['item_id'])),
                        'count' => $this->encryption->decrypt($data['item_count']),
                        'category' => $this->lib->GetItemCategory($this->encryption->decrypt($data['item_id'])),
                        'equip' => '1'
                    ));
                    if ($query3) {
                        $response['response'] = 'true';
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name != '') $response['message'] = 'Successfully Send "' . $this->GetItemName($this->encryption->decrypt($data['item_id'])) . '" To "' . $query->player_name . '".';
                        else $response['message'] = 'Successfully Send "' . $this->GetItemName($this->encryption->decrypt($data['item_id'])) . '" To "' . $query->login . '".';

                        echo json_encode($response);
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed To Send Item.';

                        echo json_encode($response);
                    }
                } else {
                    $query3 = $this->db->insert('player_items', array(
                        'owner_id' => $query->player_id,
                        'item_id' => $this->encryption->decrypt($data['item_id']),
                        'item_name' => $this->GetItemName($this->encryption->decrypt($data['item_id'])),
                        'count' => $this->encryption->decrypt($data['item_count']),
                        'category' => $this->lib->GetItemCategory($this->encryption->decrypt($data['item_id'])),
                        'equip' => '3'
                    ));
                    if ($query3) {
                        $response['response'] = 'true';
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name != '') $response['message'] = 'Successfully Send "' . $this->GetItemName($this->encryption->decrypt($data['item_id'])) . '" To "' . $query->player_name . '".';
                        else $response['message'] = 'Successfully Send "' . $this->GetItemName($this->encryption->decrypt($data['item_id'])) . '" To "' . $query->login . '".';

                        echo json_encode($response);
                    } else {
                        $response['response'] = 'false';
                        $response['token'] = $this->security->get_csrf_hash();
                        $response['message'] = 'Failed To Send Item.';

                        echo json_encode($response);
                    }
                }
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Find Account.';

            echo json_encode($response);
        }
    }

    function GetAllPlayers2()
    {
        return $this->db->get('accounts')->result_array();
    }

    function GetAllPlayers()
    {
        return $this->db->get_where('accounts', array('email !=' => 'empty@empty.empty', 'access_level <' => '3'))->result_array();
    }

    function GetRankInfo()
    {
        return $this->db->order_by('id', 'asc')->get('web_rankinfo')->result_array();
    }

    function RegisterCustomPlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'login' => $this->encryption->encrypt($this->input->post('login', true)),
            'password' => $this->encryption->encrypt($this->lib->password_encrypt($this->input->post('password', true))),
            'player_name' => $this->encryption->encrypt($this->input->post('player_name', true)),
            'rank' => $this->encryption->encrypt($this->input->post('rank', true)),
            'gp' => $this->encryption->encrypt($this->input->post('gp', true)),
            'pc_cafe' => $this->encryption->encrypt($this->input->post('pc_cafe', true)),
            'money' => $this->encryption->encrypt($this->input->post('money', true))
        );

        $query = $this->db->insert('accounts', array(
            'login' => $this->encryption->decrypt($data['login']),
            'password' => $this->encryption->decrypt($data['password']),
            'player_name' => $this->encryption->decrypt($data['player_name']),
            'rank' => $this->encryption->decrypt($data['rank']),
            'gp' => $this->encryption->decrypt($data['gp']),
            'pc_cafe' => $this->encryption->decrypt($data['pc_cafe']),
            'money' => $this->encryption->decrypt($data['money'])
        ));

        if ($query) {
            $response['response'] = 'true';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Created Custom Player.';
            echo json_encode($response);
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Failed To Create Custom Player.';
            echo json_encode($response);
        }
    }

    function DeletePlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query) {
            if ($query->player_name == "[DEV] EyeTracker") {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Delete This Player.';
            } else {
                $delete = $this->db->where('player_id', $query->player_id)->delete('accounts');
                if ($delete) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Delete This Player.';
                    echo json_encode($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Delete This Player.';
                    echo json_encode($response);
                }
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function ResetPlayer()
    {
        sleep(1);
        $response = array();
        $defaultData = array(
            'rank' => '31',
            'gp' => '250000',
            'exp' => '1690000',
            'pc_cafe' => '1',
            'last_rankup_date' => '1010000',
            'money' => '10000',
            'weapon_primary' => '100003004',
            'weapon_secondary' => '601002003',
            'weapon_melee' => '702001001',
            'weapon_thrown_normal' => '803007001',
            'weapon_thrown_special' => '904007002',
            'char_red' => '1001001005',
            'char_blue' => '1001002006',
            'char_helmet' => '1102003001',
            'char_dino' => '1006003041',
            'char_beret' => '0',
            'kuyraicoin' => '1000'
        );
        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query) {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', $defaultData);
            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Reset This Player.';
                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Reset This Player.';
                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function UnbannedPlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query) {
            if ($query->access_level != '-1') {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Player Not In Banned Condition.';
                echo json_encode($response);
            } else {
                $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '0'));
                if ($update) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Unbanned This Player.';
                    echo json_encode($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Unbanned This Player.';
                    echo json_encode($response);
                }
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function BannedPlayer()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query) {
            if ($query->access_level == '-1') {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'This Player Already In Banned Condition.';
                echo json_encode($response);
            } else {
                $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '-1'));
                if ($update) {
                    $response['response'] = 'true';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Successfully Banned This Player.';
                    echo json_encode($response);
                } else {
                    $response['response'] = 'false';
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'Failed To Banned This Player.';
                    echo json_encode($response);
                }
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'No Player Found.';
            echo json_encode($response);
        }
    }

    function FixInventory()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query) {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', array(
                'weapon_primary' => '100003004',
                'weapon_secondary' => '601002003',
                'weapon_melee' => '702001001',
                'weapon_thrown_normal' => '803007001',
                'weapon_thrown_special' => '904007002',
                'char_red' => '1001001005',
                'char_blue' => '1001002006',
                'char_helmet' => '1102003001',
                'char_dino' => '1006003041',
                'char_beret' => '0'
            ));
            if ($update) {
                $response['response'] = 'true';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Successfully Reset Equipment To Default.';
                echo json_encode($response);
            } else {
                $response['response'] = 'false';
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Reset Equipment.';
                echo json_encode($response);
            }
        } else {
            $response['response'] = 'false';
            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Player Not Found.';
            echo json_encode($response);
        }
    }

    function GetWeaponName($item_id)
    {
        $query = $this->db->get_where('shop', array('item_id' => $item_id))->row();
        if ($query) return $query->item_name;
        else return "";
    }

    function GetSpecifiedPlayer($player_id)
    {
        $query = $this->db->get_where('accounts', array('player_id' => $player_id))->row();
        if ($query) return $query;
        else redirect(base_url('adm/playersmanagement'), 'refresh');
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //
