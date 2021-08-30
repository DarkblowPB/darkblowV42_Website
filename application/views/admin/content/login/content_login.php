<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->getsettings->Get2()->project_name.' || '.$title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendors/sweetalert2/theme-dark/dark.css">
    <script src="<?php echo base_url() ?>assets/goodgames/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
    <script>
    function ShowToast(timer, type, title){
        Swal.fire({
            toast: true,
            timer: timer,
            position: 'top',
            timerProgressBar: true,
            icon: type,
            title: title,
            showConfirmButton: false
        });
    }
    </script>
</head>
<body class="dark-mode hold-transition login-page">
    <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="javascript:void(0)" class="h1"><b>DarkblowPB</b> Admin</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg text-uppercase text-bold text-primary">Are You Admin? Prove It!</p>
            <?php echo form_open('', 'id="login_form" autocomplete="off"') ?>
                <div class="input-group mb-3">
                    <input type="text" id="username" class="form-control" placeholder="Enter Your Username">
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
                    <!-- /.col -->
                    <div class="col-4">
                        <input type="submit" id="submit" class="btn btn-outline-primary btn-block text-white" value="Login">
                    </div>
                    <!-- /.col -->
                </div>
            <?php echo form_close() ?>
            <script>
                var CSRF_TOKEN = '';
                $(document).ready(function(){
                    $('#login_form').on('submit', function(e){
                        e.preventDefault();

                        if ($('#username').val() == ""){
                            ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                            return;
                        }
                        else if ($('#password').val() == ""){
                            ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                            return;
                        }
                        else{
                            if (CSRF_TOKEN == ''){
                                CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                            }

                            SetButton('false');

                            $.ajax({
                                url: '<?php echo base_url('adm/login/do_login') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                    'username' : $('#username').val(),
                                    'password' : $('#password').val()
                                },
                                success: function(data){
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true'){
                                        SetButton('true');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'success', Result.message);
                                        setTimeout(() => {
                                            window.location = '<?php echo base_url('adm/dashboard') ?>';
                                        }, 2000);
                                        return;
                                    }
                                    else if (Result.response == 'false'){
                                        SetButton('true');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    }
                                    else{
                                        SetButton('true');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    }
                                },
                                error: function(data){
                                    SetButton('true');
                                    ShowToast(2000, 'error', data.responseText);
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                    return;
                                }
                            });
                        }
                    });
                });

                function SetButton(param)
                {
                    var Q = document.getElementById('submit');
                    if (param == 'false'){
                        Q.setAttribute('type', 'button');
                        Q.setAttribute('value', 'Processing...');
                    }
                    if (param == 'true'){
                        Q.setAttribute('type', 'submit');
                        Q.setAttribute('value', 'Login');
                    }
                }
            </script>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
