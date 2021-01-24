<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <h5 class="card-header bg-primary">Create Player</h5>
            <div class="card-body border-top">
                <?php echo form_open(base_url('moderatorpanel/player/create_player'),' class="form-horizontal"'); ?>
                <?php
                echo validation_errors("<div class='alert alert-danger' role='alert'><h4 class='alert-heading'>Error</h4><p>","</p></div>");
                ?>
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
                    echo '</div>';
                }
                ?>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Username</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="username" class="form-control col-10" value="<?php echo set_value('login') ?>" minlength="4" maxlength="16" required autofocus autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Password</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control col-10" value="<?php echo set_value('password') ?>" minlength="4" maxlength="16" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Re-Password</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="password" name="re_password" class="form-control col-10" value="<?php echo set_value('re_password') ?>" minlength="4" maxlength="16" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Player Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="player_name" class="form-control col-10" value="<?php echo set_value('player_name') ?>" minlength="4" maxlength="16" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Rank</label>
                    </div>
                    <div class="col-sm-9">
                        <select name="rank" class="form-control col-10" value="<?php echo set_value('rank') ?>">
                            <option value="" selected disabled>Select Rank</option>
                            <?php foreach ($createplayer as $row) : ?>
                            <option value="<?php echo $row['rank'] ?>"><?php echo $row['rank_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Point</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="number" name="points" class="form-control col-10" value="<?php echo set_value('points') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Exp</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="number" name="exp" class="form-control col-10" value="<?php echo set_value('exp') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Badge</label>
                    </div>
                    <div class="col-sm-9">
                        <select name="pc_cafe" class="form-control col-10" value="<?php echo set_value('pc_cafe') ?>">
                            <option value="" selected disabled>Select Badge</option>
                            <option value="0">None</option>
                            <option value="1">Member</option>
                            <option value="2">Special Member</option>
                            <option value="5" disabled>Developer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Access Level</label>
                    </div>
                    <div class="col-sm-9">
                        <select name="access_level" class="form-control col-10" value="<?php echo set_value('access_level') ?>">
                            <option value="" selected disabled>Select Access Level</option>
                            <option value="0">Player</option>
                            <option value="1">VIP</option>
                            <option value="2">Streamer</option>
                            <option value="3" disabled>Moderator</option>
                            <option value="4" disabled>Game Master</option>
                            <option value="5" disabled>Administrator</option>
                            <option value="6" disabled>Developer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Email</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="mail" name="email" class="form-control col-10" value="<?php echo set_value('email') ?>" minlength="10" maxlength="30" required autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">D-Cash</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="number" name="d_cash" class="form-control col-10" value="<?php echo set_value('d_cash') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 text-right">
                        <label class="col-form-label-sm mt-2">Webcoin</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="number" name="webcoin" class="form-control col-10" value="<?php echo set_value('webcoin') ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 text-center">
                        <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>