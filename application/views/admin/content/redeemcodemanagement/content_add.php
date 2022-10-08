<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="add_form" autocomplete="off"') ?>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward</label>
                        <select id="item_id" class="form-control col-9 reward_selection" required>
                            <option value="" disabled selected>Select Reward</option>
                            <?php foreach ($rewards as $row) : ?>
                                <option value="<?= $row['item_id'] ?>">
                                    <?= $row['item_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Reward Count</label>
                        <select id="item_count" class="form-control col-9 reward_selection" required>
                            <option value="" disabled selected>Select Reward Count</option>
                            <option value="64800">1 Day</option>
                            <option value="259200">3 Day</option>
                            <option value="604800">7 Day</option>
                            <option value="2592000">30 Day</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Item Code</label>
                        <input type="text" id="item_code" class="form-control col-7" placeholder="Enter Item Code" required>
                        <input type="button" id="generate_randomcode" class="btn btn-outline-primary text-white ml-3 col-1" value="Generate" onclick="GenerateCode()">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Cash Amount</label>
                        <input type="number" id="cash" class="form-control col-9" placeholder="Enter Cash Amount" value="0">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Type</label>
                        <select id="type" class="form-control col-9 reward_selection" required>
                            <option value="" disabled selected>Select Type</option>
                            <option value="Cash">Cash</option>
                            <option value="Item">Item</option>
                            <option value="Double">Double</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Total Qty</label>
                        <input type="number" name="qty" id="qty" class="form-control col-9" placeholder="Enter Total Qty" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Valid Date</label>
                        <select name="valid_date" id="valid_date" class="form-control col-9 reward_selection" required>
                            <option value="" disabled selected>Select Valid Date</option>
                            <option value="1">1 Days</option>
                            <option value="3">3 Days</option>
                            <option value="7">7 Days</option>
                            <option value="15">15 Days</option>
                            <option value="30">30 Days</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit New Redeem Code">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';

                        function GenerateCode() {
                            $.ajax({
                                url: '<?= base_url('adm/redeemcodemanagement/do_generatecode') ?>',
                                type: 'GET',
                                dataType: 'JSON',
                                data: {
                                    '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                                },
                                success: function(data) {
                                    var GetString = JSON.stringify(data);
                                    var Result = JSON.parse(GetString);

                                    document.getElementById('item_code').setAttribute('value', Result.code);
                                    return;
                                },
                                error: function() {
                                    ShowToast(2000, 'error', 'Failed To Generate Code.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                            });
                        }

                        $(document).ready(function() {
                            $('#add_form').on('submit', function(e) {
                                e.preventDefault();

                                return CreateRedeemCode();
                            });
                        });

                        function CreateRedeemCode() {
                            if ($('#item_code').val() == '' || $('#item_code').val() == null) {
                                ShowToast(2000, 'warning', 'Code Cannot Be Empty.');
                                return;
                            } else if ($('#type').val() == '' || $('#type').val() == null) {
                                ShowToast(2000, 'warning', 'Type Cannot Be Empty.');
                                return;
                            } else if ($('#valid_date').val() == '' || $('#valid_date').val() == null) {
                                ShowToast(2000, 'warning', 'Valid Date Cannot Be Empty.');
                                return;
                            } else {
                                SetAttribute('submit', 'button', 'Processing...');

                                $.ajax({
                                    url: '<?= base_url('adm/redeemcodemanagement/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                        'item_id': $('#item_id').val(),
                                        'item_count': $('#item_count').val(),
                                        'item_code': $('#item_code').val(),
                                        'cash': $('#cash').val(),
                                        'type': $('#type').val(),
                                        'qty': $('#qty').val(),
                                        'valid_date': $('#valid_date').val()
                                    },
                                    success: function(data) {
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        SetAttribute('submit', 'submit', 'Submit New Redeem Code');
                                        ShowToast(2000, Result.response, Result.message);
                                        CSRF_TOKEN = Result.token;
                                        setTimeout(() => {
                                            self.history.back();
                                        }, 2000);
                                    },
                                    error: function() {
                                        ShowToast(1000, 'info', 'Get New Request Token...');

                                        $.ajax({
                                            url: '<?= base_url('api/security/csrf') ?>',
                                            type: 'GET',
                                            dataType: 'JSON',
                                            data: {
                                                '<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
                                            },
                                            success: function(data) {
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                if (Result.response == 'true') CSRF_TOKEN = Result.token;

                                                return CreateRedeemCode();
                                            },
                                            error: function() {
                                                SetAttribute('submit', 'submit', 'Submit New Redeem Code');
                                                ShowToast(2000, 'error', 'Failed To Create Redeem Code.');
                                                setTimeout(() => {
                                                    window.location.reload();
                                                }, 2000);
                                            }
                                        });
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