<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="container">
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">
                    <?= $this->lang->line('STR_DARKBLOW_38') ?>
                </span>
                <?= $this->lang->line('STR_DARKBLOW_39') ?>
            </span></h3>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="nk-gap-3"></div>
                <?= form_open('', 'id="login_form" autocomplete="off"') ?>
                <div class="form-group">
                    <label class="col-form-label">
                        <?= $this->lang->line('STR_DARKBLOW_40') ?>
                    </label>
                    <input type="text" id="username" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_41') ?>" autofocus required>
                </div>
                <div class="form-group">
                    <label class="col-form-label">
                        <?= $this->lang->line('STR_DARKBLOW_42') ?>
                    </label>
                    <div class="row">
                        <div class="col-9">
                            <input type="password" id="password" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_43') ?>" required>
                        </div>
                        <div class="col-3">
                            <input type="button" id="show_password" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Show" onclick="ShowPassword()">
                        </div>
                    </div>
                </div>
                <div class="nk-gap-3"></div>
                <div class="form-group text-center">
                    <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-primary" value="<?= $this->lang->line('STR_DARKBLOW_38') ?>">
                </div>
                <div class="form-group text-center text-white">
                    OR
                </div>
                <div class="form-group text-center">
                    <a href="<?= base_url('register') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-success">
                        <?= $this->lang->line('STR_DARKBLOW_44') ?>
                    </a>
                </div>
                <?= form_close() ?>
                <script>
                    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                    var RETRY = 0;
                    $(document).ready(function() {
                        $('#login_form').on('submit', function(e) {
                            e.preventDefault();
                            return DoLogin();
                        });
                    });

                    function DoLogin() {
                        if ($('#username').val() == '' || $('#username').val() == null) {
                            ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_1') ?>');
                            document.getElementById('username').focus();
                        } else if ($('#password').val() == '' || $('#password').val() == null) {
                            ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_3') ?>');
                            document.getElementById('password').focus();
                        } else {
                            SetAttribute('submit', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                            $.ajax({
                                url: '<?= base_url('login/do_login') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'username': $('#username').val(),
                                    'password': $('#password').val()
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_38') ?>')
                                    CSRF_TOKEN = Result.token;
                                    ShowToast(2000, Result.response, Result.message);
                                    if (Result.response == 'success') {
                                        setTimeout(() => {
                                            window.location = '<?= base_url('player_panel') ?>';
                                        }, 2000);
                                    } else {
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                },
                                error: function() {
                                    if (RETRY >= 3) {
                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_18') ?>');
                                        SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_38') ?>');
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
                                                var GetString2 = JSON.stringify(data);
                                                var Result2 = JSON.parse(GetString2);

                                                if (Result2.response == 'true') {
                                                    CSRF_TOKEN = Result2.token;

                                                    return DoLogin();
                                                } else {
                                                    window.location.reload();
                                                }
                                            },
                                            error: function() {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_38') ?>');
                                                ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_2') ?>');
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

                    function ShowPassword() {
                        var PasswordField = document.getElementById('password');
                        var ButtonPasswordField = document.getElementById('show_password');
                        if (PasswordField.type == 'password') {
                            PasswordField.setAttribute('type', 'text');
                            ButtonPasswordField.setAttribute('value', 'Hide');
                        } else {
                            PasswordField.setAttribute('type', 'password');
                            ButtonPasswordField.setAttribute('value', 'Show');
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>