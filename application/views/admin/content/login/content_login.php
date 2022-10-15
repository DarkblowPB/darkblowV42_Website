<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->darkblowsettings->load()->project_name . ' || ' . $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendors/sweetalert2/theme-dark/dark.css">
    <script src="<?= base_url() ?>assets/goodgames/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
</head>

<body class="dark-mode hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="javascript:void(0)" class="h1"><b><?= $this->darkblowsettings->load()->project_name ?></b> Admin Panel</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg text-uppercase text-bold text-primary">
                    <marquee>Are You Admin? Prove It!</marquee>
                </p>
                <?= form_open('', 'id="login_form" autocomplete="off"') ?>
                <div class="input-group mb-3">
                    <input type="text" id="username" class="form-control" placeholder="Enter Your Username" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="password" class="form-control" placeholder="Enter Your Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" disabled>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="submit" id="submit" class="btn btn-outline-primary btn-block text-white" value="Login">
                    </div>
                </div>
                <?= form_close() ?>
                <script>
                    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                    $(document).ready(function() {
                        $('#login_form').on('submit', function(e) {
                            e.preventDefault();

                            return Do_Login();
                        });
                    });

                    function Do_Login() {
                        if ($('#username').val() == "") {
                            ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                            return;
                        } else if ($('#password').val() == "") {
                            ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                            return;
                        } else {

                            SetAttribute('submit', 'submit', 'Processing...');

                            $.ajax({
                                url: '<?= base_url('adm/login/do_login') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'username': $('#username').val(),
                                    'password': $('#password').val()
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    SetAttribute('submit', 'submit', 'Login');
                                    ShowToast(2000, Result.response, Result.message);
                                    CSRF_TOKEN = Result.token;

                                    if (Result.response == 'success') {
                                        setTimeout(() => {
                                            window.location = '<?= base_url('adm/dashboard') ?>';
                                        }, 2000);
                                    }
                                },
                                error: function() {
                                    SetAttribute('submit', 'submit', 'Login');
                                    ShowToast(2000, 'error', 'Failed To Login.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/goodgames/assets/js/custom.js"></script>
</body>

</html>