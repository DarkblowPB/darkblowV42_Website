<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->session->userdata('player_name') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_163') ?></span></h3>
		<div class="nk-gap-1"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-12 col-12">
				<table class="nk-table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
					<thead>
						<tr>
							<th width="5%"><?php echo $this->lang->line('STR_DARKBLOW_164') ?></th>
							<th><?php echo $this->lang->line('STR_DARKBLOW_66') ?></th>
							<th width="15%"><?php echo $this->lang->line('STR_DARKBLOW_72') ?></th>
							<th width="20%"><?php echo $this->lang->line('STR_DARKBLOW_69') ?></th>
							<th width="25%"><?php echo $this->lang->line('STR_DARKBLOW_73') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($inventory != null) {
							$num = 1;
							foreach ($inventory as $row) :
						?>
								<tr id="data_<?php echo $num ?>">
									<td><?php echo ++$start; ?></td>
									<td>
										<?php
										echo $this->inventory->GetItemRealName($row['item_id']);
										?>
									</td>
									<td>
										<?php
										switch ($row['category']) {
											case '1': {
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">' . $this->lang->line('STR_DARKBLOW_74') . '</button>';
													break;
												}
											case '2': {
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">' . $this->lang->line('STR_DARKBLOW_186') . '</button>';
													break;
												}
											case '3': {
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">' . $this->lang->line('STR_DARKBLOW_136') . '</button>';
													break;
												}

											default: {
													echo $this->lang->line('STR_DARKBLOW_77');
													break;
												}
										}
										?>
									</td>
									<td>
										<?php
										switch ($row['equip']) {
											case '1': {
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">' . $this->lang->line('STR_DARKBLOW_187') . '</button>';
													break;
												}
											case '2': {
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3">' . $this->lang->line('STR_DARKBLOW_188') . '</button>';
													break;
												}
											case '3': {
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">' . $this->lang->line('STR_DARKBLOW_189') . '</button>';
													break;
												}

											default: {
													echo $this->lang->line('STR_DARKBLOW_77');
													break;
												}
										}
										?>
									</td>
									<td>
										<a href="<?php echo base_url('player_panel/inventory/detail?idx=' . $row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" title="<?php echo $this->lang->line('STR_DARKBLOW_81') ?>"><span class="fa fa-info-circle mr-2"></span><?php echo $this->lang->line('STR_DARKBLOW_82') ?></a>
										<?php
										if ($row['equip'] == 3) {
										?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_INFO_8') ?>');"></span><?php echo $this->lang->line('STR_DARKBLOW_190') ?></button>
										<?php
										}
										if ($row['equip'] >= 1 && $row['equip'] < 3) {
										?>
											<input type="button" id="DeleteButton_<?php echo $num ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="DeleteItem('data_<?php echo $num ?>', 'DeleteButton_<?php echo $num ?>','<?php echo $this->session->userdata('uid') ?>', '<?php echo $row['item_id'] ?>')" value="<?php echo $this->lang->line('STR_DARKBLOW_190') ?>">
										<?php
										}
										?>
									</td>
								</tr>
							<?php
								$num++;
							endforeach;
						} else {
							?>
							<tr>
								<td colspan="5" class="text-center"><?php echo $this->lang->line('STR_INFO_4') ?></td>
							</tr>
						<?php
						}
						?>
						<?php if ($inventory != null) : ?>
							<script>
								var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
								var RETRY = 0;

								function DeleteItem(data_id, button_id, player_id, item_id) {
									if (data_id == '' || data_id == null) {
										ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else if (button_id == '' || button_id == null) {
										ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else if (player_id == '' || player_id == null) {
										ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else if (item_id == '' || item_id == null) {
										ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else {
										SetAttribute(button_id, 'button', '<?php echo $this->lang->line('STR_INFO_8') ?>');

										$.ajax({
											url: '<?php echo base_url('player_panel/inventory/do_delete') ?>',
											type: 'POST',
											dataType: 'JSON',
											data: {
												'<?php echo $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
												'player_id': player_id,
												'item_id': item_id
											},
											success: function(data) {
												var GetString = JSON.stringify(data);
												var Result = JSON.parse(GetString);

												if (Result.response == 'true') {
													document.getElementById(data_id).remove();
													ShowToast(2000, 'success', Result.message);
													CSRF_TOKEN = Result.token;
													return;
												} else {
													SetAttribute(button_id, 'button', '<?php echo $this->lang->line('STR_DARKBLOW_190') ?>');
													ShowToast(2000, 'error', Result.message);
													CSRF_TOKEN = Result.token;
													return;
												}
											},
											error: function() {
												if (RETRY >= 3) {
													SetAttribute(button_id, 'button', '<?php echo $this->lang->line('STR_DARKBLOW_190') ?>');
													ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_15') ?>');
													setTimeout(() => {
														window.location.reload();
													}, 2000);
												} else {
													ShowToast(1000, 'info', '<?php echo $this->lang->line('STR_INFO_1') ?>');

													$.ajax({
														url: '<?php echo base_url('api/security/csrf') ?>',
														type: 'GET',
														dataType: 'JSON',
														data: {
															'<?php echo $this->lib->GetTokenName() ?>': '<?php echo $this->lib->GetTokenKey() ?>'
														},
														success: function(data) {
															var GetString = JSON.stringify(data);
															var Result = JSON.parse(GetString);

															if (Result.response == 'true') {
																CSRF_TOKEN = Result.token;
															}

															return DeleteItem(data_id, button_id, player_id, item_id);
														},
														error: function() {
															SetAttribute('submit', 'submit', '<?php echo $this->lang->line('STR_DARKBLOW_181') ?>');
															ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_8') ?>');
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
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="nk-gap-2"></div>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>