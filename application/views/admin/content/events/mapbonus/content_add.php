<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Start Date</label>
                        <input type="datetime-local" id="start_date" class="form-control col-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">End Date</label>
                        <input type="datetime-local" id="end_date" class="form-control col-9">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Map</label>
                        <select id="map_id" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Map</option>
                            <?php foreach ($this->eventsmapbonus->GetMap() as $key => $value) : ?>
                                <?php if ($value != 'STR_STAGE_EMPTY') : ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Gameplay Type</label>
                        <select id="stage_type" class="form-control col-9 reward_selection">
                            <option value="" disabled selected>Select Gameplay Type</option>
                            <?php foreach ($this->eventsmapbonus->GetStageType() as $key => $value) : ?>
                                <?php if ($value != 'None') : ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Point Boost (%)</label>
                        <input type="number" id="percent_gp" class="form-control col-9" placeholder="Enter Point Boost">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">EXP Boost (%)</label>
                        <input type="number" id="percent_xp" class="form-control col-9" placeholder="Enter EXP Boost">
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Events">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(function() {
                            $('#add_form').on('submit', function(e) {
                                e.preventDefault();

                                return Do_Add();
                            });
                        });

                        function Do_Add() {
                            if ($('#start_date').val() == '' || $('#start_date').val() == null) {
                                ShowToast(2000, 'warning', 'Start Date Cannot Be Empty.');
                                return;
                            } else if ($('#end_date').val() == '' || $('#end_date').val() == null) {
                                ShowToast(2000, 'warning', 'End Date Cannot Be Empty.');
                                return;
                            } else if ($('#map_id').val() == '' || $('#map_id').val() == null) {
                                ShowToast(2000, 'warning', 'Map Cannot Be Empty.');
                                return;
                            } else if ($('#stage_type').val() == '' || $('#stage_type').val() == null) {
                                ShowToast(2000, 'warning', 'Gameplay Type Cannot Be Empty.');
                                return;
                            } else if ($('#percent_gp').val() == '' || $('#percent_gp').val() == null) {
                                ShowToast(2000, 'warning', 'Point Boost Cannot Be Empty.');
                                return;
                            } else if ($('#percent_xp').val() == '' || $('#percent_xp').val() == null) {
                                ShowToast(2000, 'warning', 'EXP Boost Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/mapbonus/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'start_date': $('#start_date').val(),
                                        'end_date': $('#end_date').val(),
                                        'map_id': $('#map_id').val(),
                                        'stage_type': $('#stage_type').val(),
                                        'percent_xp': $('#percent_xp').val(),
                                        'percent_gp': $('#percent_gp').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute('submit', 'submit', 'Submit New Events');
                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;

                                        if (Result.response == 'success') {
                                            setTimeout(() => {
                                                self.history.back();
                                            }, 2000);
                                        }
                                    },
                                    error: function() {
                                        SetAttribute('submit', 'submit', 'Submit New Events');
                                        ShowToast(2000, 'error', 'Failed To Submit New Events.');
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