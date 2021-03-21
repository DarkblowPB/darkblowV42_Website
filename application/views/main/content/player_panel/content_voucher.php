<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1">Voucher <span class="text-white">Area</span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php
                            if ($this->session->flashdata('success'))
                            {
                                echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                                echo $this->session->flashdata('success');
                                echo "</em></div>";
                                echo '<div class="nk-gap-2"></div>';
                            }
                            else if ($this->session->flashdata('error')) 
                            {
                                echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                                echo $this->session->flashdata('error');
                                echo "</em></div>";
                                echo '<div class="nk-gap-2"></div>';
                            }
                            ?>
                            <?php echo form_open(base_url('player_panel/voucher'), 'class="form-horizontal"') ?>
                                <div class="form-group">
                                    <label>Voucher Code</label>
                                    <input type="text" name="voucher_code" class="form-control" minlength="24" maxlength="24" autocomplete="off" autofocus required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-eraser"></span> &nbsp;Reset</button>
                                    <button type="submit" name="submit_voucher" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-paper-plane"></span> &nbsp;Submit</button>
                                </div>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
            </div>
        </div>
    </div>
</div>