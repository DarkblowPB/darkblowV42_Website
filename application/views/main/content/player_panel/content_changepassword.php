<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_47') ?> <span class="text-white"><?php echo $this->lang->line('STR_DARKBLOW_42') ?></span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?php echo form_open('', 'id="changepassword_form" autocomplete="off"') ?>
                            <div class="form-group">
                                <label><?php echo $this->lang->line('STR_DARKBLOW_55') ?></label>
                                <input type="password" class="form-control" id="old_password" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_160') ?>" minlength="4" maxlength="16" autofocus>
                            </div>
                            <div class="form-group">
                                <label><?php echo $this->lang->line('STR_DARKBLOW_56') ?></label>
                                <input type="password" class="form-control" id="new_password" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_161') ?>" minlength="4" maxlength="16">
                            </div>
                            <div class="form-group">
                                <label><?php echo $this->lang->line('STR_DARKBLOW_57') ?></label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_133') ?>" value="<?php echo set_value('confirm_password') ?>" minlength="4" maxlength="16">
                            </div>
                            <div class="form-group">
                                <label><?php echo $this->lang->line('STR_DARKBLOW_21') ?></label>
                                <select class="form-control" id="hint_question" value="<?php echo set_value('hint_question') ?>" required>
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
                                <input type="text" class="form-control" id="hint_answer" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_24') ?>" autocomplete="off">
                            </div>
                            <div class="nk-gap"></div>
                            <div class="form-group text-center">
                                <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Change Password">
                            </div>
                        <?php echo form_close() ?>
                        <script>
                            var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';

                            $(document).ready(function(){
                                $('#changepassword_form').on('submit', function(e){
                                    e.preventDefault();

                                    if ($('#old_password').val() == '' || $('#old_password').val() == null){
                                        ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_7') ?>');
                                        return;
                                    }
                                    else if ($('#new_password').val() == '' || $('#new_password').val() == null){
                                        ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_8') ?>');
                                        return;
                                    }
                                    else if ($('#confirm_password').val() == '' || $('#confirm_password').val() == null){
                                        ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_9') ?>');
                                        return;
                                    }
                                    else if ($('#hint_question').val() == '' || $('#hint_question').val() == null){
                                        ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_10') ?>');
                                        return;
                                    }
                                    else if ($('#hint_answer').val() == '' || $('#hint_answer').val() == null){
                                        ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_3') ?>');
                                        return;
                                    }
                                    else{
                                        SetAttribute('submit', 'button', 'Processing...');
                                        $.ajax({
                                            url: '<?php echo base_url('player_panel/changepassword/do_changepassword') ?>',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                'old_password' : $('#old_password').val(),
                                                'new_password' : $('#new_password').val(),
                                                'confirm_password' : $('#confirm_password').val(),
                                                'hint_question' : $('#hint_question').val(),
                                                'hint_answer' : $('#hint_answer').val()
                                            },
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);
    
                                                if (Result.response == 'true'){
                                                    SetAttribute('submit', 'submit', 'Change Password');
                                                    ShowToast(2000, 'success', Result.message);
                                                    CSRF_TOKEN = Result.token;
                                                    setTimeout(() => {
                                                        Logout();
                                                    }, 2000);
                                                }
                                                else if (Result.response == 'false'){
                                                    SetAttribute('submit', 'submit', 'Change Password');
                                                    ShowToast(2000, 'error', Result.message);
                                                    CSRF_TOKEN = Result.token;
                                                    return;
                                                }
                                                else{
                                                    SetAttribute('submit', 'submit', 'Change Password');
                                                    ShowToast(2000, 'error', Result.message);
                                                    CSRF_TOKEN = Result.token;
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
                                                            CSRF_TOKEN = Result.token;
                                                        }

                                                        return Do_ChangePassword();
                                                    },
                                                    error: function(){
                                                        SetAttribute('submit', 'submit', 'Change Password');
                                                        ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_5') ?>');
                                                        setTimeout(() => {
                                                            window.location.reload();
                                                        }, 2000);
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                            });

                            function Do_ChangePassword()
                            {
                                if ($('#old_password').val() == '' || $('#old_password').val() == null){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_7') ?>');
                                    return;
                                }
                                else if ($('#new_password').val() == '' || $('#new_password').val() == null){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_DARKBLOW_8') ?>');
                                    return;
                                }
                                else if ($('#confirm_password').val() == '' || $('#confirm_password').val() == null){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_DARKBLOW_9') ?>');
                                    return;
                                }
                                else if ($('#hint_question').val() == '' || $('#hint_question').val() == null){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_DARKBLOW_10') ?>');
                                    return;
                                }
                                else if ($('#hint_answer').val() == '' || $('#hint_answer').val() == null){
                                    ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_DARKBLOW_3') ?>');
                                    return;
                                }
                                else{
                                    SetAttribute('submit', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?php echo base_url('player_panel/changepassword/do_changepassword') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                            'old_password' : $('#old_password').val(),
                                            'new_password' : $('#new_password').val(),
                                            'confirm_password' : $('#confirm_password').val(),
                                            'hint_question' : $('#hint_question').val(),
                                            'hint_answer' : $('#hint_answer').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetAttribute('submit', 'submit', 'Change Password');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                setTimeout(() => {
                                                    // Logout Function
                                                }, 2000);
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('submit', 'submit', 'Change Password');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'submit', 'Change Password');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function(){
                                            SetAttribute('submit', 'submit', 'Change Password');
                                            ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_5') ?>');
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
        <div class="nk-gap-3"></div>
        <div class="nk-gap-2"></div>
    </div>
</div>