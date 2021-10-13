<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_38') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_39') ?></span></h3>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="nk-gap-3"></div>
                <?php echo form_open('', 'id="login_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_40') ?></label>
                        <input type="text" id="username" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_41') ?>" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_42') ?></label>
                        <input type="password" id="password" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_43') ?>">
                    </div>
                    <div class="nk-gap-3"></div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-primary" value="Login">
                    </div>
                    <div class="form-group text-center text-white">
                        OR
                    </div>
                    <div class="form-group text-center">
                        <a href="<?php echo base_url('register') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-success"><?php echo $this->lang->line('STR_DARKBLOW_44') ?></a>
                    </div>
                <?php echo form_close() ?>
                <script>
                    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                    var RETRY = 0;
                    $(document).ready(function(){
                        $('#login_form').on('submit', function(e){
                            e.preventDefault();

                            return DoLogin();
                        });
                    });
                    
                    function DoLogin()
                    {
                        if ($('#username').val() == '' || $('#username').val() == null){
                            ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                            document.getElementById('username').focus();
                        }
                        else if ($('#password').val() == '' || $('#password').val() == null){
                            ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                            document.getElementById('password').focus();
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
                                    if (RETRY >= 3){
                                        ShowToast(2000, 'error', 'Failed To Logged In.');
                                        SetAttribute('submit', 'submit', 'Login');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                    else{
                                        ShowToast(1000, 'info', 'Getting New Request Token...');
                                        $.ajax({
                                            url: '<?php echo base_url('api/getnewtoken') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString2 = JSON.stringify(data);
                                                var Result2 = JSON.parse(GetString2);

                                                if (Result2.response == 'true'){
                                                    CSRF_TOKEN = Result2.token;
                                                    
                                                    return DoLogin();
                                                }
                                                else{
                                                    window.location.reload();
                                                }
                                            },
                                            error: function(){
                                                SetAttribute('submit', 'submit', 'Login');
                                                ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_2') ?>');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>