<div class="col-lg-8 col-md-8 col-sm-12 col-12">
    <div class="card">
        <div class="card-header text-center">
            FORCE ADD FULL SHOP
        </div>
        <div class="card-body">
            <?= form_open('', 'id="add_fullshop" autocomplete="off"') ?>
            <div class="form-group">
                <label class="col-form-label">Player</label>
                <select id="player_id" class="form-control">
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
                <input type="submit" id="submit" class="btn btn-outline-primary" value="Submit">
            </div>
            <?= form_close() ?>
            <script>
                var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                $(document).ready(function() {
                    $('#add_fullshop').on('submit', function(e) {
                        e.preventDefault();

                        document.getElementById('submit').setAttribute('type', 'button');
                        document.getElementById('submit').setAttribute('value', 'Processing...');

                        $.ajax({
                            url: '<?= base_url('encryption/do_addfullshop') ?>',
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
                                document.getElementById('submit').setAttribute('value', 'Submit');

                                CSRF_TOKEN = Result.token;
                                alert(Result.message);
                                return;
                            },
                            error: function() {
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

                                        Do_AddFullShop();
                                    },
                                    error: function() {
                                        alert('Failed To Add Full Shop');
                                        window.location.reload();
                                    }
                                });
                            }
                        });
                    });
                });

                function Do_AddFullShop() {

                    document.getElementById('submit').setAttribute('type', 'button');
                    document.getElementById('submit').setAttribute('value', 'Processing...');

                    $.ajax({
                        url: '<?= base_url('encryption/do_addfullshop') ?>',
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
                            document.getElementById('submit').setAttribute('value', 'Submit');
                            CSRF_TOKEN = Result.token;
                            alert(Result.message);
                            return;
                        },
                        error: function() {
                            alert('Failed To Add Full Shop');
                            window.location.reload();
                        }
                    });
                }
            </script>
        </div>
    </div>
</div>