<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="createcustomplayer_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Username</label>
                            <input type="text" id="login" class="form-control col-9" placeholder="Enter Your Username">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Password</label>
                            <input type="password" id="password" class="form-control col-9" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Nickname</label>
                            <input type="text" id="player_name" class="form-control col-9" placeholder="Enter Your Nickname">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Rank</label>
                            <select id="rank" class="form-control col-9">
                                <option value="" disabled selected>Select Your Rank</option>
                                <?php foreach($rank as $row) : ?>
                                    <option value="<?php echo $row['rank'] ?>"><?php echo $row['rank_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Points</label>
                            <input type="number" id="points" class="form-control col-9" placeholder="Enter Your Point Amounts">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">PC Cafe</label>
                            <select id="pc_cafe" class="form-control col-9">
                                <option value="" disabled selected>Select Your PC Cafe</option>
                                <option value="1">VIP</option>
                                <option value="2">VVIP</option>
                                <option value="5">GM & DEV</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">DR-Cash</label>
                            <input type="number" id="money" class="form-control col-9" placeholder="Enter Your DR-Cash Amounts">
                        </div>
                        <div class="form-group text-right">
                            <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Create New Player">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '';
                        $(document).ready(function(){
                            $('#createcustomplayer_form').on('submit', function(e){
                                e.preventDefault();
                                if ($('#login').val() == ''){
                                    ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#password').val() == ''){
                                    ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#player_name').val() == ''){
                                    ShowToast(2000, 'warning', 'Nickname Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#rank').val() == ''){
                                    ShowToast(2000, 'warning', 'Rank Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#points').val() == ''){
                                    ShowToast(2000, 'warning', 'Points Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#pc_cafe').val() == ''){
                                    ShowToast(2000, 'warning', 'PC Cafe Cannot Be Empty.');
                                    return;
                                }
                                else if ($('#money').val() == ''){
                                    ShowToast(2000, 'warning', 'DR-Cash Cannot Be Empty.');
                                    return;
                                }
                                else{
                                    SetButton('false');

                                    if (CSRF_TOKEN == ''){
                                        CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                    }

                                    $.ajax({
                                        url: '<?php echo base_url('adm/playersmanagement/do_createcustomplayer') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                            'login' : $('#login').val(),
                                            'password' : $('#password').val(),
                                            'player_name' : $('#player_name').val(),
                                            'rank' : $('#rank').val(),
                                            'gp' : $('#points').val(),
                                            'pc_cafe' : $('#pc_cafe').val(),
                                            'money' : $('#money').val()
                                        },
                                        success: function(data){
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            if (Result.response == 'true'){
                                                SetButton('true');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'success', Result.message);
                                                setTimeout(() => {
                                                    window.location = '<?php echo base_url('adm/playersmanagement') ?>';
                                                }, 2000);
                                            }
                                            else if (Result.response == 'false'){
                                                SetButton('true');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                            else{
                                                SetButton('true');
                                                CSRF_TOKEN = Result.token;
                                                ShowToast(2000, 'error', Result.message);
                                                return;
                                            }
                                        },
                                        error: function(data){
                                            SetButton('true');
                                            ShowToast(2000, 'error', data.responseText);
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            });
                        });

                        function SetButton(param)
                        {
                            var P = document.getElementById('submit');
                            if (param == 'true'){
                                P.setAttribute('type', 'button');
                                P.setAttribute('value', 'Processing...');
                            }
                            if (param == 'false'){
                                P.setAttribute('type', 'submit');
                                P.setAttribute('value', 'Create New Player');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>