<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Voucher</h5>
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
                <?php echo form_open(base_url('moderatorpanel/recharge/voucher'), 'class="form-horizontal"') ?>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label>Alert</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="cash_alert" class="form-control" placeholder="Enter Alert For Player" value="<?php echo set_value('cash_alert') ?>" autocomplete="off" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label>Cash Value</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="number" name="cash_value" class="form-control" placeholder="Enter Cash Value" value="<?php echo set_value('cash_value') ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label>Voucher-Code</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="voucher_code" class="form-control" placeholder="Enter Voucher Code" value="<?php echo set_value('voucher_code') ?>" minlength="24" maxlength="24" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" name="submit_voucher" class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i>Submit</button>
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>