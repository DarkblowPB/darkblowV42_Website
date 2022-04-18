<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/eventsmanagement/playtime/add') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i>Add New Events</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="playtime_events_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th>Title</th>
                            <th width="15%">Playtime (Seconds)</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($playtime as $row) : ?>
                                <tr id="data_<= $num ?>">
                                    <td>
                                        <= $num ?>
                                    </td>
                                    <td>
                                        <?= $this->lib->ConvertDate($row['start_date'])[2] . // Days
                                            '-' . $this->lib->ConvertDate($row['start_date'])[1] . // Month
                                            '-' . '20' . $this->lib->ConvertDate($row['start_date'])[0] . // Years
                                            ' ' . $this->lib->ConvertDate($row['start_date'])[3] . // Hours
                                            ':' . $this->lib->ConvertDate($row['start_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td>
                                        <?= $this->lib->ConvertDate($row['end_date'])[2] . // Days
                                            '-' . $this->lib->ConvertDate($row['end_date'])[1] . // Month
                                            '-' . '20' . $this->lib->ConvertDate($row['end_date'])[0] . // Years
                                            ' ' . $this->lib->ConvertDate($row['end_date'])[3] . // Hours
                                            ':' . $this->lib->ConvertDate($row['end_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td>
                                        <= $row['title'] ?>
                                    </td>
                                    <td>
                                        <= number_format($row['seconds_target'], '0' ,',','.') ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <input type="button" id="delete_<= $num ?>" class="dropdown-item" value="Delete" onclick="Do_Delete('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['title'] ?>')">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++;
                            endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;

                        function Do_Delete(data_id, button_id, title) {
                            if (title == '') {
                                ShowToast(2000, 'warning', 'Title Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');
                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/playtime/do_delete') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'title': title
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            document.getElementById(data_id).remove();
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'Failed To Delete This Events.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else {
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

                                                    return Do_Delete(data_id, button_id, title);
                                                },
                                                error: function() {
                                                    SetAttribute(button_id, 'button', 'Delete');
                                                    ShowToast(2000, 'error', 'Failed To Delete This Events.');
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