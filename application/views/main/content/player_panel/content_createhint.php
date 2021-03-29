<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2"><span class="text-main-1">Create <span class="text-white">New Hint</span></span></h3>
		<div class="nk-gap-2"></div>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<?php
			foreach ($detailaccount as $row) 
			{
				if (isset($row['hint_question'])) 
				{
					$this->session->set_flashdata('error', 'Hint Already Created.<br>You Cannot Create Hint For Twice.');
					redirect(base_url('player_panel'),'refresh');
				}
				else
				{
			?>
			<div class="col-lg-6">
				<?php
				if (isset($_POST['submit-createnewhint'])) 
				{
					include 'assets/include.php';

					function encripitar($pass)
			        {
			            $salt = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
			            $output = hash_hmac('md5', $pass, $salt);
			            return $output;
			        }
					$hint_question = $_POST['hint_question']; // Pertanyaan Hint Dari Form
					$hint_answer = $_POST['hint_answer']; // Jawaban Hint Dari Form
					$password = encripitar($_POST['password']); // Password Dari Form
					$pass_now = $row['password']; // Password Dari Database

					// Jika pertanyaan hint yang dikirim adalah kosong
					if ($hint_question == "") 
					{
						$this->session->set_flashdata('error', 'Hint Question Cannot Be Empty.');
						redirect(base_url('player_panel/create_hint'),'refresh');
					}
					// Jika jawaban hint yang dikirim adalah kosong
					else if ($hint_answer == "") 
					{
						$this->session->set_flashdata('error', 'Hint Answer Cannot Be Empty.');
						redirect(base_url('player_panel/create_hint'),'refresh');
					}
					// Jika password yang dikirim adalah kosong
					else if ($password == "") 
					{
						$this->session->set_flashdata('error', 'Password Cannot Be Empty.');
						redirect(base_url('player_panel/create_hint'),'refresh');
					}
					// Jika password yang dikirim tidak sama dengan password yang ada didatabase
					else if ($password != $pass_now) 
					{
						$this->session->set_flashdata('error', 'Wrong Password, Please Recheck Your Password Again.');
						redirect(base_url('player_panel/create_hint'),'refresh');
					}
					else
					{
						// $sql =$connec->prepare("SELECT * FROM accounts WHERE player_id = '".$_SESSION['uid']."'");
						// $sql->execute();
						// $result = $sql->fetch(PDO::FETCH_ASSOC);
						// if ($result) 
						// {
						// 	$ISp_Res2 = $connec->prepare("INSERT INTO accounts (hint_question, hint_answer) VALUES(?,?)");
						// 	$ISp_Res2->execute(array($hint_question, $hint_answer));
						// 	$this->session->set_flashdata('success', 'Hint Successfully Created');
						// 	redirect(base_url('player_panel'),'refresh');
						// }
						// else
						// {
						// 	$this->session->set_flashdata('error', 'Nothing Account Match With Your Action');
						// 	redirect(base_url('player_panel'),'refresh');
						// }
							$sql_hintquestion = 'UPDATE accounts '. 'SET hint_question = :mn '. 'WHERE player_id = :p_id';
							$stmt_0 = $connec->prepare($sql_hintquestion);
			                $stmt_0->bindParam(':mn', $hint_question, PDO::PARAM_STR);
			                $stmt_0->bindParam(':p_id', $_SESSION['uid'], PDO::PARAM_STR);
			                $stmt_0->execute();
			                $sql_hintanswer = 'UPDATE accounts '. 'SET hint_answer = :mnn '. 'WHERE player_id = :p_idd';
							$stmt_1 = $connec->prepare($sql_hintanswer);
			                $stmt_1->bindParam(':mnn', $hint_answer, PDO::PARAM_STR);
			                $stmt_1->bindParam(':p_idd', $_SESSION['uid'], PDO::PARAM_STR);
			                $stmt_1->execute();
			                redirect(base_url('player_panel'),'refresh');
					}
				}
				?>
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
						<button type="submit" name="submit-createnewhint" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-paper-plane"></span> &nbsp;Submit New Hint</button>
						<button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
					</div>
				<?php echo form_close() ?>
			</div>
			<?php
				}
			}
			?>
		</div>
		<div class="nk-gap-2"></div>
	</div>
</div>