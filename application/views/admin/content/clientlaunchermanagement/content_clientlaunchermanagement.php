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
                                <tr id="data_<?php echo $num ?>">
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
                                                <a class="dropdown-item" href="<?php echo base_url('adm/clientlaunchermanagement/details?files_id='.$row['id']) ?>">Details</a>
                                                <a class="dropdown-item" href="<?php echo base_url('adm/clientlaunchermanagement/edit?files_id='.$row['id']) ?>">Edit</a>
                                                <input type="button" id="delete_<?php echo $num ?>" class="dropdown-item" value="Delete" onclick="DeleteFiles('data_<?php echo $num ?>', 'delete_<?php echo $num ?>', '<?php echo $row['id'] ?>');">
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
    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
    var RETRY = 0;
    function DeleteFiles(data_id, button_id, files_id){
        if (files_id == "" || files_id == null){
            ShowToast(2000, 'error', 'Invalid Files.');
            return;
        }
        if (files_id != "" || files_id != null){
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
                                document.getElementById(data_id).remove();
                                ShowToast(2000, 'success', Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
                            }
                            else if (Result.response == 'false'){
                                SetAttribute(button_id, 'button', 'Delete');
                                ShowToast(2000, 'error', Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
                            }
                            else{
                                SetAttribute(button_id, 'button', 'Delete');
                                ShowToast(2000, 'error', Result.message);
                                CSRF_TOKEN = Result.token;
                                return;
                            }
                        },
                        error: function(data){
                            if (RETRY >= 3){
                                ShowToast(2000, 'error', 'Failed To Delete This Item.');
                                return;
                            }
                            else{
                                RETRY += 1;
                                ShowToast(1000, 'info', 'Generate New Request Token...');
            
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
            
                                        return DeleteFiles(data_id, button_id, files_id);
                                    },
                                    error: function(){
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