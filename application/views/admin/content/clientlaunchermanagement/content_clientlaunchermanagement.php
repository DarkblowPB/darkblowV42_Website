<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
            <div class="card">
                <div class="card-body">
                    <a href="javascript:void(0)" class="btn btn-outline-primary text-white text-bold disabled" onclick="ShowToast(2000, 'info', 'This Feature Not Available At This Moment.')"><i class="fas fa-plus-circle mr-2"></i>Upload New Files (Direct URL)</a>
                    <a href="<?= base_url('adm/clientlaunchermanagement/upload/external') ?>" class="btn btn-outline-primary text-white text-bold"><i class="fas fa-plus-circle mr-2"></i>Upload New Files (External URL)</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="clientlauncher_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th>File Name</th>
                            <th width="10%">Type</th>
                            <th width="10%">Size</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($files as $row) : ?>
                                <tr id="data_<?= $num ?>">
                                    <td><?= $num; ?></td>
                                    <td><?= $row['file_name'] ?></td>
                                    <td class="text-uppercase text-bold"><?= $row['file_type'] ?></td>
                                    <td><?= $row['file_size'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="<?= base_url('adm/clientlaunchermanagement/details/' . $row['id']) ?>">Details</a>
                                                <a class="dropdown-item" href="<?= base_url('adm/clientlaunchermanagement/edit/' . $row['id']) ?>">Edit</a>
                                                <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="DeleteFiles('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['id'] ?>');">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
    var RETRY = 0;

    function DeleteFiles(data_id, button_id, files_id) {
        if (files_id == "" || files_id == null) {
            ShowToast(2000, 'error', 'Invalid Files.');
            return;
        }
        if (files_id != "" || files_id != null) {
            Swal.fire({
                title: 'Are You Sure Want To Delete This Item?',
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
                        url: '<?= base_url('adm/clientlaunchermanagement/do_delete') ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {
                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                            'files_id': files_id
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
                                    setTimeout(() => {
                                        window.location = '<?= base_url('adm/clientlaunchermanagement') ?>';
                                    }, 2000);
                                    break;
                                }

                                default: {
                                    setTimeout(() => {
                                        window.location = '<?= base_url('adm/clientlaunchermanagement') ?>';
                                    }, 2000);
                                    break;
                                }
                            }
                        },
                        error: function(data) {
                            if (RETRY >= 3) {
                                ShowToast(2000, 'error', 'Failed To Delete This Item.');
                                return;
                            } else {
                                RETRY += 1;
                                ShowToast(1000, 'info', 'Generate New Request Token...');

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

                                        return DeleteFiles(data_id, button_id, files_id);
                                    },
                                    error: function() {
                                        ShowToast(2000, 'error', 'Failed To Delete This Item.');
                                        return;
                                    }
                                });
                            }
                        }
                    })
                }
            })
        }
    }
</script>