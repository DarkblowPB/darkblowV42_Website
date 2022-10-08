<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Start Date</label>
                        <input type="datetime-local" id="start_date" class="form-control col-9" autofocus>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">End Date</label>
                        <input type="datetime-local" id="end_date" class="form-control col-9" placeholder="Enter End Date">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Event Title</label>
                        <input type="text" id="title" class="form-control col-9" placeholder="Enter Event Title">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Event Checks</label>
                        <input type="number" id="checks" class="form-control col-9" placeholder="Enter Event Check Count">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward 1</label>
                        <select id="reward1" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Reward 1</option>
                            <?php foreach ($this->visit->GetAllItems() as $row) : ?>
                                <option value="<?= $row['good_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward 2 (Optional)</label>
                        <select id="reward2" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Reward 2</option>
                            <?php foreach ($this->visit->GetAllItems() as $row) : ?>
                                <option value="<?= $row['good_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Item Duration</label>
                        <select id="counts" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Item Duration</option>
                            <option value="86400">1 Day</option>
                            <option value="259200">3 Days</option>
                            <option value="604800">7 Days</option>
                            <option value="2592000">30 Days</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit Events">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;

                        $(document).ready(function() {
                            $('#add_form').on('submit', function(e) {
                                e.preventDefault();

                                return AddNewEvent();
                            });
                        });

                        function AddNewEvent() {
                            if ($('#start_date').val() == '' || $('#start_date').val() == null) {
                                ShowToast(2000, 'warning', 'Start Date Cannot Be Empty.');
                                return;
                            } else if ($('#end_date').val() == '' || $('#end_date').val() == null) {
                                ShowToast(2000, 'warning', 'End Date Cannot Be Empty.');
                                return;
                            } else if ($('#title').val() == '' || $('#title').val() == null) {
                                ShowToast(2000, 'warning', 'Event Title Cannot Be Empty.');
                                return;
                            } else if ($('#checks').val() == '' || $('#checks').val() == null || $('#checks').val() == '0') {
                                ShowToast(2000, 'warning', 'Event Checks Cannot Be Empty.');
                                return;
                            } else if ($('#reward1').val() == '' || $('#reward1').val() == null) {
                                ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                return;
                            } else if ($('#reward2').val() == '' || $('#reward2').val() == null) {
                                ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                return;
                            } else if ($('#counts').val() == '' || $('#counts').val() == null) {
                                ShowToast(2000, 'warning', 'Item Duration Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/visit/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'start_date': $('#start_date').val(),
                                        'end_date': $('#end_date').val(),
                                        'title': $('#title').val(),
                                        'checks': $('#checks').val(),
                                        'reward1': $('#reward1').val(),
                                        'reward2': $('#reward2').val(),
                                        'counts': $('#counts').val(),
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute('submit', 'submit', 'Submit Events');
                                        ShowToast(2000, Result.type, Result.message);
                                        CSRF_TOKEN = Result.token;
                                        setTimeout(() => {
                                            self.history.back();
                                        }, 2000);
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute('submit', 'submit', 'Submit Events');
                                            ShowToast(2000, 'error', 'Failed To Create Visit Events.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else {
                                            ShowToast(1000, 'info', 'Generate New Request Token...');

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
                                                    return AddNewEvent();

                                                },
                                                error: function() {
                                                    SetAttribute('submit', 'submit', 'Submit Events');
                                                    ShowToast(2000, 'error', 'Failed To Create Visit Events.');
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