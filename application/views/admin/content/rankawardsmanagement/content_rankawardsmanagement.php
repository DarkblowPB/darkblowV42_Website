<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/rankawardsmanagement/add') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i>Add New Award</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="rankawards_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="10%">Rank</th>
                            <th>Reward</th>
                            <th width="10%">Duration</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($awards as $row) : ?>
                                <tr id="data_<?= $num ?>">
                                    <td><?= $num ?></td>
                                    <td><img src="<?= base_url() ?>assets/goodgames/assets/images/img_rank/<?= $row['rank_id'] ?>.gif" alt="<?= $row['rank_id'] ?>"></td>
                                    <td><?= $this->rankawards->GetItemName($row['item_id']) ?></td>
                                    <td><?= round(($row['item_count'] / 24 / 60 / 60)) . ' Days' ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="DeleteAwards('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['rank_id'] ?>', '<?= $row['item_id'] ?>')">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++;
                            endforeach; ?>
                            <script>
                                var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                                var RETRY = 0;

                                function DeleteAwards(data_id, button_id, rank_id, item_id) {
                                    if (data_id == '' || data_id == null) {
                                        ShowToast(2000, 'warning', 'Invalid Data.');
                                        return;
                                    } else if (data_id == '' || data_id == null) {
                                        ShowToast(2000, 'warning', 'Invalid Data.');
                                        return;
                                    } else if (data_id == '' || data_id == null) {
                                        ShowToast(2000, 'warning', 'Invalid Data.');
                                        return;
                                    } else if (data_id == '' || data_id == null) {
                                        ShowToast(2000, 'warning', 'Invalid Data.');
                                        return;
                                    } else {
                                        Swal.fire({
                                            title: 'Are You Sure Want To Delete This Awards?',
                                            text: "You Won't Be Able To Revert This Action!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, Delete It!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                SetAttribute(button_id, 'button', 'Processing...');
                                                $.ajax({
                                                    url: '<?= base_url('adm/rankawardsmanagement/do_delete') ?>',
                                                    type: 'POST',
                                                    dataType: 'JSON',
                                                    data: {
                                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                                        'rank_id': rank_id,
                                                        'item_id': item_id
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
                                                            ShowToast(2000, 'error', 'Failed To Delete This Awards.');
                                                            setTimeout(() => {
                                                                window.location.reload();
                                                            }, 2000);
                                                            return;
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
                                                                    return DeleteAwards(data_id, button_id, rank_id, item_id);
                                                                },
                                                                error: function() {
                                                                    SetAttribute(button_id, 'button', 'Delete');
                                                                    ShowToast(2000, 'error', 'Failed To Delete This Awards.');
                                                                    setTimeout(() => {
                                                                        window.location.reload();
                                                                    }, 2000);
                                                                }
                                                            });
                                                        }
                                                    }
                                                });
                                            }
                                        })
                                    }
                                }
                            </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>