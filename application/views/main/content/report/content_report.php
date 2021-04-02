<div class="nk-main">
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2"><span class="text-main-1">Report <span class="text-white">Area</span></span></h3>
                <?php
                echo validation_errors("<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>","</em></div>");
                ?>
                <?php
                if (isset($error)) 
                {
                    echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                    echo $error;
                    echo "<div class='nk-gap'></div>";
                }
                if ($this->session->flashdata('success'))
                {
                        echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                        echo $this->session->flashdata('success');
                        echo "<div class='nk-gap'></div>";
                }
                if ($this->session->flashdata('error')) 
                {
                    echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                    echo $this->session->flashdata('error');
                    echo "<div class='nk-gap'></div>";
                }
                ?>
            </div>
            <div class="col-lg-12">
                <div class="nk-gap-2"></div>
                <?php echo form_open_multipart(base_url('report'), ' class="form-horizontal"'); ?>
                    <div class="form-group">
                        <label>Report Title</label>
                        <input type="text" name="report_title" class="form-control" placeholder="Enter Your Report Title" value="<?php echo set_value('report_title') ?>" minlength="10" maxlength="255" autocomplete="off" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>Report Description</label>
                        <textarea name="report_description" class="form-control" placeholder="Enter Your Report Description" required><?php echo set_value('report_description') ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Report Proof (Bukti)</label>
                        <input type="file" name="report_proof" class="form-control-file" accept="image/x-png,image/jpeg" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-eraser"></span> &nbsp;Reset</button>
                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-paper-plane"></span> &nbsp;Submit</button>
                    </div>
                    <div class="form-group text-center">
                        <span class="text-white">OR</span><br>
                        <a href="<?php echo base_url('report/viewall') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3 mt-10"><span class="fa fa-list-alt"></span> &nbsp;Report List</a>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>