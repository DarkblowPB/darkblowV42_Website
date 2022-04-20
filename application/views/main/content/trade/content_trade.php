<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span class="text-main-1">
                <?= $this->lang->line('STR_DARKBLOW_141') ?> <span class="text-white">
                    <?= $this->lang->line('STR_DARKBLOW_142') ?>
                </span>
            </span></h3>
        <div class="row vertical-gap">
            <?php if (!empty($this->session->userdata('uid'))) : ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card bg-dark-2">
                        <div class="card-body text-center">
                            <a href="<?= base_url('trade/addpost') ?>" class="nk-btn nk-btn-rounded nk-btn-sm nk-btn-outline nk-btn-color-main-5"><i class="fa fa-plus-circle mr-2"></i>
                                <?= $this->lang->line('STR_DARKBLOW_143') ?>
                            </a>
                            <a href="javascript:void(0)" class="nk-btn nk-btn-rounded nk-btn-sm nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'info', '<?= $this->lang->line('STR_INFO_2') ?>')"><i class="fa fa-history mr-2"></i>
                                <?= $this->lang->line('STR_DARKBLOW_144') ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card bg-dark-2">
                    <div class="card-body text-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-10 mb-10">
                                    <div class="row justify-content-center">
                                        <?php
                                        if ($items != null) {
                                            $num = 1;
                                            foreach ($items as $row) :
                                        ?>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-6 text-center mt-15">
                                                    <div class="card bg-dark-1">
                                                        <div class="card-header text-center text-white" style="font-weight: bold; text-transform: uppercase;">
                                                            <= $row['item_name'] ?>
                                                        </div>
                                                        <div class="card-body text-left">
                                                            <span>
                                                                <?= $this->lang->line('STR_DARKBLOW_68') ?> : <span class="text-white" style="font-weight: bold;"><?php switch ($row['item_category']) {
                                                                                                                                                                        case "1": {
                                                                                                                                                                                echo "Weapon";
                                                                                                                                                                                break;
                                                                                                                                                                            }
                                                                                                                                                                        case "2": {
                                                                                                                                                                                echo "Chara";
                                                                                                                                                                                break;
                                                                                                                                                                            }
                                                                                                                                                                        case "3": {
                                                                                                                                                                                echo "Item";
                                                                                                                                                                                break;
                                                                                                                                                                            }
                                                                                                                                                                        default:
                                                                                                                                                                            break;
                                                                                                                                                                    } ?></span><br>
                                                                <?= $this->lang->line('STR_DARKBLOW_145') ?> &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-white" style="font-weight: bold;">
                                                                    <?= $this->trade->GetPlayerName($row['item_owner']) ?>
                                                                </span><br>
                                                                <?= $this->lang->line('STR_DARKBLOW_174') ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-white" style="font-weight: bold;">&#8373; <?= number_format(($row['item_price'] + 250), '0', ',', '.') ?></span><br>
                                                                <div class="text-center mt-25">
                                                                    <input type="button" id="submit_<= $num ?>" onclick="Buy_Item('submit_<= $num ?>', '<= $row['id'] ?>')" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-sm nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_206') ?>">
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $num++;
                                            endforeach;
                                        } else {
                                            ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                                <?= $this->lang->line('STR_INFO_3') ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <script>
                                            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                                            var RETRY = 0;
                                            var sessionUID = "<?php if (empty($this->session->userdata('uid'))) {
                                                                    echo "0";
                                                                }
                                                                if (!empty($this->session->userdata('uid'))) {
                                                                    echo $this->session->userdata('uid');
                                                                } ?>";

                                            function Buy_Item(button_id, id) {
                                                if (sessionUID == '0') {
                                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_15 ') ?>');
                                                    setTimeout(() => {
                                                        window.location = '<?= base_url('login') ?>';
                                                    }, 2500);
                                                } else {
                                                    SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_INFO_8 ') ?>');
                                                    $.ajax({
                                                        url: '<?= base_url('trade/do_buy') ?>',
                                                        type: 'POST',
                                                        dataType: 'JSON',
                                                        data: {
                                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                                            'trade_id': id
                                                        },
                                                        success: function(data) {
                                                            var GetString = JSON.stringify(data);
                                                            var Result = JSON.parse(GetString);

                                                            if (Result.response == 'true') {
                                                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_206 ') ?>');
                                                                ShowToast(2000, 'success', Result.message);
                                                                CSRF_TOKEN = Result.token;
                                                                setTimeout(() => {
                                                                    window.location.reload();
                                                                }, 2000);
                                                                return;
                                                            } else if (Result.response == 'false') {
                                                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_206 ') ?>');
                                                                ShowToast(2000, 'error', Result.message);
                                                                CSRF_TOKEN = Result.token;
                                                                return;
                                                            } else {
                                                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_206 ') ?>');
                                                                ShowToast(2000, 'error', Result.message);
                                                                CSRF_TOKEN = Result.token;
                                                                return;
                                                            }
                                                        },
                                                        error: function() {
                                                            if (RETRY >= 3) {
                                                                SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_206 ') ?>');
                                                                ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_15 ') ?>');
                                                                setTimeout(() => {
                                                                    window.location.reload();
                                                                }, 2000);
                                                            } else {
                                                                ShowToast(1000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

                                                                $.ajax({
                                                                    url: '<?= base_url('api/security/csrf') ?>',
                                                                    type: 'GET',
                                                                    dataType: 'JSON',
                                                                    data: {
                                                                        '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                                                    },
                                                                    success: function(data) {
                                                                        var GetString = JSON.stringify(data);
                                                                        var Result = JSON.parse(GetString);

                                                                        if (Result.response == 'true') {
                                                                            CSRF_TOKEN = Result.token;
                                                                        }

                                                                        return Buy_Item();
                                                                    },
                                                                    error: function() {
                                                                        SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_206 ') ?>');
                                                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_27 ') ?>');
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>