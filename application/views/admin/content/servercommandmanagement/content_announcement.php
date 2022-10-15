<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="sendcommand_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Enter Your Message</label>
                        <textarea id="message" rows="15" class="form-control col-9"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Command">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash(); ?>';
                        var RETRY = 0;

                        $(document).ready(function() {
                            $('#sendcommand_form').on('submit', function(e) {
                                e.preventDefault();

                                return SendCommand();
                            });
                        });

                        function SendCommand() {
                            if ($('#message').val() == '' || $('#message').val() == null) {
                                ShowToast(2000, 'warning', 'Message Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('api/server/sendcommand') ?>',
                                    type: 'POST',
                                    timeout: 0,
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'opcode': '<?= Darkblowopcodes::SEND_ANNOUNCEMENT[0] ?>',
                                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                                        'command_type': '<?= Darkblowopcodes::SEND_ANNOUNCEMENT[1] ?>',
                                        'message': $('#message').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        CSRF_TOKEN = Result.token;
                                        SetAttribute('submit', 'submit', 'Submit Command');
                                        ShowToast(2000, Result.response, Result.message);
                                        return;
                                    },
                                    error: function() {

                                        SetAttribute('submit', 'button', 'Submit Command');
                                        ShowToast(2000, 'error', 'Failed To Send Announcement.');
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
</div>