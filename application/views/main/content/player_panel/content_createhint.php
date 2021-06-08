<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2"><span class="text-main-1">Create <span class="text-white">New Hint</span></span></h3>
		<div class="nk-gap-2"></div>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-6">
				<?php
                if ($this->session->flashdata('error')) 
                {
					echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                    echo $this->session->flashdata('error');
                    echo "</em></div>";
                }
				?>
				<?php echo form_open(base_url('player_panel/create_hint'), 'class="form-horizontal"') ?>
					<div class="form-group">
						<label>Hint Question</label>
						<select class="form-control" name="hint_question" required>
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
						<input type="text" name="hint_answer" class="form-control" placeholder="Enter Your Hint Password" minlength="2" maxlength="255" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Your Password" minlength="4" maxlength="16" required>
					</div>
					<div class="nk-gap-1"></div>
					<div class="form-group text-center">
						<button type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-paper-plane"></span> &nbsp;Submit New Hint</button>
						<button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
					</div>
				<?php echo form_close() ?>
			</div>
		</div>
		<div class="nk-gap-2"></div>
	</div>
</div>