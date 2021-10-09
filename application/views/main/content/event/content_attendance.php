<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span class="text-main-1">Attandance <span class="text-white">Event</span></span></h3>
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
                                <div class="calendar__day claimed">1</div>
                                <div class="calendar__day today">2</div>
                                <div class="calendar__day passed">3</div>
                                <div class="calendar__day">4</div>
                                <div class="calendar__day">5</div>
                                <div class="calendar__day">6</div>
                                <div class="calendar__day">7</div>
                            </div>
                            <div class="calendar__week">
                                <div class="calendar__day">8</div>
                                <div class="calendar__day">9</div>
                                <div class="calendar__day">10</div>
                                <div class="calendar__day">11</div>
                                <div class="calendar__day">12</div>
                                <div class="calendar__day">13</div>
                                <div class="calendar__day">14</div>        
                            </div>
                            <div class="calendar__week">
                                <div class="calendar__day">15</div>
                                <div class="calendar__day">16</div>
                                <div class="calendar__day">17</div>
                                <div class="calendar__day">18</div>
                                <div class="calendar__day">19</div>
                                <div class="calendar__day">20</div>
                                <div class="calendar__day">21</div>    
                            </div>
                            <div class="calendar__week">
                                <div class="calendar__day">22</div>
                                <div class="calendar__day">23</div>
                                <div class="calendar__day">24</div>
                                <div class="calendar__day">25</div>
                                <div class="calendar__day">26</div> 
                                <div class="calendar__day">27</div> 
                                <div class="calendar__day">28</div> 
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5 text-center">
                <input type="button" id="claim_today" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1 nk-btn-lg" value="Claim Today" onclick="ClaimReward('', '<?php echo date('d-m-Y') ?>')">
            </div>
            <script>
                var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash(); ?>';
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
                                        window.location.reload();
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
                        });
                    }
                }
            </script>
        </div>
    </div>
</div>