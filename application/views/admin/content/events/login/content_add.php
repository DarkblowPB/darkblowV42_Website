<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Date Start</label>
                        <input type="datetime-local" id="date_start" class="form-control col-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Date End</label>
                        <input type="datetime-local" id="date_end" class="form-control col-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Item</label>
                        <select id="reward_item" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Your Reward</option>
                            <?php foreach ($items as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Duration</label>
                        <select id="reward_count" class="form-control col-9 count_selection">
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
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
    $(document).ready(function() {
        $('#add_form').on('submit', function(e) {
            e.preventDefault();
            return Do_Add();
        });
    });

    function Do_Add() {
        if ($('#date_start').val() == "") {
            ShowToast(2000, 'warning', 'Date Start Cannot Be Empty.');
            return;
        } else if ($('#date_end').val() == "") {
            ShowToast(2000, 'warning', 'Date End Cannot Be Empty.');
            return;
        } else if ($('#reward_item').val() == null) {
            ShowToast(2000, 'warning', 'Reward Item Cannot Be Empty.');
            return;
        } else if ($('#reward_count').val() == null) {
            ShowToast(2000, 'warning', 'Reward Duration Cannot Be Empty.');
            return;
        } else {
            SetAttribute('submit', 'button', 'Processing...');

            $.ajax({
                url: '<?= base_url('adm/eventsmanagement/login/do_add') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                    'start_date': $('#date_start').val(),
                    'end_date': $('#date_end').val(),
                    'reward_id': $('#reward_item').val(),
                    'reward_count': $('#reward_count').val()
                },
                success: function(data) {
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);

                    SetAttribute('submit', 'submit', 'Submit New Events');
                    ShowToast(2000, Result.response, Result.message);
                    CSRF_TOKEN = Result.token;

                    if (Result.response == 'success') {
                        setTimeout(() => {
                            window.location = '<?= base_url('adm/eventsmanagement/login') ?>';
                        }, 2000);
                    }
                    return;
                },
                error: function() {
                    SetAttribute('submit', 'submit', 'Submit New Events');
                    ShowToast(2000, 'error', 'Failed To Add Events.');
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            });
        }
    }
</script>