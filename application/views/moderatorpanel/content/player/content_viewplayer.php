
<div class="row">
    <div class="col-lg-4">
        <div class="card">
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
                            <td width="50%"><?php echo $details->login ?></td>
                        </tr>
                        <tr>
                            <td>Player ID</td>
                            <td><?php echo $details->player_id ?></td>
                        </tr>
                        <tr>
                            <td>Player Name</td>
                            <td><?php echo $details->player_name ?></td>
                        </tr>
                        <tr>
                            <td>Name Color</td>
                            <td>
                                <?php
                                if ($details->name_color == "0")
                                {
                                    echo '<span class="text-danger">NOT USED</span>';
                                }
                                if ($details->name_color != "0")
                                {
                                    echo '<span class="text-success">USED</span>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Clan</td>
                            <td>
                                <?php
                                if ($details->clan_id == 0)
                                {
                                    echo 'NULL';
                                }
                                if ($details->clan_id != 0)
                                {
                                    echo "";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Rank</td>
                            <td><img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_rank/<?php echo $details->rank ?>.gif" alt="<?php echo $details->rank ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                        <tr>
                            <td width="50%">Total Match</td>
                            <td width="50%"><?php echo number_format($details->fights, '0',',','.') ?></td>
                        </tr>
                        <tr>
                            <td width="50%">Total Win</td>
                            <td width="50%"><?php echo number_format($details->fights_win, '0',',','.') ?></td>
                        </tr>
                        <tr>
                            <td width="50%">Total Lose</td>
                            <td width="50%"><?php echo number_format($details->fights_lost, '0',',','.') ?></td>
                        </tr>
                        <tr>
                            <td width="50%">Total Kills</td>
                            <td width="50%"><?php echo number_format($details->kills_count, '0',',','.') ?></td>
                        </tr>
                        <tr>
                            <td width="50%">Total Deaths</td>
                            <td width="50%"><?php echo number_format($details->deaths_count, '0',',','.') ?></td>
                        </tr>
                        <tr>
                            <td width="50%">Total Headshots</td>
                            <td width="50%"><?php echo number_format($details->headshots_count, '0',',','.') ?></td>
                        </tr>
                        <tr>
                            <td width="50%">Total Escape</td>
                            <td width="50%"><?php echo number_format($details->escapes, '0',',','.') ?></td>
                        </tr>
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
                        <tr>
                            <td width="50%">Weapon</td>
                            <td width="50%">
                                <?php
                                echo $this->adminplayer->getname_weapon($details->weapon_primary);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Secondary / Pistol</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->weapon_secondary);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Melee / Knife</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->weapon_melee);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Explosive</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->weapon_thrown_normal);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Special</td>
                            <td>
                            <?php
                            echo $this->adminplayer->getname_weapon($details->weapon_thrown_special);
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Red Chara</td>
                            <td>
                            <?php
                            echo $this->adminplayer->getname_weapon($details->char_red);
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Blue Chara</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->char_blue);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Helmet / Headgear</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->char_helmet);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Dinosaurs</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->char_dino);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Beret</td>
                            <td>
                                <?php
                                echo $this->adminplayer->getname_weapon($details->char_beret);
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
                <h4 class="mb-0 text-white">Economy Information</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="mb-1"><i class="far fa-money-bill-alt"></i></h1>
            </div>
            <div class="card-body border-top">
                <table class="table table-responsive-lg table-borderless table-hover text-center">
                    <tbody>
                        <tr>
                            <td>Points</td>
                            <td><?php echo number_format($details->gp, '0',',','.'); ?></td>
                        </tr>
                        <tr>
                            <td>D-Cash</td>
                            <td><?php echo number_format($details->money, '0',',','.'); ?></td>
                        </tr>
                        <tr>
                            <td>Webcoin</td>
                            <td>₵ <?php echo number_format($details->kuyraicoin, '0',',','.'); ?></td>
                        </tr>
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
                        <tr>
                            <td>Last IP Address</td>
                            <td><?php echo $details->lastip ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $details->email ?></td>
                        </tr>
                        <tr>
                            <td>Last MAC Address</td>
                            <td><?php echo $details->last_mac ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Hint Question</td>
                            <td>
                                <?php
                                if ($details->hint_question == null) 
                                {
                                    echo 'Null';
                                }
                                if ($details->hint_question != null) 
                                {
                                    echo $details->hint_question;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Hint Answer</td>
                            <td>
                                <?php
                                if ($details->hint_answer == null) 
                                {
                                    echo 'Null';
                                }
                                if ($details->hint_answer != null) 
                                {
                                    echo $details->hint_answer;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>