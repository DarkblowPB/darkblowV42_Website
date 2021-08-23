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
                                                        <input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary nk-btn-block" value="Login">
                                                </div>
                                                <?php echo form_close(); ?>
                                                <div class="form-group text-center">
                                                        OR
                                                </div>
                                                <div class="form-group text-center">
                                                        <a href="<?php echo base_url('register') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success nk-btn-block"><span class="fa fa-user-plus"></span> &nbsp;Register</a>
                                                </div>
                                                <?php echo form_close() ?>
                                                <script>
                                                        var GetMessageElement = document.getElementById('msg');
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
                                                                                $.ajax({
                                                                                        url: '<?php echo base_url('login/do_login') ?>',
                                                                                        type: 'POST',
                                                                                        data: {
                                                                                                '<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
                                                                                                'username' : $('#username').val(),
                                                                                                'password' : $('#password').val()
                                                                                        },
                                                                                        success: function(data){
                                                                                                if (data == "true"){
                                                                                                        ShowToast(1500, 'success', 'Successfully Logged In. Please Wait...');
                                                                                                        setTimeout(() => {
                                                                                                                window.location = '<?php echo base_url('home') ?>';
                                                                                                        }, 2000);
                                                                                                }
                                                                                                else if (data == "false"){
                                                                                                        ShowToast(1500, 'error', 'Invalid Username Or Password. Please Try Again.');
                                                                                                        setTimeout(() => {
                                                                                                                window.location = '<?php echo base_url('login') ?>';
                                                                                                        }, 2000);
                                                                                                }
                                                                                                else{
                                                                                                        ShowToast(3000, 'error', data);
                                                                                                        setTimeout(() => {
                                                                                                                window.location = '<?php echo base_url('login') ?>';
                                                                                                        }, 3500);
                                                                                                }
                                                                                        }
                                                                                });
                                                                        }
                                                                });
                                                        });
                                                </script>
                                        </div>
                                </div>
                                <div class="nk-gap-3"></div>
                        </div>
                </div>
        </div>
</div>