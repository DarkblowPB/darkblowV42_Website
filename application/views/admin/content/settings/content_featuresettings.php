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
                        <div class="form-group text-right">
                            <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Feature">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '';
                        $(document).ready(function(){
                            $('#featuresettings_form').on('submit', function(e){
                                e.preventDefault();

                                if ($('#enable_webshop').val() == ""){
                                    ShowToast(2000, 'warning', 'Webshop State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_trademarket').val() == ""){
                                    ShowToast(2000, 'warning', 'Trade Market State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_exchangeticket').val() == ""){
                                    ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_voucher').val() == ""){
                                    ShowToast(2000, 'warning', 'Exchange Ticket State Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#enable_forgotpassword').val() == ""){
                                    ShowToast(2000, 'warning', 'Forgot Password State Cannot Be Empty.');
                                    return;
                                }
                                else{
                                    
                                    if (CSRF_TOKEN == ''){
                                        CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                    }

                                    SetButton('false');

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
                                            'enable_forgotpassword' : $('#enable_forgotpassword').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetButton('true');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'success', Result.message);
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetButton('true');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                            else{
                                                SetButton('true');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                        },
                                        error: function(data){
                                            ShowToast(2000, 'error', data.responseText);
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        }
                                    });
                                }
                            });
                        });

                        function SetButton(param)
                        {
                            var Q = document.getElementById('submit');
                            if (param == 'true'){
                                Q.setAttribute('type', 'submit');
                                Q.setAttribute('value', 'Submit Feature');
                            }
                            if (param == 'false'){
                                Q.setAttribute('type', 'button');
                                Q.setAttribute('value', 'Processing...');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>