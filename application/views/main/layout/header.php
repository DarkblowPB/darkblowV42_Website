<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= $this->getsettings->Get()->meta_author ?>">
    <meta name="description" content="<?= $this->getsettings->Get()->meta_description ?>">
    <meta name="keywords" content="<?= $this->getsettings->Get()->meta_keywords ?>" />
    <title>
        <?= $this->getsettings->Get()->project_name . ' || ' . $title ?>
    </title>
    <!-- START: Styles -->

    <!-- Icon -->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/goodgames/assets/images/settings/<?= $this->getsettings->Get()->project_icon ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="<?= base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="<?= base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendor/ionicons/css/ionicons.min.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendor/flickity/dist/flickity.min.css">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <!-- GoodGames -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/css/goodgames.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/css/custom.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendors/sweetalert2/theme-dark/dark.css">
    <script src="<?= base_url() ?>assets/goodgames/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- dataTable -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendors/datatables/datatables.css">
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/jquery/dist/jquery.min.js"></script>
    <!-- END: Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/css/ldbtn.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/css/loading.min.css">
    <noscript>
        <?= $this->lang->line('STR_WARNING_23') ?>
    </noscript>
</head>

<body>
    <header class="nk-header nk-header-opaque">
        <!-- START: Marquee -->
        <div class="nk-contacts-top">
            <marquee style="font-weight: 900; text-transform: uppercase;" class="text-main-1">
                <span>
                    <?= $this->getsettings->Get()->running_text ?>
                </span>
            </marquee>
        </div>
        <!-- END: Marquee -->
        <!-- START: Navbar -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="<?= base_url('home') ?>" class="nk-nav-logo">
                        <img src="<?= base_url() ?>/assets/goodgames/assets/images/settings/<?= $this->getsettings->Get()->project_logo ?>" alt="<?= $this->getsettings->Get()->project_name ?>" width="199">
                    </a>
                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        <li class="<?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url('home') ?>">
                                <?= $this->lang->line('STR_MENU_1') ?>
                            </a>
                        </li>
                        <li class="nk-drop-item <?php if ($this->uri->segment(1) == "player_rank" || $this->uri->segment(1) == "clan_rank") {
                                                    echo 'active';
                                                } ?>">
                            <a href="javascript:void(0)">
                                <?= $this->lang->line('STR_MENU_2') ?>
                            </a>
                            <ul class="dropdown">
                                <li class="<?php if ($this->uri->segment(1) == 'player_rank') {
                                                echo 'active';
                                            } ?>">
                                    <a href="<?= base_url('player_rank') ?>">
                                        <?= $this->lang->line('STR_MENU_7') ?>
                                    </a>
                                </li>
                                <li class="<?php if ($this->uri->segment(1) == 'clan_rank') {
                                                echo 'active';
                                            } ?>">
                                    <a href="<?= base_url('clan_rank') ?>">
                                        <?= $this->lang->line('STR_MENU_8') ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if ($this->uri->segment(1) == 'download') {
                                        echo 'active';
                                    } ?>">
                            <a href="<?= base_url('download') ?>">
                                <?= $this->lang->line('STR_MENU_3') ?>
                            </a>
                        </li>
                        <?php if ($this->getsettings->Get()->webshop != 0 && $this->getsettings->Get()->trade_market != 0) : ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "webshop" || $this->uri->segment(1) == "trade") {
                                                        echo 'active';
                                                    } ?>">
                                <a href="javascript:void(0)">
                                    <?= $this->lang->line('STR_MENU_4') ?>
                                </a>
                                <ul class="dropdown">
                                    <?php if ($this->getsettings->Get()->webshop == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "webshop") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('webshop') ?>">
                                                <?= $this->lang->line('STR_MENU_9') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->trade_market == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "trade") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('trade') ?>">
                                                <?= $this->lang->line('STR_MENU_10') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->getsettings->Get()->webshop == 1 && $this->getsettings->Get()->trade_market == 0) : ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "webshop" || $this->uri->segment(1) == "trade") {
                                                        echo 'active';
                                                    } ?>">
                                <a href="javascript:void(0)">
                                    <?= $this->lang->line('STR_MENU_4') ?>
                                </a>
                                <ul class="dropdown">
                                    <?php if ($this->getsettings->Get()->webshop == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "webshop") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('webshop') ?>">
                                                <?= $this->lang->line('STR_MENU_9') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->trade_market == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "trade") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('trade') ?>">
                                                <?= $this->lang->line('STR_MENU_10') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->getsettings->Get()->webshop == 0 && $this->getsettings->Get()->trade_market == 1) : ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "webshop" || $this->uri->segment(1) == "trade") {
                                                        echo 'active';
                                                    } ?>">
                                <a href="javascript:void(0)">
                                    <?= $this->lang->line('STR_MENU_4') ?>
                                </a>
                                <ul class="dropdown">
                                    <?php if ($this->getsettings->Get()->webshop == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "webshop") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('webshop') ?>">
                                                <?= $this->lang->line('STR_MENU_9') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->trade_market == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "trade") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('trade') ?>">
                                                <?= $this->lang->line('STR_MENU_10') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php
                        if (empty($this->session->userdata('uid'))) :
                        ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "login" || $this->uri->segment(1) == "register" || $this->uri->segment(1) == "forgotpassword") {
                                                        echo 'active';
                                                    } ?>">
                                <a href="javascript:void(0)">
                                    <?= $this->lang->line('STR_MENU_5') ?>
                                </a>
                                <ul class="dropdown">
                                    <li class="<?php if ($this->uri->segment(1) == "login") {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?= base_url('login') ?>">
                                            <?= $this->lang->line('STR_MENU_11') ?>
                                        </a>
                                    </li>
                                    <li class="<?php if ($this->uri->segment(1) == "register") {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?= base_url('register') ?>">
                                            <?= $this->lang->line('STR_MENU_12') ?>
                                        </a>
                                    </li>
                                    <?php if ($this->getsettings->Get()->forgot_password == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "forgotpassword") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('forgotpassword') ?>">
                                                <?= $this->lang->line('STR_MENU_13') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        <?php
                        endif;
                        if (!empty($this->session->userdata('uid'))) :
                        ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "player_panel" || $this->uri->segment(1) == "event") {
                                                        echo 'active';
                                                    } ?>">
                                <a href="javascript:void(0)">
                                    <?= $this->lang->line('STR_MENU_6') ?>
                                </a>
                                <ul class="dropdown">
                                    <li class="<?php if ($this->uri->segment(2) == "home") {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?= base_url('player_panel/home') ?>">
                                            <?= $this->lang->line('STR_MENU_14') ?>
                                        </a>
                                    </li>
                                    <?php if ($this->session->userdata('access_level') >= 3 && $this->session->userdata('access_level') <= 6) : ?>
                                        <li>
                                            <a href="javascript:void(0)" onclick="AutomaticLogin()">
                                                <?= $this->lang->line('STR_MENU_15') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->attendance == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(2) == "attendance") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('event/attendance') ?>">
                                                <?= $this->lang->line('STR_MENU_21') ?> <span class="text-main-3">[NEW]</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->exchange_ticket == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(2) == "exchange_ticket") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('event/exchange_ticket') ?>">
                                                <?= $this->lang->line('STR_MENU_17') ?> <span class="text-main-3">[NEW]</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->redeemcode == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(2) == "redeemcode") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('player_panel/redeemcode') ?>">
                                                <?= $this->lang->line('STR_MENU_16') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get()->voucher == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(2) == "voucher") {
                                                        echo 'active';
                                                    } ?>">
                                            <a href="<?= base_url('player_panel/voucher') ?>">
                                                <?= $this->lang->line('STR_MENU_18') ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="<?php if ($this->uri->segment(2) == "inventory") {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?= base_url('player_panel/inventory') ?>">
                                            <?= $this->lang->line('STR_MENU_19') ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="Logout()">
                                            <?= $this->lang->line('STR_MENU_20') ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php
                        endif;
                        ?>
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon d-lg-none">
                            <a href="javascript:void(0)" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->
    </header>
    <!-- START: Navbar Mobile -->
    <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
        <div class="nano">
            <div class="nano-content">
                <a href="<?= base_url('home') ?>" class="nk-nav-logo">
                    <img src="<?= base_url() ?>/assets/goodgames/assets/images/settings/<?= $this->getsettings->Get()->project_logo ?>" alt="" width="120">
                </a>
                <div class="nk-navbar-mobile-content">
                    <ul class="nk-nav">
                        <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Navbar Mobile -->