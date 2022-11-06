<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2">
            <span class="text-main-1">
                <?= $this->lang->line('STR_DARKBLOW_47') ?>
                <span class="text-white"><?= $this->lang->line('STR_DARKBLOW_48') ?></span>
            </span>
        </h3>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?= form_open('', 'id="changeemail_form" autocomplete="off"') ?>
                <div class="form-group">
                    <label class="col-form-label"><?= $this->lang->line('STR_DARKBLOW_49') ?></label><br>
                    <?php if ($this->changeemail->IsConfirmEmail($player->email)) : ?>
                        <label class="form-control"><?= $player->email ?></label>
                        <input type="hidden" id="hidden_email" value="<?= $player->email ?>">
                    <?php endif; ?>
                    <?php if (!$this->changeemail->IsConfirmEmail($player->email)) : ?>
                        <label class="form-control"><button type="button" id="resend_email" onclick="return ShowToast(2000, 'info', '<?= $this->lang->line('STR_INFO_2') ?>')" class="nk-btn nk-btn-rounded btn-block nk-btn-outline nk-btn-color-main-5"><?= $this->lang->line('STR_DARKBLOW_48') ?></button></label>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label class="col-form-label"><?= $this->lang->line('STR_DARKBLOW_50') ?></label>
                    <input type="email" id="new_email" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_51') ?>">
                </div>
                <div class="form-group">
                    <label class="col-form-label"><?= $this->lang->line('STR_DARKBLOW_52') ?></label>
                    <input type="email" id="confirm_email" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_53') ?>">
                </div>
                <div class="form-group text-center">
                    <?php if ($this->changeemail->IsConfirmEmail($player->email)) : ?>
                        <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" value="<?= $this->lang->line('STR_DARKBLOW_181') ?>">
                    <?php endif; ?>
                    <?php if (!$this->changeemail->IsConfirmEmail($player->email)) : ?>
                        <label class="form-control bg-main-1 mt-50"><?= $this->lang->line('STR_DARKBLOW_54') ?></label>
                    <?php endif; ?>
                </div>
                <?= form_close() ?>
                <?php if (!$this->changeemail->IsConfirmEmail($player->email)) : ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;

                        function Resend_Email() {
                            $.ajax({
                                url: '<?= base_url('player_panel / changeemail / do_resend ') ?>',
                                type: 'POST',
                                timeout: 0,
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'email': '<?= $player->email ?>'
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true') {
                                        SetAttribute('resend_email', 'button', '<?= $this->lang->line('STR_DARKBLOW_48 ') ?>');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'success', Result.message);
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    } else {
                                        SetAttribute('resend_email', 'button', '<?= $this->lang->line('STR_DARKBLOW_48 ') ?>');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    }
                                },
                                error: function(data) {
                                    if (RETRY >= 3) {
                                        SetAttribute('resend_email', 'button', '<?= $this->lang->line('STR_DARKBLOW_48 ') ?>')
                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_19 ') ?>');
                                        return;
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

                                                return Resend_Email();
                                            },
                                            error: function() {
                                                ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_3 ') ?>');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    </script>
                <?php endif; ?>
                <?php if ($this->changeemail->IsConfirmEmail($player->email)) : ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        $(document).ready(function() {
                            $('#changeemail_form').on('submit', function(e) {
                                e.preventDefault();

                                return ChangeEmail();
                            });
                        });

                        function ChangeEmail() {
                            if ($('#new_email').val() == $('#hidden_email').val()) {
                                ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_5 ') ?>');
                                setTimeout(() => {
                                    window.location = '<?= base_url('player_panel / changeemail ') ?>';
                                }, 2000);
                                return;
                            } else if ($('#confirm_email').val() != $('#new_email').val()) {
                                ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_6 ') ?>');
                                setTimeout(() => {
                                    window.location = '<?= base_url('player_panel / changeemail ') ?>';
                                }, 2000);
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('player_panel / changeemail / do_changeemail ') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'old_email': '<?= $player->email ?>',
                                        'new_email': $('#new_email').val(),
                                        'confirm_email': $('#confirm_email').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_181 ') ?>');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            setTimeout(() => {
                                                window.location = '<?= base_url('player_panel') ?>';
                                            }, 2000);
                                        }
                                    },
                                    error: function(data) {
                                        if (RETRY >= 3) {
                                            SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_181 ') ?>');
                                            ShowToast(2000, 'error', 'Failed To <?= $this->lang->line('STR_DARKBLOW_181 ') ?>.');
                                            return;
                                        } else {
                                            RETRY += 1;
                                            ShowToast(2000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

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

                                                    return ChangeEmail();
                                                },
                                                error: function() {
                                                    SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_181 ') ?>');
                                                    ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_20 ') ?>');
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
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>