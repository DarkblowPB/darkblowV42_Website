<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <h5 class="card-header">Manual Recharge</h5>
            <div class="card-body">
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
                <?php echo form_open(base_url('moderatorpanel/recharge/manual_recharge'), 'class="form-horizontal"') ?>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Nickname</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="player_id" class="form-control" value="<?php echo set_value('player_id') ?>" required>
                                <option value="" selected disabled>Select Nickname</option>
                                <?php
                                foreach ($recharge as $row) :
                                ?>
                                    <option value="<?php echo $row['player_id'] ?>"><?php echo $row['player_name'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Recharge Package</label>
                        </div>
                        <div class="col-sm-9">
                            <select name="recharge_package" class="form-control" value="<?php echo set_value('recharge_package') ?>" required>
                                <option value="" selected disabled>Select Recharge Package</option>
                                <option value="package_1">IDR 10.000</option>
                                <option value="package_2">IDR 25.000</option>
                                <option value="package_3">IDR 50.000</option>
                                <option value="package_4">IDR 100.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" name="submit_recharge" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>