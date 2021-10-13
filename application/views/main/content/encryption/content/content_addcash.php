<div class="col-lg-8 col-md-8 col-sm-12 col-12">
    <div class="card">
        <div class="card-header bg-primary text-center">
            <b>FORCE ADD CASH PLAYERS</b>
        </div>
        <div class="card-body">
            <?php echo form_open('', 'id="addcash_form" autocomplete="off"') ?>
                <div class="form-group">
                    <label class="col-form-label">Players</label>
                    <select id="player_id" class="form-control">
                        <option value="" disabled selected>Select Player</option>
                        <?php foreach ($players as $row) : ?>
                            <option value="<?php echo $row['player_id'] ?>"> <?php if ($row['player_name'] == '' || empty($row['player_name'])) {echo $row['login'];}else{echo $row['player_name'];} ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Cash Amount</label>
                    <input type="number" id="cash_amount" class="form-control" placeholder="Enter Cash Amount">
                </div>
                <div class="form-group text-center mt-5">
                    <input type="submit" id="submit" value="ADD CASH" class="btn btn-outline-primary">
                </div>
            <?php echo form_close() ?>
            <script>
                var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                $(document).ready(function(){
                    $('#addcash_form').on('submit', function(e){
                        e.preventDefault();
                        
                        document.getElementById('submit').setAttribute('type', 'button');
                        document.getElementById('submit').setAttribute('value', 'Processing...');
                        $.ajax({
                            url: '<?php echo base_url('encryption/do_addcash') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                'player_id' : $('#player_id').val(),
                                'cash_amount' : $('#cash_amount').val()
                            },
                            success: function(data){
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);
                                
                                document.getElementById('submit').setAttribute('type', 'submit');
                                document.getElementById('submit').setAttribute('value', 'ADD CASH');

                                CSRF_TOKEN = Result.token;
                                alert(Result.message);
                                return;
                            },
                            error: function(){

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

                                        Do_AddCash();
                                    },
                                    error: function(){
                                        alert('Failed To Add Cash');
                                        window.location.reload();
                                    }
                                });
                            }
                        });
                    });
                });

                function Do_AddCash()
                {
                    document.getElementById('submit').setAttribute('type', 'button');
                    document.getElementById('submit').setAttribute('value', 'Processing...');
                    $.ajax({
                        url: '<?php echo base_url('encryption/do_addcash') ?>',
                        type: 'POST',
                        dataType: 'JSON',
                        data: {
                            '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                            'player_id' : $('#player_id').val(),
                            'cash_amount' : $('#cash_amount').val()
                        },
                        success: function(data){
                            var GetString = JSON.stringify(data);
                            var Result = JSON.parse(GetString);
                            
                            document.getElementById('submit').setAttribute('type', 'submit');
                            document.getElementById('submit').setAttribute('value', 'ADD CASH');

                            CSRF_TOKEN = Result.token;
                            alert(Result.message);
                            return;
                        },
                        error: function(){
                            alert('Failed To Add Cash.');
                            window.location.reload();
                        }
                    });
                }
            </script>
        </div>
        <div class="card-footer text-center">
            Copyright &copy; <?php echo $this->getsettings->Get2()->project_name ?> <?php echo date('Y') ?>. All Rights Reserved.
        </div>
    </div>
</div>