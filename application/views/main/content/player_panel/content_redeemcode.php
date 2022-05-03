<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">
					<?= $this->lang->line('STR_DARKBLOW_120') ?>
				</span>
				<?= $this->lang->line('STR_DARKBLOW_121') ?>
			</span></h3>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-6">
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
				<?= form_open('', 'id="redeemcode_form" autocomplete="off"') ?>
				<div class="form-group">
					<label for="redeemcode">
						<?= $this->lang->line('STR_DARKBLOW_122') ?>
					</label>
					<input type="text" id="code" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_123') ?>" autofocus>
				</div>
				<div class="form-group text-center">
					<input id="submit" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_200') ?>">
				</div>
				<?= form_close() ?>
				<script>
					var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
					var RETRY = 0;
					$(document).ready(function() {
						$('#redeemcode_form').on('submit', function(e) {
							e.preventDefault();

							return Do_RedeemCode();
						});
					});

					function Do_RedeemCode() {
						if ($('#code').val() == '' || $('#code').val() == null) {
							ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_11') ?>');
							return;
						} else {
							SetAttribute('submit', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');

							$.ajax({
								url: '<?= $this->redeemcode->GetCodeSystem() ?>',
								type: 'POST',
								dataType: 'JSON',
								data: {
									'<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
									'opcode': '<?= $this->servercommand_library->GenerateOpcode("Redeem Code") ?>',
									'secret_token': '<?= $this->servercommand_library->GenerateSecretToken() ?>',
									'secret_keys': '<?= $this->servercommand_library->GenerateSecretKeys() ?>',
									'command_type': 'Redeem Code',
									'code': $('#code').val()
								},
								success: function(data) {
									var GetString = JSON.stringify(data);
									var Result = JSON.parse(GetString);

									SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_200') ?>');
									ShowToast(2000, Result.response, Result.message);
									CSRF_TOKEN = Result.token;
									return;
								},
								error: function() {
									if (RETRY >= 3) {
										ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_10') ?>');
										setTimeout(() => {
											window.location.reload();
										}, 2000);
									} else {
										RETRY += 1;
										ShowToast(2000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

										$.ajax({
											url: '<?= base_url('api/security/csrf') ?>',
											type: 'GET',
											dataType: 'JSON',
											data: {
												'<?= $this->lib->GetTokenName() ?>': '<?= $this->lib->GetTokenKey() ?>'
											},
											success: function(data) {
												var GetString = JSON.stringify(data);
												var Result = JSON.parse(GetString);

												if (Result.response == 'true') {
													CSRF_TOKEN = Result.token;
												}

												return Do_RedeemCode();
											},
											error: function() {
												ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_22') ?>');
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
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>