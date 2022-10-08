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
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/goodgames/assets/images/settings/<?= $this->darkblowsettings->load()->project_icon ?>">

    <!-- START: Styles -->

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
    <!-- END: Styles -->
</head>

<body>
    <div class="nk-main">
        <div class="nk-fullscreen-block">
            <div class="nk-fullscreen-block-top">
                <div class="text-center">
                    <div class="nk-gap-4"></div>
                    <img src="<?= base_url() ?>/assets/goodgames/assets/images/settings/<?= $this->darkblowsettings->load()->project_logo ?>" alt="<?= $this->darkblowsettings->load()->project_name ?>">
                    <div class="nk-gap-2"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-middle">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            <h1 class="h2"><span class="text-main-1">
                                    <?= $this->lang->line('STR_DARKBLOW_0') ?>
                                </span>
                                <?= $this->lang->line('STR_DARKBLOW_1') ?>
                            </h1>
                            <div class="text-white">
                                <?= $this->lang->line('STR_DARKBLOW_0') ?>, <?= $this->lang->line('STR_DARKBLOW_1') ?>, <?= $this->lang->line('STR_DARKBLOW_2') ?>
                            </div>
                            <div class="nk-gap-2"></div>
                        </div>
                    </div>
                    <div class="nk-gap-3"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-bottom">
                <div class="nk-gap-2"></div>
                <ul class="nk-social-links-2 nk-social-links-center">
                    <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
                <div class="nk-gap-2"></div>
            </div>
        </div>
    </div>
    <!-- Hammer.js -->
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/hammerjs/hammer.min.js"></script>
    <!-- END: Scripts -->
</body>

</html>