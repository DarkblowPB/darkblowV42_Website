<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span class="text-main-1">Change <span class="text-white">Email</span></span></h3>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?php echo form_open('', 'id="changeemail_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">Old Email</label><br>
                        <?php if ($this->changeemail->IsConfirmEmail($player->email)) : ?>
                            <label class="form-control"><?php echo $player->email ?></label>
                            <input type="hidden" id="hidden_email" value="<?php echo $player->email ?>">
                        <?php endif; ?>
                        <?php if (!$this->changeemail->IsConfirmEmail($player->email)) : ?>
                            <label class="form-control"><button type="button" id="resend_email" onclick="Resend_Email()" class="nk-btn nk-btn-rounded btn-block nk-btn-outline nk-btn-color-main-5">Resend Email Verification</button></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">New Email</label>
                        <input type="email" id="new_email" class="form-control" placeholder="Enter Your New Email">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Confirm Email</label>
                        <input type="email" id="confirm_email" class="form-control" placeholder="Enter Your Confirm Email">
                    </div>
                    <div class="form-group text-center">
                        <?php if ($this->changeemail->IsConfirmEmail($player->email)) : ?>
                            <input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" value="Change Email">
                        <?php endif; ?>
                        <?php if (!$this->changeemail->IsConfirmEmail($player->email)) : ?>
                            <label class="form-control bg-main-1 mt-50">Please Verify Your Email Before Change To New Email.</label>
                        <?php endif; ?>
                    </div>
                <?php echo form_close() ?>
                <?php if (!$this->changeemail->IsConfirmEmail($player->email)) : ?>
                    <script>
                        var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                        function Resend_Email(){
                            $.ajax({
                                url: '<?php echo base_url('player_panel/changeemail/do_resend') ?>',
                                type: 'POST',
                                data: {
                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                    'email' : '<?php echo $player->email ?>'
                                },
                                success: function(data){
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true'){
                                        SetAttribute('resend_email', 'button', 'Resend Email Verification');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'success', Result.message);
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                    else if (Result.response == 'false'){
                                        SetAttribute('resend_email', 'button', 'Resend Email Verification');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    }
                                    else{
                                        SetAttribute('resend_email', 'button', 'Resend Email Verification');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    }
                                },
                                error: function(data){
                                    ShowToast(1000, 'info', 'Getting New Request Token...');
                                    SetAttribute('resend_email', 'button', 'Getting New Request Token...');

                                    $.ajax({
                                        url: '<?php echo base_url('api/getnewtoken') ?>',
                                        type: 'GET',
                                        dataType : 'JSON',
                                        data: {},
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                CSRF_TOKEN = Result.token;
                                            }

                                            Do_ChangeEmail();
                                        },
                                        error: function(){
                                            ShowToast(2000, 'error', 'Failed To Send Verification Email.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            });
                        }

                        function Do_ChangeEmail()
                        {
                            $.ajax({
                                url: '<?php echo base_url('player_panel/changeemail/do_resend') ?>',
                                type: 'POST',
                                data: {
                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                    'email' : '<?php echo $player->email ?>'
                                },
                                success: function(data){
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true'){
                                        ShowToast(2000, 'success', Result.message);
                                        SetAttribute('resend_email', 'button', 'Send Email Verification');
                                        CSRF_TOKEN = Result.token;
                                        return;
                                    }
                                    else if (Result.response == 'false'){
                                        ShowToast(2000, 'error', Result.message);
                                        SetAttribute('resend_email', 'button', 'Send Email Verification');
                                        CSRF_TOKEN = Result.token;
                                        return;
                                    }
                                    else{
                                        ShowToast(2000, 'error', Result.message);
                                        SetAttribute('resend_email', 'button', 'Send Email Verification');
                                        CSRF_TOKEN = Result.token;
                                        return;
                                    }
                                },
                                error: function(){
                                    ShowToast(2000, 'error', 'Failed To Send Verification Email.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }
                    </script>
                <?php endif; ?>
                <?php if ($this->changeemail->IsConfirmEmail($player->email)) : ?>
                    <script>
                        $(document).ready(function(){
                            $('#changeemail_form').on('submit', function(e){
                                e.preventDefault();
                                if ($('#new_email').val() == $('#hidden_email').val()){
                                    ShowToast(2000, 'warning', 'New Email Cannot Be Same Like Old Email.');
                                    setTimeout(() => {
                                        window.location = '<?php echo base_url('player_panel/changeemail') ?>';
                                    }, 2500);
                                    return;
                                }
                                else if ($('#confirm_email').val() != $('#new_email').val()){
                                    ShowToast(2000, 'warning', 'Confirm Email Doesnt Match With New Email.');
                                    setTimeout(() => {
                                        window.location = '<?php echo base_url('player_panel/changeemail') ?>';
                                    }, 2500);
                                    return;
                                }
                                else{
                                    $.ajax({
                                        url: '<?php echo base_url('player_panel/changeemail/do_changeemail') ?>',
                                        type: 'POST',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
                                            'old_email' : '<?php echo $player->email ?>',
                                            'new_email' : $('#new_email').val(),
                                            'confirm_email' : $('#confirm_email').val()
                                        },
                                        success: function(data){
                                            if (data == "true"){
                                                ShowToast(2000, 'success', 'Successfully Update Email Address.');
                                                setTimeout(() => {
                                                    window.location = '<?php echo base_url('player_panel/home') ?>';
                                                }, 2500);
                                            }
                                            else if (data == "false"){
                                                ShowToast(2000, 'error', 'Failed To Update Email Address.');
                                                setTimeout(() => {
                                                    window.location = '<?php echo base_url('player_panel/home') ?>';
                                                }, 2500);
                                            }
                                            else {
                                                ShowToast(3500, 'error', data);
                                                setTimeout(() => {
                                                    window.location = '<?php echo base_url('player_panel/changeemail') ?>';
                                                }, 4000);
                                            }
                                        },
                                        error: function(data){
                                            ShowToast(3500, 'error', data);
                                            setTimeout(() => {
                                                window.location = '<?php echo base_url('player_panel/changeemail') ?>';
                                            }, 4000);
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>