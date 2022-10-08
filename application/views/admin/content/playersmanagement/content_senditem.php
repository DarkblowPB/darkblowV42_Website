<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="senditem_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Player ID</label>
                        <select id="player_id" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Please Select Player</option>
                            <?php foreach ($players as $row) : ?>
                                <option value="<?= $row['player_id'] ?>"><?php if ($row['player_name'] == '') {
                                                                                echo $row['login'];
                                                                            } else {
                                                                                echo $row['player_name'];
                                                                            } ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Items</label>
                        <select id="item_id" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Please Select Items</option>
                            <?php foreach ($items as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Item Duration</label>
                        <select id="item_count" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Please Select Item Duration</option>
                            <option value="64800">1 Day</option>
                            <option value="259200">3 Days</option>
                            <option value="604800">7 Days</option>
                            <option value="2592000">30 Day</option>
                            <option value="315576000">10 Years</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-primary text-white" value="Submit">
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
            <script>
                var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                var RETRY = 0;

                $(document).ready(function() {
                    $('#senditem_form').on('submit', function(e) {
                        e.preventDefault()

                        return Do_SendItem();
                    });
                });

                function Do_SendItem() {
                    if ($('#player_id').val() == '' || $('#player_id').val() == null) {
                        ShowToast(2000, 'warning', 'Please Select Player First.');
                        return;
                    } else if ($('#item_id').val() == '' || $('#item_id').val() == null) {
                        ShowToast(2000, 'warning', 'Please Select Item First.');
                        return;
                    } else if ($('#item_count').val() == '' || $('#item_count').val() == null) {
                        ShowToast(2000, 'warning', 'Please Select Item Duration First.');
                        return;
                    } else {
                        SetAttribute('submit', 'button', 'Processing...');

                        $.ajax({
                            url: '<?= base_url('adm/playersmanagement/do_senditem') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'player_id': $('#player_id').val(),
                                'item_id': $('#item_id').val(),
                                'item_count': $('#item_count').val()
                            },
                            success: function(data) {
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                if (Result.response == 'true') {
                                    SetAttribute('submit', 'submit', 'Submit');
                                    ShowToast(2000, 'success', Result.message);
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                } else {
                                    SetAttribute('submit', 'submit', 'Submit');
                                    ShowToast(2000, 'error', Result.message);
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            },
                            error: function() {
                                if (RETRY >= 3) {
                                    SetAttribute('submit', 'submit', 'Submit');
                                    ShowToast(2000, 'error', 'Failed To Send Item.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                } else {
                                    RETRY += 1;

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

                                            return Do_SendItem();
                                        },
                                        error: function() {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'error', 'Failed To Send Item.');
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