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

							if ($('#code').val() == '' || $('#code').val() == null) {
								ShowToast(2000, 'warning', 'Code Cannot Be Empty.');
								return;
							} else {
								SetAttribute('submit', 'submit', 'Processing...');
								$.ajax({
									url: '<?= $this->redeemcode->GetCodeSystem() ?>',
									type: 'POST',
									dataType: 'JSON',
									data: {
										'<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
										'opcode': '<?= $this->socketcommand->Opcodes("Redeem Code") ?>',
										'secret_token': '<?= $this->socketcommand->GenerateSecretToken() ?>',
										'secret_keys': '<?= $this->socketcommand->GenerateSecretKeys() ?>',
										'command_type': 'Redeem Code',
										'code': $('#code').val()
									},
									success: (response) => {
										var stringify = JSON.stringify(response);
										var result = JSON.parse(stringify);

										SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_200') ?>');
										ShowToast(2000, result.response, result.message);
										CSRF_TOKEN = result.token;
									},
									error: () => {
										SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_200') ?>');
										ShowToast(2000, 'error', 'Failed To Redeem Your Code.');
										setTimeout(() => {
											window.location.reload();
										}, 2000);
									}
								});
							}
						});
					});
				</script>
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
				<div class="nk-gap-2"></div>
			</div>
		</div>
	</div>
</div>