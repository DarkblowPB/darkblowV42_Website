<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="allplayers_table_custom" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center" style="width: 100%;">
                        <thead class="bg-primary text-uppercase">
                            <th width="5%">No.</th>
                            <th width="15%">Username</th>
                            <th width="10%">Rank</th>
                            <th>Nickname</th>
                            <th width="15%">Last IP</th>
                            <th width="15%">Last MAC</th>
                            <th width="15%">Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($players as $row) : ?>
                                <tr id="data_<?= $num ?>">
                                    <td>
                                        <?= $num ?>
                                    </td>
                                    <td>
                                        <?= $row['login'] ?>
                                    </td>
                                    <td><img src="<?= base_url() ?>assets/goodgames/assets/images/img_rank/<?= $row['rank'] ?>.gif" class="img img-fluid" alt="<?= $row['rank'] ?>"></td>
                                    <td>
                                        <?= $row['player_name'] ?>
                                    </td>
                                    <td>
                                        <?= $row['lastip'] ?>
                                    </td>
                                    <td>
                                        <?= $row['last_mac'] ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle text-uppercase text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="<?= base_url('adm/playersmanagement/details/' . $row['player_id']) ?>">Details</a>

                                                <?php if ($row['access_level'] == '-1') : ?>
                                                    <input type="button" id="submit_<?= $num ?>" class="dropdown-item" value="Unbanned" onclick="Do_UnbannedPlayer('<?= 'submit_' . $num ?>', '<?= $row['player_id'] ?>')">
                                                <?php endif; ?>
                                                <?php if ($row['access_level'] != '-1') : ?>
                                                    <input type="button" id="submit_<?= $num ?>" class="dropdown-item" value="Banned" onclick="Do_BannedPlayer('<?= 'submit_' . $num ?>', '<?= $row['player_id'] ?>')">
                                                <?php endif; ?>

                                                <input type="button" id="reset_<?= $num ?>" class="dropdown-item" value="Reset" onclick="Do_ResetPlayer('<?= 'reset_' . $num ?>', '<?= $row['player_id'] ?>')">
                                                <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="Do_DeletePlayer('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['player_id'] ?>')">
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

                        $(document).ready(() => {
                            $('#allplayers_table_custom').DataTable({
                                dataSrc: '',
                                ajax: {
                                    url: '<?= base_url('adm/playersmanagement/do_loadplayers') ?>',
                                    type: 'GET'
                                },
                                clientSide: true,
                                columns: [{
                                    data: 0,
                                    orderable: true,
                                    className: "text-center"
                                }, {
                                    data: 1,
                                    orderable: true,
                                    className: "text-center"
                                }, {
                                    data: 2,
                                    orderable: true,
                                    className: "text-center"
                                }, {
                                    data: 3,
                                    orderable: true,
                                    className: "text-center"
                                }, {
                                    data: 4,
                                    orderable: true,
                                    className: "text-center"
                                }, {
                                    data: 5,
                                    orderable: true,
                                    className: "text-center"
                                }, {
                                    data: 6,
                                    orderable: true,
                                    className: "text-center"
                                }, ]
                            });
                        });

                        function Do_DeletePlayer(data_id, button_id, player_id) {
                            if (player_id == '' || player_id == null) {
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            } else {
                                Swal.fire({
                                    title: 'Are You Sure Want To Delete This Player?',
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
                                            url: '<?= base_url('adm/playersmanagement/do_delete') ?>',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                                'player_id': player_id
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
                                                if (TOTAL_RETRY >= 3) {
                                                    ShowToast(2000, 'Failed To Delete This Player.');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                } else {
                                                    TOTAL_RETRY += 1;
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

                                                            return Do_DeletePlayer(button_id, player_id);
                                                        },
                                                        error: function() {
                                                            ShowToast(2000, 'error', 'Failed To Delete This Player.');
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

                        function Do_ResetPlayer(button_id, player_id) {
                            if (player_id == '' || player_id == null) {
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/playersmanagement/do_reset') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'player_id': player_id
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        if (TOTAL_RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'error', 'Failed To Reset This Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        } else {
                                            TOTAL_RETRY += 1;
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

                                                    return Do_ResetPlayer(button_id, player_id);
                                                },
                                                error: function() {
                                                    ShowToast(2000, 'error', 'Failed To Reset This Player.');
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

                        function Do_BannedPlayer(button_id, player_id) {
                            if (player_id == '' || player_id == null) {
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/playersmanagement/do_banned') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'player_id': player_id
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            document.getElementById(button_id).setAttribute('value', 'Unbanned');
                                            document.getElementById(button_id).setAttribute('onclick', "Do_UnbannedPlayer('" + button_id + "', '" + player_id + "')");
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        if (TOTAL_RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'error', 'Failed To Banned This Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        } else {
                                            TOTAL_RETRY += 1;
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

                                                    return Do_BannedPlayer(button_id, player_id);
                                                },
                                                error: function() {
                                                    ShowToast(2000, 'error', 'Failed To Banned This Player.');
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

                        function Do_UnbannedPlayer(button_id, player_id) {
                            if (player_id == '' || player_id == null) {
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/playersmanagement/do_unbanned') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'player_id': player_id
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true') {
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            document.getElementById(button_id).setAttribute('value', 'Banned');
                                            document.getElementById(button_id).setAttribute('onclick', "Do_BannedPlayer('" + button_id + "', '" + player_id + "')");
                                            return;
                                        } else if (Result.response == 'false') {
                                            SetAttribute(button_id, 'button', 'Unbanned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        } else {
                                            SetAttribute(button_id, 'button', 'Unbanned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function() {
                                        if (TOTAL_RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Unbanned');
                                            ShowToast(2000, 'error', 'Failed To Banned This Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        } else {
                                            TOTAL_RETRY += 1;
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

                                                    return Do_UnbannedPlayer(button_id, player_id);
                                                },
                                                error: function() {
                                                    SetAttribute(button_id, 'button', 'Unbanned');
                                                    ShowToast(2000, 'error', 'Failed To Banned This Player.');
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