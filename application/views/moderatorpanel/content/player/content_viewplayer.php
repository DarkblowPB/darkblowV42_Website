<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <?php
            foreach ($details as $row) {
            ?>
            <div class="card-header bg-primary text-center p-3">
                <h4 class="mb-0 text-white">General Information</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="fas fa-users"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-responsive-lg table-borderless table-hover text-center">
                    <tbody>
                        <tr>
                            <td width="50%">Username</td>
                            <td width="50%"><?php echo $row['login'] ?></td>
                        </tr>
                        <tr>
                            <td>Player ID</td>
                            <td><?php echo $row['player_id'] ?></td>
                        </tr>
                        <tr>
                            <td>Player Name</td>
                            <td>
                                <?php
                                if ($row['player_name'] == "") 
                                {
                                    echo 'NULL';
                                }
                                if ($row['player_name'] != "") 
                                {
                                    echo $row['player_name'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Name Color</td>
                            <td>
                                <?php
                                if ($row['name_color'] == "0") 
                                {
                                    echo '<span class="text-danger">NOT USED</span>';
                                }
                                if ($row['name_color'] != "0") 
                                {
                                    echo '<span class="text-success">USED</span>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <?php
                            include 'assets/include.php';

                            $sql = $connec->prepare("SELECT * FROM clan_data WHERE clan_id = '".$row['clan_id']."'");
                            $sql->execute();
                            $result = $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <td>Clan</td>
                            <td>
                                <?php
                                if ($row['clan_id'] == 0) 
                                {
                                    echo 'NULL';
                                }
                                if ($row['clan_id'] != 0) 
                                {
                                    echo $result['clan_name'];
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Rank</td>
                            <td><img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="<?php echo $row['rank'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary text-center p-3">
                <h4 class="mb-0 text-white">Inventory's Information</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="fas fa-briefcase"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-borderless table-responsive-lg table-hover text-center" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td width="50%">Total Items</td>
                            <td width="50%"><?php echo $inventory ?></td>
                        </tr>
                        <tr>
                            <td>"Not Use" Item</td>
                            <td><?php echo $unused ?></td>
                        </tr>
                        <tr>
                            <td>"Used" Item</td>
                            <td><?php echo $used ?></td>
                        </tr>
                        <tr>
                            <td>"Permanent" Item</td>
                            <td><?php echo $permanent ?></td>
                        </tr>
                        <tr>
                            <td>Latest Buy</td>
                            <?php
                            include 'assets/include.php';
                            $sql_1 = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$p_id."' ORDER BY object_id DESC LIMIT 1");
                            $sql_1->execute();
                            $result_1 = $sql_1->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <td>
                                <?php
                                if ($result_1) 
                                {
                                    echo $result_1['item_name'];
                                }
                                else
                                {
                                    echo 'Null';
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary text-center p-3">
                <h4 class="mb-0 text-white">Battle Information</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="fas fa-gamepad"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-borderless table-hover table-responsive-lg text-center">
                    <tbody>
                        <?php
                        foreach ($details as $row)
                        {
                        ?>
                            <tr>
                                <td width="50%">Total Match</td>
                                <td width="50%"><?php echo $row['fights'] ?></td>
                            </tr>
                            <tr>
                                <td width="50%">Total Win</td>
                                <td width="50%"><?php echo $row['fights_win'] ?></td>
                            </tr>
                            <tr>
                                <td width="50%">Total Lose</td>
                                <td width="50%"><?php echo $row['fights_lost'] ?></td>
                            </tr>
                            <tr>
                                <td width="50%">Total Kills</td>
                                <td width="50%"><?php echo $row['kills_count'] ?></td>
                            </tr>
                            <tr>
                                <td width="50%">Total Deaths</td>
                                <td width="50%"><?php echo $row['deaths_count'] ?></td>
                            </tr>
                            <tr>
                                <td width="50%">Total Headshots</td>
                                <td width="50%"><?php echo $row['headshots_count'] ?></td>
                            </tr>
                            <tr>
                                <td width="50%">Total Escape</td>
                                <td width="50%"><?php echo $row['escapes'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary text-center p-3">
                <h4 class="mb-0 text-white">Equipped Items</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="fas fa-user-secret"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-borderless table-hover table-responsive-lg text-center">
                    <tbody>
                        <?php
                        foreach ($details as $row)
                        {
                            include 'assets/include.php';
                            
                            $sql_2 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['weapon_primary']."'");
                            $sql_2->execute();
                            $result_2 = $sql_2->fetch(PDO::FETCH_ASSOC);
                            
                            $sql_3 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['weapon_secondary']."'");
                            $sql_3->execute();
                            $result_3 = $sql_3->fetch(PDO::FETCH_ASSOC);
                            
                            $sql_4 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['weapon_melee']."'");
                            $sql_4->execute();
                            $result_4 = $sql_4->fetch(PDO::FETCH_ASSOC);
                            
                            $sql_5 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['weapon_thrown_normal']."'");
                            $sql_5->execute();
                            $result_5 = $sql_5->fetch(PDO::FETCH_ASSOC);

                            $sql_6 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['weapon_thrown_special']."'");
                            $sql_6->execute();
                            $result_6 = $sql_6->fetch(PDO::FETCH_ASSOC);

                            $sql_7 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['char_red']."'");
                            $sql_7->execute();
                            $result_7 = $sql_7->fetch(PDO::FETCH_ASSOC);

                            $sql_8 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['char_blue']."'");
                            $sql_8->execute();
                            $result_8 = $sql_8->fetch(PDO::FETCH_ASSOC);

                            $sql_9 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['char_helmet']."'");
                            $sql_9->execute();
                            $result_9 = $sql_9->fetch(PDO::FETCH_ASSOC);

                            $sql_10 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['char_dino']."'");
                            $sql_10->execute();
                            $result_10 = $sql_10->fetch(PDO::FETCH_ASSOC);

                            $sql_11 = $connec->prepare("SELECT * FROM shop WHERE item_id = '".$row['char_beret']."'");
                            $sql_11->execute();
                            $result_11 = $sql_11->fetch(PDO::FETCH_ASSOC);
                        ?>
                            <tr>
                                <td width="50%">Weapon</td>
                                <td width="50%">
                                    <?php
                                    if ($row['weapon_primary'] == "100003004") 
                                    {
                                        echo 'K-2';
                                    }
                                    if ($row['weapon_primary'] != "100003004") 
                                    {
                                        echo $result_2['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Secondary / Pistol</td>
                                <td>
                                    <?php
                                    if ($row['weapon_secondary'] == "601002003") 
                                    {
                                        echo 'K-5';
                                    }
                                    if ($row['weapon_secondary'] != "601002003") 
                                    {
                                        echo $result_3['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Melee / Knife</td>
                                <td>
                                    <?php
                                    if ($row['weapon_melee'] == "702001001") 
                                    {
                                        echo 'M-7';
                                    }
                                    if ($row['weapon_melee'] != "702001001") 
                                    {
                                        echo $result_4['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Explosive</td>
                                <td>
                                    <?php
                                    if ($row['weapon_thrown_normal'] == "803007001") 
                                    {
                                        echo 'K-400';
                                    }
                                    if ($row['weapon_thrown_normal'] != "803007001") 
                                    {
                                        echo $result_5['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Special</td>
                                <td>
                                <?php
                                if ($row['weapon_thrown_special'] == "904007002") 
                                {
                                    echo 'Smoke';
                                }
                                if ($row['weapon_thrown_special'] != "904007002") 
                                {
                                    echo $result_6['item_name'];
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Red Chara</td>
                                <td>
                                <?php
                                if ($row['char_red'] == "1001001005") 
                                {
                                    echo 'Red Bulls';
                                }
                                if ($row['char_red'] != "1001001005") 
                                {
                                    echo $result_7['item_name'];
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Blue Chara</td>
                                <td>
                                    <?php
                                    if ($row['char_blue'] == "1001002006")
                                    {
                                        echo 'Acid Pol';
                                    }
                                    if ($row['char_blue'] != "1001002006")
                                    {
                                        echo $result_8['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Helmet / Headgear</td>
                                <td>
                                    <?php
                                    if ($row['char_helmet'] == "1102003001")
                                    {
                                        echo 'Default Headger';
                                    }
                                    if ($row['char_helmet'] != "1102003001")
                                    {
                                        echo $result_9['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Dinosaurs</td>
                                <td>
                                    <?php
                                    if ($result_10) 
                                    {
                                        echo $result_10['item_name'];
                                    }
                                    else
                                    {
                                        echo 'Null';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Beret</td>
                                <td>
                                    <?php
                                    if ($row['char_beret'] == "0")
                                    {
                                        echo 'NULL';
                                    }
                                    if ($row['char_beret'] != "0")
                                    {
                                        echo $result_11['item_name'];
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary text-center p-3">
                <h4 class="mb-0 text-white">Economy Information</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="far fa-money-bill-alt"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-responsive-lg table-borderless table-hover text-center">
                    <tbody>
                        <?php
                        foreach ($details as $row) 
                        {
                        ?>
                            <tr>
                                <td>Points</td>
                                <td><?php echo number_format($row['gp'], '0',',','.'); ?></td>
                            </tr>
                            <tr>
                                <td>D-Cash</td>
                                <td><?php echo number_format($row['money'], '0',',','.'); ?></td>
                            </tr>
                            <tr>
                                <td>Webcoin</td>
                                <td>₵ <?php echo number_format($row['kuyraicoin'], '0',',','.'); ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-primary text-center p-3">
                <h4 class="mb-0 text-white">Network, Device, And Security Information</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="fas fa-desktop"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-responsive-lg table-borderless table-hover text-center">
                    <tbody>
                        <?php
                        foreach ($details as $row)
                        {
                        ?>
                            <tr>
                                <td>Last IP Address</td>
                                <td><?php echo $row['lastip'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $row['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Last MAC Address</td>
                                <td><?php echo $row['last_mac'] ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Hint Question</td>
                                <td>
                                    <?php
                                    if ($row['hint_question'] == null) 
                                    {
                                        echo 'Null';
                                    }
                                    if ($row['hint_question'] != null) 
                                    {
                                        echo $row['hint_question'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Hint Answer</td>
                                <td>
                                    <?php
                                    if ($row['hint_answer'] == null) 
                                    {
                                        echo 'Null';
                                    }
                                    if ($row['hint_answer'] != null) 
                                    {
                                        echo $row['hint_answer'];
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>