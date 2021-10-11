<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="featuresettings_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Webshop</label>
                            <select id="enable_webshop" class="form-control col-9">
                                <option value="0"<?php if ($this->getsettings->Get2()->webshop == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1"<?php if ($this->getsettings->Get2()->webshop == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Trade Market (Experimental)</label>
                            <select id="enable_trademarket" class="form-control col-9">
                                <option value="0"<?php if ($this->getsettings->Get2()->trade_market == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1"<?php if ($this->getsettings->Get2()->trade_market == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Exchange Ticket (Experimental)</label>
                            <select id="enable_exchangeticket" class="form-control col-9">
                                <option value="0"<?php if ($this->getsettings->Get2()->exchange_ticket == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1"<?php if ($this->getsettings->Get2()->exchange_ticket == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Redeem Code</label>
                            <select id="enable_redeemcode" class="form-control col-9">
                                <option value="0"<?php if ($this->getsettings->Get2()->redeemcode == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1"<?php if ($this->getsettings->Get2()->redeemcode == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Voucher</label>
                            <select id="enable_voucher" class="form-control col-9">
                                <option value="0"<?php if ($this->getsettings->Get2()->voucher == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1"<?php if ($this->getsettings->Get2()->voucher == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Forgot Password</label>
                            <select id="enable_forgotpassword" class="form-control col-9">
                                <option value="0" <?php if ($this->getsettings->Get2()->forgot_password == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1" <?php if ($this->getsettings->Get2()->forgot_password == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Register</label>
                            <select id="enable_register" class="form-control col-9">
                                <option value="0" <?php if ($this->getsettings->Get2()->register == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1" <?php if ($this->getsettings->Get2()->register == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Attendance</label>
                            <select id="enable_attendance" class="form-control col-9">
                                <option value="0" <?php if ($this->getsettings->Get2()->attendance == 0){echo 'selected';} ?>>Disabled</option>
                                <option value="1" <?php if ($this->getsettings->Get2()->attendance == 1){echo 'selected';} ?>>Enabled</option>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Feature">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                        $(document).ready(function(){
                            $('#featuresettings_form').on('submit', function(e){
                                e.preventDefault();

                                if ($('#enable_webshop').val() == '' || $('#enable_webshop').val() == null){
                                    ShowToast(2000, 'warning', 'Webshop State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_trademarket').val() == '' || $('#enable_trademarket').val() == null){
                                    ShowToast(2000, 'warning', 'Trade Market State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_exchangeticket').val() == '' || $('#enable_exchangeticket').val() == null){
                                    ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_redeemcode').val() == '' || $('#enable_redeemcode').val() == null){
                                    ShowToast(2000, 'warning', 'Redeem Code State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_voucher').val() == '' || $('#enable_voucher').val() == null){
                                    ShowToast(2000, 'warning', 'Voucher State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_forgotpassword').val() == '' || $('#enable_forgotpassword').val() == null){
                                    ShowToast(2000, 'warning', 'Forgot Password State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_register').val() == '' || $('#enable_register').val() == null){
                                    ShowToast(2000, 'warning', 'Register State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_attendance').val() == '' || $('#enable_register').val() == null){
                                    ShowToast(2000, 'warning', 'Attendance State Cannot Be Empty.');
                                    return;
                                }
                                else{
                                    SetAttribute('submit', 'button', 'Processing...');

                                    $.ajax({
                                        url: '<?php echo base_url('adm/settings/do_submit_featuresettings') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                            'enable_webshop' : $('#enable_webshop').val(),
                                            'enable_trademarket' : $('#enable_trademarket').val(),
                                            'enable_exchangeticket' : $('#enable_exchangeticket').val(),
                                            'enable_redeemcode' : $('#enable_redeemcode').val(),
                                            'enable_voucher' : $('#enable_voucher').val(),
                                            'enable_forgotpassword' : $('#enable_forgotpassword').val(),
                                            'enable_register' : $('#enable_register').val(),
                                            'enable_attendance' : $('#enable_attendance').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetAttribute('submit', 'submit', 'Submit Feature');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'success', Result.message);
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('submit', 'submit', 'Submit Feature');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'submit', 'Submit Feature');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                        },
                                        error: function(){
                                            ShowToast(1000, 'info', 'Generate New Request Token...');

                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN = Result.token;
                                                    }

                                                    return SubmitSettings();
                                                },
                                                error: function(){
                                                    SetAttribute('submit', 'submit', 'Submit Feature');
                                                    ShowToast(2000, 'error', 'Failed To Submit Settings.');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    });
                                }
                            });
                        });

                        function SubmitSettings()
                        {
                            if ($('#enable_webshop').val() == '' || $('#enable_webshop').val() == null){
                                ShowToast(2000, 'warning', 'Webshop State Cannot Be Empty.');
                                return;
                            }
                            else if ($('#enable_trademarket').val() == '' || $('#enable_trademarket').val() == null){
                                ShowToast(2000, 'warning', 'Trade Market State Cannot Be Empty.');
                                return;
                            }
                            else if ($('#enable_exchangeticket').val() == '' || $('#enable_exchangeticket').val() == null){
                                ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                return;
                            }
                            else if ($('#enable_voucher').val() == '' || $('#enable_voucher').val() == null){
                                ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                return;
                            }
                            else if ($('#enable_forgotpassword').val() == '' || $('#enable_forgotpassword').val() == null){
                                ShowToast(2000, 'warning', 'Forgot Password State Cannot Be Empty.');
                                return;
                            }
                            else if ($('#enable_register').val() == '' || $('#enable_register').val() == null){
                                ShowToast(2000, 'warning', 'Register State Cannot Be Empty.');
                                return;
                            }
                            else{
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?php echo base_url('adm/settings/do_submit_featuresettings') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                        'enable_webshop' : $('#enable_webshop').val(),
                                        'enable_trademarket' : $('#enable_trademarket').val(),
                                        'enable_exchangeticket' : $('#enable_exchangeticket').val(),
                                        'enable_voucher' : $('#enable_voucher').val(),
                                        'enable_forgotpassword' : $('#enable_forgotpassword').val(),
                                        'enable_register' : $('#enable_register').val()
                                    },
                                    success: function(data){
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true'){
                                            SetAttribute('submit', 'submit', 'Submit Feature');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'success', Result.message);
                                            return;
                                        }
                                        else if (Result.response == 'false'){
                                            SetAttribute('submit', 'submit', 'Submit Feature');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'submit', 'Submit Feature');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                            return;
                                        }
                                    },
                                    error: function(){
                                        SetAttribute('submit', 'submit', 'Submit Feature');
                                        ShowToast(2000, 'error', 'Failed To Submit Settings.');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                });
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>