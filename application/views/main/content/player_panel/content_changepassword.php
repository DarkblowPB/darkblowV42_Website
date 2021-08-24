<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1">Change <span class="text-white">Password</span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?php echo form_open('', 'id="changepassword_form" autocomplete="off"') ?>
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" id="old_password" placeholder="Enter Your Password" value="<?php echo set_value('old_password') ?>" minlength="4" maxlength="16" autofocus>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" id="new_password" placeholder="Enter Your New Password" value="<?php echo set_value('new_password') ?>" minlength="4" maxlength="16">
                            </div>
                            <div class="form-group">
                                <label>Confirmation Password</label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="Enter Your Confirmation Password" value="<?php echo set_value('confirm_password') ?>" minlength="4" maxlength="16">
                            </div>
                            <div class="form-group">
                                <label>Hint Question</label>
                                <select class="form-control" id="hint_question" value="<?php echo set_value('hint_question') ?>" required>
                                    <option value="" disabled selected>Select Your Hint Question</option>
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
                                <label>Hint Answer</label>
                                <input type="text" class="form-control" id="hint_answer" placeholder="Enter Your Hint Answer" value="<?php echo set_value('hint_answer') ?>" autocomplete="off">
                            </div>
                            <div class="nk-gap"></div>
                            <div class="form-group text-center">
                                <input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Change Password">
                            </div>
                        <?php echo form_close() ?>
                        <script>
                            $(document).ready(function(){
                                $('#changepassword_form').on('submit', function(e){
                                    e.preventDefault();
                                    if ($('#old_password').val() == ""){
                                        ShowToast(2000, 'warning', 'Old Password Cannot Be Empty.');
                                        return;
                                    }
                                    else if ($('#new_password').val() == ""){
                                        ShowToast(2000, 'warning', 'New Password Cannot Be Empty.');
                                        return;
                                    }
                                    else if ($('#confirm_password').val() == ""){
                                        ShowToast(2000, 'warning', 'Confirm Password Cannot Be Empty.');
                                        return;
                                    }
                                    else if ($('#confirm_password').val() != $('#new_password').val()){
                                        ShowToast(2000, 'warning', 'Confirm Password Not Matches.');
                                        return;
                                    }
                                    else if ($('#hint_question').val() == ""){
                                        ShowToast(2000, 'warning', 'Select Your Hint Question.');
                                        return;
                                    }
                                    else if ($('#hint_answer').val() == ""){
                                        ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
                                        return;
                                    }
                                    else{
                                        $.ajax({
                                            url : '<?php echo base_url('player_panel/changepassword/do_changepassword') ?>',
                                            type: 'POST',
                                            data: {
                                                '<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
                                                'old_password' : $('#old_password').val(),
                                                'new_password' : $('#new_password').val(),
                                                'confirm_password' : $('#confirm_password').val(),
                                                'hint_question' : $('#hint_question').val(),
                                                'hint_answer' : $('#hint_answer').val()
                                            },
                                            success: function(data){
                                                if (data == "true"){
                                                    ShowToast(2500, 'success', 'Successfully Change Password. You Need Logged In Again To Continue.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('home/logout') ?>';
                                                    }, 3000);
                                                }
                                                else if (data == "false"){
                                                    ShowToast(2500, 'error', 'New Password Cannot Be Same Like Old Password.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                                }
                                                else if (data == "false2"){
                                                    ShowToast(2500, 'error', 'Wrong Hint Question.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                                }
                                                else if (data == "false3"){
                                                    ShowToast(2500, 'error', 'Wrong Hint Answer.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                                }
                                                else if (data == "false4"){
                                                    ShowToast(2500, 'error', 'Failed To Update Password.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                                }
                                                else if (data == "false5"){
                                                    ShowToast(2500, 'error', 'Wrong Old Password.');
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                                }
                                                else
                                                {
                                                    ShowToast(2500, 'error', data);
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                                }
                                            },
                                            error: function(data){
                                                ShowToast(2500, 'error', data);
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/changepassword') ?>';
                                                    }, 3000);
                                            }
                                        });
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-2"></div>
    </div>
</div>