<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Forgot </span> Password</span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?php echo form_open('', 'id="forgotpassword_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" id="username" class="form-control" placeholder="Enter Your Username">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Hint Question</label>
                        <select id="hint_question" class="form-control">
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
                        <label class="col-form-label">Hint Answer</label>
                        <input type="text" id="hint_answer" class="form-control" placeholder="Entery Your Hint Answer">
                    </div>
                    <div class="nk-gap-3"></div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Send Request">
                    </div>
                <?php echo form_close() ?>
                <script>
                    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                    $(document).ready(function(){
                        $('#forgotpassword_form').on('submit', function(e){
                            e.preventDefault();

                            if ($('#username').val() == ''){
                                ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                                return;
                            }
                            else if ($('#hint_question').val() == ''){
                                ShowToast(2000, 'warning', 'Select Your Hint Question.');
                                return;
                            }
                            else if ($('#hint_answer').val() == ''){
                                ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
                            }
                            else{
                                
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?php echo base_url('forgotpassword/do_sendrequest') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                        'username' : $('#username').val(),
                                        'hint_question' : $('#hint_question').val(),
                                        'hint_answer' : $('#hint_answer').val()
                                    },
                                    success: function(data){
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true'){
                                            SetAttribute('submit', 'submit', 'Send Request');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                        else if (Result.response == 'false'){
                                            SetAttribute('submit', 'submit', 'Send Request');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'submit', 'Send Request');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function(data){
                                        ShowToast(1000, 'info', 'Generate New Request Token...');

                                        $.ajax({
                                            url: '<?php echo base_url('api/getnewtoken') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                if (Result.response == 'true'){
                                                    CSRF_TOKEN = Result.token;
                                                }


                                            },
                                            error: function(){
                                                SetAttribute('submit', 'submit', 'Send Request');
                                                ShowToast(2000, 'error', 'Failed To Send Request.');
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

                    function Do_SendRequest()
                    {
                        if ($('#username').val() == ''){
                            ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                            return;
                        }
                        else if ($('#hint_question').val() == ''){
                            ShowToast(2000, 'warning', 'Select Your Hint Question.');
                            return;
                        }
                        else if ($('#hint_answer').val() == ''){
                            ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
                        }
                        else{
                            
                            SetAttribute('submit', 'button', 'Processing...');

                            $.ajax({
                                url: '<?php echo base_url('forgotpassword/do_sendrequest') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                    'username' : $('#username').val(),
                                    'hint_question' : $('#hint_question').val(),
                                    'hint_answer' : $('#hint_answer').val()
                                },
                                success: function(data){
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true'){
                                        SetAttribute('submit', 'submit', 'Send Request');
                                        ShowToast(2000, 'success', Result.message);
                                        CSRF_TOKEN = Result.token;
                                        return;
                                    }
                                    else if (Result.response == 'false'){
                                        SetAttribute('submit', 'submit', 'Send Request');
                                        ShowToast(2000, 'error', Result.message);
                                        CSRF_TOKEN = Result.token;
                                        return;
                                    }
                                    else{
                                        SetAttribute('submit', 'submit', 'Send Request');
                                        ShowToast(2000, 'error', Result.message);
                                        CSRF_TOKEN = Result.token;
                                        return;
                                    }
                                },
                                error: function(){
                                    SetAttribute('submit', 'submit', 'Send Request');
                                    ShowToast(2000, 'error', 'Failed To Send Request.');
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
</div>