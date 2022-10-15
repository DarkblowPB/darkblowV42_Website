<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead>
                            <th colspan="2" class="text-bold text-uppercase"><?= $files->file_name ?></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>File URL</td>
                                <td><input type="button" id="check_visibility" class="btn btn-outline-primary text-white text-bold" value="Check Visibility" onclick=""></td>
                            </tr>
                            <tr>
                                <td>File Type</td>
                                <td class="text-uppercase"><?= $files->file_type ?></td>
                            </tr>
                            <tr>
                                <td>File Size</td>
                                <td><?= $files->file_size ?></td>
                            </tr>
                            <tr>
                                <td>Date Upload</td>
                                <td><?= $this->darkblowlib->ParseUnixTimeStamp($files->date_created) ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        $(document).ready(function() {
                            $('#check_visibility').click(function() {

                                return Do_CheckVisibility();
                            });
                        });

                        function Do_CheckVisibility() {
                            SetAttribute('check_visibility', 'button', 'Processing...');
                            $.ajax({
                                url: '<?= base_url('adm/clientlaunchermanagement/do_geturl') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                    'files_id': '<?= $files->id ?>'
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    SetAttribute('check_visibility', 'button', 'Check Visibility');
                                    CSRF_TOKEN = Result.token;

                                    if (Result.response == 'success') {
                                        ShowToast(2000, Result.response, 'Redirecting To Page...');
                                        setTimeout(() => {
                                            window.open(Result.url, '_blank');
                                        }, 2000);
                                    } else ShowToast(2000, Result.response, Result.message);
                                },
                                error: function() {
                                    if (RETRY >= 3) {
                                        SetAttribute('check_visibility', 'button', 'Check Visibility');
                                        ShowToast(2000, 'error', 'Failed To Check Visibility.');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    } else {
                                        ShowToast(2000, 'info', 'Generate New Request Token...');

                                        $.ajax({
                                            url: '<?= base_url('api/security/csrf') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {
                                                '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                                            },
                                            success: function() {
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                if (Result.response == 'true') {
                                                    CSRF_TOKEN = Result.token;
                                                }

                                                return Do_CheckVisibility();
                                            },
                                            error: function() {
                                                SetAttribute('check_visibility', 'button', 'Check Visibility');
                                                ShowToast(2000, 'error', 'Failed To Check Visibility.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    </script>
                    <div class="form-group text-center mt-3">
                        <button type="button" class="btn btn-outline-danger text-white text-bold" onclick="self.history.back()"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>