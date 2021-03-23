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
                    if ($this->session->flashdata('Notice')) 
                    {
                        echo '<div class="alert alert-warning" role="alert">';
                        echo '<h4 class="alert-heading">Warning</h4><p>';
                        echo $this->session->flashdata('Notice');
                        echo '</p>';
                        echo '</div>';
                    }
                    ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo form_open(base_url('moderatorpanel/account_config/home'), 'class="form-horizontal"') ?>
                            foreach ($config as $row) :
                            ?>
                            <div class="form-group row">
                                <div class="col-sm-3 text-right">
                                    <label class="mt-2">Player ID</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="player_id" class="form-control" value="<?php echo $row['player_id'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 text-right">
                                    <label class="mt-2">Username</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="username" class="form-control" minlength="4" maxlength="16" value="<?php echo $row['login'] ?>" required autocomplete="off" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 text-right">
                                    <label class="mt-2">Nickname</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="nickname" class="form-control" minlength="4" maxlength="16" value="<?php echo $row['player_name'] ?>" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <div class="col-sm-3 text-right">
                                    <label class="mt-2">Email</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="mail" name="email" class="form-control" minlength="10" maxlength="30" value="<?php echo $row['email'] ?>" required autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 text-right">
                                    <label class="mt-1">Hint Question</label>
                                </div>
                                <div class="col-sm-9">
                                    <select name="hint_question" class="form-control" required>
                                        <option value="What was your childhood nickname?" <?php if ($row['hint_question'] == "What was your childhood nickname?") {echo 'selected';} ?>>What was your childhood nickname?</option>
                                        <option value="What is the name of your favorite childhood friend?" <?php if ($row['hint_question'] == "What is the name of your favorite childhood friend?") {echo 'selected';} ?>>What is the name of your favorite childhood friend?</option>
                                        <option value="In what city or town did your mother and father meet?" <?php if ($row['hint_question'] == "In what city or town did your mother and father meet?") {echo 'selected';} ?>>In what city or town did your mother and father meet?</option>
                                        <option value="What is your favorite team?" <?php if ($row['hint_question'] == "What is your favorite team?") {echo 'selected';} ?>>What is your favorite team?</option>
                                        <option value="What is your favorite movie?" <?php if ($row['hint_question'] == "What is your favorite movie?") {echo 'selected';} ?>>What is your favorite movie?</option>
                                        <option value="What was your favorite sport in high school?" <?php if ($row['hint_question'] == "What was your favorite sport in high school?") {echo 'selected';} ?>>What was your favorite sport in high school?</option>
                                        <option value="What was your favorite food as a child?" <?php if ($row['hint_question'] == "What was your favorite food as a child?") {echo 'selected';} ?>>What was your favorite food as a child?</option>
                                        <option value="What is the first name of the boy or girl that you first kissed?" <?php if ($row['hint_question'] == "What is the first name of the boy or girl that you first kissed?") {echo 'selected';} ?>>What is the first name of the boy or girl that you first kissed?</option>
                                        <option value="What was the make and model of your first car?" <?php if ($row['hint_question'] == "What was the make and model of your first car?") {echo 'selected';} ?>>What was the make and model of your first car?</option>
                                        <option value="What was the name of the hospital where you were born?" <?php if ($row['hint_question'] == "What was the name of the hospital where you were born?") {echo 'selected';} ?>>What was the name of the hospital where you were born?</option>
                                        <option value="Who is your childhood sports hero?" <?php if ($row['hint_question'] == "Who is your childhood sports hero?") {echo 'selected';} ?>>Who is your childhood sports hero?</option>
                                        <option value="What school did you attend for sixth grade?" <?php if ($row['hint_question'] == "What school did you attend for sixth grade?") {echo 'selected';} ?>>What school did you attend for sixth grade?</option>
                                        <option value="What was the last name of your third grade teacher?" <?php if ($row['hint_question'] == "What was the last name of your third grade teacher?") {echo 'selected';} ?>>What was the last name of your third grade teacher?</option>
                                        <option value="In what town was your first job?" <?php if ($row['hint_question'] == "In what town was your first job?") {echo 'selected';} ?>>In what town was your first job?</option>
                                        <option value="What was the name of the company where you had your first job?" <?php if ($row['hint_question'] == "What was the name of the company where you had your first job?") {echo 'selected';} ?>>What was the name of the company where you had your first job?</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 text-right">
                                    <label class="mt-2">Hint Answer</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="hint_answer" class="form-control" value="<?php echo $row['hint_answer'] ?>" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="form-group row justify-content-center">
                                <div class="col-lg-12 text-center">
                                    <button type="button" onclick="self.history.back();" class="btn btn-outline-danger"><i class="fas fa-arrow-circle-left mr-2"></i>Back</button>
                                    <button type="submit" name="submit_changes" class="btn btn-outline-primary"><i class="fas fa-save mr-2"></i>Save Changes</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>