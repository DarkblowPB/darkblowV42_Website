<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="editfiles_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Name</label>
                            <input type="text" id="file_name" class="form-control col-9" value="<?php echo $files->file_name ?>" placeholder="Enter Your File Name">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File URL</label>
                            <input type="url" id="file_url" class="form-control col-9" value="<?php echo $files->file_url ?>" placeholder="Enter Your File URL">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Type</label>
                            <select id="file_type" class="form-control col-9">
                                <option value="client" <?php if ($files->type == "client"){echo 'selected';} ?>>Client (Single Link)</option>
                                <option value="partial" <?php if ($files->type == "partial"){echo 'selected';} ?>>Client (Partial)</option>
                                <option value="launcher" <?php if ($files->type == "launcher"){echo 'selected';} ?>>Launcher</option>
                                <option value="support" <?php if ($files->type == "support"){echo 'selected';} ?>>Support App</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Size</label>
                            <input type="text" id="file_size" class="form-control col-9" placeholder="Enter Your File Size" value="<?php echo $files->size ?>">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Version (<span class="text-danger">Optional</span>)</label>
                            <input type="text" id="file_version" class="form-control col-9" placeholder="Enter Your File Version" value="<?php echo $files->version ?>">
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-outline-primary text-white" value="Submit Edit">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '';
                        $(document).ready(function(){
                            $('#editfiles_form').on('submit', function(e){
                                e.preventDefault();

                                if ($('#file_name').val() == ""){
                                    ShowToast(2000, 'warning', 'File Name Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#file_url').val() == ""){
                                    ShowToast(2000, 'warning', 'File URL Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#file_type').val() == ""){
                                    ShowToast(2000, 'warning', 'File Type Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#file_size').val() == ""){
                                    ShowToast(2000, 'warning', 'File Size Cannot Be Empty.');
                                    return;
                                }
                                else{
                                    if (CSRF_TOKEN == ''){
                                        CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                    }

                                    $.ajax({
                                        url: '<?php echo base_url('adm/clientlaunchermanagement/do_edit') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                            'file_id' : '<?php echo $this->input->get('files_id') ?>',
                                            'file_name' : $('#file_name').val(),
                                            'file_url' : $('#file_url').val(),
                                            'file_type' : $('#file_type').val(),
                                            'file_size' : $('#file_size').val(),
                                            'file_version' : $('#file_version').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'success', Result.message);
                                                setTimeout(() => {
                                                    self.history.back();
                                                }, 2000);
                                                return;
                                            }
                                            else if (Result.response == 'false'){
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                            else {
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'success', Result.message);
                                                return;
                                            }
                                        },
                                        error: function(data){
                                            ShowToast(2000, 'error', data.responseText);
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>