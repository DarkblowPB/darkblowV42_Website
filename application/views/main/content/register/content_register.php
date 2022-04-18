<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_44') ?> <span class="text-white"><?= $this->lang->line('STR_DARKBLOW_39') ?></span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?= form_open('', 'id="register_form" autocomplete="off"'); ?>
                        <div class="form-group">
                            <label for="username"><?= $this->lang->line('STR_DARKBLOW_40') ?></label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" id="login" placeholder="<?= $this->lang->line('STR_DARKBLOW_41') ?>" minlength="4" maxlength="16" autofocus>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="check_username" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_202') ?>" onclick="CheckUsername()">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email"><?= $this->lang->line('STR_DARKBLOW_131') ?></label>
                            <?php if (!empty($this->session->userdata('g_email'))) : ?>
                                <label class="form-control"><?= $_SESSION['g_email'] ?></label>
                            <?php endif; ?>
                            <?php if (empty($this->session->userdata('g_email'))) : ?>
                                <input type="mail" class="form-control" id="email" placeholder="<?= $this->lang->line('STR_DARKBLOW_132') ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="password"><?= $this->lang->line('STR_DARKBLOW_42') ?></label>
                            <input type="password" class="form-control" id="password" placeholder="<?= $this->lang->line('STR_DARKBLOW_43') ?>" minlength="4" maxlength="16">
                        </div>
                        <div class="form-group">
                            <label for="re_password"><?= $this->lang->line('STR_DARKBLOW_57') ?></label>
                            <input type="password" class="form-control" id="re_password" placeholder="<?= $this->lang->line('STR_DARKBLOW_133') ?>" minlength="4" maxlength="16">
                        </div>
                        <div class="form-group">
                            <label><?= $this->lang->line('STR_DARKBLOW_21') ?></label>
                            <select class="form-control" id="hint_question">
                                <option value="" disabled selected><?= $this->lang->line('STR_DARKBLOW_22') ?></option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                                <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                                <option value="What is your favorite team?">What is your favorite team?</option>
                                <option value="What is your favorite movie?">What is your favorite movie?</option>
                                <option value="What was your favorite sport in high school?">What was your favorite sport in high school?</option>
                                <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                                <option value="What is the first name of the boy or girl that you first kissed?">What is the first name of the boy or girl that you first kissed?</option>
                                <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                                <option value="What was the name of the hospital where you were born?">What was the name of the hospital where you were born?</option>
                                <option value="Who is your childhood sports hero?">Who is your childhood sports hero?</option>
                                <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                                <option value="What was the last name of your third grade teacher?">What was the last name of your third grade teacher?</option>
                                <option value="In what town was your first job?">In what town was your first job?</option>
                                <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= $this->lang->line('STR_DARKBLOW_23') ?></label>
                            <input type="text" class="form-control" id="hint_answer" placeholder="<?= $this->lang->line('STR_DARKBLOW_24') ?>" required>
                        </div>
                        <div class="nk-gap"></div>
                        <div class="form-group text-center">
                            <input id="submit" type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_44') ?>" onclick="ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_20') ?>');">
                            <a href="<?= base_url('login') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success"><?= $this->lang->line('STR_DARKBLOW_155') ?></a>
                        </div>
                        <?= form_close(); ?>
                        <?php
                        if ($this->getsettings->Get()->google_register == 1) : ?>
                            <div class="form-group text-center">
                                <label style="font-weight: bold; font-style: italic;">OR</label>
                            </div>
                            <div class="form-group text-center">
                                <?php if (isset($_SESSION['g_email'])) : ?>
                                    <input type="button" id="cancelgoogleregistration" value="<?= $this->lang->line('STR_DARKBLOW_204') ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="CancelGoogleRegistration()">
                                <?php endif; ?>
                                <?php if (!isset($_SESSION['g_email'])) : ?>
                                    <button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="window.location = '<?= base_url('register/g_register') ?>';"><span class="fa fa-google"></span> &nbsp;<?= $this->lang->line('STR_DARKBLOW_156') ?></button>
                                <?php endif; ?>
                                <div class="nk-gap-1"></div>
                            </div>
                        <?php endif ?>
                        <script>
                            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                            var RETRY = 0;

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

                                            if (Result.response == 'true') {
                                                document.getElementById('submit').setAttribute('onclick', '');
                                                SetAttribute('check_username', 'button', '<?= $this->lang->line('STR_DARKBLOW_202') ?>');
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_44') ?>');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            } else {
                                                SetAttribute('check_username', 'button', '<?= $this->lang->line('STR_DARKBLOW_202') ?>');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
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
                                                        '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
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

                            $('#register_form').on('submit', function(e) {
                                e.preventDefault();

                                return Do_Register();
                            });

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

                                            if (Result.response == 'true') {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_44') ?>');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                setTimeout(() => {
                                                    window.location = '<?= base_url('login') ?>';
                                                }, 2000);
                                                return;
                                            } else {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_44') ?>');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function() {
                                            if (RETRY >= 3) {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_44') ?>');
                                                ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_25') ?>');
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
                                                        '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                                    },
                                                    success: function(data) {
                                                        var GetString = JSON.stringify(data);
                                                        var Result = JSON.parse(GetString);

                                                        if (Result.response == 'true') {
                                                            CSRF_TOKEN = Result.token;
                                                        }

                                                        return Do_Register();
                                                    },
                                                    error: function() {
                                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_12') ?>');
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

                            function CancelGoogleRegistration() {
                                SetAttribute('cancelgoogleregistration', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                                $.ajax({
                                    url: '<?= base_url('register/do_cancelgoogleregistration') ?>',
                                    type: 'GET',
                                    dataType: 'JSON',
                                    data: {},
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('cancelgoogleregistration', 'button', '<?= $this->lang->line('STR_DARKBLOW_204') ?>');
                                            ShowToast(2000, 'success', Result.message);
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    },
                                    erorr: function() {
                                        SetAttribute('cancelgoogleregistration', 'button', '<?= $this->lang->line('STR_DARKBLOW_204') ?>');
                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_26') ?>');
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
        </div>
        <div class="nk-gap-3"></div>
        <div class="nk-gap-3"></div>
    </div>
</div>