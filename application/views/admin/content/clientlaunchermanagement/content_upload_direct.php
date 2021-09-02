<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="clientlauncher_upload_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">File</label>
                            <input type="file" name="file" id="file" class="form-control-file col-9">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">&nbsp;</label>
                            <label id="progressbar" class="col-9"></label>
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-outline-primary text-white" value="Upload Files">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '';
                        $(document).ready(function(){
                            $('#clientlauncher_upload_form').on('submit', function(e){
                                e.preventDefault();

                                if ($('#file').val() == ''){
                                    ShowToast(2000, 'warning', 'Files Cannot Be Empty.');
                                    return;
                                }
                                else{
                                    if (CSRF_TOKEN == ''){
                                        CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                    }

                                    $.ajax({
                                        url: '<?php echo base_url('adm/clientlaunchermanagement/do_upload_directurl') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: new FormData(this),
                                        processData:false,
                                        contentType:false,
                                        cache:false,
                                        async:false,
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);
                                            
                                            if (Result.response == 'false'){
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                            else if (Result.response == 'true'){
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'success', Result.message);
                                                return;
                                            }
                                            else{
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
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