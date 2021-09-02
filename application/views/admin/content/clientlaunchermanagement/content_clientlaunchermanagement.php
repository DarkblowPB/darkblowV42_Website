<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
            <div class="card">
                <div class="card-body">        
                    <a href="javascript:void(0)" class="btn btn-outline-primary text-white text-bold disabled" onclick="ShowToast(2000, 'info', 'This Feature Not Available At This Moment.')"><i class="fas fa-plus-circle mr-2"></i>Upload New Files (Direct URL)</a>
                    <a href="<?php echo base_url('adm/clientlaunchermanagement/upload?type=external_url') ?>" class="btn btn-outline-primary text-white text-bold"><i class="fas fa-plus-circle mr-2"></i>Upload New Files (External URL)</a>
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
                            <th width="10%">Version</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($files as $row) : ?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td><?php echo $row['file_name'] ?></td>
                                    <td class="text-uppercase text-bold"><?php echo $row['type'] ?></td>
                                    <td><?php echo $row['size'] ?></td>
                                    <td><?php echo $row['version'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="<?php echo base_url('adm/clientlaunchermanagement/details?files_id='.$row['id']) ?>"><i class="fas fa-list mr-2"></i>Details</a>
                                                <a class="dropdown-item" href="<?php echo base_url('adm/clientlaunchermanagement/edit?files_id='.$row['id']) ?>"><i class="fas fa-edit mr-2"></i>Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="DeleteFiles('<?php echo $row['id'] ?>')"><i class="fas fa-trash mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var CSRF_TOKEN = '';
    function DeleteFiles(files_id){
        if (files_id == "" || files_id == null){
            ShowToast(2000, 'error', 'Invalid Files.');
            return;
        }
        if (files_id != "" || files_id != null){
            if (CSRF_TOKEN == ''){
                CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
            }
            $.ajax({
                url: '<?php echo base_url('adm/clientlaunchermanagement/do_delete') ?>',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                    'files_id' : files_id
                },
                success: function(data){
                    var GetString = JSON.stringify(data);
                    var Result = JSON.parse(GetString);
                    
                    if (Result.response == 'true'){
                        CSRF_TOKEN = Result.token;
                        ShowToast(2000, 'success', Result.message);
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                    else if (Result.response == 'false'){
                        CSRF_TOKEN = Result.token;
                        ShowToast(2000, 'error', Result.message);
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
                    return;
                }
            })
        }
    }
</script>