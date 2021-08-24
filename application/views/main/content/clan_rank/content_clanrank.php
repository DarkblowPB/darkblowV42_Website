<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Clan</span> Rank</span></h3>
	<div class="col-lg-12">
		<table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
			<thead>
				<th width="5%">Rank</th>
				<th width="15%">Clan Patent</th>
				<th>Clan Name</th>
				<th width="20%">Members Count</th>
				<th width="20%">Total Clan Exp</th>
			</thead>
			<tbody>
				<?php
				if ($clan != null)
				{
					foreach ($clan as $row) :
						?>
						<tr>
							<td><?php echo ++$start; ?></td>
							<td>
								<img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_clan/<?php echo $row['clan_rank'] ?>.jpg" alt="Clan Rank">
							</td>
							<td><?php echo $row['clan_name'] ?></td>
							<td>
								<?php
								$totalMember = $this->clanrank->GetTotalMemberEachClan($row['clan_id']);
								$totalCapacity = $this->clanrank->GetTotalClanMemberCapacity($row['clan_id']);
								echo $totalMember.' / '.$totalCapacity;
								?>
							</td>
							<td><?php echo $row['clan_exp'] ?></td>
						</tr>
						<?php
					endforeach;
				}
				else
				{
					?>
					<tr>
						<td colspan="5">No Data Found</td>
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