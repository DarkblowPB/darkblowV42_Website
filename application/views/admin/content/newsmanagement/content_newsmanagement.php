<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?= base_url('adm/newsmanagement/add') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i>Add News</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('true')) : ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('true') ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('false')) : ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('false') ?>
                        </div>
                    <?php endif; ?>
                    <table id="news_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th>Title</th>
                            <th width="15%">Date Created</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($news as $row) : ?>
                                <tr id="data_<?= $num ?>">
                                    <td><?= $num ?></td>
                                    <td><?= $row['quickslide_title'] ?></td>
                                    <td><?= $row['quickslide_date'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a href="<?= base_url('adm/newsmanagement/details/' . $row['id']) ?>" class="dropdown-item">Details</a>
                                                <a href="<?= base_url('adm/newsmanagement/edit/' . $row['id']) ?>" class="dropdown-item">Edit</a>
                                                <input type="button" id="delete_<?= $num ?>" class="dropdown-item" value="Delete" onclick="DeleteNews('data_<?= $num ?>', 'delete_<?= $num ?>', '<?= $row['id'] ?>')">
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

                        function DeleteNews(data_id, button_id, news_id) {
                            if (data_id == '' || data_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else if (button_id == '' || button_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else if (news_id == '' || news_id == null) {
                                ShowToast(2000, 'warning', 'Invalid Data.');
                                return;
                            } else {
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/newsmanagement/do_delete') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'news_id': news_id
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute(button_id, 'button', 'Delete');
                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;

                                        if (Result.response == 'success') document.getElementById(data_id).remove();
                                        return;
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute(button_id, 'button', 'Delete');
                                            ShowToast(2000, 'error', 'Failed To Delete News Data.');
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

                                                    return DeleteNews(data_id, button_id, news_id);
                                                },
                                                error: function() {
                                                    SetAttribute(button_id, 'button', 'Delete');
                                                    ShowToast(2000, 'error', 'Failed To Delete News Data.');
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