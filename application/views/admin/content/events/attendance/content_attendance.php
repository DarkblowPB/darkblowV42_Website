<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/eventsmanagement/attendance/create/7days') ?>" class="btn btn-outline-primary text-white">Create Event Set (7 Days)</a>
                    <a href="<?= base_url('adm/eventsmanagement/attendance/create/14days') ?>" class="btn btn-outline-primary text-white">Create Event Set (14 Days)</a>
                    <input type="button" id="disable_event" class="btn btn-outline-danger text-white" value="Disable Event" onclick="DisableEvent()">
                    <script>
                        function DisableEvent() {
                            $.ajax({
                                url: '<?= base_url('adm/eventsmanagement/attendance/do_disableevent') ?>',
                                type: 'GET',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true') {
                                        SetAttribute('disable_event', 'button', 'Disable Event');
                                        ShowToast(2000, 'success', Result.message);
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    } else if (Result.response == 'false') {
                                        SetAttribute('disable_event', 'button', 'Disable Event');
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    } else {
                                        SetAttribute('disable_event', 'button', 'Disable Event');
                                        ShowToast(2000, 'error', Result.message);
                                        return;
                                    }
                                },
                                error: function() {
                                    SetAttribute('disable_event', 'button', 'Disable Event');
                                    ShowToast(2000, 'error', 'Failed To Disable The Event.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="attendance_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="5%">Day</th>
                            <th>Item Reward</th>
                            <th width="15%">Item Duration</th>
                            <th width="15%">Total Claimed</th>
                            <th width="15%">Date</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php if ($attend != null) : ?>
                                <?php $num = 1;
                                foreach ($attend as $row) : ?>
                                    <tr id="data_<?= $num ?>">
                                        <td>
                                            <?= $num ?>
                                        </td>
                                        <td>
                                            <?= $row['day'] ?>
                                        </td>
                                        <td>
                                            <?= $row['item_name'] ?>
                                        </td>
                                        <td>
                                            <?= $this->lib->GetItemDuration('2', $row['item_count'], 1) ?>
                                        </td>
                                        <td>
                                            <?= number_format($row['total_claim'], 0, ',', '.') ?>
                                        </td>
                                        <td>
                                            <?= $row['date'] ?>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Menu
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                                    <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="DeleteEvents('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['id'] ?>')">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php $num++;
                                endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;

                        function DeleteEvents(data_id, button_id, event_id) {
                            if (data_id == '' || data_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else if (button_id == '' || button_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else if (event_id == '' || event_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/attendance/do_delete') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'event_id': event_id
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;

                                        switch (Result.response) {
                                            case 'success': {
                                                document.getElementById(data_id).remove();
                                                break;
                                            }
                                            case 'error': {
                                                SetAttribute(button_id, 'button', 'Delete');
                                                break;
                                            }

                                            default: {
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                                break;
                                            }
                                        }
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'error', 'Failed To Delete This Event.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else {
                                            RETRY += 1;

                                            ShowToast(1000, 'info', 'Generate New Request Token...');

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

                                                    return DeleteEvents(data_id, button_id, event_id);
                                                },
                                                error: function() {
                                                    SetAttribute(button_id, 'button', 'Delete');
                                                    ShowToast(2000, 'error', 'Failed To Delete This Event.');
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