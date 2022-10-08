<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="clientlauncher_upload_form" autocomplete="off"') ?>
                    <div class="form-group">
                        <label class="col-form-label">File Name</label>
                        <input type="text" id="file_name" class="form-control" placeholder="Enter Your File Name" value="<?= $files->file_name ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">File Description</label>
                        <textarea name="file_description" id="file_description" rows="10" placeholder="Enter Your File Description" class="form-control"><?= $files->file_description ?></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Cloud Type</label>
                        <select name="file_cloud_type" id="file_cloud_type" class="form-control reward_selection" required>
                            <option value="" disabled>Select Your Cloud Type</option>
                            <option value="googledrive" <?= $files->file_cloud_type == "googledrive" ? 'selected' : '' ?>>Google Drive</option>
                            <option value="mediafire" <?= $files->file_cloud_type == "mediafire" ? 'selected' : '' ?>>MediaFire</option>
                            <option value="sendspace" <?= $files->file_cloud_type == "sendspace" ? 'selected' : '' ?>>Sendspace</option>
                            <option value="other" <?= $files->file_cloud_type == "other" ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">File Type</label>
                        <select id="file_type" class="form-control reward_selection" required>
                            <option value="" disabled selected>Select Your File Type</option>
                            <option value="client" <?= $files->file_type == "client" ? 'selected' : '' ?>>Client (Single Link)</option>
                            <option value="partial" <?= $files->file_type == "partial" ? 'selected' : '' ?>>Client (Partial)</option>
                            <option value="launcher" <?= $files->file_type == "launcher" ? 'selected' : '' ?>>Launcher</option>
                            <option value="support" <?= $files->file_type == "support" ? 'selected' : '' ?>>Support App</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">File Url</label>
                        <input type="url" id="file_url" class="form-control" placeholder="Enter Your File Url" value="<?= $files->file_url ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">File Size</label>
                        <input type="text" id="file_size" class="form-control" placeholder="Enter Your File Size" value="<?= $files->file_size ?>">
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit File">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        $(document).ready(function() {
                            $('#clientlauncher_upload_form').on('submit', function(e) {
                                e.preventDefault();

                                return Do_UploadUrl();
                            });
                        });

                        function Do_UploadUrl() {
                            if ($('#file_name').val() == '' || $('#file_name') == null) {
                                ShowToast(2000, 'warning', 'File Name Cannot Be Empty.');
                                return;
                            } else if ($('#file_cloud_type') == '' || $('#file_cloud_type').val() == null) {
                                ShowToast(2000, 'warning', 'Cloud Type Cannot Be Empty.');
                                return;
                            } else if ($('#file_type').val() == '' || $('#file_type').val() == null) {
                                ShowToast(2000, 'warning', 'File Type Cannot Be Empty.');
                                return;
                            } else if ($('#file_url').val() == '' || $('#file_url').val() == null) {
                                ShowToast(2000, 'warning', 'File Url Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/clientlaunchermanagement/do_edit') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'file_id': '<?= $files->id ?>',
                                        'file_name': $('#file_name').val(),
                                        'file_description': $('#file_description').val(),
                                        'file_cloud_type': $('#file_cloud_type').val(),
                                        'file_type': $('#file_type').val(),
                                        'file_url': $('#file_url').val(),
                                        'file_size': $('#file_size').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute('submit', 'submit', 'Submit File');
                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;
                                        if (Result.response == 'success') setTimeout(() => {
                                            window.history.back();
                                        }, 2000);
                                    },
                                    error: function() {
                                        if (RETRY >= 3) {
                                            SetAttribute('submit', 'submit', 'Submit File');
                                            ShowToast(2000, 'error', 'Failed To Submit File.');
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
                                                    return Do_UploadUrl();
                                                },
                                                error: function() {
                                                    SetAttribute('submit', 'submit', 'Submit File');
                                                    ShowToast(2000, 'error', 'Failed To Submit File.');
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