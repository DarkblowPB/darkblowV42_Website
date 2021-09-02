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
                                <tr id="<?php echo 'loginevents_'.$num ?>">
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $this->eventslogin->ConvertDate2($row['start_date'])[0].'-'.$this->eventslogin->ConvertDate2($row['start_date'])[1].'-'.$this->eventslogin->ConvertDate2($row['start_date'])[2].' '.$this->eventslogin->ConvertDate2($row['start_date'])[3].':'.$this->eventslogin->ConvertDate2($row['start_date'])[4] ?></td>
                                    <td><?php echo $this->eventslogin->ConvertDate2($row['end_date'])[0].'-'.$this->eventslogin->ConvertDate2($row['end_date'])[1].'-'.$this->eventslogin->ConvertDate2($row['end_date'])[2].' '.$this->eventslogin->ConvertDate2($row['end_date'])[3].':'.$this->eventslogin->ConvertDate2($row['end_date'])[4] ?></td>
                                    <td><?php echo $this->eventslogin->GetItemName($row['reward_id']) ?></td>
                                    <td><?php echo $this->eventslogin->ConvertDuration($row['reward_count']) ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a href="javascript:void(0)" class="dropdown-item" onclick="DeleteEvents('<?php echo 'loginevents_'.$num ?>', '<?php echo $this->eventslogin->ConvertDate2($row['start_date'])[0].$this->eventslogin->ConvertDate2($row['start_date'])[1].$this->eventslogin->ConvertDate2($row['start_date'])[2].$this->eventslogin->ConvertDate2($row['start_date'])[3].$this->eventslogin->ConvertDate2($row['start_date'])[4] ?>', '<?php echo $this->eventslogin->ConvertDate2($row['end_date'])[0].$this->eventslogin->ConvertDate2($row['end_date'])[1].$this->eventslogin->ConvertDate2($row['end_date'])[2].$this->eventslogin->ConvertDate2($row['end_date'])[3].$this->eventslogin->ConvertDate2($row['end_date'])[4] ?>')">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '';
                        function DeleteEvents(elementId, start_date, end_date)
                        {
                            if (CSRF_TOKEN == ''){
                                CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                            }
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
                                        CSRF_TOKEN = Result.token;
                                        ShowToast(2000, 'success', Result.message);
                                        RemoveElement(elementId);
                                        return;
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
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }

                        function RemoveElement(elementId)
                        {
                            var R = document.getElementById(elementId);
                            R.remove();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>