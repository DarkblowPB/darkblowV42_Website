<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Rank</label>
                        <select id="rank_id" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Rank</option>
                            <?php $num = 0;
                            foreach ($rank as $row) : ?>
                                <option value="<?= $row['rank'] ?>">
                                    <?= $row['rank_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward</label>
                        <select id="item_id" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Reward</option>
                            <?php foreach ($items as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Duration</label>
                        <select id="item_count" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Duration</option>
                            <option value="64800">1 Day</option>
                            <option value="259200">3 Day</option>
                            <option value="604800">7 Day</option>
                            <option value="2592000">30 Day</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(function() {
                            $('#add_form').on('submit', function(e) {
                                e.preventDefault();

                                if ($('#rank_id').val() == '' || $('#rank_id').val() == null) {
                                    ShowToast(2000, 'warning', 'Rank Cannot Be Empty.');
                                    return;
                                } else if ($('#item_id').val() == '' || $('#item_id').val() == null) {
                                    ShowToast(2000, 'warning', 'Reward Cannot Be Empty.');
                                    return;
                                } else if ($('#item_count').val() == '' || $('#item_count').val() == null) {
                                    ShowToast(2000, 'warning', 'Duration Cannot Be Empty.');
                                    return;
                                } else {
                                    SetAttribute('submit', 'button', 'Processing...');

                                    $.ajax({
                                        url: '<?= base_url('adm/rankawardsmanagement/do_add') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'rank_id': $('#rank_id').val(),
                                            'item_id': $('#item_id').val(),
                                            'item_count': $('#item_count').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                SetAttribute('submit', 'submit', 'Submit');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                setTimeout(() => {
                                                    self.history.back();
                                                }, 2000);
                                                return;
                                            } else if (Result.response == 'false') {
                                                SetAttribute('submit', 'submit', 'Submit');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            } else {
                                                SetAttribute('submit', 'submit', 'Submit');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function() {
                                            ShowToast(2000, 'info', 'Generate New Request Token...');

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

                                                    return Do_Add();
                                                },
                                                error: function() {
                                                    SetAttribute('submit', 'submit', 'Submit');
                                                    ShowToast(2000, 'error', 'Failed To Add Reward.');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    });
                                }
                            });
                        });

                        function Do_Add() {
                            if ($('#rank_id').val() == '' || $('#rank_id').val() == null) {
                                ShowToast(2000, 'warning', 'Rank Cannot Be Empty.');
                                return;
                            } else if ($('#item_id').val() == '' || $('#item_id').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Cannot Be Empty.');
                                return;
                            } else if ($('#item_count').val() == '' || $('#item_count').val() == null) {
                                ShowToast(2000, 'warning', 'Duration Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/rankawardsmanagement/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'rank_id': $('#rank_id').val(),
                                        'item_id': $('#item_id').val(),
                                        'item_count': $('#item_count').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            setTimeout(() => {
                                                self.history.back();
                                            }, 2000);
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        SetAttribute('submit', 'submit', 'Submit');
                                        ShowToast(2000, 'error', 'Failed To Add Reward.');
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