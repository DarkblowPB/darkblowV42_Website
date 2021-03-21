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
                        <?php
                        if ($this->session->flashdata('success'))
                        {
                            echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                            echo $this->session->flashdata('success');
                            echo "</em></div>";
                        }
                        else if ($this->session->flashdata('error')) 
                        {
                            echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                            echo $this->session->flashdata('error');
                            echo "</em></div>";
                        }
                        ?>
                        <?php echo form_open(base_url('player_panel/changepassword'), 'class="form-horizontal"') ?>
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" name="old_password" placeholder="Enter Your Password" value="<?php echo set_value('old_password') ?>" minlength="4" maxlength="16" required autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="new_password" placeholder="Enter Your New Password" value="<?php echo set_value('new_password') ?>" minlength="4" maxlength="16" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>Confirmation Password</label>
                                <input type="password" class="form-control" name="confirm_password" placeholder="Enter Your Confirmation Password" value="<?php echo set_value('confirm_password') ?>" minlength="4" maxlength="16" required>
                            </div>
                            <div class="form-group">
                                <label>Hint Question</label>
                                <select class="form-control" name="hint_question" value="<?php echo set_value('hint_question') ?>" required>
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
                                <button type="submit" name="submit-changepassword" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-paper-plane"></span> &nbsp;Submit New Password</button>
                                <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-2"></div>
    </div>
</div>