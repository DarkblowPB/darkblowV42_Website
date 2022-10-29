<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">
					<?= $this->session->userdata('player_name') ?>
				</span>
				<?= $this->lang->line('STR_DARKBLOW_163') ?>
			</span></h3>
		<div class="nk-gap-1"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-12 col-12">
				<table class="nk-table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
					<thead>
						<tr>
							<th width="5%"><?= $this->lang->line('STR_DARKBLOW_164') ?></th>
							<th><?= $this->lang->line('STR_DARKBLOW_66') ?></th>
							<th width="15%"><?= $this->lang->line('STR_DARKBLOW_72') ?></th>
							<th width="20%"><?= $this->lang->line('STR_DARKBLOW_69') ?></th>
							<th width="25%"><?= $this->lang->line('STR_DARKBLOW_73') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($inventory != null) {
							$num = 1;
							foreach ($inventory as $row) :
						?>
								<tr id="data_<?= $num ?>">
									<td><?= ++$start; ?></td>
									<td><?= $this->darkblowlib->GetItemName($row['item_id']) ?></td>
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
										<a href="<?= base_url('player_panel/inventory/detail/' . $row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" title="<?= $this->lang->line('STR_DARKBLOW_81') ?>"><span class="fa fa-info-circle mr-2"></span><?= $this->lang->line('STR_DARKBLOW_82') ?></a>
										<?php if ($row['equip'] == 3) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'error', '<?= $this->lang->line('STR_INFO_8') ?>');"></span><?= $this->lang->line('STR_DARKBLOW_190') ?></button>
										<?php endif ?>
										<?php if ($row['equip'] == 1 || $row['equip'] == 2) : ?>
											<input type="button" id="DeleteButton_<?= $num ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="DeleteItem('data_<?= $num ?>', 'DeleteButton_<?= $num ?>','<?= $this->session->userdata('uid') ?>', '<?= $row['item_id'] ?>')" value="<?= $this->lang->line('STR_DARKBLOW_190') ?>">
										<?php endif ?>
									</td>
								</tr>
							<?php
								$num++;
							endforeach;
						} else {
							?>
							<tr>
								<td colspan="5" class="text-center"><?= $this->lang->line('STR_INFO_4') ?></td>
							</tr>
						<?php
						}
						?>
						<?php if ($inventory != null) : ?>
							<script>
								var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
								var RETRY = 0;

								function DeleteItem(data_id, button_id, player_id, item_id) {
									if (data_id == '' || data_id == null) {
										ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else if (button_id == '' || button_id == null) {
										ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else if (player_id == '' || player_id == null) {
										ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else if (item_id == '' || item_id == null) {
										ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_19') ?>');
										return;
									} else {
										Swal.fire({
											title: 'Are You Sure Want To Delete This Player?',
											text: "You Won't Be Able To Revert This Action!",
											icon: 'warning',
											showCancelButton: true,
											confirmButtonColor: '#3085d6',
											cancelButtonColor: '#d33',
											confirmButtonText: 'Yes, Delete It!'
										}).then((result) => {
											if (result.isConfirmed) {
												SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_INFO_8') ?>');

												$.ajax({
													url: '<?= base_url('player_panel/inventory/do_delete') ?>',
													type: 'POST',
													dataType: 'JSON',
													data: {
														'<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
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
															SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_190') ?>');
															ShowToast(2000, 'error', Result.message);
															CSRF_TOKEN = Result.token;
															return;
														}
													},
													error: function() {
														if (RETRY >= 3) {
															SetAttribute(button_id, 'button', '<?= $this->lang->line('STR_DARKBLOW_190') ?>');
															ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_15') ?>');
															setTimeout(() => {
																window.location.reload();
															}, 2000);
														} else {
															ShowToast(1000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

															$.ajax({
																url: '<?= base_url('api/security/csrf') ?>',
																type: 'GET',
																dataType: 'JSON',
																data: {
																	'<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
																},
																success: function(data) {
																	var GetString = JSON.stringify(data);
																	var Result = JSON.parse(GetString);

																	if (Result.response == 'true') CSRF_TOKEN = Result.token;

																	return DeleteItem(data_id, button_id, player_id, item_id);
																},
																error: function() {
																	SetAttribute('submit', 'submit', '<?= $this->lang->line('STR_DARKBLOW_181') ?>');
																	ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_8') ?>');
																	setTimeout(() => {
																		window.location.reload();
																	}, 2000);
																}
															});
														}
													}
												});
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
		<?= $this->pagination->create_links(); ?>
	</div>
</div>