<div class="nk-main">
        <div class="container">
                <div class="nk-gap-2"></div>
                <div class="row vertical-gap">
                        <div class="col-lg-12">
                                <h3 class="nk-decorated-h-2"><span class="text-main-1">Register <span class="text-white">Area</span></span></h3>
                                <div class="nk-gap-3"></div>
                                <div class="nk-gap-3"></div>
                                <div class="container">
                                        <div class="col-lg-6 offset-lg-3">
                                                <?php
                                                echo form_open('','id="register_form" autocomplete="off"');
                                                ?>
                                                <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <div class="row">
                                                                <div class="col-9">
                                                                        <input type="text" class="form-control username" id="login" placeholder="Enter Your Username" minlength="4" maxlength="16" autofocus>
                                                                </div>
                                                                <div class="col-3">
                                                                        <button type="button" class="nk-btn nk-btn-outline nk-btn-rounded nk-btn-block nk-btn-lg nk-btn-color-main-5" onclick="UsernameChecking()">Check</button>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="email">Email Address</label>
                                                        <input type="mail" class="form-control" id="email" placeholder="Enter Your Email Address">
                                                </div>
                                                <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password" placeholder="Enter Your Password" minlength="4" maxlength="16">
                                                </div>
                                                <div class="form-group">
                                                        <label for="re_password">Confirmation Password</label>
                                                        <input type="password" class="form-control" id="re_password" placeholder="Enter Your Confirmation Password" minlength="4" maxlength="16">
                                                </div>
                                                <div class="form-group">
                                                        <label>Hint Question</label>
                                                        <select class="form-control" id="hint_question">
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
                                                                <input type="text" class="form-control" id="hint_answer" placeholder="Enter Your Hint Answer">
                                                        </div>
                                                <div class="nk-gap"></div>
                                                <div class="form-group text-center">
                                                        <input id="register_button" type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Register" onclick="ShowToast(2000, 'warning', 'Please Check Your Username First.');">
                                                        <a href="<?php echo base_url('login') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success">Login</a>
                                                </div>
                                                <?php echo form_close(); ?>
                                                <script>
                                                        var CSRF_TOKEN = '';
                                                        $(document).ready(function(){
                                                                $('#register_form').on('submit', function(e){
                                                                        e.preventDefault();
                                                                        if ($('#login').val() == ""){
                                                                                ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                                                                                return;
                                                                        }
                                                                        else if ($('#email').val() == ""){
                                                                                ShowToast(2000, 'warning', 'Email Cannot Be Empty.');
                                                                                return;
                                                                        }
                                                                        else if ($('#password').val() == ""){
                                                                                ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                                                                                return;
                                                                        }
                                                                        else if ($('#re_password').val() == ""){
                                                                                ShowToast(2000, 'warning', 'Confirmation Password Cannot Be Empty.');
                                                                                return;
                                                                        }
                                                                        else if ($('#re_password').val() != $('#password').val()){
                                                                                ShowToast(2000, 'warning', 'Confirmation Password Not Matches.');
                                                                                return;
                                                                        }
                                                                        else if ($('#hint_question').val() == ""){
                                                                                ShowToast(2000, 'warning', 'Hint Question Cannot Be Empty.');
                                                                                return;
                                                                        }
                                                                        else if ($('#hint_answer').val() == ""){
                                                                                ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
                                                                                return;
                                                                        }
                                                                        else{
                                                                                if (CSRF_TOKEN == ''){
                                                                                        CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                                                                }
                                                                                SetButton('false');
                                                                                $.ajax({
                                                                                        url: '<?php echo base_url('register/do_register') ?>',
                                                                                        type: 'POST',
                                                                                        dataType: 'JSON',
                                                                                        data: {
                                                                                                '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
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
                                                                                                        SetButton('true');
                                                                                                        CSRF_TOKEN = Result.token;
                                                                                                        ShowToast(2000, 'success', Result.message);
                                                                                                        setTimeout(() => {
                                                                                                                window.location.reload();
                                                                                                        }, 2000);
                                                                                                }
                                                                                                else if (Result.response == 'false'){
                                                                                                        SetButton('true');
                                                                                                        CSRF_TOKEN = Result.token;
                                                                                                        ShowToast(2000, 'error', Result.message);
                                                                                                        return;
                                                                                                }
                                                                                                else {
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
                                                                                        }
                                                                                });
                                                                        }
                                                                });
                                                        });

                                                        function UsernameChecking()
                                                        {
                                                                var username = $('#login').val();

                                                                if (username == ''){
                                                                        SetButton('false2');
                                                                        return;
                                                                }
                                                                else{
                                                                        SetButton('false2');
                                                                        $.ajax({
                                                                                url: '<?php echo base_url('register/do_checkusername') ?>',
                                                                                type: 'GET',
                                                                                dataType: 'JSON',
                                                                                data: {
                                                                                        'username' : username
                                                                                },
                                                                                success: function(data){
                                                                                        var GetString = JSON.stringify(data);
                                                                                        var Result = JSON.parse(GetString);

                                                                                        if (Result.response == 'true'){
                                                                                                SetButton('true');
                                                                                                ShowToast(2000, 'success', Result.message);
                                                                                                return;
                                                                                        }
                                                                                        else if (Result.response == 'false'){
                                                                                                SetButton('false2');
                                                                                                ShowToast(2000, 'error', Result.message);
                                                                                                return;
                                                                                        }
                                                                                        else{
                                                                                                SetButton('false2');
                                                                                                ShowToast(2000, 'error', Result.message);
                                                                                                return;
                                                                                        }
                                                                                },
                                                                                error: function(data){
                                                                                        SetButton('false2');
                                                                                        ShowToast(2000, 'error', data.responseText);
                                                                                        setTimeout(() => {
                                                                                                window.location.reload();
                                                                                        }, 2000);
                                                                                }
                                                                        });
                                                                }
                                                                
                                                        }

                                                        function SetButton(param){
                                                                var Q = document.getElementById('register_button');
                                                                if (param == 'false'){
                                                                        Q.setAttribute('type', 'button');
                                                                        Q.setAttribute('value', 'Processing...');
                                                                }
                                                                if (param == 'false2'){
                                                                        Q.setAttribute('type', 'button');
                                                                        Q.setAttribute('value', 'Register');
                                                                }
                                                                if (param == 'true'){
                                                                        Q.removeAttribute('onclick');
                                                                        Q.setAttribute('type', 'submit');
                                                                        Q.setAttribute('value', 'Register');
                                                                }
                                                        }
                                                </script>
                                                <div class="form-group text-center">
                                                        <label style="font-weight: bold; font-style: italic;">OR</label>
                                                </div>
                                                <div class="form-group text-center">
                                                        <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'info', 'This Feature Is Unavailable Right Now.');"><span class="fa fa-google"></span> &nbsp;register with google</button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
        </div>
</div>