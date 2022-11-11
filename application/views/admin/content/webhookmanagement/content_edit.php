<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <?= form_open('', 'autocomplete="off" id="editwebhook_form"') ?>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="url">Webhook URL</label>
                    <input type="url" name="url" id="url" class="form-control" placeholder="Webhook URL" value="<?= $webhook->url ?>">
                    <small class="form-text text-muted font-weight-bold">
                        You can create your webhook first on discord, and paste the url here.<br>
                        How to create discord webhook : <a href="https://support.discord.com/hc/en-us/articles/228383668-Intro-to-Webhooks" target="_blank">Here</a>
                    </small>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= $webhook->username ?>">
                    <small class="form-text text-muted font-weight-bold">
                        Username will displayed as your webhook username.
                    </small>
                </div>
                <div class="form-group">
                    <label for="avatar_url">Avatar URL</label>
                    <input type="url" name="avatar_url" id="avatar_url" class="form-control" placeholder="Avatar URL" value="<?= $webhook->avatar_url ?>">
                    <small class="form-text text-muted font-weight-bold">
                        Avatar URL will displayed as your webhook avatar.
                    </small>
                </div>
                <div class="form-group">
                    <label for="embeds_title">Embeds Title</label>
                    <input type="text" name="embeds_title" id="embeds_title" class="form-control" placeholder="Embeds Title" value="<?= $webhook->embeds_title ?>">
                </div>
                <div class="form-group">
                    <label for="embeds_description">Embeds Description</label>
                    <textarea name="embeds_description" id="embeds_description" rows="10" class="form-control" placeholder="Embeds Description"><?= $webhook->embeds_description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" id="type" class="form-control reward_selection" style="width: 100%;">
                        <option value="" disabled selected>Select Webhook Type</option>
                        <option value="<?= Darkblowwebhook::REDEEMCODE_WEBHOOK ?>" <?= $webhook->type == Darkblowwebhook::REDEEMCODE_WEBHOOK ? 'selected' : '' ?>>Redeem Code Webhook</option>
                        <option value="<?= Darkblowwebhook::REGISTER_WEBHOOK ?>" <?= $webhook->type == Darkblowwebhook::REGISTER_WEBHOOK ? 'selected' : '' ?>>Register Webhook</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="1" <?= $webhook->status == 1 ? 'checked' : '' ?>>
                        <label class="form-check-label">Enabled</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="0" <?= $webhook->status == 0 ? 'checked' : '' ?>>
                        <label class="form-check-label">Disabled</label>
                    </div>
                    <small class="form-text text-muted font-weight-bold">
                        If you not sure about this webhook, you can switch disable it. <br>
                        Make sure you already know how this work.
                    </small>
                </div>
            </div>
            <div class="card-footer text-right">
                <input type="submit" id="submit" class="btn btn-outline-primary" value="Edit Webhook">
            </div>
        </div>
        <?= form_close() ?>
        <script>
            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';

            $(document).ready(() => {
                $('#editwebhook_form').on('submit', (e) => {
                    e.preventDefault();

                    return AddNewWebhook();
                });
            });

            function AddNewWebhook() {
                SetAttribute('submit', 'button', 'Processing...');
                $.ajax({
                    url: '<?= base_url('adm/webhookmanagement/do_edit/' . $webhook->id) ?>',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                        'url': $('#url').val(),
                        'username': $('#username').val(),
                        'avatar_url': $('#avatar_url').val(),
                        'embeds_title': $('#embeds_title').val(),
                        'embeds_description': $('#embeds_description').val(),
                        'type': $('#type').val(),
                        'status': $('#status').val()
                    },
                    success: (response) => {
                        var GetString = JSON.stringify(response);
                        var Result = JSON.parse(GetString);

                        SetAttribute('submit', 'submit', 'Edit Webhook');
                        CSRF_TOKEN = Result.token;
                        ShowToast(2000, Result.response, Result.message);
                        if (Result.response == 'success') {
                            setTimeout(() => {
                                self.history.back();
                            }, 2000);
                        }
                    },
                    error: () => {
                        SetAttribute('submit', 'submit', 'Edit Webhook');
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        </script>
    </div>
</div>