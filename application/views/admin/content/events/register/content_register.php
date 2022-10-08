<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th>Reward</th>
                            <th width="15%">Category</th>
                            <th width="10%">Duration</th>
                            <th width="5%">Stock</th>
                            <th width="10%">Status</th>
                            <th width="10%">Menu</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $this->eventsregister->GetItemName($events->item_id) ?>
                                </td>
                                <td>
                                    <?= $this->eventsregister->GetItemCategory($events->item_id) ?>
                                </td>
                                <td>
                                    <?= ($events->item_count / 24 / 60 / 60) . ' Days' ?>
                                </td>
                                <td>
                                    <?= $events->stock ?>
                                </td>
                                <td><?php if ($events->is_active == 'f') {
                                        echo '<span class="text-danger">DISABLED</span>';
                                    } else {
                                        echo '<span class="text-success">ENABLED</span>';
                                    } ?></td>
                                <td><input type="button" id="update_events" class="btn btn-outline-<?php if ($events->is_active == 'f') {
                                                                                                        echo 'success';
                                                                                                    } else {
                                                                                                        echo 'danger';
                                                                                                    } ?>" value="<?php if ($events->is_active == 'f') {
                                                                                                                        echo 'ENABLE';
                                                                                                                    } else {
                                                                                                                        echo 'DISABLE';
                                                                                                                    } ?>" onclick="Do_SetState()"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="update_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">Reward</label>
                        <select id="item_id" class="form-control reward_selection">
                            <option value="" disabled selected>Select Reward</option>
                            <?php foreach ($items as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Duration</label>
                        <select id="item_count" class="form-control reward_selection">
                            <option value="" disabled selected>Select Reward Duration</option>
                            <?php $this->darkblowlib->GetItemDurationList('create', null, 90) ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Stock</label>
                        <input type="number" id="stock" class="form-control" placeholder="Enter Events Stock">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Update Events">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(function() {
                            $('#update_form').on('submit', function(e) {
                                e.preventDefault();

                                if ($('#item_id').val() == null) {
                                    ShowToast(2000, 'warning', 'Reward Cannot Be Empty.');
                                    return;
                                } else if ($('#item_count').val() == null) {
                                    ShowToast(2000, 'warning', 'Reward Duration Cannot Be Empty.');
                                    return;
                                } else if ($('#stock').val() == '') {
                                    ShowToast(2000, 'warning', 'Stock Cannot Be Empty.');
                                    return;
                                } else {
                                    SetAttribute('submit', 'button', 'Processing...');

                                    $.ajax({
                                        url: '<?= base_url('adm/eventsmanagement/register/do_update') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'item_id': $('#item_id').val(),
                                            'item_count': $('#item_count').val(),
                                            'stock': $('#stock').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true') {
                                                SetAttribute('submit', 'submit', 'Update Events');
                                                ShowToast(2000, 'success', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            } else if (Result.response == 'false') {
                                                SetAttribute('submit', 'submit', 'Update Events');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            } else {
                                                SetAttribute('submit', 'submit', 'Update Events');
                                                ShowToast(2000, 'error', Result.message);
                                                CSRF_TOKEN = Result.token;
                                                return;
                                            }
                                        },
                                        error: function() {
                                            ShowToast(1000, 'info', 'Getting New Request Token...');

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

                                                    return Do_Update();
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
                                    });
                                }
                            });
                        });

                        function Do_SetState() {
                            $.ajax({
                                url: '<?= base_url('adm/eventsmanagement/register/do_updatestate') ?>',
                                type: 'GET',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    ShowToast(2000, 'success', Result.message);
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                },
                                error: function() {
                                    ShowToast(2000, 'error', 'Failed To Update Events.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }

                        function Do_Update() {
                            if ($('#item_id').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Cannot Be Empty.');
                                return;
                            } else if ($('#item_count').val() == null) {
                                ShowToast(2000, 'warning', 'Reward Duration Cannot Be Empty.');
                                return;
                            } else if ($('#stock').val() == null) {
                                ShowToast(2000, 'warning', 'Stock Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/eventsmanagement/register/do_update') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'item_id': $('#item_id').val(),
                                        'item_count': $('#item_count').val(),
                                        'stock': $('#stock').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute('submit', 'submit', 'Update Events');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        } else if (Result.response == 'false') {
                                            SetAttribute('submit', 'submit', 'Update Events');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute('submit', 'submit', 'Update Events');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
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