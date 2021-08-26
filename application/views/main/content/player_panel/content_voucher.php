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
                                var CSRF_TOKEN = '';
                                $(document).ready(function(){
                                    $('#voucher_form').on('submit', function(e){
                                        e.preventDefault();
                                        if ($('#voucher_code').val() == ""){
                                            ShowToast(2000, 'error', 'Voucher Code Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            SubmitCondition('false');
                                            
                                            if (CSRF_TOKEN == ''){
                                                CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                            }
                                            
                                            $.ajax({
                                                url: '<?php echo base_url('player_panel/voucher/do_redeem') ?>',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                    'voucher_code' : $('#voucher_code').val()
                                                },
                                                success: function(data){
                                                    var decodeString = JSON.stringify(data);
                                                    var jsonString = JSON.parse(decodeString);
                                                    if (jsonString.response == "true"){
                                                        CSRF_TOKEN = jsonString.token;
                                                        ShowToast(2000, 'success', jsonString.message);
                                                        setTimeout(() => {
                                                            SubmitCondition('true');
                                                        }, 2000);
                                                        return;
                                                    }
                                                    else if (jsonString.response == "false"){
                                                        CSRF_TOKEN = jsonString.token;
                                                        ShowToast(2000, 'error', jsonString.message);
                                                        setTimeout(() => {
                                                            SubmitCondition('true');
                                                        }, 2000);
                                                        return;
                                                    }
                                                    else{
                                                        CSRF_TOKEN = jsonString.token;
                                                        ShowToast(2000, 'error', jsonString.message);
                                                        setTimeout(() => {
                                                            SubmitCondition('true');
                                                        }, 2000);
                                                        return;
                                                    }
                                                },
                                                error: function(data){
                                                    ShowToast(3500, 'error', data);
                                                    setTimeout(() => {
                                                        window.location = '<?php echo base_url('player_panel/voucher') ?>';
                                                    }, 4000);
                                                }
                                            });
                                        }
                                    });
                                });
                                
                                function SubmitCondition(param)
                                {
                                    let getBtn = document.getElementById('submit');
                                    if (param == 'true'){
                                        getBtn.setAttribute('type', 'submit');
                                        getBtn.setAttribute('value', 'Submit Voucher');
                                    }
                                    if (param == 'false'){
                                        getBtn.setAttribute('type', 'button');
                                        getBtn.setAttribute('value', 'Processing...');
                                    }
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