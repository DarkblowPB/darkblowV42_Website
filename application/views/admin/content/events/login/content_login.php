<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body text-center">
                    <a href="<?php echo base_url('adm/eventsmanagement/login/add') ?>" class="btn btn-outline-primary text-white"><i class="fas fa-plus-circle mr-2"></i>Add New Events</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="login_events_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No</th>
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th>Reward Item</th>
                            <th width="15%">Reward Duration</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($items as $row) : ?>
                                <tr id="<?php echo 'data'.$num ?>">
                                    <td><?php echo $num ?></td>
                                    <td>
                                        <?php echo      $this->lib->ConvertDate($row['start_date'])[2]. // Days
                                                    '-'.$this->lib->ConvertDate($row['start_date'])[1]. // Month
                                               '-'.'20'.$this->lib->ConvertDate($row['start_date'])[0]. // Years
                                                    ' '.$this->lib->ConvertDate($row['start_date'])[3]. // Hours
                                                    ':'.$this->lib->ConvertDate($row['start_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo      $this->lib->ConvertDate($row['end_date'])[2]. // Days
                                                    '-'.$this->lib->ConvertDate($row['end_date'])[1]. // Month
                                               '-'.'20'.$this->lib->ConvertDate($row['end_date'])[0]. // Years
                                                    ' '.$this->lib->ConvertDate($row['end_date'])[3]. // Hours
                                                    ':'.$this->lib->ConvertDate($row['end_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td><?php echo $this->eventslogin->GetItemName($row['reward_id']) ?></td>
                                    <td><?php echo $this->eventslogin->ConvertDuration($row['reward_count']) ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                
                                                <input type="button" id="delete_<?php echo $num ?>" class="dropdown-item" value="Delete" onclick="DeleteEvents('data_<?php echo $num ?>', 'delete_<?php echo $num ?>', '<?php echo $this->lib->ConvertDate($row['start_date'])[0].$this->lib->ConvertDate($row['start_date'])[1].$this->lib->ConvertDate($row['start_date'])[2].$this->lib->ConvertDate($row['start_date'])[3].$this->lib->ConvertDate($row['start_date'])[4] ?>', '<?php echo $this->lib->ConvertDate($row['end_date'])[0].$this->lib->ConvertDate($row['end_date'])[1].$this->lib->ConvertDate($row['end_date'])[2].$this->lib->ConvertDate($row['end_date'])[3].$this->lib->ConvertDate($row['end_date'])[4] ?>')">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                        var RETRY = 0;
                        function DeleteEvents(data_id, button_id, start_date, end_date)
                        {
                            SetAttribute(button_id, 'button', 'Processing...');
                            $.ajax({
                                url: '<?php echo base_url('adm/eventsmanagement/login/do_delete') ?>',
                                type: 'POST',
                                dataType: 'JSON',
                                data: {
                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                    'start_date' : start_date,
                                    'end_date' : end_date
                                },
                                success: function(data){
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    if (Result.response == 'true'){
                                        document.getElementById(data_id).remove();
                                        SetAttribute(button_id, 'button', 'Delete');
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
                                        ShowToast(2000, 'error', 'Failed To Delete This Events.');
                                        SetAttribute(button_id, 'button', 'Delete');
                                        setTimeout(() => {
                                            window.location.reload();
                                        }, 2000);
                                    }
                                    else{
                                        ShowToast(1000, 'info', 'Generating New Request Token...');
    
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
    
                                                return DeleteEvents(data_id, button_id, start_date, end_date);
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Delete This Events.');
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
                </div>
            </div>
        </div>
    </div>
</div>