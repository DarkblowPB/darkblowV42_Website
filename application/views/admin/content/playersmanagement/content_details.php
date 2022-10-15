<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2" class="text-bold text-uppercase">General Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Username</td>
                                <td><?= $player->login ?></td>
                            </tr>
                            <tr>
                                <td>Player ID</td>
                                <td><?= $player->player_id ?></td>
                            </tr>
                            <tr>
                                <td>Nickname</td>
                                <td><?= $player->player_name ?></td>
                            </tr>
                            <tr>
                                <td>Name Color</td>
                                <td><?= $player->name_color != 0 ? 'Custom' : 'Default' ?></td>
                            </tr>
                            <tr>
                                <td>Rank</td>
                                <td><img src="<?= base_url() ?>assets/goodgames/assets/images/img_rank/<?= $player->rank ?>.gif" class="img img-fluid" alt="<?= $player->rank ?>"></td>
                            </tr>
                            <tr>
                                <td>PC Cafe</td>
                                <td>
                                    <?php
                                    switch ($player->pc_cafe) {
                                        case '0': {
                                                echo '<button class="btn btn-outline-secondary btn-sm text-white">Default Player</button>';
                                                break;
                                            }
                                        case '1': {
                                                echo '<button class="btn btn-outline-primary btn-sm text-white">VIP</button>';
                                                break;
                                            }
                                        case '2': {
                                                echo '<button class="btn btn-outline-success btn-sm text-white">VVIP</button>';
                                                break;
                                            }
                                        case '5': {
                                                echo '<button class="btn btn-outline-warning btn-sm text-white">DEV & GM</button>';
                                                break;
                                            }

                                        default: {
                                                echo '<button class="btn btn-outline-danger btn-sm text-white">INVALID</button>';
                                                break;
                                            }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Access Level</td>
                                <td>
                                    <?php
                                    switch ($player->access_level) {
                                        case '0': {
                                                echo '<button id="access_level_button" class="btn btn-outline-secondary btn-sm text-white">Default Player</button>';
                                                break;
                                            }
                                        case '1': {
                                                echo '<button id="access_level_button" class="btn btn-outline-primary btn-sm text-white">VIP</button>';
                                                break;
                                            }
                                        case '2': {
                                                echo '<button id="access_level_button" class="btn btn-outline-primary btn-sm text-white">Streamer</button>';
                                                break;
                                            }
                                        case '3': {
                                                echo '<button id="access_level_button" class="btn btn-outline-success btn-sm text-white">Moderator</button>';
                                                break;
                                            }
                                        case '4': {
                                                echo '<button id="access_level_button" class="btn btn-outline-success btn-sm text-white">Game Master</button>';
                                                break;
                                            }
                                        case '5': {
                                                echo '<button id="access_level_button" class="btn btn-outline-warning btn-sm text-white">Administrator</button>';
                                                break;
                                            }
                                        case '6': {
                                                echo '<button id="access_level_button" class="btn btn-outline-warning btn-sm text-white">Developer</button>';
                                                break;
                                            }

                                        default: {
                                                echo '<button id="access_level_button" class="btn btn-outline-danger btn-sm text-white">Banned</button>';
                                                break;
                                            }
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Online</td>
                                <td>
                                    <?= $player->online == 't' ? '<span class="text-success text-bold">ONLINE</span>' : '<span class="text-danger text-bold">OFFLINE</span>' ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2" class="text-bold text-uppercase">Battle Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Match</td>
                                <td>
                                    <?= number_format($player->fights, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Wins</td>
                                <td>
                                    <?= number_format($player->fights_win, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Draws</td>
                                <td>
                                    <?= number_format($player->fights_draw, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Loses</td>
                                <td>
                                    <?= number_format($player->fights_lost, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Kills</td>
                                <td>
                                    <?= number_format($player->kills_count, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Deaths</td>
                                <td>
                                    <?= number_format($player->deaths_count, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Headshots</td>
                                <td>
                                    <?= number_format($player->headshots_count, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Escapes</td>
                                <td>
                                    <?= number_format($player->escapes, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2" class="text-bold text-uppercase">Equipment Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Primary Weapon</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->weapon_primary) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Secondary Weapon</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->weapon_secondary) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Melee Weapon</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->weapon_melee) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Grenade</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->weapon_thrown_normal) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Special</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->weapon_thrown_special) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Red Chara</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->char_red) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Blue Chara</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->char_blue) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Helmet</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->char_helmet) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Dinosaurs</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->char_dino) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Beret</td>
                                <td>
                                    <?= $this->darkblowlib->GetItemName($player->char_beret) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2" class="text-bold text-uppercase">Economy Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Points</td>
                                <td>
                                    <?= number_format($player->gp, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>DR-Cash</td>
                                <td>
                                    <?= number_format($player->money, '0', ',', '.'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Webcoin</td>
                                <td>
                                    <?= number_format($player->kuyraicoin, '0', ',', '.'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2" class="text-bold text-uppercase">Security Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td><?= $player->email ?> (<?= $player->email_verification == 0 ? '<span class="text-danger text-bold">Not Verified</span>' : '<span class="text-success text-bold">Verified</span>' ?>)</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>SECRET</td>
                            </tr>
                            <tr>
                                <td>Hint Question</td>
                                <td><?= character_limiter($player->hint_question, 30) ?></td>
                            </tr>
                            <tr>
                                <td>Hint Answer</td>
                                <td>SECRET</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2" class="text-bold text-uppercase">History Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Last Ip Address</td>
                                <td><?= $player->lastip ?></td>
                            </tr>
                            <tr>
                                <td>Last Rank Up</td>
                                <td>
                                    <?php $player->last_rank_up == 1010000 ? 'NULL' : '20' . str_split($lastRankUp, 2)[0] . '-' . str_split($lastRankUp, 2)[1] . '-' . str_split($lastRankUp, 2)[2] . ' ' . str_split($lastRankUp, 2)[3] . ':' . str_split($lastRankUp, 2)[4] . ':00' ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Last Mac Address</td>
                                <td class="text-uppercase"><?= $player->last_mac ?></td>
                            </tr>
                            <tr>
                                <td>Date Registered</td>
                                <td><?= $player->date_registered ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>