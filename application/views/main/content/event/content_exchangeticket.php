<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">
                    <?= $this->lang->line('STR_DARKBLOW_58') ?>
                </span>
                <?= $this->lang->line('STR_DARKBLOW_59') ?>
            </span></h3>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="nk-feature-2">
                    <div class="nk-feature-cont text-center text-white">
                        <h3 class="nk-feature-title text-main-1">
                            <?= $this->lang->line('STR_DARKBLOW_162') ?>
                        </h3>
                        <?= $this->lang->line('STR_DARKBLOW_60') ?>: <span id="ticket_information" class="font-weight-bold">
                            <?= $ticket ?>
                        </span> <span class="fa fa-ticket ml-5"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <hr class="bg-dark-4">
        <div class="row vertical-gap">
            <?php $num = 1;
            foreach ($item_list as $row) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-white">
                    <div class="nk-feature-2">
                        <div class="nk-feature-icon">
                            <img src="<?= base_url() ?>assets/goodgames/asset/images/img_webshop/<?= $row['item_img'] ?>" style="max-width: 100px;" alt="">
                        </div>
                        <div class="nk-feature-cont text-center">
                            <h3 class="nk-feature-title text-main-1">
                                <?= $row['item_name'] ?>
                            </h3>
                            <p>
                                <?= $this->lang->line('STR_DARKBLOW_61') ?> <?= $row['item_price'] ?>
                                <?= $this->lang->line('STR_DARKBLOW_59') ?>
                            </p>
                            <p style="margin-top: -20px">
                                <?= $this->lang->line('STR_DARKBLOW_62') ?> <?= $this->lib->GetItemDuration($this->lib->GetBuyType($row['item_id']), $row['item_count'], 1); ?>
                            </p>
                            <p style="margin-top: -20px">
                                <?= $this->lang->line('STR_DARKBLOW_63') ?> <?php if ($row['stock'] > 0) {
                                                                                echo $row['stock'] . " Qty";
                                                                            } else {
                                                                                echo "Out Of Stock";
                                                                            } ?>
                            </p>

                            <input type="button" id="submit_<?= $num ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-primary" onclick="Exchange('submit_<?= $num ?>', '<?= $row['id'] ?>')" value="<?= $this->lang->line('STR_DARKBLOW_58') ?>">
                        </div>
                    </div>
                </div>
            <?php $num++;
            endforeach; ?>
        </div>
        <script>
            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
            var RETRY = 0;

            function Exchange(button_id, item_id) {
                if (item_id == '' || item_id == null) {
                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_18') ?>');
                    return;
                } else {
                    SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                    $.ajax({
                        url: '<?= base_url('player_panel/exchange_ticket/do_exchange') ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {
                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                            'id': item_id
                        },
                        success: function(data) {
                            var GetString = JSON.stringify(data);
                            var Result = JSON.parse(GetString);

                            if (Result.response == 'true') {
                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_58') ?>');
                                ShowToast(2000, 'success', Result.message);
                                CSRF_TOKEN = Result.token;
                                $('#ticket_information').html(Result.ticket);
                                return;
                            } else if (Result.response == 'false') {
                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_58') ?>');
                                ShowToast(2000, 'error', Result.message);
                                CSRF_TOKEN = Result.Token;
                            } else {
                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_58') ?>');
                                ShowToast(2000, 'error', Result.message);
                                CSRF_TOKEN = Result.Token;
                            }
                        },
                        error: function() {
                            if (RETRY >= 3) {
                                ShowToast(2000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                                return;
                            } else {
                                RETRY += 1;
                                $.ajax({
                                    url: '<?= base_url('api/security/csrf') ?>',
                                    type: 'GET',
                                    dataType: 'JSON',
                                    data: {},
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            CSRF_TOKEN = Result.token;
                                        }

                                        return Exchange(button_id, item_id);
                                    },
                                    error: function() {
                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_7') ?>');
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