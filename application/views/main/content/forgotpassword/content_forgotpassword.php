<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">
                    <?= $this->lang->line('STR_DARKBLOW_17') ?>
                </span>
                <?= $this->lang->line('STR_DARKBLOW_18') ?>
            </span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?= form_open('', 'id="forgotpassword_form" autocomplete="off"') ?>
                <div class="form-group">
                    <label class="col-form-labeel">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group text-center">
                    <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Submit">
                </div>
                <?= form_close() ?>
                <script>
                    var CSRF_TOKEN = $('#<?= $this->security->get_csrf_hash() ?>');
                    var RETRY = 0;

                    $(document).ready(() => {
                        $('#forgotpassword_form').on('submit', (e) => {
                            e.preventDefault();

                            return Do_ForgotPassword();
                        });
                    });

                    function Do_ForgotPassword() {
                        if ($('#email').val() == '' || $('#email').val() == null) return ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_13') ?>');
                        else {
                            SetAttribute('submit', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');

                            $.ajax({
                                url: '<?= base_url('forgotpassword/do_forgotpassword') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'email': $('#email').val()
                                },
                                success: (response) => {
                                    var GetString = JSON.stringify(response);
                                    var Result = JSON.parse(GetString);

                                    SetAttribute('submit', 'submit', 'Submit');
                                    ShowToast(2000, Result.response, Result.message);
                                    CSRF_TOKEN = Result.token;
                                    return;
                                },
                                error: () => {
                                    SetAttribute('submit', 'submit', 'Submit');
                                    ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_3') ?>');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>