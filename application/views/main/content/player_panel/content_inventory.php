<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $_SESSION['player_name'] ?></span> <?php echo $this->lang->line('STR_DARKBLOW_163') ?></span></h3>
		<div class="nk-gap-1"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-12 col-12">
				<table class="nk-table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
					<thead>
						<tr>
							<th width="5%"><?php echo $this->lang->line('STR_DARKBLOW_164') ?></th>
							<th><?php echo $this->lang->line('STR_DARKBLOW_66') ?></th>
							<th width="15%"><?php echo $this->lang->line('STR_DARKBLOW_72') ?></th>
							<th width="15%"><?php echo $this->lang->line('STR_DARKBLOW_69') ?></th>
							<th width="25%">Menu<?php echo $this->lang->line('STR_DARKBLOW_73') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($inventory != null)
						{
							$num = 1;
							foreach ($inventory as $row ) :
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
										switch ($row['category']) 
										{
											case '1':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Main</button>';
													break;
												}
											case '2':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">Character</button>';
													break;
												}
											case '3':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3">Item</button>';
													break;
												}
											
											default:
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger">INVALID</button>';
													break;
												}
										}
										?>
									</td>
									<td>
										<?php
										switch ($row['equip']) 
										{
											case '1':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">NOT USE</button>';
													break;
												}
											case '2':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5">USED</button>';
													break;
												}
											case '3':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success">Permanent</button>';
													break;
												}
											
											default:
											{
												echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-6">INVALID</button>';
											}
										}
										?>
									</td>
									<td>
										<a href="<?php echo base_url('player_panel/inventory/detail?idx='. $row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" title="Click Here To Get Details Item!"><span class="fa fa-info-circle mr-2"></span>View</a>
										<?php
										if ($row['equip'] == 3) 
										{
										?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'error', 'Cannot Delete Permanent Item.');"></span>DELETE</button>
										<?php
										}
										if ($row['equip'] >= 1 && $row['equip'] < 3) 
										{
										?>
											<input type="button" id="DeleteButton_<?php echo $num ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="DeleteItem('data_<?php echo $num ?>', 'DeleteButton_<?php echo $num ?>','<?php echo $_SESSION['uid'] ?>', '<?php echo $row['item_id'] ?>')" value="DELETE">
										<?php
										}
										?>
									</td>
								</tr>
								<?php
								$num++;
							endforeach;
						}
						else
						{
							?>
							<tr>
								<td colspan="5" class="text-center"><?php echo $this->lang->line('STR_INFO_4') ?></td>
							</tr>
							<?php
						}
						?>
						<?php if ($inventory != null) : ?>
							<script>
								CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
								function DeleteItem(data_id, button_id, player_id, item_id){
									SetAttribute(button_id, 'button', 'Processing...');
									$.ajax({
										url: '<?php echo base_url('player_panel/inventory/do_delete') ?>',
										type: 'POST',
										dataType: 'JSON',
										data: {
											'<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
											'player_id' : player_id,
											'item_id' : item_id
										},
										success: function(data){
											var GetString = JSON.stringify(data);
											var Result = JSON.parse(GetString);

											if (Result.response == 'true'){
												document.getElementById(data_id).remove();
												ShowToast(2000, 'success', Result.message);
												CSRF_TOKEN = Result.token;
												return;
											}
											else if (Result.response == 'false'){
												SetAttribute(button_id, 'button', 'DELETE');
												ShowToast(2000, 'error', Result.message);
												CSRF_TOKEN = Result.token;
												return;
											}
											else{
												SetAttribute(button_id, 'button', 'DELETE');
												ShowToast(2000, 'error', Result.message);
												CSRF_TOKEN = Result.token;
												return;
											}
										},
										error: function(){
											ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_15') ?>');
											setTimeout(() => {
												window.location.reload();
											}, 2000);
										}
									});
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