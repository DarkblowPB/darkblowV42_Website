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
						<input id="submit" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Submit Code">
					</div>
				<?php echo form_close() ?>
				<script>
					var CSRF_TOKEN = '';
					$(document).ready(function(){
						$('#redeemcode_form').on('submit', function(e){
							e.preventDefault();
							if ($('#code').val() == ""){
								ShowToast(2000, 'error', 'Code Cannot Be Empty.');
								return;
							}
							else{
								SubmitCondition('false');
								
								if (CSRF_TOKEN == ''){
									CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
								}
								
								$.ajax({
									url: '<?php echo base_url('player_panel/redeemcode/do_redeem') ?>',
									type: 'POST',
									dataType: 'JSON',
									data: {
										'<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
										'code' : $('#code').val()
									},
									success: function(data){
										var decodeString = JSON.stringify(data);
										var jsonString = JSON.parse(decodeString);
										if (jsonString.response == "true"){
											CSRF_TOKEN = jsonString.token;
											ShowToast(2000, 'success', jsonString.message);
											setTimeout(() => {
												SubmitCondition('true');
											}, 2500);
											return;
										}
										else if (jsonString.response == "false"){
											CSRF_TOKEN = jsonString.token;
											ShowToast(2000, 'error', jsonString.message);
											setTimeout(() => {
												SubmitCondition('true');
											}, 2500);
											return;
										}
										else{
											CSRF_TOKEN = jsonString.token;
											ShowToast(2000, 'error', jsonString.message);
											setTimeout(() => {
												SubmitCondition('true');
											}, 2500);
											return;
										}
									},
									error: function(){
										ShowToast(2000, 'error', 'Failed To Redeem The Code.');
										setTimeout(() => {
											window.location.reload();
										}, 2500);
									}
								});
							}
						});
					});
					function SubmitCondition(param)
					{
						let getBtn = document.getElementById('submit');
						if (param == 'true'){
							getBtn.setAttribute('type', 'submit');
							getBtn.setAttribute('value', 'Submit Code');
						}
						if (param == 'false'){
							getBtn.setAttribute('type', 'button');
							getBtn.setAttribute('value', 'Processing...');
						}
					}
				</script>
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>