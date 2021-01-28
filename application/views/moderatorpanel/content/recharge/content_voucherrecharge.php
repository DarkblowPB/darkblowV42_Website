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
                <?php
                if (isset($_POST['submit_voucher'])) 
                {
                    include 'assets/include.php';

                    $cash_alert = $_POST['cash_alert'];
                    $cash_value = $_POST['cash_value'];
                    $voucher_code = $_POST['voucher_code'];
                    $voucher_status = 1;
                    $date = date('d-m-Y h:i:s');
                    if ($cash_alert == "") 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Alert Cannot Be Empty');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($cash_alert < 10) 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Alert Must Contains 10 Characters Or More');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($cash_alert > 255) 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Alert Max Length Is 255 Characters');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($cash_value == "") 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Value Cannot Be Empty');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($cash_value == "0") 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Value Cannot Be Empty');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($cash_value > "999999") 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Value Max 999.999');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($voucher_code == "")
                    {
                        $this->session->set_flashdata('Failed', 'Voucher Code Cannot Be Empty');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    if ($voucher_code > 24) 
                    {
                        $this->session->set_flashdata('Failed', 'Cash Code Max Length Is 24 Characters');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }

                    $ISp_Res = $connec->prepare("INSERT INTO item_voucher (cash_alert, cash_value, voucher_code, voucher_status, date) VALUES(?, ?, ?, ?, ?)");
                    $ISp_Res->execute(array($cash_alert, $cash_value, $voucher_code, $voucher_status, $date));
                    if ($ISp_Res) 
                    {
                        $this->logger->logger_CreateVoucherSuccess();
                        $this->session->set_flashdata('Success', 'Voucher Created Successfully');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }
                    else 
                    {
                        $this->logger->logger_CreateVoucherFailed();
                        $this->session->set_flashdata('Failed', 'Voucher Created Failed');
                        redirect(base_url('moderatorpanel/recharge/voucher'), 'refresh');
                    }
                }
                ?>
                <form action="" method="POST" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label>Alert</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="cash_alert" class="form-control" value="<?php echo set_value('cash_alert') ?>" minlength="10" maxlength="50" autocomplete="off" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label>Cash Value</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="number" name="cash_value" class="form-control" value="<?php echo set_value('cash_value') ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label>Voucher-Code</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="voucher_code" class="form-control" value="<?php echo set_value('voucher_code') ?>" minlength="24" maxlength="24" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                            <button type="submit" name="submit_voucher" class="btn btn-outline-primary"><i class="fas fa-paper-plane"></i>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>