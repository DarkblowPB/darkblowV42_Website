<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Start Date</label>
                                    <input type="datetime-local" id="start_date" class="form-control col-9">
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">End Date</label>
                                    <input type="datetime-local" id="end_date" class="form-control col-9">
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Title</label>
                                    <input type="text" id="title" class="form-control col-9" placeholder="Enter Events Title">
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Playtime</label>
                                    <select id="seconds_target" class="form-control col-9">
                                        <option value="" disabled selected>Select Playtime</option>
                                        <option value="1800">Half Hours</option>
                                        <option value="3600">1 Hour</option>
                                        <option value="7200">2 Hour</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Reward 1</label>
                                    <select id="reward_1" class="form-control col-9 reward_selection">
                                        <option value="" selected>Select Reward 1</option>
                                        <?php foreach ($items as $row) : ?>
                                            <option value="<?= $row['good_id'] ?>">
                                                <?= $row['item_name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Reward 2</label>
                                    <select id="reward_2" class="form-control col-9 reward_selection">
                                        <option value="" selected>Select Reward 2</option>
                                        <?php foreach ($items as $row) : ?>
                                            <option value="<?= $row['good_id'] ?>">
                                                <?= $row['item_name'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-3">Reward Duration</label>
                                    <select id="reward_duration" class="form-control col-9">
                                        <option value="" disabled selected>Select Reward Duration</option>
                                        <option value="64800">1 Days</option>
                                        <option value="259200">3 Days</option>
                                        <option value="604800">7 Days</option>
                                        <option value="2592000">30 Days</option>
                                    </select>
                                </div>
                                <div class="form-group text-right">
                                    <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Events">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';

                        $(document).ready(function() {
                            $('#add_form').on('submit', function(e) {
                                e.preventDefault();

                                if ($('#start_date').val() == '') {
                                    ShowToast(2000, 'warning', 'Start Date Cannot Be Empty.');
                                    return;
                                } else if ($('#end_date').val() == '') {
                                    ShowToast(2000, 'warning', 'End Date Cannot Be Empty.');
                                    return;
                                } else if ($('#title').val() == '') {
                                    ShowToast(2000, 'warning', 'Title Cannot Be Empty.');
                                    return;
                                } else if ($('#seconds_target').val() == '') {
                                    ShowToast(2000, 'warning', 'Playtime Cannot Be Empty.');
                                    return;
                                } else {
                                    SetAttribute('submit', 'button', 'Processing...');

                                    $.ajax({
                                        url: '<?= base_url('adm/eventsmanagement/playtime/do_add') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'start_date': $('#start_date').val(),
                                            'end_date': $('#end_date').val(),
                                            'title': $('#title').val(),
                                            'seconds_target': $('#seconds_target').val(),
                                            'reward_1': $('#reward_1').val(),
                                            'reward_2': $('#reward_2').val(),
                                            'reward_count': $('#reward_duration').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                SetAttribute('submit', 'submit', 'Submit New Events');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                setTimeout(() => {
                                                    self.history.back();
                                                }, 2000);
                                            } else if (Result.response == 'false') {
                                                SetAttribute('submit', 'submit', 'Submit New Events');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            } else {
                                                SetAttribute('submit', 'submit', 'Submit New Events');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function() {
                                            ShowToast(1000, 'info', 'Getting New Request Token...');

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

                                                    if (Result.response == 'true') {
                                                        CSRF_TOKEN = Result.token;
                                                    }

                                                    return Do_Add();
                                                },
                                                error: function() {
                                                    SetAttribute('submit', 'submit', 'Submit New Events.');
                                                    ShowToast(2000, 'error', 'Failed To Submit Events.');
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
                            if ($('#start_date').val() == '') {
                                ShowToast(2000, 'warning', 'Start Date Cannot Be Empty.');
                                return;
                            } else if ($('#end_date').val() == '') {
                                ShowToast(2000, 'warning', 'End Date Cannot Be Empty.');
                                return;
                            } else if ($('#title').val() == '') {
                                ShowToast(2000, 'warning', 'Title Cannot Be Empty.');
                                return;
                            } else if ($('#seconds_target').val() == '') {
                                ShowToast(2000, 'warning', 'Playtime Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/playtime/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'start_date': $('#start_date').val(),
                                        'end_date': $('#end_date').val(),
                                        'title': $('#title').val(),
                                        'seconds_target': $('#seconds_target').val(),
                                        'reward_1': $('#reward_1').val(),
                                        'reward_2': $('#reward_2').val(),
                                        'reward_count': $('#reward_duration').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('submit', 'submit', 'Submit New Events');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            setTimeout(() => {
                                                self.history.back();
                                            }, 2000);
                                        } else if (Result.response == 'false') {
                                            SetAttribute('submit', 'submit', 'Submit New Events');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute('submit', 'submit', 'Submit New Events');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        SetAttribute('submit', 'submit', 'Submit New Events.');
                                        ShowToast(2000, 'error', 'Failed To Submit Events.');
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