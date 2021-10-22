<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_17') ?> </span> <?php echo $this->lang->line('STR_DARKBLOW_18') ?></span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
                <?php if ($this->session->flashdata('false')) : ?>
                    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('false') ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('true')) : ?>
                    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('true') ?></div>
                <?php endif; ?>
                <?php echo form_open(base_url('forgotpassword/do_sendrequest'), 'id="forgotpassword_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_19') ?></label>
                        <input type="text" name="username" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_20') ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_21') ?></label>
                        <select name="hint_question" class="form-control" required>
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
                        <label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_23') ?></label>
                        <input type="text" name="hint_answer" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_24') ?>" required>
                    </div>
                    <div class="nk-gap-3"></div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Send Request">
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>