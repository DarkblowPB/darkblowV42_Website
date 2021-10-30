<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_120') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_121') ?></span></h3>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-6">
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
                <?php echo form_open('', 'id="redeemcode_form" autocomplete="off"') ?>
					<div class="form-group">
						<label for="redeemcode"><?php echo $this->lang->line('STR_DARKBLOW_122') ?></label>
						<input type="text" id="code" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_123') ?>" autofocus>
					</div>
					<div class="form-group text-center">
						<input id="submit" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Submit Code">
					</div>
				<?php echo form_close() ?>
				<script>
					var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
					var RETRY = 0;
					$(document).ready(function(){
						$('#redeemcode_form').on('submit', function(e){
							e.preventDefault();

							return Do_RedeemCode();
						});
					});

					function Do_RedeemCode()
					{
						if ($('#code').val() == '' || $('#code').val() == null){
							ShowToast(2000, 'warning', 'Code Cannot Be Empty.');
							return;
						}
						else{
							SetAttribute('submit', 'button', 'Processing...');

							$.ajax({
								url: '<?php echo base_url('player_panel/redeemcode/do_redeem') ?>',
								type: 'POST',
								dataType: 'JSON',
								data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
								success: function(data){
									var GetString = JSON.stringify(data);
									var Result = JSON.parse(GetString);

									if (Result.response == 'true'){
										SetAttribute('submit', 'submit', 'Submit Code');
										ShowToast(2000, 'success', Result.message);
										CSRF_TOKEN = Result.token;
										return;
									}
									else{
										SetAttribute('submit', 'submit', 'Submit Code');
										ShowToast(2000, 'error', Result.message);
										CSRF_TOKEN = Result.token;
										return;
									}
								},
								error: function(){
									if (RETRY >= 3){
										ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_10') ?>');
										setTimeout(() => {
											window.location.reload();
										}, 2000);
									}
									else{
										RETRY += 1;
										ShowToast(2000, 'info', 'Generate New Request Token...');

										$.ajax({
                                            url: '<?php echo base_url('api/getnewtoken') ?>',
                                            type: 'GET',
                                            dataType : 'JSON',
                                            data: {'<?php echo $this->lib->GetTokenName() ?>' : '<?php echo $this->lib->GetTokenKey() ?>'},
                                            success: function(data){
                                                var GetString = JSON.stringify(data);
                                                var Result = JSON.parse(GetString);

                                                if (Result.response == 'true'){
                                                    CSRF_TOKEN = Result.token;
                                                }

                                                return Do_RedeemCode();
                                            },
                                            error: function(){
                                                ShowToast(2000, 'error', 'Failed To Redeem The Code.');
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
				<div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div><div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>