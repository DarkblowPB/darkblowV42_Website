<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="sendpointid_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">Players</label>
                        <select name="player_id" id="player_id" class="form-control reward_selection" required>
                            <option value="" disabled selected>Select Players</option>
                            <?php foreach ($players as $row) : ?>
                                <option value="<?= $row['player_id'] ?>">Player ID: <?= $row['player_id'] ?> | Nick: <?= $row['player_name'] != '' ? $row['player_name'] : $row['login'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Point Amount</label>
                        <select name="point_amount" id="point_amount" class="form-control reward_selection" required>
                            <option value="" disabled selected>Select Amount</option>
                            <option value="100000">100.000</option>
                            <option value="200000">200.000</option>
                            <option value="300000">300.000</option>
                            <option value="400000">400.000</option>
                            <option value="500000">500.000</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" name="submit" class="btn btn-outline-primary text-white mt-3 mb-0" value="Submit">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        $(document).ready(() => {
                            $('#sendpointid_form').on('submit', (e) => {
                                e.preventDefault();
                                return SendPointID();
                            });
                        });

                        function SendPointID() {
                            if ($('#player_id').val() == '' || $('#player_id').val() == null) {
                                ShowToast(2000, 'error', 'Please Select A Player.');
                                return;
                            } else if ($('#point_amount').val() == '' || $('#point_amount').val() == null) {
                                ShowToast(2000, 'error', 'Please Select Cash Amount');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');
                                $.ajax({
                                    url: '<?= base_url('api/server/sendcommand') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'opcode': '<?= Darkblowopcodes::SEND_POINT_ID[0] ?>',
                                        'secret_token': '<?= $this->darkblowsocketcommand->GenerateSecretToken() ?>',
                                        'secret_keys': '<?= $this->darkblowsocketcommand->GenerateSecretKeys() ?>',
                                        'command_type': '<?= Darkblowopcodes::SEND_POINT_ID[1] ?>',
                                        'player_id': $('#player_id').val(),
                                        'point_amount': $('#point_amount').val()
                                    },
                                    success: (response) => {
                                        var GetString = JSON.stringify(response);
                                        var Result = JSON.parse(GetString);

                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;
                                        SetAttribute('submit', 'submit', 'Submit');
                                    },
                                    error: () => {
                                        SetAttribute('submit', 'submit', 'Submit');
                                        ShowToast(2000, 'error', 'Failed To Send Point.');
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