<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= $this->darkblowsettings->load()->meta_author ?>">
    <meta name="description" content="<?= $this->darkblowsettings->load()->meta_description ?>">
    <meta name="keywords" content="<?= $this->darkblowsettings->load()->meta_keywords ?>" />
    <title>
        <?= $this->darkblowsettings->load()->project_name . ' || ' . $title ?>
    </title>
    <!-- START: Styles -->

    <!-- Icon -->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/goodgames/assets/images/settings/<?= $this->darkblowsettings->load()->project_icon ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="<?= base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="<?= base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <!-- IonIcons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendor/ionicons/css/ionicons.min.css">
    <!-- GoodGames -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/css/goodgames.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/css/custom.css">
    <!-- END: Styles -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <div class="nk-main">
        <div class="nk-fullscreen-block">
            <div class="nk-fullscreen-block-top">
                <div class="text-center">
                    <div class="nk-gap-4"></div>
                    <a href="javascript:void(0)"><img src="<?= base_url() ?>/assets/goodgames/assets/images/settings/<?= $this->darkblowsettings->load()->project_logo ?>" alt="<?= $this->darkblowsettings->load()->project_name ?>"></a>
                    <div class="nk-gap-2"></div>
                    <div class="nk-gap-2"></div>
                    <div class="nk-gap-2"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-middle">
                <div class="container text-center">
                    <h1 class="h3"><?= $this->lang->line('STR_DARKBLOW_8') ?></h1>
                    <div class="nk-gap-2"></div>
                    <div class="nk-countdown nk-countdown-center" data-end="2021-8-25 00:00:00" data-timezone="UTC"></div>
                    <div class="nk-gap-2"></div>

                    <div class="nk-gap-2"></div>
                    <div class="nk-gap-3"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-bottom">
                <div class="nk-gap-2"></div>
                <ul class="nk-social-links-2 nk-social-links-center">
                    <li><a class="nk-social-facebook" href="<?= $this->darkblowsettings->load()->facebook_embed_link ?>" target="_blank"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-instagram" href="<?= $this->darkblowsettings->load()->instagram_embed_link ?>" target="_blank"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-youtube" href="<?= $this->darkblowsettings->load()->youtube_embed_link ?>" target="_blank"><span class="fab fa-youtube"></span></a></li>
                </ul>
                <div class="nk-gap-2"></div>
            </div>
        </div>
    </div>

    <!-- START: Scripts -->
    <!-- Popper -->
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Jquery Countdown + Moment -->
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
    <!-- GoodGames -->
    <script src="<?= base_url() ?>assets/goodgames/assets/js/goodgames.min.js"></script>
    <script src="<?= base_url() ?>assets/goodgames/assets/js/goodgames-init.js"></script>
    <!-- END: Scripts -->
</body>

</html>