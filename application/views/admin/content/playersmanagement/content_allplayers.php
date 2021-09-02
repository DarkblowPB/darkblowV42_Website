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
                                <tr>
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
                                                <?php if ($row['access_level'] != -1) : ?>
                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="BannedPlayer('<?php echo $row['player_id'] ?>')">Banned</a>
                                                <?php endif; ?>
                                                <?php if ($row['access_level'] == -1) : ?>
                                                    <a class="dropdown-item text-warning" href="javascript:void(0)" onclick="UnbannedPlayer('<?php echo $row['player_id'] ?>')">Unbanned</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        var CSRF_TOKEN = '';
                        function BannedPlayer(player_id){
                            $(document).ready(function(){
                                if (CSRF_TOKEN == ''){
                                    CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                }
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
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'success', Result.message);
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
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
                            });
                        }
                        function UnbannedPlayer(player_id){
                            $(document).ready(function(){
                                if (CSRF_TOKEN == ''){
                                    CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                }
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
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'success', Result.message);
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
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
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>