<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Configuration</h5>
            <div class="card-body">
                <div class="container-fluid">
                    <?php
                    if ($this->session->flashdata('Success'))
                    {
                        
                        echo '<div class="alert alert-success" role="alert">';
                        echo '<h4 class="alert-heading">Success</h4><p>';
                        echo $this->session->flashdata('Success');
                        echo '</p>';
                        echo '</div>';
                        
                    }
                    if ($this->session->flashdata('Failed')) 
                    {
                        
                        echo '<div class="alert alert-danger" role="alert">';
                        echo '<h4 class="alert-heading">Failed</h4><p>';
                        echo $this->session->flashdata('Failed');
                        echo '</p>';
                        
                    }
                    ?>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <?php echo form_open(base_url('moderatorpanel/account_config/home'), 'class="form-horizontal"') ?>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-3 text-right">Player ID</label>
                                    <input type="text" class="col-lg-9 col-9 form-control" value="<?php echo $config->player_id ?>" readonly disabled>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-3 text-right">Username</label>
                                    <input type="text" name="username" class="col-lg-9 col-9 form-control" value="<?php echo $config->login ?>" placeholder="Enter Your New Username" minlength="4" maxlength="16" autocomplete="off" autofocus required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-3 text-right">Nickname</label>
                                    <input type="text" name="nickname" class="col-lg-9 col-9 form-control" value="<?php echo $config->player_name ?>" placeholder="Enter Your New Nickname" minlength="4" maxlength="16" autocomplete="off" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-3 text-right">Email</label>
                                    <input type="mail" name="email" class="col-lg-9 col-9 form-control" value="<?php echo $config->player_name ?>" placeholder="Enter Your New Email" minlength="4" maxlength="16" autocomplete="off" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-3 text-right">Hint Question</label>
                                    <select name="hint_question" class="col-lg-9 col-9 form-control" required>
                                        <option value="What was your childhood nickname?" <?php if ($config->hint_question == "What was your childhood nickname?") {echo 'selected';} ?>>What was your childhood nickname?</option>
                                        <option value="What is the name of your favorite childhood friend?" <?php if ($config->hint_question == "What is the name of your favorite childhood friend?") {echo 'selected';} ?>>What is the name of your favorite childhood friend?</option>
                                        <option value="In what city or town did your mother and father meet?" <?php if ($config->hint_question == "In what city or town did your mother and father meet?") {echo 'selected';} ?>>In what city or town did your mother and father meet?</option>
                                        <option value="What is your favorite team?" <?php if ($config->hint_question == "What is your favorite team?") {echo 'selected';} ?>>What is your favorite team?</option>
                                        <option value="What is your favorite movie?" <?php if ($config->hint_question == "What is your favorite movie?") {echo 'selected';} ?>>What is your favorite movie?</option>
                                        <option value="What was your favorite sport in high school?" <?php if ($config->hint_question == "What was your favorite sport in high school?") {echo 'selected';} ?>>What was your favorite sport in high school?</option>
                                        <option value="What was your favorite food as a child?" <?php if ($config->hint_question == "What was your favorite food as a child?") {echo 'selected';} ?>>What was your favorite food as a child?</option>
                                        <option value="What is the first name of the boy or girl that you first kissed?" <?php if ($config->hint_question == "What is the first name of the boy or girl that you first kissed?") {echo 'selected';} ?>>What is the first name of the boy or girl that you first kissed?</option>
                                        <option value="What was the make and model of your first car?" <?php if ($config->hint_question == "What was the make and model of your first car?") {echo 'selected';} ?>>What was the make and model of your first car?</option>
                                        <option value="What was the name of the hospital where you were born?" <?php if ($config->hint_question == "What was the name of the hospital where you were born?") {echo 'selected';} ?>>What was the name of the hospital where you were born?</option>
                                        <option value="Who is your childhood sports hero?" <?php if ($config->hint_question == "Who is your childhood sports hero?") {echo 'selected';} ?>>Who is your childhood sports hero?</option>
                                        <option value="What school did you attend for sixth grade?" <?php if ($config->hint_question == "What school did you attend for sixth grade?") {echo 'selected';} ?>>What school did you attend for sixth grade?</option>
                                        <option value="What was the last name of your third grade teacher?" <?php if ($config->hint_question == "What was the last name of your third grade teacher?") {echo 'selected';} ?>>What was the last name of your third grade teacher?</option>
                                        <option value="In what town was your first job?" <?php if ($config->hint_question == "In what town was your first job?") {echo 'selected';} ?>>In what town was your first job?</option>
                                        <option value="What was the name of the company where you had your first job?" <?php if ($config->hint_question == "What was the name of the company where you had your first job?") {echo 'selected';} ?>>What was the name of the company where you had your first job?</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-3 text-right">Hint Answer</label>
                                    <input type="text" name="hint_answer" class="col-lg-9 col-9 form-control" value="<?php echo $config->hint_answer ?>" autocomplete="off" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" onclick="self.history.back();" class="btn btn-outline-danger"><i class="fas fa-arrow-circle-left mr-2"></i>Back</button>
                                    <button type="submit" name="submit_changes" class="btn btn-outline-primary"><i class="fas fa-save mr-2"></i>Save Changes</button>
                                </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>