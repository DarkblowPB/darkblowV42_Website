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
    <!-- END: Styles -->
</head>

<body>
    <div class="nk-main">
        <div class="nk-fullscreen-block">
            <div class="nk-fullscreen-block-top">
                <div class="text-center">
                    <div class="nk-gap-4"></div>
                    <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/assets/goodgames/assets/images/settings/<?= $this->darkblowsettings->load()->project_logo ?>" alt="<?= $this->darkblowsettings->load()->project_name ?>"></a>
                    <div class="nk-gap-2"></div>
                </div>
            </div>
            <div class="nk-fullscreen-block-middle">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                            <h1 class="text-main-1" style="font-size: 150px;">404</h1>
                            <div class="nk-gap"></div>
                            <h2 class="h4">
                                <?= $this->lang->line('STR_DARKBLOW_13') ?>
                            </h2>
                            <div>
                                <?= $this->lang->line('STR_DARKBLOW_14') ?> <br>
                                <?= $this->lang->line('STR_DARKBLOW_15') ?>
                            </div>
                            <div class="nk-gap-3"></div>
                            <a href="<?= base_url('home') ?>" class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <?= $this->lang->line('STR_DARKBLOW_16') ?>
                            </a>
                        </div>
                    </div>
                    <div class="nk-gap-3"></div>
                </div>
            </div>
        </div>
        <script src="<?= base_url() ?>/assets/goodgames/assets/vendor/hammerjs/hammer.min.js"></script>
</body>

</html>