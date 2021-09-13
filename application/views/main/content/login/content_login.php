<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Login</span> Area</span></h3>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="nk-gap-3"></div>
                <?php echo form_open('', 'id="login_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" id="username" class="form-control" placeholder="Enter Your Username" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter Your Password">
                    </div>
                    <div class="nk-gap-3"></div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-primary" value="Login">
                    </div>
                    <div class="form-group text-center text-white">
                        OR
                    </div>
                    <div class="form-group text-center">
                        <a href="<?php echo base_url('register') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-success">Register</a>
                    </div>
                <?php echo form_close() ?>
                <script>
                    CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                    $(document).ready(function(){
                        $('#login_form').on('submit', function(e){
                            e.preventDefault();

                            if ($('#username').val() == ''){
                                ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                                document.getElementById('username').focus();
                                return;
                            }
                            else if ($('#password').val() == ''){
                                ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                                document.getElementById('password').focus();
                                return;
                            }
                            else{
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?php echo base_url('login/do_login') ?>',
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
                                            SetAttribute('submit', 'submit', 'Login');

                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'success', Result.message);
                                            setTimeout(() => {
                                                window.location = '<?php echo base_url('player_panel') ?>';
                                            }, 2000);
                                            return;
                                        }
                                        else if (Result.response == 'false'){
                                            SetAttribute('submit', 'submit', 'Login');

                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'submit', 'Login');

                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                            return;
                                        }
                                    },
                                    error: function(){
                                        ShowToast(1000, 'info', 'Getting New Request Token...');
                                        $.ajax({
                                            url: '<?php echo base_url('login/do_gettoken') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {},
                                            success: function(data){
                                                var GetString2 = JSON.stringify(data);
                                                var Result2 = JSON.parse(GetString2);

                                                if (Result2.response == 'true'){
                                                    CSRF_TOKEN = Result2.token;
                                                    
                                                    DoLogin();
                                                }
                                                else{
                                                    window.location.reload();
                                                }
                                            },
                                            error: function(){
                                                window.location.reload();
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    });
                    
                    function DoLogin(){
                        $.ajax({
                            url: '<?php echo base_url('login/do_login') ?>',
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
                                    SetAttribute('submit', 'submit', 'Login');

                                    CSRF_TOKEN = Result.token;
                                    ShowToast(2000, 'success', Result.message);
                                    setTimeout(() => {
                                        window.location = '<?php echo base_url('player_panel') ?>';
                                    }, 2000);
                                    return;
                                }
                                else if (Result.response == 'false'){
                                    SetAttribute('submit', 'submit', 'Login');

                                    CSRF_TOKEN = Result.token;
                                    ShowToast(2000, 'error', Result.message);
                                    return;
                                }
                                else{
                                    SetAttribute('submit', 'submit', 'Login');

                                    CSRF_TOKEN = Result.token;
                                    ShowToast(2000, 'error', Result.message);
                                    return;
                                }
                            },
                            error: function(){
                                ShowToast(1000, 'info', 'Getting New Request Token...');
                                $.ajax({
                                    url: '<?php echo base_url('login/do_gettoken') ?>',
                                    type: 'GET',
                                    dataType: 'JSON',
                                    data: {},
                                    success: function(data){
                                        var GetString2 = JSON.stringify(data);
                                        var Result2 = JSON.parse(GetString2);

                                        if (Result2.response == 'true'){
                                            CSRF_TOKEN = Result2.token;
                                            
                                            DoLogin();
                                        }
                                        else{
                                            window.location.reload();
                                        }
                                    },
                                    error: function(){
                                        window.location.reload();
                                    }
                                });
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>