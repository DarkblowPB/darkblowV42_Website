<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="featuresettings_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Webshop</label>
                        <select id="enable_webshop" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->webshop == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->webshop == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Trade Market</label>
                        <select id="enable_trademarket" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->trade_market == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->trade_market == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Exchange Ticket (Experimental)</label>
                        <select id="enable_exchangeticket" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->exchange_ticket == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->exchange_ticket == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Redeem Code</label>
                        <select id="enable_redeemcode" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->redeemcode == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->redeemcode == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Voucher</label>
                        <select id="enable_voucher" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->voucher == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->voucher == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Forgot Password</label>
                        <select id="enable_forgotpassword" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->forgot_password == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->forgot_password == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Register</label>
                        <select id="enable_register" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->register == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->register == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Attendance</label>
                        <select id="enable_attendance" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->attendance == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->attendance == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Email Verification</label>
                        <select name="enable_email_verification" id="enable_email_verification" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->email_verification == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->email_verification == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Google Register</label>
                        <select name="enable_google_register" id="enable_google_register" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->google_register == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->google_register == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Log System</label>
                        <select name="enable_log_system" id="enable_log_system" class="form-control col-9 reward_selection">
                            <option value="0" <?php if ($this->getsettings->Get()->google_register == 0) {
                                                    echo 'selected';
                                                } ?>>Disabled</option>
                            <option value="1" <?php if ($this->getsettings->Get()->google_register == 1) {
                                                    echo 'selected';
                                                } ?>>Enabled</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Feature">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(function() {
                            $('#featuresettings_form').on('submit', function(e) {
                                e.preventDefault();

                                return SubmitSettings();
                            });
                        });

                        function SubmitSettings() {
                            if ($('#enable_webshop').val() == '' || $('#enable_webshop').val() == null) {
                                ShowToast(2000, 'warning', 'Webshop State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_trademarket').val() == '' || $('#enable_trademarket').val() == null) {
                                ShowToast(2000, 'warning', 'Trade Market State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_exchangeticket').val() == '' || $('#enable_exchangeticket').val() == null) {
                                ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_redeemcode').val() == '' || $('#enable_redeemcode').val() == null) {
                                ShowToast(2000, 'warning', 'Redeem Code State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_voucher').val() == '' || $('#enable_voucher').val() == null) {
                                ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_forgotpassword').val() == '' || $('#enable_forgotpassword').val() == null) {
                                ShowToast(2000, 'warning', 'Forgot Password State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_register').val() == '' || $('#enable_register').val() == null) {
                                ShowToast(2000, 'warning', 'Register State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_attendance').val() == '' || $('#enable_attendance').val() == null) {
                                ShowToast(2000, 'warning', 'Attendance State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_email_verification').val() == '' || $('#enable_email_verification').val() == null) {
                                ShowToast(2000, 'warning', 'Email Verification State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_google_register').val() == '' || $('#enable_google_register').val() == null) {
                                ShowToast(2000, 'warning', 'Google Register State Cannot Be Empty.');
                                return;
                            } else if ($('#enable_log_system').val() == '' || $('#enable_log_system').val() == null) {
                                ShowToast(2000, 'warning', 'Log System State Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/settings/do_submit_featuresettings') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'enable_webshop': $('#enable_webshop').val(),
                                        'enable_trademarket': $('#enable_trademarket').val(),
                                        'enable_exchangeticket': $('#enable_exchangeticket').val(),
                                        'enable_redeemcode': $('#enable_redeemcode').val(),
                                        'enable_voucher': $('#enable_voucher').val(),
                                        'enable_forgotpassword': $('#enable_forgotpassword').val(),
                                        'enable_register': $('#enable_register').val(),
                                        'enable_attendance': $('#enable_attendance').val(),
                                        'enable_email_verification': $('#enable_email_verification').val(),
                                        'enable_google_register': $('#enable_google_register').val(),
                                        'enable_log_system': $('#enable_log_system').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('submit', 'submit', 'Submit Feature');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'success', Result.message);
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute('submit', 'submit', 'Submit Feature');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                            return;
                                        } else {
                                            SetAttribute('submit', 'submit', 'Submit Feature');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                            return;
                                        }
                                    },
                                    error: function() {
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