<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?php echo base_url('adm/vouchermanagement/add?type=small') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i> Create New Voucher (Small)</a>
                    <a href="<?php echo base_url('adm/vouchermanagement/add?type=medium') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i> Create New Voucher (Medium)</a>
                    <a href="<?php echo base_url('adm/vouchermanagement/add?type=large') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i> Create New Voucher (Large)</a>
                    <a href="<?php echo base_url('adm/vouchermanagement/add?type=extra_large') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i> Create New Voucher (Extra Large)</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="voucher_table" class="table table-borderless table-responsive-lg  table-responsive-md  table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th>No.</th>
                            <th>Voucher Code</th>
                            <th>Status</th>
                            <th>Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($voucher as $row) : ?>
                                <tr id="data_<?php echo $num ?>">
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $row['voucher_code'] ?></td>
                                    <td>
                                        <?php
                                        switch ($row['active']) {
                                            case 'f':
                                                {
                                                    echo '<span class="text-danger">Expired</span>';
                                                    break;
                                                }
                                            case 't':
                                                {
                                                    echo '<span class="text-success">Active</span>';
                                                    break;
                                                }
                                            
                                            default:
                                                {
                                                    echo '<span class="text-secondary">Invalid</span>';
                                                    break;
                                                }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle text-uppercase text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="<?php echo base_url('adm/vouchermanagement/details?voucher_id='.$row['id']) ?>">Details</a>
                                                <input type="button" id="delete_<?php echo $num ?>" class="dropdown-item" value="Delete" onclick="DeleteVoucher('data_<?php echo $num ?>', 'delete_<?php echo $num ?>', '<?php echo $row['voucher_code'] ?>')">
                                                <a href="<?php echo base_url('adm/vouchermanagement/print?id='.$row['id']) ?>" target="_blank" class="dropdown-item">Print</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                            
                            <script>
                                var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                var RETRY = 0;

                                function DeleteVoucher(data_id, button_id, voucher_code)
                                {
                                    if (data_id == '' || data_id == null){
                                        ShowToast(2000, 'warning', 'Invalid Data');
                                        return;
                                    }
                                    else if (button_id == '' || button_id == null){
                                        ShowToast(2000, 'warning', 'Invalid Data');
                                        return;
                                    }
                                    else if (voucher_code == '' || voucher_code == null){
                                        ShowToast(2000, 'warning', 'Invalid Data');
                                        return;
                                    }
                                    else{
                                        SetAttribute(button_id, 'button', 'Processing...');

                                        $.ajax({
                                            url: '<?php echo base_url('adm/vouchermanagement/do_delete') ?>',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                'voucher_code' : voucher_code
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
                                            error: function(){
                                                if (RETRY >= 3){
                                                    SetAttribute(button_id, 'button', 'Delete');
                                                    ShowToast(2000, 'error', 'Failed To Delete This Voucher.');
                                                    return;
                                                }
                                                else{
                                                    RETRY += 1;
                                                    ShowToast(2000, 'info', 'Generate New Request Token...');

                                                    $.ajax({
                                                        url: '<?php echo base_url('api/security/csrf') ?>',
                                                        type: 'GET',
                                                        dataType: 'JSON',
                                                        data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                                        success: function(data){
                                                            var GetString = JSON.stringify(data);
                                                            var Result = JSON.parse(GetString);

                                                            if (Result.response == 'true'){
                                                                CSRF_TOKEN = Result.token;
                                                            }

                                                            return DeleteVoucher(data_id, button_id, voucher_code);
                                                        },
                                                        error: function(){
                                                            SetAttribute(button_id, 'button', 'Delete');
                                                            ShowToast(2000, 'error', 'Failed To Delete This Voucher.');
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>