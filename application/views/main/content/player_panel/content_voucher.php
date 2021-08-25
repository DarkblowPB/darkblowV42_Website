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
                            <?php echo form_open('', 'id="voucher_form" autocomplte="off"') ?>
                                <div class="form-group">
                                    <label>Voucher Code</label>
                                    <input type="text" id="voucher_code" class="form-control">
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Submit Voucher">
                                </div>
                            <?php echo form_close() ?>
                            <script>
                                $(document).ready(function(){
                                    $('#voucher_form').on('submit', function(e){
                                        e.preventDefault();
                                        if ($('#voucher_code').val() == ""){
                                            ShowToast(2000, 'error', 'Voucher Code Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            $.ajax({
                                                url: '<?php echo base_url('player_panel/voucher/do_redeem') ?>',
                                                type: 'POST',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
                                                    'voucher_code' : $('#voucher_code').val()
                                                },
                                                success: function(data){
                                                    if (data == "true"){
                                                        ShowToast(2000, 'success', 'Successfully Redeemed Voucher Code.');
                                                        setTimeout(() => {
                                                            window.location = '<?php echo base_url('player_panel/voucher') ?>';
                                                        }, 2500);
                                                    }
                                                    else if (data == "false"){
                                                        ShowToast(2000, 'error', 'Failed To Redeem Voucher Code.');
                                                        setTimeout(() => {
                                                            window.location = '<?php echo base_url('player_panel/voucher') ?>';
                                                        }, 2500);
                                                    }
                                                    else{
                                                        ShowToast(3500, 'error', data);
                                                        setTimeout(() => {
                                                            window.location = '<?php echo base_url('player_panel/voucher') ?>';
                                                        }, 4000);
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