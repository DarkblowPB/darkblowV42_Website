<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <?= form_open('', 'autocomplete="off" id="social_form"') ?>
            <div class="card">
                <div class="card-header text-bold text-uppercase text-center">Social Settings</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="url" name="facebook" id="facebook" class="form-control" placeholder="Facebook" value="<?= $this->darkblowsettings->load()->facebook_embed_link ?>">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="url" name="instagram" id="instagram" class="form-control" placeholder="Instagram" value="<?= $this->darkblowsettings->load()->instagram_embed_link ?>">
                    </div>
                    <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input type="url" name="youtube" id="youtube" class="form-control" placeholder="Youtube" value="<?= $this->darkblowsettings->load()->youtube_embed_link ?>">
                    </div>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(() => {
                            $('#social_form').submit((e) => {
                                e.preventDefault();

                                SetAttribute('submit', 'button', 'Processing...');
                                $.ajax({
                                    url: '<?= base_url('adm/settings/do_submit_socialsettings') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'facebook_embed_link': $('#facebook').val(),
                                        'instagram_embed_link': $('#instagram').val(),
                                        'youtube_embed_link': $('#youtube').val()
                                    },
                                    success: (response) => {
                                        var stringify = JSON.stringify(response);
                                        var result = JSON.parse(stringify);

                                        ShowToast(2000, result.response, result.message);
                                        SetAttribute('submit', 'submit', 'Submit');
                                        CSRF_TOKEN = result.token;
                                        return;
                                    },
                                    error: () => {
                                        ShowToast(2000, 'error', 'Can\'t Reach Server Right Now.');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit">
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>