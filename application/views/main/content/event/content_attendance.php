<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_175') ?> <span class="text-white"><?php echo $this->lang->line('STR_DARKBLOW_176') ?></span></span></h3>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="wrapper">
                    <main>
                        <div class="calendar">
                            <div class="calendar__header">
                                <div>mon</div>
                                <div>tue</div>
                                <div>wed</div>
                                <div>thu</div>
                                <div>fri</div>
                                <div>sat</div>
                                <div>sun</div>
                            </div>
                            <div class="calendar__week">
                                <?php foreach ($attend as $row) : ?>
                                    <div id="<?php echo $row['id'] ?>" class="calendar__day
                                    <?php
                                    if ($row['date'] == date('d-m-Y'))
                                    {
                                        if ($this->attendance->GetPlayerAttendDate($row['id']))
                                        {
                                            echo 'claimed';
                                        }
                                        else
                                        {
                                            echo 'today';
                                        }
                                    }
                                    else if ($row['date'] < date('d-m-Y'))
                                    {
                                        if (!$this->attendance->GetPlayerAttendDate($row['id']))
                                        {
                                            echo 'passed';
                                        }
                                        else
                                        {
                                            echo 'claimed';
                                        }
                                    }
                                    ?>
                                    " title="
                                    <?php
                                    if ($row['date'] == date('d-m-Y'))
                                    {
                                        if ($this->attendance->GetPlayerAttendDate($row['id']))
                                        {
                                            echo 'Already Claimed';
                                        }
                                        else
                                        {
                                            echo 'Today';
                                        }
                                    }
                                    else if ($row['date'] < date('d-m-Y'))
                                    {
                                        if (!$this->attendance->GetPlayerAttendDate($row['id']))
                                        {
                                            echo 'Passed';
                                        }
                                        else
                                        {
                                            echo 'Already Claimed';
                                        }
                                    }
                                    else
                                    {
                                        echo 'Tomorrow';
                                    }
                                    ?>
                                    "><?php echo $row['day'] ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5 text-center">
                <input type="button" id="claim_today" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1 nk-btn-lg" value="Claim Today" onclick="ClaimReward('<?php echo $this->attendance->GetTodayEventID() ?>', '<?php echo date('d-m-Y') ?>')">
            </div>
            <script>
                var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash(); ?>';
                var RETRY = 0;
                function ClaimReward(event_id, date)
                {
                    if (event_id == '' || event_id == null){
                        ShowToast(2000, 'warning', 'Invalid Attendance Event.');
                        return;
                    }
                    else if (date == '' || event_id == null){
                        ShowToast(2000, 'warning', 'Invalid Attendance Event.');
                        return;
                    }
                    else{
                        SetAttribute('claim_today', 'button', 'Processing...');

                        $.ajax({
                            url: '<?php echo base_url('event/attendance/do_claim') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
                                'event_id' : event_id,
                                'date' : date
                            },
                            success: function(data){
                                var GetString = JSON.stringify(data);
                                var Result = JSON.parse(GetString);

                                if (Result.response == 'true'){
                                    SetAttribute('claim_today', 'button', 'Claim Today');
                                    ShowToast(2000, 'success', Result.message);
                                    CSRF_TOKEN = Result.token;
                                    setTimeout(() => {
                                        document.getElementById('<?php echo $this->attendance->GetTodayEventID() ?>').setAttribute('class', 'calendar__day claimed');
                                    }, 2000);
                                }
                                else if (Result.response == 'false'){
                                    SetAttribute('claim_today', 'button', 'Claim Today');
                                    ShowToast(2000, 'error', Result.message);
                                    CSRF_TOKEN = Result.token;
                                    return;
                                }
                                else{
                                    SetAttribute('claim_today', 'button', 'Claim Today');
                                    ShowToast(2000, 'error', Result.message);
                                    CSRF_TOKEN = Result.token;
                                    return;
                                }
                            },
                            error: function(){
                                if (RETRY >= 3)
                                {
                                    SetAttribute('claim_today', 'button', 'Claim TOday');
                                    ShowToast(2000, 'error', 'Failed To Claim Reward.');
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 2000);
                                }
                                else
                                {
                                    RETRY += 1;
                                    ShowToast(1000, 'info', 'Generate New Request Token...');
    
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
                                            return ClaimReward(event_id, date);
                                        },
                                        error: function(){
                                            SetAttribute('claim_today', 'button', 'Claim Today');
                                            ShowToast(2000, 'error', 'Failed To Claim Reward.');
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