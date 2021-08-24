<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Player</span> Rank</span></h3>
	<div class="col-lg-12 col-12">
		<table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
			<thead>
				<th width="5%">Rank</th>
				<th width="5%">Patent</th>
				<th>Player Name</th>
				<th width="20%">Badges</th>
				<th width="15%">Total Exp</th>
				<th width="15%">Status</th>
			</thead>
			<tbody>
				<?php
				if ($account != null){
					foreach ($account as $row) :
						?>
						<tr>
							<td><?php echo ++$start; ?></td>
							<td><img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_rank/<?php echo $row['rank'] ?>.gif" alt="Rank Player"></td>
							<td>
								<?php
								if ($row['player_name'] == null) 
								{
									echo 'New Player';
								}
								if ($row['player_name'] != null) 
								{
									echo $row['player_name'];
								}
								?>
							</td>
							<td>
								<?php
								if ($row['pc_cafe'] == "1") 
								{
									echo '<button type="button" title="Default Badges For Player" class="nk-btn nk-btn-outline nk-btn-color-success">Member</button>';
								}
								else if ($row['pc_cafe'] == "2") 
								{
									echo '<button type="button" title="Badges For Donator Player" class="nk-btn nk-btn-outline nk-btn-color-warning">Special Member</button>';
								}
								else if ($row['pc_cafe'] == "5")
								{
									echo '<button type="button" title="Developer & Game Master Badges" class="nk-btn nk-btn-outline nk-btn-color-danger">DEV & GM</button>';
								}
								?>
							</td>
							<td><strong><?php echo number_format($row['exp'], '0',',','.') ?></strong></td>
							<td>
								<?php
								if ($row['access_level'] == "-1") 
								{
									echo '<span class="text-main-1">BANNED</span>';
								}
								else if ($row['access_level'] == "0") 
								{
									echo '<span class="text-main-3" style="font-weight: bold;">ACTIVE</span>';
								}
								else if ($row['access_level'] == "4")
								{
									echo '<span class="text-secondary" style="font-weight: bold;">UNKNOWN</span>';
								}
								else if ($row['access_level'] == "5")
								{
									echo '<span class="text-secondary" style="font-weight: bold;">UNKNOWN</span>';
								}
								else if ($row['access_level'] == "6")
								{
									echo '<span class="text-secondary" style="font-weight: bold;">UNKNOWN</span>';
								}
								?>
							</td>
						</tr>
						<?php
					endforeach;
				}
				else
				{
					?>
					<tr>
						<td colspan="6">No Data Found</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="nk-gap-2"></div>
	<?php echo $this->pagination->create_links(); ?>
</div>