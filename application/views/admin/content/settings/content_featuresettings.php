<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <?= form_open('', 'id="featuresettings_form" autocomplete="off"') ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Webshop</label>
                                <select id="enable_webshop" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->webshop == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->webshop == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Trade Market</label>
                                <select id="enable_trademarket" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->trade_market == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->trade_market == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Exchange Ticket (Experimental)</label>
                                <select id="enable_exchangeticket" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->exchange_ticket == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->exchange_ticket == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Redeem Code</label>
                                <select id="enable_redeemcode" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->redeemcode == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->redeemcode == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Voucher</label>
                                <select id="enable_voucher" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->voucher == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->voucher == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Forgot Password</label>
                                <select id="enable_forgotpassword" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->forgot_password == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->forgot_password == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Register</label>
                                <select id="enable_register" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->register == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->register == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Attendance</label>
                                <select id="enable_attendance" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->attendance == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->attendance == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="col-form-label">Email Verification</label>
                                <select name="enable_email_verification" id="enable_email_verification" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->email_verification == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->email_verification == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Google Register</label>
                                <select name="enable_google_register" id="enable_google_register" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->google_register == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->google_register == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Log System</label>
                                <select name="enable_log_system" id="enable_log_system" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->google_register == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->google_register == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Pack Shop</label>
                                <select name="enable_packshop" id="enable_packshop" class="form-control reward_selection" style="width: 100%;">
                                    <option value="0" <?php if ($this->darkblowsettings->load()->packshop == 0) echo 'selected'; ?>>Disabled</option>
                                    <option value="1" <?php if ($this->darkblowsettings->load()->packshop == 1) echo 'selected'; ?>>Enabled</option>
                                </select>
                            </div>
                        </div>
                    </div>
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
                            } else if ($('#enable_packshop').val() == '' || $('#enable_packshop').val() == null) {
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
                                        'enable_log_system': $('#enable_log_system').val(),
                                        'enable_packshop': $('#enable_packshop').val()
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
                <div class="card-footer text-right">
                    <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Feature">
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>