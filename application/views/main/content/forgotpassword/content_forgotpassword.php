<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_17') ?> </span> <?php echo $this->lang->line('STR_DARKBLOW_18') ?></span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?php echo form_open('', 'id="forgotpassword_form" autocomplete="off"') ?>
                <div class="form-group">
                    <label class="col-form-labeel">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group text-center">
                    <input type="submit" id="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Submit">
                </div>
                <?php echo form_close() ?>
                <script>
                    var CSRF_TOKEN = $('#<?php echo $this->security->get_csrf_token_name() ?>');
                    var RETRY = 0;

                    $(document).ready(() => {
                        $('#forgotpassword_form').on('submit', (e) => {
                            e.preventDefault();

                            return Do_ForgotPassword();
                        });
                    });

                    function Do_ForgotPassword()
                    {
                        if ($('#email').val() == '' || $('#email').val() == null) return ShowToast(2000, 'warning', 'Email Cannot Be Empty.');
                        else{
                            SetAttribute('submit', 'button', 'Processing...');

                            $.ajax({
                                url: '<?php echo base_url('forgotpassword/do_forgotpassword') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                    'email' : $('#email').val()
                                },
                                success: (response) => {
                                    
                                }
                            });
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>