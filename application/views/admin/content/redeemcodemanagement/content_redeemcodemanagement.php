<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/redeemcodemanagement/add') ?>" class="btn btn-outline-primary text-white"><i class="fa fa-plus-circle mr-2"></i>Create New Redeem Code</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="redeemcode_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th>Reward (Weapon)</th>
                            <th width="15%">Reward (Cash)</th>
                            <th width="10%">Duration</th>
                            <th width="15%">Code</th>
                            <th witdh="10%">Type</th>
                            <th width="15%">Total Redeem</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($redeemcode as $row) : ?>
                                <tr id="data_<?= $num ?>">
                                    <td><?= $num ?></td>
                                    <td><?= $this->darkblowlib->GetItemName($row['item_id']) ?></td>
                                    <td><?= number_format($row['cash'], '0', ',', '.') ?></td>
                                    <td>
                                        <?php if ($row['type'] == 'Item' || $row['type'] == 'Double') : ?>
                                            <?= ($row['item_count'] / 24 / 60 / 60) ?> Days
                                        <?php endif; ?>
                                        <?php if ($row['type'] == 'Cash') : ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $row['item_code'] ?></td>
                                    <td><?= $row['type'] ?></td>
                                    <td><?= number_format($this->redeemcodemanagement->GetTotalRedeem($row['item_code']), '0', ',', '.') ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle text-uppercase text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="DeleteCode('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['item_code'] ?>')">
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

                        function DeleteCode(data_id, button_id, item_code) {
                            if (data_id == '' || data_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else if (button_id == '' || button_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else if (item_code == '' || item_code == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/redeemcodemanagement/do_delete') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'item_code': item_code
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            document.getElementById(data_id).remove();
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute(button_id, 'error', Result.message);
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute(button_id, 'error', Result.message);
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'error', 'Failed To Delete This Code.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
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

                                                    return DeleteCode(data_id, button_id, item_code);
                                                },
                                                error: function() {
                                                    SetAttribute(button_id, 'button', 'Delete');
                                                    ShowToast(2000, 'error', 'Failed To Delete This Code.');
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