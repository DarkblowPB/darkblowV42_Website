<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Redeem</span> Code</span></h3>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap">
			<div class="col-lg-6 offset-lg-3">
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
                <?php
                if ($this->session->flashdata('success'))
                {
                    echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                    echo $this->session->flashdata('success');
                    echo "</em></div>";
                    echo '<div class="nk-gap-2"></div>';
                }
                else if ($this->session->flashdata('error')) 
                {
					echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
                    echo $this->session->flashdata('error');
                    echo "</em></div>";
                    echo '<div class="nk-gap-2"></div>';
                }
                ?>
                <?php echo form_open(base_url('player_panel/redeemcode'), 'class="form-horizontal"') ?>
					<div class="form-group">
						<label for="redeemcode">Your Code</label>
						<input type="text" name="code" class="form-control" placeholder="Enter Your Code" minlength="5" maxlength="25" value="<?php echo set_value('code') ?>" autocomplete="off" autofocus required>
					</div>
					<div class="form-group text-center">
						<button type="submit" name="submit-redeemcode" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary"><span class="fa fa-paper-plane"></span> &nbsp;Submit</button>
						<button type="reset" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger"><span class="fa fa-refresh"></span> &nbsp;Reset</button>
					</div>
				<?php echo form_close() ?>
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>