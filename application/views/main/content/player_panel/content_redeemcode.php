<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Redeem</span> Code</span></h3>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-6">
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
                <?php echo form_open('', 'id="redeemcode_form" autocomplete="off"') ?>
					<div class="form-group">
						<label for="redeemcode">Your Code</label>
						<input type="text" id="code" class="form-control" placeholder="Enter Your Code" autofocus>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Submit Code">
					</div>
				<?php echo form_close() ?>
				<script>
					$(document).ready(function(){
						$('#redeemcode_form').on('submit', function(e){
							e.preventDefault();
							if ($('#code').val() == ""){
								ShowToast(2000, 'error', 'Code Cannot Be Empty.');
								return;
							}
							else{
								$.ajax({
									url: '<?php echo base_url('player_panel/redeemcode/do_redeem') ?>',
									type: 'POST',
									data: {
										'<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
										'code' : $('#code').val()
									},
									success: function(data){
										if (data == "true"){
											ShowToast(2000, 'success', 'Successfully Redeem The Code.');
											setTimeout(() => {
												window.location = '<?php echo base_url('player_panel/redeemcode') ?>';
											}, 2500);
										}
										else if (data == "false"){
											ShowToast(2000, 'error', 'Failed To Redeem The Code.');
											setTimeout(() => {
												window.location = '<?php echo base_url('player_panel/redeemcode') ?>';
											}, 2500);
										}
										else{
											ShowToast(2500, 'error', data);
											setTimeout(() => {
												window.location = '<?php echo base_url('player_panel/redeemcode') ?>';
											}, 3000);
										}
									},
									error: function(data, status){
										ShowToast(2500, 'error', data.responseText);
										setTimeout(() => {
											window.location = '<?php echo base_url('player_panel/redeemcode') ?>';
										}, 3000);
									}
								});
							}
						});
					});
				</script>
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>