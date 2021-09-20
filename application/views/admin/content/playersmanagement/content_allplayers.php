<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="allplayers_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary text-uppercase">
                            <th width="5%">No.</th>
                            <th width="15%">Username</th>
                            <th width="10%">Rank</th>
                            <th>Nickname</th>
                            <th width="15%">Last IP</th>
                            <th width="15%">Last MAC</th>
                            <th width="15%">Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($players as $row) : ?>
                                <tr id="data_<?php echo $num ?>">
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $row['login'] ?></td>
                                    <td><img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" class="img img-fluid" alt="<?php echo $row['rank'] ?>"></td>
                                    <td><?php echo $row['player_name'] ?></td>
                                    <td><?php echo $row['lastip'] ?></td>
                                    <td><?php echo $row['last_mac'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle text-uppercase text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="<?php echo base_url('adm/playersmanagement/details?player_id='.$row['player_id']) ?>">Details</a>
                                                
                                                <?php if ($row['access_level'] == '-1') : ?>
                                                    <input type="button" id="submit_<?php echo $num ?>" class="dropdown-item" value="Unbanned" onclick="Do_UnbannedPlayer('<?php echo 'submit_'.$num ?>', '<?php echo $row['player_id'] ?>')">
                                                <?php endif; ?>
                                                <?php if ($row['access_level'] != '-1') : ?>
                                                    <input type="button" id="submit_<?php echo $num ?>" class="dropdown-item" value="Banned" onclick="Do_BannedPlayer('<?php echo 'submit_'.$num ?>', '<?php echo $row['player_id'] ?>')">
                                                <?php endif; ?>

                                                <input type="button" id="reset_<?php echo $num ?>" class="dropdown-item" value="Reset" onclick="Do_ResetPlayer('<?php echo 'reset_'.$num ?>', '<?php echo $row['player_id'] ?>')">
                                                <input type="button" id="delete_<?php echo $num ?>" class="dropdown-item" value="Delete" onclick="Do_DeletePlayer('data_<?php echo $num ?>', 'delete_<?php echo $num ?>', '<?php echo $row['player_id'] ?>')">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                        var TOTAL_RETRY = 0;

                        function Do_DeletePlayer(data_id, button_id, player_id)
                        {
                            if (player_id == ''){
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            }
                            else{
                                Swal.fire({
                                    title: 'Are You Sure Want To Delete This Player?',
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
                                            url: '<?php echo base_url('adm/playersmanagement/do_delete') ?>',
                                            type: 'POST',
                                            dataType: 'JSON',
                                            data: {
                                                '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                'player_id' : player_id
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
                                                if (TOTAL_RETRY >= 3){
                                                    ShowToast(2000, 'Failed To Delete This Player.');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                                else{
                                                    TOTAL_RETRY += 1;
                                                    ShowToast(1000, 'info', 'Generating New Request Token...');
    
                                                    $.ajax({
                                                        url: '<?php echo base_url('api/getnewtoken') ?>',
                                                        type: 'GET',
                                                        dataType: 'JSON',
                                                        data: {},
                                                        success: function(data){
                                                            var GetString = JSON.stringify(data);
                                                            var Result = JSON.parse(GetString);
    
                                                            if (Result.response == 'true'){
                                                                CSRF_TOKEN =Result.token;
                                                            }
    
                                                            return Do_DeletePlayer(button_id, player_id);
                                                        },
                                                        error: function(){
                                                            ShowToast(2000, 'error', 'Failed To Delete This Player.');
                                                            setTimeout(() => {
                                                                window.location.reload();
                                                            }, 2000);
                                                        }
                                                    });
                                                }
                                            }
                                        });
                                    }
                                })
                            }
                        }

                        function Do_ResetPlayer(button_id, player_id)
                        {
                            if (player_id == ''){
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            }
                            else{
                                SetAttribute(button_id, 'button', 'Processing...');
                                
                                $.ajax({
                                    url: '<?php echo base_url('adm/playersmanagement/do_reset') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                        'player_id' : player_id
                                    },
                                    success: function(data){
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true'){
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                        else if (Result.response == 'false'){
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                        else{
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function(){
                                        if (TOTAL_RETRY >= 3){
                                            SetAttribute(button_id, 'button', 'Reset');
                                            ShowToast(2000, 'error', 'Failed To Reset This Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        }
                                        else
                                        {
                                            TOTAL_RETRY += 1;
                                            ShowToast(1000, 'info', 'Generating New Request Token...');
    
                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);
    
                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN = Result.token;
                                                    }
    
                                                    return Do_ResetPlayer(button_id, player_id);
                                                },
                                                error: function(){
                                                    ShowToast(2000, 'error', 'Failed To Reset This Player.');
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

                        function Do_BannedPlayer(button_id, player_id)
                        {
                            if (player_id == ''){
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            }
                            else{
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?php echo base_url('adm/playersmanagement/do_banned') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                        'player_id' : player_id
                                    },
                                    success: function(data){
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true'){
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            document.getElementById(button_id).setAttribute('value', 'Unbanned');
                                            document.getElementById(button_id).setAttribute('onclick', "Do_UnbannedPlayer('" + button_id + "', '"+ player_id +"')");
                                            return;
                                        }
                                        else if (Result.response == 'false'){
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                        else{
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function(){
                                        if (TOTAL_RETRY >= 3){
                                            SetAttribute(button_id, 'button', 'Banned');
                                            ShowToast(2000, 'error', 'Failed To Banned This Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        }
                                        else{
                                            TOTAL_RETRY += 1;
                                            ShowToast(1000, 'info', 'Generating New Request Token...');
    
                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);
    
                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN = Result.token;
                                                    }
    
                                                    return Do_BannedPlayer(button_id, player_id);
                                                },
                                                error: function(){
                                                    ShowToast(2000, 'error', 'Failed To Banned This Player.');
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

                        function Do_UnbannedPlayer(button_id, player_id)
                        {
                            if (player_id == ''){
                                ShowToast(2000, 'warning', 'Please Select Players.');
                                return;
                            }
                            else{
                                SetAttribute(button_id, 'button', 'Processing...');

                                $.ajax({
                                    url: '<?php echo base_url('adm/playersmanagement/do_unbanned') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                        'player_id' : player_id
                                    },
                                    success: function(data){
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true'){
                                            ShowToast(2000, 'success', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            document.getElementById(button_id).setAttribute('value', 'Banned');
                                            document.getElementById(button_id).setAttribute('onclick', "Do_BannedPlayer('" + button_id + "', '"+ player_id +"')");
                                            return;
                                        }
                                        else if (Result.response == 'false'){
                                            SetAttribute(button_id, 'button', 'Unbanned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                        else{
                                            SetAttribute(button_id, 'button', 'Unbanned');
                                            ShowToast(2000, 'error', Result.message);
                                            CSRF_TOKEN = Result.token;
                                            return;
                                        }
                                    },
                                    error: function(){
                                        if (TOTAL_RETRY >= 3){
                                            SetAttribute(button_id, 'button', 'Unbanned');
                                            ShowToast(2000, 'error', 'Failed To Banned This Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                            return;
                                        }
                                        else{
                                            TOTAL_RETRY += 1;
                                            ShowToast(1000, 'info', 'Generating New Request Token...');
    
                                            $.ajax({
                                                url: '<?php echo base_url('api/getnewtoken') ?>',
                                                type: 'GET',
                                                dataType: 'JSON',
                                                data: {},
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);
    
                                                    if (Result.response == 'true'){
                                                        CSRF_TOKEN = Result.token;
                                                    }
    
                                                    return Do_UnbannedPlayer(button_id, player_id);
                                                },
                                                error: function(){
                                                    SetAttribute(button_id, 'button', 'Unbanned');
                                                    ShowToast(2000, 'error', 'Failed To Banned This Player.');
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