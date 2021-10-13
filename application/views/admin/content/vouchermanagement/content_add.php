<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="add_form" autocomplete="off"') ?>
                        <?php
                        switch ($this->input->get('type'))
                        {
                            case 'small':
                                {
                                    ?>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 1</label>
                                        <select id="reward_1" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 1</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 2</label>
                                        <select id="reward_2" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 2</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 3</label>
                                        <select id="reward_3" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 3</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Cash Amount</label>
                                        <input type="number" id="cash_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Webcoin Amount</label>
                                        <input type="number" id="webcoin_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Voucher Code</label>
                                        <input type="text" id="voucher_code" class="form-control col-6" placeholder="Enter Voucher Code">
                                        <input type="button" id="generate_voucher" class="btn btn-outline-primary text-white ml-3 col-2" value="Generate" onclick="GenerateVoucherCode()">
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Voucher">
                                    </div>
                                    <?php
                                    break;
                                }

                            case 'medium':
                                {
                                    ?>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 1</label>
                                        <select id="reward_1" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 1</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 2</label>
                                        <select id="reward_2" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 2</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 3</label>
                                        <select id="reward_3" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 3</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 4</label>
                                        <select id="reward_4" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 4</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 5</label>
                                        <select id="reward_5" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 5</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Cash Amount</label>
                                        <input type="number" id="cash_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Webcoin Amount</label>
                                        <input type="number" id="webcoin_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Voucher Code</label>
                                        <input type="text" id="voucher_code" class="form-control col-6" placeholder="Enter Voucher Code">
                                        <input type="button" id="generate_voucher" class="btn btn-outline-primary text-white ml-3 col-2" value="Generate" onclick="GenerateVoucherCode()">
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Voucher">
                                    </div>
                                    <?php
                                    break;
                                }

                            case 'large':
                                {
                                    ?>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 1</label>
                                        <select id="reward_1" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 1</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 2</label>
                                        <select id="reward_2" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 2</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 3</label>
                                        <select id="reward_3" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 3</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 4</label>
                                        <select id="reward_4" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 4</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 5</label>
                                        <select id="reward_5" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 5</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 6</label>
                                        <select id="reward_6" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 6</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 7</label>
                                        <select id="reward_7" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 7</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Cash Amount</label>
                                        <input type="number" id="cash_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Webcoin Amount</label>
                                        <input type="number" id="webcoin_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Voucher Code</label>
                                        <input type="text" id="voucher_code" class="form-control col-6" placeholder="Enter Voucher Code">
                                        <input type="button" id="generate_voucher" class="btn btn-outline-primary text-white ml-3 col-2" value="Generate" onclick="GenerateVoucherCode()">
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Voucher">
                                    </div>
                                    <?php
                                    break;
                                }

                            case 'extra_large':
                                {
                                    ?>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 1</label>
                                        <select id="reward_1" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 1</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 2</label>
                                        <select id="reward_2" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 2</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 3</label>
                                        <select id="reward_3" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 3</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 4</label>
                                        <select id="reward_4" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 4</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 5</label>
                                        <select id="reward_5" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 5</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 6</label>
                                        <select id="reward_6" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 6</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 7</label>
                                        <select id="reward_7" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 7</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 8</label>
                                        <select id="reward_8" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 8</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Reward 9</label>
                                        <select id="reward_9" class="form-control col-9 reward_selection">
                                            <option value="" disabled selected>Select Reward 9</option>
                                            <?php foreach ($items as $row) : ?>
                                                <option value="<?php echo $row['item_id'] ?>"><?php echo $row['item_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Cash Amount</label>
                                        <input type="number" id="cash_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Webcoin Amount</label>
                                        <input type="number" id="webcoin_amount" class="form-control col-9" placeholder="Enter Cash Amount">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3">Voucher Code</label>
                                        <input type="text" id="voucher_code" class="form-control col-6" placeholder="Enter Voucher Code">
                                        <input type="button" id="generate_voucher" class="btn btn-outline-primary text-white ml-3 col-2" value="Generate" onclick="GenerateVoucherCode()">
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Voucher">
                                    </div>
                                    <?php
                                    break;
                                }
                            
                            default:
                                {
                                    redirect(base_url('adm/vouchermanagement'), 'refresh');
                                }
                        }
                        ?>
                    <?php echo form_close() ?>
                    <?php
                    switch ($this->input->get('type'))
                    {
                        case 'small':
                            {
                                ?>
                                <script>
                                    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';

                                    function GenerateVoucherCode()
                                    {
                                        $.ajax({
                                            url: '<?php echo base_url('adm/vouchermanagement/do_generatecode') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                document.getElementById('voucher_code').setAttribute('value', Result.code);
                                                return;
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Generate Voucher Code.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }

                                    $(document).ready(function(){
                                        $('#add_form').on('submit', function(e){
                                            e.preventDefault();

                                            if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'button', 'Processing...');

                                                $.ajax({
                                                    url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                    type: 'POST',
                                                    dataType: 'JSON',
                                                    data: {
                                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                        'type' : 'small',
                                                        'reward_1' : $('#reward_1').val(),
                                                        'reward_2' : $('#reward_2').val(),
                                                        'reward_3' : $('#reward_3').val(),
                                                        'voucher_code' : $('#voucher_code').val(),
                                                        'cash_amount' : $('#cash_amount').val(),
                                                        'webcoin_amount' : $('#webcoin_amount').val()
                                                    },
                                                    success: function(data){
                                                        var GetString = JSON.stringify(data);
                                                        var Result = JSON.parse(GetString);

                                                        if (Result.response == 'true'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'success', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            setTimeout(() => {
                                                                self.history.back();
                                                            }, 2000);
                                                        }
                                                        else if (Result.response == 'false'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                        else{
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                    },
                                                    error: function(){
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

                                                                return Do_Add();
                                                            },
                                                            error: function(){
                                                                SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                                ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                                setTimeout(() => {
                                                                    window.location.reload();
                                                                }, 2000);
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    });

                                    function Do_Add()
                                    {
                                        if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'button', 'Processing...');

                                            $.ajax({
                                                url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                    'type' : 'small',
                                                    'reward_1' : $('#reward_1').val(),
                                                    'reward_2' : $('#reward_2').val(),
                                                    'reward_3' : $('#reward_3').val(),
                                                    'cash_amount' : $('#cash_amount').val(),
                                                    'voucher_code' : $('#voucher_code').val(),
                                                    'webcoin_amount' : $('#webcoin_amount').val()
                                                },
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'success', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        setTimeout(() => {
                                                            self.history.back();
                                                        }, 2000);
                                                    }
                                                    else if (Result.response == 'false'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                    else{
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                },
                                                error: function(){
                                                    SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                    ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    }
                                </script>
                                <?php
                                break;
                            }
                        case 'medium':
                            {
                                ?>
                                <script>
                                    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';

                                    function GenerateVoucherCode()
                                    {
                                        $.ajax({
                                            url: '<?php echo base_url('adm/vouchermanagement/do_generatecode') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                document.getElementById('voucher_code').setAttribute('value', Result.code);
                                                return;
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Generate Voucher Code.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }

                                    $(document).ready(function(){
                                        $('#add_form').on('submit', function(e){
                                            e.preventDefault();

                                            if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_4').val() == '' || $('#reward_4').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 4 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_5').val() == '' || $('#reward_5').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 5 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'button', 'Processing...');

                                                $.ajax({
                                                    url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                    type: 'POST',
                                                    dataType: 'JSON',
                                                    data: {
                                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                        'type' : 'medium',
                                                        'reward_1' : $('#reward_1').val(),
                                                        'reward_2' : $('#reward_2').val(),
                                                        'reward_3' : $('#reward_3').val(),
                                                        'reward_4' : $('#reward_4').val(),
                                                        'reward_5' : $('#reward_5').val(),
                                                        'voucher_code' : $('#voucher_code').val(),
                                                        'cash_amount' : $('#cash_amount').val(),
                                                        'webcoin_amount' : $('#webcoin_amount').val()
                                                    },
                                                    success: function(data){
                                                        var GetString = JSON.stringify(data);
                                                        var Result = JSON.parse(GetString);

                                                        if (Result.response == 'true'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'success', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            setTimeout(() => {
                                                                self.history.back();
                                                            }, 2000);
                                                        }
                                                        else if (Result.response == 'false'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                        else{
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                    },
                                                    error: function(){
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

                                                                return Do_Add();
                                                            },
                                                            error: function(){
                                                                SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                                ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                                setTimeout(() => {
                                                                    window.location.reload();
                                                                }, 2000);
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    });

                                    function Do_Add()
                                    {
                                        if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_4').val() == '' || $('#reward_4').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 4 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_5').val() == '' || $('#reward_5').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 5 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'button', 'Processing...');

                                            $.ajax({
                                                url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                    'type' : 'medium',
                                                    'reward_1' : $('#reward_1').val(),
                                                    'reward_2' : $('#reward_2').val(),
                                                    'reward_3' : $('#reward_3').val(),
                                                    'reward_4' : $('#reward_4').val(),
                                                    'reward_5' : $('#reward_5').val(),
                                                    'voucher_code' : $('#voucher_code').val(),
                                                    'cash_amount' : $('#cash_amount').val(),
                                                    'webcoin_amount' : $('#webcoin_amount').val()
                                                },
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'success', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        setTimeout(() => {
                                                            self.history.back();
                                                        }, 2000);
                                                    }
                                                    else if (Result.response == 'false'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                    else{
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                },
                                                error: function(){
                                                    SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                    ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    }
                                </script>
                                <?php
                                break;
                            }
                        case 'large':
                            {
                                ?>
                                <script>
                                    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';

                                    function GenerateVoucherCode()
                                    {
                                        $.ajax({
                                            url: '<?php echo base_url('adm/vouchermanagement/do_generatecode') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                document.getElementById('voucher_code').setAttribute('value', Result.code);
                                                return;
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Generate Voucher Code.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }

                                    $(document).ready(function(){
                                        $('#add_form').on('submit', function(e){
                                            e.preventDefault();

                                            if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_4').val() == '' || $('#reward_4').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 4 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_5').val() == '' || $('#reward_5').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 5 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_6').val() == '' || $('#reward_6').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 6 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_7').val() == '' || $('#reward_7').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 7 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'button', 'Processing...');

                                                $.ajax({
                                                    url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                    type: 'POST',
                                                    dataType: 'JSON',
                                                    data: {
                                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                        'type' : 'large',
                                                        'reward_1' : $('#reward_1').val(),
                                                        'reward_2' : $('#reward_2').val(),
                                                        'reward_3' : $('#reward_3').val(),
                                                        'reward_4' : $('#reward_4').val(),
                                                        'reward_5' : $('#reward_5').val(),
                                                        'reward_6' : $('#reward_6').val(),
                                                        'reward_7' : $('#reward_7').val(),
                                                        'voucher_code' : $('#voucher_code').val(),
                                                        'cash_amount' : $('#cash_amount').val(),
                                                        'webcoin_amount' : $('#webcoin_amount').val()
                                                    },
                                                    success: function(data){
                                                        var GetString = JSON.stringify(data);
                                                        var Result = JSON.parse(GetString);

                                                        if (Result.response == 'true'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'success', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            setTimeout(() => {
                                                                self.history.back();
                                                            }, 2000);
                                                        }
                                                        else if (Result.response == 'false'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                        else{
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                    },
                                                    error: function(){
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

                                                                return Do_Add();
                                                            },
                                                            error: function(){
                                                                SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                                ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                                setTimeout(() => {
                                                                    window.location.reload();
                                                                }, 2000);
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    });

                                    function Do_Add()
                                    {
                                        if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_4').val() == '' || $('#reward_4').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 4 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_5').val() == '' || $('#reward_5').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 5 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_6').val() == '' || $('#reward_6').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 6 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_7').val() == '' || $('#reward_7').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 7 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'button', 'Processing...');

                                            $.ajax({
                                                url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                    'type' : 'large',
                                                    'reward_1' : $('#reward_1').val(),
                                                    'reward_2' : $('#reward_2').val(),
                                                    'reward_3' : $('#reward_3').val(),
                                                    'reward_4' : $('#reward_4').val(),
                                                    'reward_5' : $('#reward_5').val(),
                                                    'reward_6' : $('#reward_6').val(),
                                                    'reward_7' : $('#reward_7').val(),
                                                    'voucher_code' : $('#voucher_code').val(),
                                                    'cash_amount' : $('#cash_amount').val(),
                                                    'webcoin_amount' : $('#webcoin_amount').val()
                                                },
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'success', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        setTimeout(() => {
                                                            self.history.back();
                                                        }, 2000);
                                                    }
                                                    else if (Result.response == 'false'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                    else{
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                },
                                                error: function(){
                                                    SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                    ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    }
                                </script>
                                <?php
                                break;
                            }
                        case 'extra_large':
                            {
                                ?>
                                <script>
                                    var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';

                                    function GenerateVoucherCode()
                                    {
                                        $.ajax({
                                            url: '<?php echo base_url('adm/vouchermanagement/do_generatecode') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                document.getElementById('voucher_code').setAttribute('value', Result.code);
                                                return;
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Generate Voucher Code.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
                                    }

                                    $(document).ready(function(){
                                        $('#add_form').on('submit', function(e){
                                            e.preventDefault();

                                            if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_4').val() == '' || $('#reward_4').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 4 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_5').val() == '' || $('#reward_5').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 5 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_6').val() == '' || $('#reward_6').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 6 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_7').val() == '' || $('#reward_7').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 7 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_8').val() == '' || $('#reward_8').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 8 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#reward_9').val() == '' || $('#reward_9').val() == null){
                                                ShowToast(2000, 'warning', 'Reward 9 Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                                ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                                return;
                                            }
                                            else{
                                                SetAttribute('submit', 'button', 'Processing...');

                                                $.ajax({
                                                    url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                    type: 'POST',
                                                    dataType: 'JSON',
                                                    data: {
                                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                        'type' : 'extra_large',
                                                        'reward_1' : $('#reward_1').val(),
                                                        'reward_2' : $('#reward_2').val(),
                                                        'reward_3' : $('#reward_3').val(),
                                                        'reward_4' : $('#reward_4').val(),
                                                        'reward_5' : $('#reward_5').val(),
                                                        'reward_6' : $('#reward_6').val(),
                                                        'reward_7' : $('#reward_7').val(),
                                                        'reward_8' : $('#reward_8').val(),
                                                        'reward_9' : $('#reward_9').val(),
                                                        'voucher_code' : $('#voucher_code').val(),
                                                        'cash_amount' : $('#cash_amount').val(),
                                                        'webcoin_amount' : $('#webcoin_amount').val()
                                                    },
                                                    success: function(data){
                                                        var GetString = JSON.stringify(data);
                                                        var Result = JSON.parse(GetString);

                                                        if (Result.response == 'true'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'success', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            setTimeout(() => {
                                                                self.history.back();
                                                            }, 2000);
                                                        }
                                                        else if (Result.response == 'false'){
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                        else{
                                                            SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                            ShowToast(2000, 'error', Result.message);
                                                            CSRF_TOKEN = Result.token;
                                                            return;
                                                        }
                                                    },
                                                    error: function(){
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

                                                                return Do_Add();
                                                            },
                                                            error: function(){
                                                                SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                                ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                                setTimeout(() => {
                                                                    window.location.reload();
                                                                }, 2000);
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    });

                                    function Do_Add()
                                    {
                                        if ($('#reward_1').val() == '' || $('#reward_1').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_2').val() == '' || $('#reward_2').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_3').val() == '' || $('#reward_3').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 3 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_4').val() == '' || $('#reward_4').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 4 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_5').val() == '' || $('#reward_5').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 5 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_6').val() == '' || $('#reward_6').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 6 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_7').val() == '' || $('#reward_7').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 7 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_8').val() == '' || $('#reward_8').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 8 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#reward_9').val() == '' || $('#reward_9').val() == null){
                                            ShowToast(2000, 'warning', 'Reward 9 Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#cash_amount').val() == '' || $('#cash_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Cash Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else if ($('#webcoin_amount').val() == '' || $('#webcoin_amount').val() == null){
                                            ShowToast(2000, 'warning', 'Webcoin Amount Cannot Be Empty.');
                                            return;
                                        }
                                        else{
                                            SetAttribute('submit', 'button', 'Processing...');

                                            $.ajax({
                                                url: '<?php echo base_url('adm/vouchermanagement/do_add') ?>',
                                                type: 'POST',
                                                dataType: 'JSON',
                                                data: {
                                                    '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                                    'type' : 'extra_large',
                                                    'reward_1' : $('#reward_1').val(),
                                                    'reward_2' : $('#reward_2').val(),
                                                    'reward_3' : $('#reward_3').val(),
                                                    'reward_4' : $('#reward_4').val(),
                                                    'reward_5' : $('#reward_5').val(),
                                                    'reward_6' : $('#reward_6').val(),
                                                    'reward_7' : $('#reward_7').val(),
                                                    'reward_8' : $('#reward_8').val(),
                                                    'reward_9' : $('#reward_9').val(),
                                                    'voucher_code' : $('#voucher_code').val(),
                                                    'cash_amount' : $('#cash_amount').val(),
                                                    'webcoin_amount' : $('#webcoin_amount').val()
                                                },
                                                success: function(data){
                                                    var GetString = JSON.stringify(data);
                                                    var Result = JSON.parse(GetString);

                                                    if (Result.response == 'true'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'success', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        setTimeout(() => {
                                                            self.history.back();
                                                        }, 2000);
                                                    }
                                                    else if (Result.response == 'false'){
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                    else{
                                                        SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                        ShowToast(2000, 'error', Result.message);
                                                        CSRF_TOKEN = Result.token;
                                                        return;
                                                    }
                                                },
                                                error: function(){
                                                    SetAttribute('submit', 'submit', 'Submit New Voucher');
                                                    ShowToast(2000, 'error', 'Failed To Submit New Voucher');
                                                    setTimeout(() => {
                                                        window.location.reload();
                                                    }, 2000);
                                                }
                                            });
                                        }
                                    }
                                </script>
                                <?php
                                break;
                            }
                        
                        default:
                            {
                                redirect(base_url('adm/vouchermanagement'), 'refresh');
                                break;
                            }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>