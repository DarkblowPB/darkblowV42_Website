<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12">
                <h3 class="nk-decorated-h-2"><span class="text-main-1">
                        <?= $this->lang->line('STR_DARKBLOW_47') ?> <span class="text-white">
                            <?= $this->lang->line('STR_DARKBLOW_42') ?>
                        </span>
                    </span></h3>
                <div class="nk-gap-3"></div>
                <div class="nk-gap-3"></div>
                <div class="container">
                    <div class="col-lg-6 offset-lg-3">
                        <?= form_open('', 'id="changepassword_form" autocomplete="off"') ?>
                        <div class="form-group">
                            <label>
                                <?= $this->lang->line('STR_DARKBLOW_55') ?>
                            </label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="password" class="form-control" id="old_password" placeholder="<?= $this->lang->line('STR_DARKBLOW_160') ?>" minlength="4" maxlength="16" autofocus required>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="show_old_password" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Show" onclick="ShowPassword('old_password', 'show_old_password', '0')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <?= $this->lang->line('STR_DARKBLOW_56') ?>
                            </label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="password" class="form-control" id="new_password" placeholder="<?= $this->lang->line('STR_DARKBLOW_161') ?>" minlength="4" maxlength="16" required>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="show_new_password" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Show" onclick="ShowPassword('new_password', 'show_new_password', '0')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <?= $this->lang->line('STR_DARKBLOW_57') ?>
                            </label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="password" class="form-control" id="confirm_password" placeholder="<?= $this->lang->line('STR_DARKBLOW_133') ?>" value="<?= set_value('confirm_password') ?>" minlength="4" maxlength="16" required>
                                </div>
                                <div class="col-3">
                                    <input type="button" id="show_confirm_password" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Show" onclick="ShowPassword('confirm_password', 'show_confirm_password', '0')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <?= $this->lang->line('STR_DARKBLOW_21') ?>
                            </label>
                            <select class="form-control" id="hint_question" value="<?= set_value('hint_question') ?>" required>
                                <option value="" disabled selected>
                                    <?= $this->lang->line('STR_DARKBLOW_22') ?>
                                </option>
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
                            <label>
                                <?= $this->lang->line('STR_DARKBLOW_23') ?>
                            </label>
                            <input type="text" class="form-control" id="hint_answer" placeholder="<?= $this->lang->line('STR_DARKBLOW_24') ?>" required>
                        </div>
                        <div class="nk-gap"></div>
                        <div class="form-group text-center">
                            <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="<?= $this->lang->line('STR_DARKBLOW_182') ?>">
                        </div>
                        <?= form_close() ?>
                        <script>
                            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                            var RETRY = 0;
                            $(document).ready(function() {
                                $('#changepassword_form').on('submit', function(e) {
                                    e.preventDefault();

                                    return Do_ChangePassword();
                                });
                            });

                            function Do_ChangePassword() {
                                if ($('#old_password').val() == '' || $('#old_password').val() == null) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_7') ?>');
                                    return;
                                } else if ($('#new_password').val() == '' || $('#new_password').val() == null) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_DARKBLOW_8') ?>');
                                    return;
                                } else if ($('#confirm_password').val() == '' || $('#confirm_password').val() == null) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_DARKBLOW_9') ?>');
                                    return;
                                } else if ($('#hint_question').val() == '' || $('#hint_question').val() == null) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_DARKBLOW_10') ?>');
                                    return;
                                } else if ($('#hint_answer').val() == '' || $('#hint_answer').val() == null) {
                                    ShowToast(2000, 'warning', '<?= $this->lang->line('STR_DARKBLOW_3') ?>');
                                    return;
                                } else {
                                    SetAttribute('submit', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
                                    $.ajax({
                                        url: '<?= base_url('player_panel/changepassword/do_changepassword') ?>',
                                        type: 'POST',
                                        timeout: 0,
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'old_password': $('#old_password').val(),
                                            'new_password': $('#new_password').val(),
                                            'confirm_password': $('#confirm_password').val(),
                                            'hint_question': $('#hint_question').val(),
                                            'hint_answer': $('#hint_answer').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_182') ?>');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                setTimeout(() => {
                                                    Logout();
                                                }, 2000);
                                            } else {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_182') ?>');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function() {
                                            if (RETRY >= 3) {
                                                SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_182') ?>.');
                                                ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_5') ?>');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            } else {
                                                RETRY += 1;
                                                ShowToast(1000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

                                                $.ajax({
                                                    url: '<?= base_url('api/security/csrf') ?>',
                                                    type: 'GET',
                                                    timeout: 0,
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

                                                        return Do_ChangePassword();
                                                    },
                                                    error: function() {
                                                        ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_5') ?>');
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

                            function ShowPassword(button_target, this_button, type) {
                                var Button = document.getElementById(button_target);
                                var Button2 = document.getElementById(this_button);
                                var OnclickValue_01 = "ShowPassword('" + button_target + "', '" + this_button + "', '1')";
                                var OnclickValue_02 = "ShowPassword('" + button_target + "', '" + this_button + "', '0')";

                                if (type == '0') // Show Password
                                {
                                    Button.setAttribute('type', 'text');
                                    Button2.setAttribute('value', 'Hide');
                                    Button2.setAttribute('onclick', OnclickValue_01);
                                } else if (type == '1') // Hide Password
                                {
                                    Button.setAttribute('type', 'password');
                                    Button2.setAttribute('value', 'Show');
                                    Button2.setAttribute('onclick', OnclickValue_02);
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="nk-gap-3"></div>
            <div class="nk-gap-2"></div>
        </div>
    </div>