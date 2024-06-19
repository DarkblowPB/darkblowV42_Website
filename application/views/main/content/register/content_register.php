<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2">
                    <span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_44') ?>
                        <span class="text-white"><?= $this->lang->line('STR_DARKBLOW_39') ?></span>
                    </span>
                </h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?= form_open('', 'id="register_form" autocomplete="off"', array(
                            'custom_csrf' => $this->darkblowlib->GenerateRandomTokenV2(128),
                            'custom_csrf2' => ''
                        )); ?>
                        <div class="form-group">
                            <label for="username"><?= $this->lang->line('STR_DARKBLOW_40') ?></label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" name="login" id="login" placeholder="<?= $this->lang->line('STR_DARKBLOW_41') ?>" minlength="4" maxlength="16" autofocus required>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="check_username" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" value="<?= $this->lang->line('STR_DARKBLOW_202') ?>" onclick="CheckUsername()">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email"><?= $this->lang->line('STR_DARKBLOW_131') ?></label>
                            <?php if (!empty($this->session->userdata('g_email'))) : ?>
                                <label class="form-control"><?= $_SESSION['g_email'] ?></label>
                            <?php endif; ?>
                            <?php if (empty($this->session->userdata('g_email'))) : ?>
                                <input type="mail" class="form-control" id="email" name="email" placeholder="<?= $this->lang->line('STR_DARKBLOW_132') ?>" required>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="password"><?= $this->lang->line('STR_DARKBLOW_42') ?></label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_43') ?>" minlength="4" maxlength="16" required>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="show_password" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" value="Show">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="re_password"><?= $this->lang->line('STR_DARKBLOW_57') ?></label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="password" class="form-control" name="re_password" id="re_password" placeholder="<?= $this->lang->line('STR_DARKBLOW_133') ?>" minlength="4" maxlength="16" required>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="show_re_password" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" value="Show">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?= $this->lang->line('STR_DARKBLOW_21') ?></label>
                            <select class="form-control" name="hint_question" id="hint_question" required>
                                <option value="" disabled selected><?= $this->lang->line('STR_DARKBLOW_22') ?></option>
                                <?php for ($i = 0; $i < count(load_hintquestion()); $i++) : ?>
                                    <option value="<?= load_hintquestion()[$i] ?>"><?= load_hintquestion()[$i] ?></option>
                                <?php endfor ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= $this->lang->line('STR_DARKBLOW_23') ?></label>
                            <input type="text" class="form-control" name="hint_answer" id="hint_answer" placeholder="<?= $this->lang->line('STR_DARKBLOW_24') ?>" required>
                        </div>
                        <div class="nk-gap"></div>
                        <div class="form-group text-center">
                            <input id="submit" type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" value="<?= $this->lang->line('STR_DARKBLOW_44') ?>" onclick="ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_20') ?>');">
                            <a href="<?= base_url('login') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><?= $this->lang->line('STR_DARKBLOW_155') ?></a>
                        </div>
                        <?= form_close(); ?>
                        <script>
                            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                            var RETRY = 0;

                            $(document).ready(() => {
                                $('#register_form').on('submit', (e) => {
                                    e.preventDefault();

                                    return Do_Register();
                                });
                                document.getElementById('show_password').addEventListener('click', () => {
                                    if ($('#show_password').val() == 'Show') {
                                        document.getElementById('show_password').setAttribute('value', 'Hide');
                                        document.getElementById('password').setAttribute('type', 'text');
                                    } else {
                                        document.getElementById('show_password').setAttribute('value', 'Show');
                                        document.getElementById('password').setAttribute('type', 'password');
                                    }
                                });
                                document.getElementById('show_re_password').addEventListener('click', () => {
                                    if ($('#show_re_password').val() == 'Show') {
                                        document.getElementById('show_re_password').setAttribute('value', 'Hide');
                                        document.getElementById('re_password').setAttribute('type', 'text');
                                    } else {
                                        document.getElementById('show_re_password').setAttribute('value', 'Show');
                                        document.getElementById('re_password').setAttribute('type', 'password');
                                    }
                                });
                            });

                            function CheckUsername() {
                                if ($('#login').val() == '') {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_1') ?>');
                                    return;
                                } else {
                                    SetAttribute('check_username', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                                    $.ajax({
                                        url: '<?= base_url('register/do_checkusername') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'login': $('#login').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'success') document.getElementById('submit').setAttribute('onclick', '');

                                            SetAttribute('check_username', 'button', '<?= $this->lang->line('STR_DARKBLOW_202') ?>');
                                            SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_44') ?>');
                                            ShowToast(2000, Result.response, Result.message);
                                            CSRF_TOKEN = Result.token;
                                        },
                                        error: function() {
                                            if (RETRY >= 3) {
                                                SetAttribute('check_username', 'button', '<?= $this->lang->line('STR_DARKBLOW_202') ?>');
                                                ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_24') ?>');
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

                                                        if (Result.response == 'true') CSRF_TOKEN = Result.token;

                                                        return CheckUsername();
                                                    },
                                                    error: function() {
                                                        SetAttribute('check_username', 'button', '<?= $this->lang->line('STR_DARKBLOW_202') ?>');
                                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_13') ?>');
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

                            function Do_Register() {
                                if ($('#login').val() == '') {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_1') ?>');
                                    document.getElementById('login').focus();
                                }
                                <?php if (empty($this->session->userdata('g_email'))) : ?>
                                    else if ($('#email').val() == '') {
                                        ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_13') ?>');
                                        document.getElementById('email').focus();
                                    }
                                <?php endif; ?>
                                else if ($('#password').val() == '') {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_4') ?>');
                                    document.getElementById('password').focus();
                                } else if ($('#re_password').val() == '') {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_9') ?>');
                                    document.getElementById('re_password').focus();
                                } else if ($('#re_password').val() != $('#password').val()) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_14') ?>');
                                    document.getElementById('re_password').focus();
                                } else if ($('#hint_question').val() == '' || $('#hint_question').val() == null) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_10') ?>');
                                    document.getElementById('hint_question').focus();
                                } else if ($('#hint_answer').val() == '') {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_3') ?>');
                                    document.getElementById('hint_answer').focus();
                                } else {
                                    SetAttribute('submit', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                                    $.ajax({
                                        url: '<?= base_url('register/do_register') ?>',
                                        type: 'POST',
                                        timeout: 0,
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'login': $('#login').val(),
                                            <?php if (!empty($this->session->userdata('g_email'))) : ?> 'email': '<?= $this->session->userdata('g_email') ?>',
                                            <?php endif; ?>
                                            <?php if (empty($this->session->userdata('g_email'))) : ?> 'email': $('#email').val(),
                                            <?php endif; ?> 'password': $('#password').val(),
                                            're_password': $('#re_password').val(),
                                            'hint_question': $('#hint_question').val(),
                                            'hint_answer': $('#hint_answer').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_44') ?>');
                                            ShowToast(2000, Result.response, Result.message);
                                            CSRF_TOKEN = Result.token;

                                            if (Result.response == 'success') {
                                                setTimeout(() => {
                                                    window.location = '<?= base_url('login') ?>';
                                                }, 2000);
                                            }
                                        },
                                        error: function() {
                                            ShowToast(2000, 'error', 'The Server Cannot Respond To Your Request At This Time.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
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

                            function ShowRePassword() {
                                var PasswordField = document.getElementById('re_password');
                                var ButtonPasswordField = document.getElementById('show_re_password');
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
        <div class="nk-gap-3"></div>
        <div class="nk-gap-3"></div>
    </div>
</div>