<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?php echo form_open('', 'id="add_form" autocomplete="off"') ?>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Start Date</label>
                            <input type="datetime-local" id="date_start" class="form-control col-9">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">End Date</label>
                            <input type="datetime-local" id="date_end" class="form-control col-9">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Title</label>
                            <input type="text" id="title" class="form-control col-9" placeholder="Enter Events Title">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Play Time</label>
                            <select id="seconds_target" class="form-control col-9">
                                <option value="" disabled selected>Select Play Time</option>
                                <option value="1800">Half Hours</option>
                                <option value="3600">1 Hour</option>
                                <option value="7200">2 Hour</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-3">Reward Type</label>
                            <select id="reward_type" class="form-control col-9">
                                <option value="" disabled selected>Select Reward Type</option>
                                <option value="single_reward">Single Reward</option>
                                <option value="double_reward">Double Reward</option>
                            </select>
                        </div>
                        <div id="reward_result1" class="form-group row">
                            
                        </div>
                        <div id="count_reward_result1" class="form-group row">

                        </div>
                        <div id="reward_result2" class="form-group row">

                        </div>
                        <div id="count_reward_result2" class="form-group row">

                        </div>
                        <div class="form-group text-right">
                            <input id="submit" type="submit" class="btn btn-outline-primary text-white" value="Submit New Events">
                        </div>
                    <?php echo form_close() ?>
                    <script>
                        var CSRF_TOKEN = '';
                        $(document).ready(function(){
                            $('#reward_type').on('change', function(e){
                                e.preventDefault();
                                var getVal = $(this).val();
                                if (getVal == 'single_reward'){
                                    $('#reward_result1').html('');
                                    $('#count_reward_result1').html('');
                                    $('#reward_result2').html('');
                                    $('#count_reward_result2').html('');

                                    $('#reward_result1').html(
                                        '<label class="col-form-label col-3">Reward 1</label>' + 
                                        '<select id="reward_one" class="form-control col-9">' + 
                                            '<option value="" disabled selected>Select Reward Item</option>' +
                                            <?php foreach ($items as $row) : ?>
                                                "<option value='<?php echo $row['good_id'] ?>'><?php echo $row['item_name'] ?></option>" +
                                            <?php endforeach; ?>
                                        +'</select>'
                                    );
                                    $('#count_reward_result1').html(
                                        '<label class="col-form-label col-3">Duration Reward 1</label>' + 
                                        '<select id="count_reward_one" class="form-control col-9">' + 
                                            '<option value="" disabled selected>Select Duration Reward</option>' +
                                            '<option value="86400">1 Day</option>' +
                                            '<option value="259200">3 Days</option>' +
                                            '<option value="604800">7 Days</option>' +
                                            '<option value="2592000">30 Days</option>' +
                                        '</select>'
                                    );
                                }
                                else if (getVal == 'double_reward'){
                                    $('#reward_result1').html('');
                                    $('#count_reward_result1').html('');
                                    $('#reward_result2').html('');
                                    $('#count_reward_result2').html('');

                                    $('#reward_result1').html(
                                        '<label class="col-form-label col-3">Reward 1</label>' + 
                                        '<select id="reward_one" class="form-control col-9">' + 
                                            '<option value="" disabled selected>Select Reward Item</option>' +
                                            <?php foreach ($items as $row) : ?>
                                                "<option value='<?php echo $row['good_id'] ?>'><?php echo $row['item_name'] ?></option>" +
                                            <?php endforeach; ?>
                                        +'</select>'
                                    );
                                    $('#count_reward_result1').html(
                                        '<label class="col-form-label col-3">Duration Reward 1</label>' + 
                                        '<select id="count_reward_one" class="form-control col-9">' + 
                                            '<option value="" disabled selected>Select Duration Reward</option>' +
                                            '<option value="86400">1 Day</option>' +
                                            '<option value="259200">3 Days</option>' +
                                            '<option value="604800">7 Days</option>' +
                                            '<option value="2592000">30 Days</option>' +
                                        '</select>'
                                    );
                                    $('#reward_result2').html(
                                        '<label class="col-form-label col-3">Reward 2</label>' + 
                                        '<select id="reward_two" class="form-control col-9">' + 
                                            '<option value="" disabled selected>Select Reward Item</option>' +
                                            <?php foreach ($items as $row) : ?>
                                                "<option value='<?php echo $row['good_id'] ?>'><?php echo $row['item_name'] ?></option>" +
                                            <?php endforeach; ?>
                                        +'</select>'
                                    );
                                    $('#count_reward_result2').html(
                                        '<label class="col-form-label col-3">Duration Reward 2</label>' + 
                                        '<select id="count_reward_two" class="form-control col-9">' + 
                                            '<option value="" disabled selected>Select Duration Reward</option>' +
                                            '<option value="86400">1 Day</option>' +
                                            '<option value="259200">3 Days</option>' +
                                            '<option value="604800">7 Days</option>' +
                                            '<option value="2592000">30 Days</option>' +
                                        '</select>'
                                    );
                                }
                                else{
                                    window.location = '<?php echo base_url('adm/dashboard') ?>';
                                }
                            });
                            $('#add_form').on('submit', function(e){
                                e.preventDefault();

                                if ($('#date_start').val() == ""){
                                    ShowToast(2000, 'warning', 'Date Start Cannot Be Empty.');
                                    return;
                                }
                                if ($('#date_end').val() == ""){
                                    ShowToast(2000, 'warning', 'Date End Cannot Be Empty.');
                                    return;
                                }
                                if ($('#title').val() == ""){
                                    ShowToast(2000, 'warning', 'Title Cannot Be Empty.');
                                    return;
                                }
                                if ($('#seconds_target').val() == ""){
                                    ShowToast(2000, 'warning', 'Play Time Cannot Be Empty.');
                                    return;
                                }
                                if ($('#reward_type').val() == ""){
                                    ShowToast(2000, 'warning', 'Please Select Reward Type.');
                                    return;
                                }

                                if ($('#reward_type').val() == 'single_reward'){
                                    if ($('#reward_one').val() == ""){
                                        ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                        return;
                                    }
                                    if ($('#count_reward_one').val() == ""){
                                        ShowToast(2000, 'warning', 'Duration Reward 1 Cannot Be Empty.');
                                        return;
                                    }
                                }
                                if ($('#reward_type') == 'double_reward'){
                                    if ($('#reward_one').val() == ""){
                                        ShowToast(2000, 'warning', 'Reward 1 Cannot Be Empty.');
                                        return;
                                    }
                                    if ($('#count_reward_one').val() == ""){
                                        ShowToast(2000, 'warning', 'Duration Reward 1 Cannot Be Empty.');
                                        return;
                                    }
                                    if ($('#reward_two').val() == ""){
                                        ShowToast(2000, 'warning', 'Reward 2 Cannot Be Empty.');
                                        return;
                                    }
                                    if ($('#count_reward_two').val() == ""){
                                        ShowToast(2000, 'warning', 'Duration Reward 2 Cannot Be Empty.');
                                        return;
                                    }
                                }

                                if (CSRF_TOKEN == ''){
                                    CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
                                }

                                SetButton('false');

                                $.ajax({
                                    url: '<?php echo base_url('adm/eventsmanagement/playtime/do_add') ?>',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {
                                        '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                        'start_date' : $('#start_date').val(),
                                        'end_date' : $('#end_date').val(),
                                        'title' : $('#title').val(),
                                        'seconds_target' : $('#seconds_target').val(),
                                        'reward_type' : $('#reward_type').val(),
                                        'good_reward1' : $('#reward_one').val(),
                                        'good_reward2' : $('#reward_two').val(),
                                        'good_count1' : $('#count_reward_one').val(),
                                        'good_count2' : $('#count_reward_two').val()
                                    },
                                    success: function(data){
                                        var GetString = JSON.stringify(data);
                                        var Result = JSON.parse(GetString);

                                        if (Result.response == 'true'){
                                            SetButton('true');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'success', Result.message);
                                        }
                                        else if (Result.response == 'false'){
                                            SetButton('true');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                        }
                                        else{
                                            SetButton('true');
                                            CSRF_TOKEN = Result.token;
                                            ShowToast(2000, 'error', Result.message);
                                        }
                                    },
                                    error: function(data){
                                        SetButton('true');
                                        console.log(data.responseJSON);
                                        // setTimeout(() => {
                                        //     window.location.reload();
                                        // }, 2000);
                                    }
                                });
                            });
                        });

                        function SetButton(param)
                        {
                            var GetBtn = document.getElementById('submit');
                            if (param == 'false'){
                                GetBtn.setAttribute('type', 'button');
                                GetBtn.setAttribute('value', 'Processing...');
                            }
                            if (param == 'true'){
                                GetBtn.setAttribute('type', 'submit');
                                GetBtn.setAttribute('value', 'Submit New Events');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>