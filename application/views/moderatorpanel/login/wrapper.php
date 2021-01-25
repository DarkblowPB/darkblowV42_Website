<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dark-admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dark-admin/assets/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dark-admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dark-admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }
    .background-image
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        -webkit-user-select: none;
           -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        z-index: -1;
    }
    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card bg-dark">
            <div class="card-header text-center bg-dark mb-0">
                <a href="#">
                    <img class="logo-img" src="<?php echo base_url() ?>assets/goodgames/assets/images/weblogo.png" alt="DarkblowPB Logo">
                </a>
                <span class="splash-description text-info mt-3">
                    Selamat Datang Di Moderator Panel DarkblowPB<br>
                    Halaman Ini Bersifat Rahasia Dan Tidak Dapat Terakses!
                </span>
            </div>
            <?php
            if ($this->session->flashdata('Failed')) 
            {
                echo '<div class="card-body">';
                echo '<div class="alert alert-danger text-center" role="alert">';
                echo $this->session->flashdata('Failed');
                echo '</div>';
                echo '</div>';
            }
            ?>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url() ?>moderatorpanel/login" class="form-horizontal">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter Your Username" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Your Password">
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block"><i class="fas fa-sign-in-alt mr-2"></i>MASUK</button>
                </form>
            </div>
            <div class="card-body border-top text-info text-center">
                <marquee class="card-text font-12 mb-0 mt-1">
                    # New Moderation System 
                    &nbsp; # New Updated : Complex Player Details Information 
                    &nbsp; # All Information Included 
                </marquee>
            </div>
            <div class="card-footer bg-dark">
                <p class="card-text text-white text-center font-12">
                    Copyright &copy; <a href="https://www.facebook.com/Ultimate.Defacer" class="btn-link" target="_blank">[DEV] EyeTracker</a> <?php echo date('Y') ?>
                </p>
            </div>
        </div>
        <img src="<?php echo base_url() ?>assets/dark-admin/assets/images/bg-main.jpg" class="background-image" alt="">
    </div>
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url() ?>assets/dark-admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dark-admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>