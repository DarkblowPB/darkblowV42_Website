                    <?php echo form_open(base_url('launcher/redeemcode/login'), ' class="form-horizontal"'); ?>
						<h4 class="text-center" style="color: white; font-weight: bold; font-style: italic;">LOGIN FORM</h4>
						<div class="form-group">
							<br>
							<label style="color: white; font-size: 15px; font-weight: bold; font-style: italic;">Username</label>
							<input type="text" name="login" class="form-control" value="<?php echo set_value('login') ?>" placeholder="Enter Username" minlength="4" maxlength="16" autocomplete="off" autofocus required>
						</div>
						<div class="form-group">
							<label style="color: white; font-size: 15px; font-weight: bold; font-style: italic;">Password</label>
							<input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Enter Password" minlength="4" maxlength="16" required>
						</div>
						<div class="form-group text-center mt-5">
                            <button type="reset" class="btn btn-outline-danger" style="font-weight: bold; font-style: italic;"><span class="fas fa-eraser"></span> &nbsp;RESET</button>
							<button type="submit" name="submit-login" class="btn btn-outline-primary" style="font-weight: bold; font-style: italic;"><span class="fas fa-paper-plane"></span> &nbsp;LOGIN</button>
						</div>
					<?php echo form_close(); ?>
                    <br>