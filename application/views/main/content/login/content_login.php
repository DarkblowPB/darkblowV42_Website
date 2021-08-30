<div class="nk-main">
        <div class="nk-gap-2"></div>
        <div class="container">
                <div class="row vertical-gap">
                        <div class="col-lg-12">
                                <h3 class="nk-decorated-h-2"><span class="text-main-1">Login <span class="text-white">Area</span></span></h3>
                                <div class="nk-gap-3"></div>
                                <div class="container">
                                        <div class="col-lg-6 offset-lg-3">
                                                <?php
                                                echo form_open('','id="login_form" autocomplete="off"');
                                                ?>
                                                <div class="form-group">
                                                        <label for="Username">Username</label>
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Username" minlength="4" maxlength="16" autofocus>
                                                </div>
                                                <div class="form-group">
                                                        <label for="Password">Password</label>
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" minlength="4" maxlength="16">
                                                </div>
                                                <div class="nk-gap"></div>
                                                <div class="form-group text-center">
                                                        <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary nk-btn-md" value="Login">
                                                </div>
                                                <?php echo form_close(); ?>
                                                <div class="form-group text-center">
                                                        OR
                                                </div>
                                                <div class="form-group text-center">
                                                        <a href="<?php echo base_url('register') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success nk-btn-md">Register</a>
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
                                                                        }
                                                                        else{
                                                                                if (CSRF_TOKEN == ''){
                                                                                        CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                                                                }

                                                                                SetSubmitButton('false');

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
                                                                                                        SetSubmitButton('true');
                                                                                                        CSRF_TOKEN = Result.token;
                                                                                                        ShowToast(2000, 'success', Result.message);
                                                                                                        setTimeout(() => {
                                                                                                                window.location = '<?php echo base_url('player_panel/home') ?>';
                                                                                                        }, 2000);
                                                                                                }
                                                                                                else if (Result.response == 'false'){
                                                                                                        SetSubmitButton('true');
                                                                                                        CSRF_TOKEN = Result.token;
                                                                                                        ShowToast(2000, 'error', Result.message);
                                                                                                        return;
                                                                                                }
                                                                                                else{
                                                                                                        SetSubmitButton('true');
                                                                                                        CSRF_TOKEN = Result.token;
                                                                                                        ShowToast(2000, 'error', Result.message);
                                                                                                        return;
                                                                                                }
                                                                                        },
                                                                                        error: function(data){
                                                                                                SetSubmitButton('true');
                                                                                                ShowToast(2000, 'error', data.responseText);
                                                                                                setTimeout(() => {
                                                                                                        window.location.reload();
                                                                                                }, 2000);
                                                                                        }
                                                                                });
                                                                        }
                                                                });
                                                        });

                                                        function SetSubmitButton(param)
                                                        {
                                                                var GetSubmitButton = document.getElementById('submit');
                                                                if (param == 'true'){
                                                                        GetSubmitButton.setAttribute('type', 'submit');
                                                                        GetSubmitButton.setAttribute('value', 'Login');
                                                                }
                                                                if (param == 'false'){
                                                                        GetSubmitButton.setAttribute('type', 'button');
                                                                        GetSubmitButton.setAttribute('value', 'Processing...');
                                                                }
                                                        }
                                                </script>
                                        </div>
                                </div>
                                <div class="nk-gap-3"></div>
                        </div>
                </div>
        </div>
</div>