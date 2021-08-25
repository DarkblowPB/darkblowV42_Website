<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $_SESSION['player_name'] ?></span> Inventory's</span></h3>
		<div class="row vertical-gap">
			<div class="col-lg-12 col-12">
				<?php
				if ($this->session->flashdata('success'))
				{
					echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
					echo $this->session->flashdata('success');
					echo "</em></div>";
					echo '<div class="nk-gap-1"></div>';
				}
				else if ($this->session->flashdata('error')) 
				{
					echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
					echo $this->session->flashdata('error');
					echo "</em></div>";
					echo '<div class="nk-gap-1"></div>';
				}
				?>
			</div>
		</div>
		<div class="nk-gap-1"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-12 col-12">
				<table class="nk-table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
					<thead>
						<tr>
							<th width="5%">No.</th>
							<th>Item Name</th>
							<th width="15%">Item Type</th>
							<th width="15%">Item Status</th>
							<th width="25%">Menu</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($inventory as $row ) : ?>
							<tr>
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
										<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="ShowToast(2000, 'error', 'Cannot Delete Permanent Item.');"><span class="fa fa-trash mr-2"></span>Delete</button>
									<?php
									}
									if ($row['equip'] >= 1 && $row['equip'] < 3) 
									{
									?>
										<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" onclick="DeleteItem('<?php echo $_SESSION['uid'] ?>', '<?php echo $row['item_id'] ?>')"><i class="fa fa-trash mr-2"></i>DELETE</button>
									<?php
									}
									?>
								</td>
							</tr>
						<?php endforeach; ?>
						<script>
							function DeleteItem(player_id, item_id){
								$.ajax({
									url: '<?php echo base_url('player_panel/inventory/do_delete') ?>',
									type: 'POST',
									data: {
										'<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
										'player_id' : player_id,
										'item_id' : item_id
									},
									success: function(data){
										if (data == "true"){
											ShowToast(2000, 'success', 'Successfully Delete This Item.');
											setTimeout(() => {
												window.location.reload();
											}, 2500);
										}
										else if (data == "false"){
											ShowToast(2000, 'error', 'Failed To Delete This Item.');
											setTimeout(() => {
												window.location.reload();
											}, 2500);
										}
										else{
											ShowToast(2000, 'error', data);
											setTimeout(() => {
												window.location.reload();
											}, 2500);
										}
									},
									error: function(data){
										ShowToast(2000, 'error', data.responseText);
										setTimeout(() => {
											window.location.reload();
										}, 2500);
									}
								});
							}
						</script>
					</tbody>
				</table>
			</div>
		</div>
		<div class="nk-gap-2"></div>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>