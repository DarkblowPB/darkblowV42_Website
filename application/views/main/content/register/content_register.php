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
                                                echo form_open(base_url('register'),' class="form-horizontal"');
                                                echo validation_errors("<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>","</em></div>");
                                                if ($this->session->flashdata('success'))
                                                {
                                                        echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                                                        echo $this->session->flashdata('success');
                                                        echo "<div class='nk-gap'></div>";
                                                        echo "<a href='".base_url('login')."' class='nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary' title='Click Me If You Want To Login Now'>Login Now?</a> <a href='".base_url('home')."' class='nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger' title='Click Me If You Want To Back To Home'>Back To Home</a>";
                                                        echo "</em></div>";
                                                }
                                                if ($this->session->flashdata('error'))
                                                {
                                                        echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                                                        echo $this->session->flashdata('error');
                                                        echo "<div class='nk-gap'></div>";
                                                        echo "</em></div>";
                                                }
                                                ?>
                                                <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" name="login" placeholder="Enter Your Username" minlength="4" maxlength="16" required autocomplete="off" autofocus value="<?php echo set_value('username') ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="email">Email Address</label>
                                                        <input type="mail" class="form-control" name="email" placeholder="Enter Your Email Address" minlength="10" maxlength="35" required autocomplete="off" value="<?php echo set_value('email') ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password" minlength="4" maxlength="16" required value="<?php echo set_value('password') ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="re_password">Confirmation Password</label>
                                                        <input type="password" class="form-control" name="re_password" placeholder="Enter Your Confirmation Password" minlength="4" maxlength="16" required value="<?php echo set_value('re_password') ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label>Hint Question</label>
                                                        <select class="form-control" name="hint_question" value="<?php echo set_value('hint_question') ?>">
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
                                                                <input type="text" class="form-control" name="hint_answer" placeholder="Enter Your Hint Answer" value="<?php echo set_value('hint_answer') ?>" autocomplete="off" required>
                                                        </div>
                                                <div class="nk-gap"></div>
                                                <div class="form-group text-center">
                                                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-user-plus"></span> &nbsp;Register</button>
                                                        <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
                                                </div>
                                                <?php echo form_close(); ?>
                                                <div class="form-group text-center">
                                                        <label style="font-weight: bold; font-style: italic;">OR</label>
                                                </div>
                                                <div class="form-group text-center">
                                                        <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3" title="This Feature Not Available At This Moment"><span class="fa fa-google"></span> &nbsp;register with google</button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
        </div>
</div>