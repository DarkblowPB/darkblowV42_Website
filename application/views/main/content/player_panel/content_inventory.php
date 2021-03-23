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
				<table class="nk-table table-borderless">
					<thead>
						<tr align="center">
							<th width="5%">No.</th>
							<th>Item Name</th>
							<th width="15%">Item Type</th>
							<th width="15%">Item Status</th>
							<th width="25%">Action Menu</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($inventory as $row ) :?>
							<tr align="center">
								<td><?php echo ++$start; ?></td>
								<td>
									<?php
									$check = $this->db->get_where('shop', array('item_id' => $row['item_id']));
									$result = $check->row();
									if ($result) 
									{
										echo $result->item_name;
									}
									else 
									{
										echo "Null";
									}
									?>
								</td>
								<td>
									<?php
									if ($row['category'] == "1") 
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Main</button>';
									}
									else if ($row['category'] == "2") 
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">Character</button>';
									}
									else if ($row['category'] == "3") 
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3">Item</button>';
									}
									else
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger">INVALID</button>';
									}
									?>
								</td>
								<td>
									<?php
									if ($row['equip'] == "1") 
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">NOT USE</button>';
									}
									else if ($row['equip'] == "2") 
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5">USED</button>';
									}
									else if ($row['equip'] == "3") 
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success">Permanent</button>';
									}
									else
									{
										echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-6">INVALID</button>';
									}
									?>
								</td>
								<td>
									<a href="<?php echo base_url('player_panel/inventory/detail/'. $row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" title="Click Here To Get Details Item!"><span class="fa fa-info-circle mr-2"></span>View</a>
									<?php
									if ($row['equip'] == 3) 
									{
									?>
										<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-trash mr-2"></span>Delete</button>
									<?php
									}
									if ($row['equip'] >= 1 && $row['equip'] < 3) 
									{
									?>
										<a href="<?php echo base_url('player_panel/inventory/delete_item?idx='.$row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" title="Click Here To Delete Item"><span class="fa fa-trash mr-2"></span>Delete</a>
									<?php
									}
									?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="nk-gap-2"></div>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>