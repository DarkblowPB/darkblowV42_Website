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
                            <?php echo form_open('', 'id="voucher_form" autocomplete="off"') ?>
                                <div class="form-group">
                                    <label>Voucher Code</label>
                                    <input type="text" id="voucher_code" class="form-control" placeholder="Enter Your Voucher Code">
                                </div>
                                <div class="form-group text-center">
                                    <input id="submit" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Submit Voucher">
                                </div>
                            <?php echo form_close() ?>
                            <script>
                                var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                $(document).ready(function(){
                                    $('#voucher_form').on('submit', function(e){
                                        e.preventDefault();
                                        if ($('#voucher_code').val() == ''){
                                            ShowToast(2000, 'error', 'Voucher Code Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'button', 'Processing...');

                                            $.ajax({
                                                url: '<?php echo base_url('player_panel/voucher/do_redeem') ?>',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                    'voucher_code' : $('#voucher_code').val()
                                                },
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        SetAttribute('submit', 'submit', 'Submit Voucher');
                                                        ShowToast(2000, 'success', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                    else if (Result.response == 'false'){
                                                        SetAttribute('submit', 'submit', 'Submit Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                    else{
                                                        SetAttribute('submit', 'submit', 'Submit Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                },
                                                error: function(data){
                                                    SetAttribute('submit', 'button', 'Generating New Request Token...');
                                                    ShowToast(1000, 'info', 'Generating New Request Token...');

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

                                                            Do_SubmitVoucher();
                                                        },
                                                        error: function(){
                                                            SetAttribute('submit', 'submit', 'Submit Voucher');
                                                            ShowToast(2000, 'error', 'Failed To Submit Voucher.');
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
                                
                                function Do_SubmitVoucher()
                                {
                                    SetAttribute('submit', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?php echo base_url('player_panel/voucher/do_redeem') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_hash() ?>' : CSRF_TOKEN,
                                            'voucher_code' : $('#voucher_code').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetAttribute('submit', 'submit', 'Submit Voucher');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                SetAttribute('submit', 'submit', 'Submit Voucher');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'submit', 'Submit Voucher');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function(){
                                            SetAttribute('submit', 'submit', 'Submit Voucher');
                                            ShowToast(2000, 'error', 'Failed To Submit Voucher.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
            </div>
        </div>
    </div>
</div>