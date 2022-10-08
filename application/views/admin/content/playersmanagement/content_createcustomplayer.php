<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <?= form_open('', 'id="createcustomplayer_form" autocomplete="off"') ?>
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
                        <select id="rank" class="form-control col-9 reward_selection" style="width: 75%;">
                            <option value="" disabled selected>Select Your Rank</option>
                            <?php foreach ($rank as $row) : ?>
                                <option value="<?= $row['rank'] ?>">
                                    <?= $row['rank_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Points</label>
                        <input type="number" id="points" class="form-control col-9" placeholder="Enter Your Point Amounts">
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">PC Cafe</label>
                        <select id="pc_cafe" class="form-control col-9 reward_selection" style="width: 75%;">
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
                    <div class="form-group row">
                        <label class="col-form-label col-3">Hint Question</label>
                        <select name="hint_question" id="hint_question" class="form-control col-9 reward_selection" style="width: 75%;">
                            <option value="" disabled selected>Select Hint Question</option>
                            <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                            <option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend?</option>
                            <option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet?</option>
                            <option value="What is your favorite team?">What is your favorite team?</option>
                            <option value="What is your favorite movie?">What is your favorite movie?</option>
                            <option value="What was your favorite sport in high school?">What was your favorite sport in high school?</option>
                            <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                            <option value="What is the first name of the boy or girl that you first kissed?">What is the first name of the boy or girl that you first kissed?</option>
                            <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
                            <option value="What was the name of the hospital where you were born?">What was the name of the hospital where you were born?</option>
                            <option value="Who is your childhood sports hero?">Who is your childhood sports hero?</option>
                            <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                            <option value="What was the last name of your third grade teacher?">What was the last name of your third grade teacher?</option>
                            <option value="In what town was your first job?">In what town was your first job?</option>
                            <option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job?</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-3">Hint Answer</label>
                        <input type="text" name="hint_answer" id="hint_answer" class="form-control col-9" placeholder="Enter Your Hint Answer">
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Create New Player">
                    </div>
                    <?= form_close() ?>
                    <script>
                        var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                        $(document).ready(function() {
                            $('#createcustomplayer_form').on('submit', function(e) {
                                e.preventDefault();
                                if ($('#login').val() == '') {
                                    ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
                                    return;
                                } else if ($('#password').val() == '') {
                                    ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
                                    return;
                                } else if ($('#player_name').val() == '') {
                                    ShowToast(2000, 'warning', 'Nickname Cannot Be Empty.');
                                    return;
                                } else if ($('#rank').val() == '') {
                                    ShowToast(2000, 'warning', 'Rank Cannot Be Empty.');
                                    return;
                                } else if ($('#points').val() == '') {
                                    ShowToast(2000, 'warning', 'Points Cannot Be Empty.');
                                    return;
                                } else if ($('#pc_cafe').val() == '') {
                                    ShowToast(2000, 'warning', 'PC Cafe Cannot Be Empty.');
                                    return;
                                } else if ($('#money').val() == '') {
                                    ShowToast(2000, 'warning', 'DR-Cash Cannot Be Empty.');
                                    return;
                                } else if ($('#hint_question').val() == '' || $('#hint_question').val() == null) {
                                    ShowToast(2000, 'warning', 'Hint Question Cannot Be Empty.');
                                    return;
                                } else if ($('#hint_answer').val() == '' || $('#hint_answer').val() == null) {
                                    ShowToast(200, 'warning', 'Hint Answer Cannot Be Empty.');
                                    return;
                                } else {
                                    SetAttribute('submit', 'button', 'Processing...');
                                    $.ajax({
                                        url: '<?= base_url('adm/playersmanagement/do_createcustomplayer') ?>',
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: {
                                            '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                            'login': $('#login').val(),
                                            'password': $('#password').val(),
                                            'player_name': $('#player_name').val(),
                                            'rank': $('#rank').val(),
                                            'gp': $('#points').val(),
                                            'pc_cafe': $('#pc_cafe').val(),
                                            'money': $('#money').val(),
                                            'hint_question': $('#hint_question').val(),
                                            'hint_answer': $('#hint_answer').val()
                                        },
                                        success: function(data) {
                                            var GetString = JSON.stringify(data);
                                            var Result = JSON.parse(GetString);

                                            SetAttribute('submit', 'submit', 'Create New Player');
                                            ShowToast(2000, Result.response, Result.message);
                                            CSRF_TOKEN = Result.token;

                                            if (Result.response == 'success') {
                                                setTimeout(() => {
                                                    window.location = '<?= base_url('adm/playersmanagement') ?>';
                                                }, 2000);
                                            }
                                        },
                                        error: function(data) {
                                            SetAttribute('submit', 'submit', 'Create New Player');
                                            ShowToast(2000, 'error', 'Error: Failed To Create Custom Player.');
                                            setTimeout(() => {
                                                window.location.reload();
                                            }, 2000);
                                        }
                                    });
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>