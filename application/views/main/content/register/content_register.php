<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_44') ?> <span class="text-white"><?php echo $this->lang->line('STR_DARKBLOW_39') ?></span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?php
                        echo form_open('','id="register_form" autocomplete="off"');
                        ?>
                        <div class="form-group">
                            <label for="username"><?php echo $this->lang->line('STR_DARKBLOW_40') ?></label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" id="login" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_41') ?>" minlength="4" maxlength="16" autofocus>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="check_username" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Check">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email"><?php echo $this->lang->line('STR_DARKBLOW_131') ?></label>
                            <input type="mail" class="form-control" id="email" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_132') ?>">
                        </div>
                        <div class="form-group">
                            <label for="password"><?php echo $this->lang->line('STR_DARKBLOW_42') ?></label>
                            <input type="password" class="form-control" id="password" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_43') ?>" minlength="4" maxlength="16">
                        </div>
                        <div class="form-group">
                            <label for="re_password"><?php echo $this->lang->line('STR_DARKBLOW_57') ?></label>
                            <input type="password" class="form-control" id="re_password" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_133') ?>" minlength="4" maxlength="16">
                        </div>
                        <div class="form-group">
                            <label><?php echo $this->lang->line('STR_DARKBLOW_21') ?></label>
                            <select class="form-control" id="hint_question">
                                <option value="" disabled selected><?php echo $this->lang->line('STR_DARKBLOW_22') ?></option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                                <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                                <option value="What is your favorite team?">What is your favorite team?</option>
                                <option value="What is your favorite movie?">What is your favorite movie?</option>
                                <option value="What was your favorite sport in high school?">What was your favorite sport in high school?</option>
                                <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                                <option value="What is the first name of the boy or girl that you first kissed?">What is the first name of the boy or girl that you first kissed?</option>
                                <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                                <option value="What was the name of the hospital where you were born?">What was the name of the hospital where you were born?</option>
                                <option value="Who is your childhood sports hero?">Who is your childhood sports hero?</option>
                                <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                                <option value="What was the last name of your third grade teacher?">What was the last name of your third grade teacher?</option>
                                <option value="In what town was your first job?">In what town was your first job?</option>
                                <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                            </select>
                        </div>
                            <div class="form-group">
                                <label><?php echo $this->lang->line('STR_DARKBLOW_23') ?></label>
                                <input type="text" class="form-control" id="hint_answer" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_24') ?>" required>
                            </div>
                        <div class="nk-gap"></div>
                        <div class="form-group text-center">
                            <input id="submit" type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Register" onclick="ShowToast(2000, 'warning', 'Please Check Your Username First.');">
                            <a href="<?php echo base_url('login') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success">Login</a>
                        </div>
                        <?php echo form_close(); ?>
                        <script>
                            var CSRF_TOKEN2 = '<?php echo $this->security->get_csrf_hash() ?>';
                            $('#check_username').click(function(){
                                if ($('#login').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_1') ?>');
                                    return;
                                }
                                else{
                                    SetAttribute('check_username', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?php echo base_url('register/do_checkusername') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN2,
                                            'login' : $('#login').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                document.getElementById('submit').setAttribute('onclick', '');
                                                SetAttribute('check_username', 'button', 'Check');
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('check_username', 'button', 'Check');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else{
                                                SetAttribute('check_username', 'button', 'Check');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                        },
                                        error: function(){
                                            ShowToast(1000, 'info', '<?php echo $this->lang->line('STR_INFO_1') ?>');

                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN2 = Result.token;
                                                    }

                                                    return CheckUsername();
                                                },
                                                error: function(){
                                                    SetAttribute('check_username', 'button', 'Check');
                                                    ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_13') ?>');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    });
                                }
                            });

                            function CheckUsername()
                            {
                                if ($('#login').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_1') ?>');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                                else{
                                    SetAttribute('check_username', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?php echo base_url('register/do_checkusername') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN2,
                                            'login' : $('#login').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                document.getElementById('submit').setAttribute('onclick', '');
                                                SetAttribute('check_username', 'button', 'Check');
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('check_username', 'button', 'Check');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else{
                                                SetAttribute('check_username', 'button', 'Check');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                        },
                                        error: function(){
                                            ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_13') ?>');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            }

                            $('#register_form').on('submit', function(e){
                                e.preventDefault();

                                if ($('#login').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_1') ?>');
                                    document.getElementById('login').focus();
                                }
                                else if ($('#email').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_13') ?>');
                                    document.getElementById('email').focus();
                                }
                                else if ($('#password').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_4') ?>');
                                    document.getElementById('password').focus();
                                }
                                else if ($('#re_password').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_9') ?>');
                                    document.getElementById('re_password').focus();
                                }
                                else if ($('#re_password').val() != $('#password').val()){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_14') ?>');
                                    document.getElementById('re_password').focus();
                                }
                                else if ($('#hint_question').val() == '' || $('#hint_question').val() == null){
                                    ShowToast(2000, 'warning', 'Hint Question Cannot Be Empty.');
                                    document.getElementById('hint_question').focus();
                                }
                                else if ($('#hint_answer').val() == ''){
                                    ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
                                    document.getElementById('hint_answer').focus();
                                }
                                else{
                                    SetAttribute('submit', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?php echo base_url('register/do_register') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN2,
                                            'login' : $('#login').val(),
                                            'email' : $('#email').val(),
                                            'password' : $('#password').val(),
                                            're_password' : $('#re_password').val(),
                                            'hint_question' : $('#hint_question').val(),
                                            'hint_answer' : $('#hint_answer').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                        },
                                        error: function(){
                                            ShowToast(1000, 'info', '<?php echo $this->lang->line('STR_INFO_1') ?>');

                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN2 = Result.token;
                                                    }

                                                    return Do_Register();
                                                },
                                                error: function(){
                                                    ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_12') ?>');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            })
                                        }
                                    });
                                }
                            });

                            function Do_Register()
                            {
                                if ($('#login').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_1') ?>');
                                    document.getElementById('login').focus();
                                }
                                else if ($('#email').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_13') ?>');
                                    document.getElementById('email').focus();
                                }
                                else if ($('#password').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_4') ?>');
                                    document.getElementById('password').focus();
                                }
                                else if ($('#re_password').val() == ''){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_9') ?>');
                                    document.getElementById('re_password').focus();
                                }
                                else if ($('#re_password').val() != $('#password').val()){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_14') ?>');
                                    document.getElementById('re_password').focus();
                                }
                                else if ($('#hint_question').val() == '' || $('#hint_question').val() == null){
                                    ShowToast(2000, 'warning', 'Hint Question Cannot Be Empty.');
                                    document.getElementById('hint_question').focus();
                                }
                                else if ($('#hint_answer').val() == ''){
                                    ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
                                    document.getElementById('hint_answer').focus();
                                }
                                else{
                                    SetAttribute('submit', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?php echo base_url('register/do_register') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN2,
                                            'login' : $('#login').val(),
                                            'email' : $('#email').val(),
                                            'password' : $('#password').val(),
                                            're_password' : $('#re_password').val(),
                                            'hint_question' : $('#hint_question').val(),
                                            'hint_answer' : $('#hint_answer').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                setTimeout(() => {
                                                    window.location = '<?php echo base_url('login') ?>';
                                                }, 2000);
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'submit', 'Register');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN2 = Result.token;
                                                return;
                                            }
                                        },
                                        error: function(){
                                            ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_12') ?>');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            }
                        </script>
                        <div class="form-group text-center">
                            <label style="font-weight: bold; font-style: italic;">OR</label>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'info', 'This Feature Is Unavailable Right Now.');"><span class="fa fa-google"></span> &nbsp;<?php echo $this->lang->line('STR_DARKBLOW_156') ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-3"></div>
    </div>
</div>