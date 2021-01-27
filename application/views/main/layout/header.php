<?php
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title ?></title>
        <meta name="keywords" content="Darkblow Pointblank, DarkblowPB, darkblowpb, pointblank private server, point blank private server" />
        <meta name="description" content="Lastest Private Server Development On 2020, FPS Genre & Old Style, Updated UI, New Feature, And Much More. So, What are you waiting for? Lets Play immediately and Get Your Rewards!. BRING YOUR NOSTALGIC MOMENT BACK!">
        <meta name="Author" content="Darkblow Studio 2020">
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/Darkblow-Logos.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- START: Styles -->
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <!-- FontAwesome -->
        <script defer src="<?php echo base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="<?php echo base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
        <!-- IonIcons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/ionicons/css/ionicons.min.css">
        <!-- Flickity -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/flickity/dist/flickity.min.css">
        <!-- Seiyria Bootstrap Slider -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
        <!-- Summernote -->
        <!-- GoodGames -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/css/goodgames.css">
        <!-- Custom Styles -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/css/custom.css">
        <!-- jQuery -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendors/datatables/datatables.css">
        <script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/jquery/dist/jquery.min.js"></script>
        <!-- END: Styles -->
    </head>
    <body>
        <header class="nk-header nk-header-opaque">
            
            
            <!-- START: Marquee -->
            <div class="nk-contacts-top">
                <div class="container">
                    <marquee style="font-weight: bold; font-style: italic; text-transform: uppercase;" class="text-main-5">
                        Lastest Private Server Development On 2020, FPS Genre & Old Style, Updated UI, New Feature, And Much More. So, What are you waiting for? Lets Play immediately and Get Your Rewards! <span class="text-main-1">BRING YOUR NOSTALGIC MOMENT BACK!</span>
                    </marquee>
                </div>
            </div>
            <!-- END: Marquee -->
            
            <!-- START: Navbar -->
            <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="<?php echo base_url('home') ?>" class="nk-nav-logo">
                        <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/weblogo.png" alt="GoodGames" width="199">
                    </a>
                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        <li class="<?php if($this->uri->segment(1)== "home"){echo 'active';}?>">
                            <a href="<?php echo base_url('home') ?>">
                                Home
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)== "player_rank"){echo 'active';} else if ($this->uri->segment(1)== "clan_rank"){echo 'active';}?> nk-drop-item">
                            <a href="javascript:void(0)">
                                Ranks
                            </a>
                            <ul class="dropdown">
                                <li class="<?php if($this->uri->segment(1)== "player_rank"){echo 'active';}?>">
                                    <a href="<?php echo base_url('player_rank') ?>">
                                        Player Ranks
                                    </a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)== "clan_rank"){echo 'active';}?>">
                                    <a href="<?php echo base_url('clan_rank') ?>">
                                        Clan Ranks
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if($this->uri->segment(1)== "download"){echo 'active';}?>">
                            <a href="<?php echo base_url('download') ?>">
                                Download
                            </a>
                        </li>
                        <li class="<?php if ($this->uri->segment(1) == "webshop"){echo 'active';}else if ($this->uri->segment(1) == "recharge") {echo 'active';}else if($this->uri->segment(2) == "details"){echo 'active';} ?> nk-drop-item">
                            <a href="javascript:void(0)">FEATURED</a>
                            <ul class="dropdown">
                                <li class="<?php if ($this->uri->segment(1) == "webshop"){echo 'active';} ?>">
                                    <a href="<?php echo base_url('webshop') ?>">Webshop</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        if (isset($_SESSION['uid']) == "") 
                        {   
                        ?>
                        <li class="<?php if($this->uri->segment(1)== "login"){echo 'active';} else if($this->uri->segment(1)== "register"){echo 'active';}?> nk-drop-item">
                            <a href="javascript:void(0)">Login</a>
                            <ul class="dropdown">
                                <li class="<?php if($this->uri->segment(1)== "login"){echo 'active';}?>">
                                    <a href="<?php echo base_url('login') ?>">Login</a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)== "register"){echo 'active';}?>">
                                    <a href="<?php echo base_url('register') ?>">Register</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li>
                            <a href="<?php echo base_url('report') ?>">Report</a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)== "player_panel"){echo 'active';}?> nk-drop-item">
                            <a href="javascript:void(0)">
                                User Area
                            </a>
                            <ul class="dropdown">
                                <li class="<?php if($this->uri->segment(2)== "home"){echo 'active';}?>">
                                    <a href="<?php echo base_url('player_panel/home') ?>">
                                        Player Panel
                                    </a>
                                </li>
                                <?php
                                if ($_SESSION['accesslevel'] >= 3 && $_SESSION['accesslevel'] <= 6) 
                                {
                                ?>
                                    <li>
                                        <a href="<?php echo base_url('moderatorpanel/login') ?>">
                                            Moderator Panel
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                                <li class="<?php if($this->uri->segment(2)== "redeemcode"){echo 'active';}?>">
                                    <a href="<?php echo base_url('player_panel/redeemcode') ?>">
                                        Redeem Code
                                    </a>
                                </li>
                                <li class="<?php if($this->uri->segment(2)== "voucher"){echo 'active';}?>">
                                    <a href="<?php echo base_url('player_panel/voucher') ?>">
                                        Voucher
                                    </a>
                                </li>
                                <li class="<?php if($this->uri->segment(2)== "inventory"){echo 'active';}?>">
                                    <a href="<?php echo base_url('player_panel/inventory') ?>">
                                        Inventory
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('home/logout') ?>">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php 
                        }
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
            <a href="<?php echo base_url('home') ?>" class="nk-nav-logo">
                <img src="<?php echo base_url() ?>assets/goodgames/assets/images/weblogo.png" alt="" width="120">
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