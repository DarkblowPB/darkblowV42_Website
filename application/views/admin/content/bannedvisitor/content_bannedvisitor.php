<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="bannedvisitor_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th>IP ADDRESS</th>
                        </thead>
                        <tbody>
                            <?php foreach ($ip as $row) : ?>
                                <tr>
                                    <td>
                                        <= $row['ip_address'] ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/bannedvisitor/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'ip_address': $('#ip_address').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('submit', 'submit', 'Submit');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
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
                                            ShowToast(2000, 'error', 'Failed To Add Item.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else {
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
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>