<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <= form_open('', 'id="bannedplayers_form" autocomplete="off"' ) ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Players</label>
                            <select id="player_id" class="form-control col-9 reward_selection">
                                <option value="" disabled selected>Select Players</option>
                                <?php foreach ($players as $row) : ?>
                                    <option value="<= $row['player_id'] ?>">Player ID: <= $row['player_id'] ?> | Nick: <= $row['player_name'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Command">
                        </div>
                        <?= form_close() ?>
                        <script>
                            var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                            var RETRY = 0;

                            $(document).ready(function() {
                                $('#bannedplayers_form').on('submit', function(e) {
                                    e.preventDefault();

                                    return BannedPlayers();
                                });
                            });

                            function BannedPlayers() {
                                if ($('#player_id').val() == '' || $('#player_id').val() == null) {
                                    ShowToast(2000, 'warning', 'Please Select Players First.');
                                    return;
                                } else {
                                    SetAttribute('submit', 'button', 'Processing...');

                                    $.ajax({
                                        url: '<?= base_url('api/servercommand/bannedplayer') ?>',
                                        type: 'POST',
                                        timeout: 0,
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'opcode': '<?= $this->servercommand_library->GenerateOpcode("Banned Player") ?>',
                                            'secret_token': '<?= $this->servercommand_library->GenerateSecretToken() ?>',
                                            'secret_keys': '<?= $this->servercommand_library->GenerateSecretKeys() ?>',
                                            'command_type': 'Banned Player',
                                            'player_id': $('#player_id').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            SetAttribute('submit', 'submit', 'Submit Command');
                                            ShowToast(2000, Result.status, Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        },
                                        error: function() {
                                            if (RETRY >= 3) {
                                                SetAttribute('submit', 'button', 'Submit Command');
                                                ShowToast(2000, 'error', 'Failed To Banned Player.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            } else {
                                                RETRY += 1;
                                                ShowToast(1000, 'info', 'Generate New Request Token...');
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

                                                        return BannedPlayers();
                                                    },
                                                    error: function() {
                                                        SetAttribute('submit', 'button', 'Submit Command');
                                                        ShowToast(2000, 'error', 'Failed To Banned Player.');
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
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>