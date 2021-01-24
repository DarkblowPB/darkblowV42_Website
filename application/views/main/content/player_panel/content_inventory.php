<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $_SESSION['playername'] ?></span> Inventory's</span></h3>
		
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-6">
				<?php
				if ($this->session->flashdata('success'))
                {
                    echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
                    echo $this->session->flashdata('success');
                    echo "</em></div>";
                }
				?>
			</div>
			<div class="col-lg-4 offset-lg-8 mb-5">	
			<form action="" method="POST" class="form-horizontal">	
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search Item" required autocomplete="off" autofocus>
					<button class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" type="button" title="Coming Soon!">SUBMIT</button>
				</div>
			</form>
			<div class="nk-gap"></div>
			</div>
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
					<tr align="center">
						<td><?php echo ++$start; ?></td>
						<td><?php echo $row['item_name'] ?></td>
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
							<a href="<?php echo base_url('player_panel/inventory/detail/'. $row['object_id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" title="Click Here To Get Details Item!"><span class="fa fa-info-circle"></span> &nbsp;View</a>
							<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-6" title="Coming Soon!"><span class="fa fa-gift"></span> &nbsp;Gift</button>
							<?php
							if ($row['count'] == "2592000")
							{
								echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1 nk-btn-disabled"><span class="fa fa-trash"></span> &nbsp;Delete</button>';
							}
							else if ($row['count'] >= "2592000") 
							{
								echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1 nk-btn-disabled"><span class="fa fa-trash"></span> &nbsp;Delete</button>';
							}
							else if ($row['equip'] == "3") 
							{
								echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1 nk-btn-disabled"><span class="fa fa-trash"></span> &nbsp;Delete</button>';
							}
							else
							{
							?>
							<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1" title="Click Here To Delete Item" onclick="window.location.href='inventory/delete/<?php echo $row['object_id'] ?>'"><span class="fa fa-trash"></span> &nbsp;Delete</button>
							<?php
							}
							?>
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