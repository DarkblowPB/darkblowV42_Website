<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1">
                        <?= $this->lang->line('STR_DARKBLOW_124') ?> <span class="text-white">
                            <?= $this->lang->line('STR_DARKBLOW_39') ?>
                        </span>
                    </span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?= form_open('', 'id="voucher_form" autocomplete="off"') ?>
                            <div class="form-group">
                                <label>
                                    <?= $this->lang->line('STR_DARKBLOW_125') ?>
                                </label>
                                <input type="text" id="voucher_code" class="form-control" placeholder="Enter Your Voucher Code">
                            </div>
                            <div class="form-group text-center">
                                <input id="submit" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_201') ?>">
                            </div>
                            <?= form_close() ?>
                            <script>
                                var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                                var RETRY = 0;
                                $(document).ready(function() {
                                    $('#voucher_form').on('submit', function(e) {
                                        e.preventDefault();

                                        return Do_SubmitVoucher();
                                    });
                                });

                                function Do_SubmitVoucher() {
                                    if ($('#voucher_code').val() == '' || $('#voucher_code').val() == null) {
                                        ShowToast(2000, 'warning', 'Voucher Code Cannot Be Empty.');
                                        return;
                                    } else {
                                        SetAttribute('submit', 'button', 'Processing...');

                                        $.ajax({
                                            url: '<?= base_url('player_panel/voucher/do_redeem') ?>',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                                'voucher_code': $('#voucher_code').val()
                                            },
                                            success: function(data) {
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_201') ?>');
                                                ShowToast(2000, Result.response, Result.message);
                                                CSRF_TOKEN = Result.token;
                                            },
                                            error: function() {
                                                if (RETRY >= 3) {
                                                    SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_201') ?>');
                                                    ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_23') ?>');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                } else {
                                                    RETRY += 1;
                                                    ShowToast(1000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

                                                    $.ajax({
                                                        url: '<?= base_url('api/security/csrf') ?>',
                                                        type: 'GET',
                                                        dataType: 'JSON',
                                                        data: {
                                                            '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                                                        },
                                                        success: function(data) {
                                                            var GetString = JSON.stringify(data);
                                                            var Result = JSON.parse(GetString);

                                                            if (Result.response == 'true') {
                                                                CSRF_TOKEN = Result.token;
                                                            }

                                                            return Do_SubmitVoucher();
                                                        },
                                                        error: function() {
                                                            SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_201') ?>');
                                                            ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_23') ?>');
                                                            setTimeout(() => {
                                                                window.location.reload();
                                                            }, 2000);
                                                        }
                                                    });
                                                }
                                            }
                                        });
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