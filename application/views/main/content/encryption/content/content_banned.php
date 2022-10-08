<div class="col-lg-8 col-md-8 col-sm-12 col-12">
    <div class="card">
        <div class="card-header bg-primary text-center">
            FORCE BANNED PLAYERS
        </div>
        <div class="card-body">
            <?= form_open('', 'id="banned_players" class="form-horizontal" autocomplete="off"') ?>
            <div class="form-group row">
                <label class="col-form-label col-3">Players</label>
                <select id="player_id" class="form-control col-9">
                    <option value="" disabled selected>Select Player</option>
                    <?php foreach ($players as $row) : ?>
                        <option value="<?= $row['player_id'] ?>"><?php if ($row['player_name'] == '' || empty($row['player_name'])) {
                                                                        echo $row['login'];
                                                                    } else {
                                                                        echo $row['player_name'];
                                                                    } ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group text-center mt-5">
                <input type="submit" id="submit" class="btn btn-outline-primary btn-block" value="Banned">
            </div>
            <?= form_close() ?>
            <script>
                var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                $(document).ready(function() {
                    $('#banned_players').on('submit', function(e) {
                        e.preventDefault();

                        if ($('#player_id').val() == '') {
                            alert('Please Select Player First.');
                            return;
                        } else {

                            document.getElementById('submit').setAttribute('type', 'button');
                            document.getElementById('submit').setAttribute('value', 'Processing...');

                            $.ajax({
                                url: '<?= base_url('encryption/do_banned') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'player_id': $('#player_id').val()
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    document.getElementById('submit').setAttribute('type', 'submit');
                                    document.getElementById('submit').setAttribute('value', 'Banned');
                                    CSRF_TOKEN = Result.token;
                                    alert(Result.message);
                                    return;
                                },
                                error: function() {
                                    document.getElementById('submit').setAttribute('type', 'button');
                                    document.getElementById('submit').setAttribute('value', 'Generate New Request Token...');

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

                                            if (Result.response == 'true') {
                                                CSRF_TOKEN = Result.token;
                                            }

                                            Do_Banned();
                                        },
                                        error: function() {
                                            document.getElementById('submit').setAttribute('type', 'submit');
                                            document.getElementById('submit').setAttribute('value', 'Banned');

                                            alert('Error');
                                            window.location.reload();
                                            return;
                                        }
                                    });
                                }
                            });
                        }
                    });
                });

                function Do_Banned() {
                    if ($('#player_id').val() == '') {
                        alert('Please Select Player First.');
                        return;
                    } else {

                        document.getElementById('submit').setAttribute('type', 'button');
                        document.getElementById('submit').setAttribute('value', 'Processing...');

                        $.ajax({
                            url: '<?= base_url('encryption/do_banned') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'player_id': $('#player_id').val()
                            },
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                document.getElementById('submit').setAttribute('type', 'submit');
                                document.getElementById('submit').setAttribute('value', 'Banned');
                                CSRF_TOKEN = Result.token;
                                alert(Result.message);
                                return;
                            },
                            error: function() {
                                document.getElementById('submit').setAttribute('type', 'submit');
                                document.getElementById('submit').setAttribute('value', 'Banned');

                                alert('Error.');
                                window.location.reload();
                                return;
                            }
                        });
                    }
                }
            </script>
        </div>
        <div class="card-footer text-center">
            Copyright &copy; <?= $this->darkblowsettings->load()->project_name ?> <?= date('Y') ?>. All Rights Reserved.
        </div>
    </div>
</div>