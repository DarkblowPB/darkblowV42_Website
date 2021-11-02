<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="clientlauncher_upload_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Name</label>
                            <input type="text" id="file_name" class="form-control col-9" placeholder="Enter Your File Name">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Url</label>
                            <input type="url" id="file_url" class="form-control col-9" placeholder="Enter Your File Url">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Type</label>
                            <select id="file_type" class="form-control col-9">
                                <option value="" disabled selected>Select Your File Type</option>
                                <option value="client">Client (Single Link)</option>
                                <option value="partial">Client (Partial)</option>
                                <option value="launcher">Launcher</option>
                                <option value="support">Support App</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Size</label>
                            <input type="text" id="file_size" class="form-control col-9" placeholder="Enter Your File Size">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File Version (<span class="text-danger">Optional</span>)</label>
                            <input type="number" id="file_version" class="form-control col-9" placeholder="Enter Your File Version">
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit File">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        $(document).ready(function(){
                            $('#clientlauncher_upload_form').on('submit', function(e){
                                e.preventDefault();

                                return Do_UploadUrl();
                            });
                        });

                        function Do_UploadUrl()
                        {
                            if ($('#file_name').val() == '' || $('#file_name').val() == null){
                                ShowToast(2000, 'warning', 'File Name Cannot Be Empty.');
                                return;
                            }
                            else if ($('#file_url').val() == '' || $('#file_url').val() == null){
                                ShowToast(2000, 'warning', 'File URL Cannot Be Empty.');
                                return;
                            }
                            else if ($('#file_type').val() == '' || $('#file_type').val() == null){
                                ShowToast(2000, 'warning', 'File Type Cannot Be Empty.');
                                return;
                            }
                            else if ($('#file_size').val() == '' || $('#file_size').val() == null){
                                ShowToast(2000, 'warning', 'File Size Cannot Be Empty.');
                                return;
                            }
                            else{
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?php echo base_url('adm/clientlaunchermanagement/do_upload_externalurl') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
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
                                            SetAttribute('submit', 'submit', 'Submit File');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            setTimeout(() => {
                                                self.history.back();
                                            }, 2000);
                                        }
                                        else{
                                            SetAttribute('submit', 'submit', 'Submit File');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function(){
                                        if (RETRY >= 3){
                                            SetAttribute('submit', 'submit', 'Submit File');
                                            ShowToast(2000, 'error', 'Failed To Submit File.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                        else{
                                            RETRY += 1;

                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);
            
                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN = Result.token;
                                                    }
                                                    return Do_UploadUrl();
                                                },
                                                error: function(){
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