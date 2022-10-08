<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="bannedvisitor_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="20%">IP Address</th>
                            <th>Reason</th>
                            <th width="20%">Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($ip as $row) : ?>
                                <tr id="row_<?= $num ?>">
                                    <td><?= $num ?></td>
                                    <td><?= $row['ipaddress'] ?></td>
                                    <td><?= $row['reason'] ?></td>
                                    <td><input type="button" id="delete_<?= $num ?>" class="btn btn-outline-danger" value="Delete" onclick="Do_Delete('delete_<?= $num ?>', 'row_<?= $num ?>', '<?= $row['id'] ?>')"></td>
                                </tr>
                            <?php $num++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">IP ADDRESS</label>
                        <input type="text" id="ip_address" class="form-control" placeholder="Enter IP Address">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Reason</label>
                        <textarea name="reason" id="reason" rows="10" class="form-control" placeholder="Reason"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        $(document).ready(function() {
                            $('#add_form').on('submit', function(e) {
                                e.preventDefault();

                                return Do_Add();
                            });
                        });

                        function Do_Add() {
                            if ($('#ip_address').val() == '' || $('#ip_address').val() == null) {
                                ShowToast(2000, 'warning', 'IP ADDRESS Cannot Be Empty.');
                                return;
                            } else if ($('#reason').val() == '' || $('#reason').val() == null) {
                                ShowToast(2000, 'warning', 'Reason Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/bannedvisitor/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'ip_address': $('#ip_address').val(),
                                        'reason': $('#reason').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute('submit', 'submit', 'Submit');
                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;

                                        if (Result.response == 'success') {
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'error', 'Failed To Add Ip Address.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else {
                                            RETRY += 1;
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
                                                    ShowToast(2000, 'error', 'Failed To Submit IP ADDRESS.');
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

                        function Do_Delete(button_id, element_id, data_id) {
                            SetAttribute(button_id, 'button', 'Processing...');
                            $.ajax({
                                url: '<?= base_url('adm/bannedvisitor/do_delete') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    "<?= $this->security->get_csrf_token_name() ?>": CSRF_TOKEN,
                                    "id": data_id
                                },
                                success: (response) => {
                                    var Stringify = JSON.stringify(response);
                                    var Result = JSON.parse(Stringify);

                                    SetAttribute(button_id, 'button', 'Delete');
                                    ShowToast(2000, Result.response, Result.message);
                                    CSRF_TOKEN = Result.token;

                                    if (Result.response == 'success') {
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                },
                                error: () => {
                                    if (RETRY >= 3) {
                                        SetAttribute(button_id, 'button', 'Delete');
                                        ShowToast(2000, 'error', 'Failed To Delete IP Address.');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    } else {
                                        RETRY += 1;
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
                                                return Do_Delete();
                                            },
                                            error: function() {
                                                SetAttribute(button_id, 'button', 'Delete');
                                                ShowToast(2000, 'error', 'Failed To Delete IP Address.');
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