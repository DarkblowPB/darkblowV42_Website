<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="attendance_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 1</label>
                        <select id="reward_day_1" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 2</label>
                        <select id="reward_day_2" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 3</label>
                        <select id="reward_day_3" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 4</label>
                        <select id="reward_day_4" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 5</label>
                        <select id="reward_day_5" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 6</label>
                        <select id="reward_day_6" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Day 7</label>
                        <select id="reward_day_7" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($reward as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Duration</label>
                        <select id="reward_duration" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward Duration</option>
                            <?php $this->lib->GetItemDurationList('create', null, 90) ?>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash(); ?>';
                        var RETRY = 0;

                        $(document).ready(function() {
                            $('#attendance_form').on('submit', function(e) {
                                e.preventDefault();

                                return CreateEvents();
                            });
                        });

                        function CreateEvents() {
                            if ($('#reward_day_1').val() == '' || $('#reward_day_1').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 1 Cannot Be Empty.');
                                return;
                            } else if ($('#reward_day_2').val() == '' || $('#reward_day_2').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 2 Cannot Be Empty.');
                                return;
                            } else if ($('#reward_day_3').val() == '' || $('#reward_day_3').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 3 Cannot Be Empty.');
                                return;
                            } else if ($('#reward_day_4').val() == '' || $('#reward_day_4').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 4 Cannot Be Empty.');
                                return;
                            } else if ($('#reward_day_5').val() == '' || $('#reward_day_5').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 5 Cannot Be Empty.');
                                return;
                            } else if ($('#reward_day_6').val() == '' || $('#reward_day_6').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 6 Cannot Be Empty.');
                                return;
                            } else if ($('#reward_day_7').val() == '' || $('#reward_day_7').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Day 7 Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/attendance/do_create7days') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'reward_day_1': $('#reward_day_1').val(),
                                        'reward_day_2': $('#reward_day_2').val(),
                                        'reward_day_3': $('#reward_day_3').val(),
                                        'reward_day_4': $('#reward_day_4').val(),
                                        'reward_day_5': $('#reward_day_5').val(),
                                        'reward_day_6': $('#reward_day_6').val(),
                                        'reward_day_7': $('#reward_day_7').val(),
                                        'reward_duration': $('#reward_duration').val()
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
                                        if (RETRY >= 3) {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'error', 'Failed To Create Events.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else {
                                            RETRY += 1;

                                            ShowToast(1000, 'info', 'Generating New Request Token...');

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

                                                    return CreateEvents();
                                                },
                                                error: function() {
                                                    SetAttribute('submit', 'submit', 'Submit');
                                                    ShowToast(2000, 'error', 'Failed To Create Events.');
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