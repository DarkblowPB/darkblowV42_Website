<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2"><span class="text-main-1">Create <span class="text-white">New Hint</span></span></h3>
		<div class="nk-gap-2"></div>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-6">
				<?php echo form_open('', 'id="createhint_form" autocomplete="off"') ?>
					<div class="form-group">
						<label>Hint Question</label>
						<select class="form-control" id="hint_question" required>
							<option value="" disabled selected>
								Select Your Hint Question
							</option>
							<option value="What was your childhood nickname?">
								What was your childhood nickname?
							</option>
							<option value="What is the name of your favorite childhood friend?">
								What is the name of your favorite childhood friend?
							</option>
							<option value="In what city or town did your mother and father meet?">
								In what city or town did your mother and father meet?
							</option>
							<option value="What is your favorite team?">
								What is your favorite team?
							</option>
							<option value="What is your favorite movie?">
								What is your favorite movie?
							</option>
							<option value="What was your favorite sport in high school?">
								What was your favorite sport in high school?
							</option>
							<option value="What was your favorite food as a child?">
								What was your favorite food as a child?
							</option>
							<option value="What is the first name of the boy or girl that you first kissed?">
								What is the first name of the boy or girl that you first kissed?
							</option>
							<option value="What was the make and model of your first car?">
								What was the make and model of your first car?
							</option>
							<option value="What was the name of the hospital where you were born?">
								What was the name of the hospital where you were born?
							</option>
							<option value="Who is your childhood sports hero?">
								Who is your childhood sports hero?
							</option>
							<option value="What school did you attend for sixth grade?">
								What school did you attend for sixth grade?
							</option>
							<option value="What was the last name of your third grade teacher?">
								What was the last name of your third grade teacher?
							</option>
							<option value="In what town was your first job?">
								In what town was your first job?
							</option>
							<option value="What was the name of the company where you had your first job?">
								What was the name of the company where you had your first job?
							</option>
						</select>
					</div>
					<div class="form-group">
						<label>Hint Answer</label>
						<input type="text" id="hint_answer" class="form-control" placeholder="Enter Your Hint Answer">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" id="password" class="form-control" placeholder="Enter Your Password" minlength="4" maxlength="16">
					</div>
					<div class="nk-gap-1"></div>
					<div class="form-group text-center">
						<input id="submit" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Submit New Hint">
					</div>
				<?php echo form_close() ?>
				<script>
					var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
					var RETRY = 0;
					$(document).ready(function(){
						$('#createhint_form').on('submit', function(e){
							e.preventDefault();

							return Do_CreateNewHint();
					});

					function Do_CreateNewHint()
					{
						if ($('#hint_question').val() == ""){
							ShowToast(2000, 'warning', 'Hint Question Cannot Be Empty.');
							return;
						}
						else if ($('#hint_answer').val() == ""){
							ShowToast(2000, 'warning', 'Hint Answer Cannot Be Empty.');
							return;
						}
						else if ($('#password').val() == ""){
							ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
							return;
						}
						else{
							SetAttribute('submit', 'button', 'Processing...');
							$.ajax({
								url: '<?php echo base_url('player_panel/create_hint/do_create') ?>',
								type: 'POST',
								dataType: 'JSON',
								data: {
									'<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
									'hint_question' : $('#hint_question').val(),
									'hint_answer' : $('#hint_answer').val(),
									'password' : $('#password').val()
								},
								success: function(data){
									var decodeString = JSON.stringify(data);
									var decodeParse = JSON.parse(decodeString);

									if (decodeParse.response == 'true'){
										SetAttribute('submit', 'submit', 'Submit New Hint');
										CSRF_TOKEN = decodeParse.token;
										ShowToast(2000, 'success', decodeParse.message);
										setTimeout(() => {
											window.location = '<?php echo base_url('player_panel/home') ?>';
										}, 2000);
									}
									else{
										SetAttribute('submit', 'submit', 'Submit New Hint');
										CSRF_TOKEN = decodeParse.token;
										ShowToast(2000, 'error', decodeParse.message);
										return;
									}
								},
								error: function(){
									if (RETRY >= 3){
										SetAttribute('submit', 'submit', 'Submit New Hint');
										ShowToast(2000, 'error', 'Failed To Submit New Hint.');
										setTimeout(() => {
											window.location.reload();
										}, 2000);
									}
									else{
										RETRY += 1;
										
										$.ajax({
                                            url: '<?php echo base_url('api/security/csrf') ?>',
                                            type: 'GET',
                                            dataType : 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                if (Result.response == 'true'){
                                                    CSRF_TOKEN = Result.token;
                                                }

                                                return Do_CreateNewHint();
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Create New Hint.');
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
		<div class="nk-gap-2"></div>
	</div>
</div>