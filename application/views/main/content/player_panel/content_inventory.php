<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $_SESSION['playername'] ?></span> Inventory's</span></h3>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-4 offset-lg-8 mb-5">	
				<form action="" method="POST" class="form-horizontal">	
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search Item" required autocomplete="off" autofocus>
						<button class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" type="button" title="Coming Soon!">SUBMIT</button>
					</div>
				</form>
				<div class="nk-gap"></div>
			</div>
			<?php
			if ($this->session->flashdata('success'))
			{
				echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
				echo $this->session->flashdata('success');
				echo "</em></div>";
				echo '<div class="nk-gap-2"></div>';
			}
			else if ($this->session->flashdata('error')) 
			{
				echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
				echo $this->session->flashdata('error');
				echo "</em></div>";
				echo '<div class="nk-gap-2"></div>';
			}
			?>
			<table class="nk-table table-borderless">
				<thead>
					<tr align="center">
						<th width="5%">No.</th>
						<th>Item Name</th>
						<th width="15%">Item Type</th>
						<th width="15%">Item Status</th>
						<th width="30%">Action Menu</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($inventory as $row ) :?>
						<?php
						include 'assets/include.php';
						if (isset($_POST['submit_delete'])) 
						{
							$obj_id = $_POST['object_id'];

							$query_delete = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND object_id = '".$obj_id."'");
							$query_delete->execute();
							$result_query = $query_delete->fetch(PDO::FETCH_ASSOC);
							if ($result_query) 
							{
								if ($result_query['equip'] == 3) 
								{
									$this->session->set_flashdata('error', 'Permanent Item Cannot Be Deleted');
									redirect(base_url('player_panel/inventory/index'), 'refresh');
								}
								if ($result_query['equip'] != 3) 
								{
									$query_item = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND object_id = '".$obj_id."'");
									$query_item->execute();
									$result_item = $query_item->fetch(PDO::FETCH_ASSOC);
									if ($result_item) 
									{
										$this->inventory->deleteItemInventory($result_item['object_id']);
										$this->session->set_flashdata('success', 'Item Successfully Deleted');
										redirect(base_url('player_panel/inventory/index'), 'refresh');
									}
									else 
									{
										$this->session->set_flashdata('error', 'Failed Deleting Item');
										redirect(base_url('player_panel/inventory/index'), 'refresh');
									}
								}
							}
						}
						?>
					<tr align="center">
						<td><?php echo ++$start; ?></td>
						<td>
							<?php
							include 'assets/include.php';
							$sql = $connec->prepare("SELECT item_name FROM shop WHERE item_id = '".$row['item_id']."'");
							$sql->execute();
							$result = $sql->fetch(PDO::FETCH_ASSOC);
							if ($result) 
							{
								echo $result['item_name'];
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
							<form action="" method="POST" class="form-horizontal">
								<a href="<?php echo base_url('player_panel/inventory/detail/'. $row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" title="Click Here To Get Details Item!"><span class="fa fa-info-circle"></span> &nbsp;View</a>
								<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-6" title="Coming Soon!"><span class="fa fa-gift"></span> &nbsp;Gift</button>
								<?php
								if ($row['equip'] == 3) 
								{
								?>
									<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-trash"></span> &nbsp; Delete</button>
								<?php
								}
								if ($row['equip'] >= 1 && $row['equip'] < 3) 
								{
								?>
									<input type="hidden" name="object_id" value="<?php echo $row['object_id'] ?>">
									<button type="submit" name="submit_delete" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" title="Click Here To Delete Item"><span class="fa fa-trash"></span> &nbsp;Delete</button>
								<?php
								}
								?>
							</form>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
			<div class="nk-gap-2"></div>
			<?php echo $this->pagination->create_links(); ?>
	</div>
</div>