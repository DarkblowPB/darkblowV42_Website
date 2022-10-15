<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th width="10%">Point Boost(%)</th>
                            <th width="10%">EXP Boost(%)</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="data_start_date">
                                    <?php
                                    echo $this->darkblowlib->ConvertDate($rankup->start_date)[2] . // Days
                                        '-' . $this->darkblowlib->ConvertDate($rankup->start_date)[1] . // Month
                                        '-' . '20' . $this->darkblowlib->ConvertDate($rankup->start_date)[0] . // Years
                                        ' ' . $this->darkblowlib->ConvertDate($rankup->start_date)[3] . // Hours
                                        ':' . $this->darkblowlib->ConvertDate($rankup->start_date)[4] // Minutes
                                    ?>
                                </td>
                                <td id="data_end_date">
                                    <?php
                                    echo $this->darkblowlib->ConvertDate($rankup->end_date)[2] . // Days
                                        '-' . $this->darkblowlib->ConvertDate($rankup->end_date)[1] . // Month
                                        '-' . '20' . $this->darkblowlib->ConvertDate($rankup->end_date)[0] . // Years
                                        ' ' . $this->darkblowlib->ConvertDate($rankup->end_date)[3] . // Hours
                                        ':' . $this->darkblowlib->ConvertDate($rankup->end_date)[4] // Minutes
                                    ?>
                                </td>
                                <td id="data_point_boost"><?= $rankup->percent_gp ?></td>
                                <td id="data_exp_boost"><?= $rankup->percent_xp ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="edit_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">Start Date</label>
                        <input type="datetime-local" id="start_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">End Date</label>
                        <input type="datetime-local" id="end_date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Point Boost (%)</label>
                        <input type="number" id="point" class="form-control" placeholder="Enter Point Boost">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">EXP Boost (%)</label>
                        <input type="number" id="exp" class="form-control" placeholder="Enter EXP Boost">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Update Events">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(function() {
                            $('#edit_form').on('submit', function(e) {
                                e.preventDefault();

                                return Do_Update();
                            });
                        });

                        function Do_Update() {
                            if ($('#start_date').val() == '') {
                                ShowToast(2000, 'warning', 'Start Date Cannot Be Empty.');
                                return;
                            } else if ($('#end_date').val() == '') {
                                ShowToast(2000, 'warning', 'End Date Cannot Be Empty.');
                                return;
                            } else if ($('#point').val() == '') {
                                ShowToast(2000, 'warning', 'Point Boost Cannot Be Empty.');
                                return;
                            } else if ($('#exp').val() == '') {
                                ShowToast(2000, 'warning', 'EXP Boost Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/rankup/do_update') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'start_date': $('#start_date').val(),
                                        'end_date': $('#end_date').val(),
                                        'point': $('#point').val(),
                                        'exp': $('#exp').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute('submit', 'submit', 'Update Events');
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, Result.response, Result.message);

                                        if (Result.response == 'success') {
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    },
                                    error: function() {
                                        SetAttribute('submit', 'submit', 'Update Events');
                                        ShowToast(2000, 'error', 'Failed To Update Events.');
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