<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/eventsmanagement/login/add') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i>Add New Events</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="login_events_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No</th>
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th>Reward Item</th>
                            <th width="15%">Reward Duration</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($items as $row) : ?>
                                <tr id="<?= 'data_' . $num ?>">
                                    <td><?= $num ?></td>
                                    <td>
                                        <?= $this->darkblowlib->ConvertDate($row['start_date'])[2] . // Days
                                            '-' . $this->darkblowlib->ConvertDate($row['start_date'])[1] . // Month
                                            '-' . '20' . $this->darkblowlib->ConvertDate($row['start_date'])[0] . // Years
                                            ' ' . $this->darkblowlib->ConvertDate($row['start_date'])[3] . // Hours
                                            ':' . $this->darkblowlib->ConvertDate($row['start_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td>
                                        <?= $this->darkblowlib->ConvertDate($row['end_date'])[2] . // Days
                                            '-' . $this->darkblowlib->ConvertDate($row['end_date'])[1] . // Month
                                            '-' . '20' . $this->darkblowlib->ConvertDate($row['end_date'])[0] . // Years
                                            ' ' . $this->darkblowlib->ConvertDate($row['end_date'])[3] . // Hours
                                            ':' . $this->darkblowlib->ConvertDate($row['end_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td><?= $this->eventslogin->GetItemName($row['reward_id']) ?></td>
                                    <td><?= $this->eventslogin->ConvertDuration($row['reward_count']) ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                                <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="DeleteEvents('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $this->darkblowlib->ConvertDate($row['start_date'])[0] . $this->darkblowlib->ConvertDate($row['start_date'])[1] . $this->darkblowlib->ConvertDate($row['start_date'])[2] . $this->darkblowlib->ConvertDate($row['start_date'])[3] . $this->darkblowlib->ConvertDate($row['start_date'])[4] ?>', '<?= $this->darkblowlib->ConvertDate($row['end_date'])[0] . $this->darkblowlib->ConvertDate($row['end_date'])[1] . $this->darkblowlib->ConvertDate($row['end_date'])[2] . $this->darkblowlib->ConvertDate($row['end_date'])[3] . $this->darkblowlib->ConvertDate($row['end_date'])[4] ?>')">
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

                        function DeleteEvents(data_id, button_id, start_date, end_date) {
                            SetAttribute(button_id, 'button', 'Processing...');
                            $.ajax({
                                url: '<?= base_url('adm/eventsmanagement/login/do_delete') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'start_date': start_date,
                                    'end_date': end_date
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    SetAttribute('submit', 'submit', 'Submit New Events');
                                    ShowToast(2000, Result.response, Result.message);
                                    CSRF_TOKEN = Result.token;

                                    if (Result.response == 'success') document.getElementById(data_id).remove();
                                },
                                error: function(data) {
                                    if (RETRY >= 3) {
                                        ShowToast(2000, 'error', 'Failed To Delete This Events.');
                                        SetAttribute(button_id, 'button', 'Delete');
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
                                                '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                                            },
                                            success: function(data) {
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                if (Result.response == 'true') {
                                                    CSRF_TOKEN = Result.token;
                                                }

                                                return DeleteEvents(data_id, button_id, start_date, end_date);
                                            },
                                            error: function() {
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
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>