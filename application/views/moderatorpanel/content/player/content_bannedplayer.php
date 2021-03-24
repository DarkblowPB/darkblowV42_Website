<div class="row justify-content-center">
    <div class="col-lg-12 col-12">
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
    if (isset($_POST['submit_banned'])) 
    {
        $this->adminplayer->banned_player();
    }
    ?>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <h5 class="card-header"><?php echo $header ?></h5>
            <div class="card-body border-top">
                <?php echo form_open(base_url('moderatorpanel/player/banned?id='.$_GET['id']), 'class="form-horizontal"') ?>
                    <div class="container-fluid">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label-lg">Player ID</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="player_id" class="form-control" value="<?php echo $player->player_id ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label-lg">Player Name</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="player_name" class="form-control" value="<?php echo $player->player_name ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label-lg">Banned Type</label>
                            </div>
                            <div class="col-lg-9">
                                <select name="banned_type" class="form-control" value="<?php echo set_value('banned_type') ?>" required>
                                    <option value="" selected disabled>Select Banned Type</option>
                                    <option value="banned_perm">Banned Permanent</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser"></i> Reset</button>
                            <button type="submit" name="submit_banned" class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i> Submit</button>
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card">
            <h5 class="card-header text-warning"><i class="fas fa-exclamation-triangle"></i> Warning</h5>
            <div class="card-body border-top">
                <p class="lead">
                    ** Changelog Beta V1.0<br>
                </p>
                <p class="mb-2">
                    Specially Note For [GM] Griezelig
                </p>
                <p class="ml-4">
                    Please Be Calm When You Want To Banned A Player, You Must Do Confirm To DEV. You Will Disallowed To Banned Other Staff And Game Master<br>
                    You Only Can Banned Player With Access Level 0, And Your Action Will Record As Log And Showed To Another Game Master If You Banned Player Without DEV Confirmation
                </p>
            </div>
        </div>
    </div>
</div>