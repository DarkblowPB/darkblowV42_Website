<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Clan</span> Rankings</span></h3>
	<div class="col-lg-12">
		<table class="nk-table table-responsive-sm">
			<thead>
				<th width="1%" class="text-center">Rank</th>
				<th width="14%" class="text-center">Clan Patent</th>
				<th class="text-center">Clan Name</th>
				<th width="20%" class="text-center">Members Count</th>
				<th width="16%" class="text-center">Total Clan Exp</th>
			</thead>
			<tbody>
				<?php
				foreach ($clan as $row) 
				{
					include 'assets/include.php';
				?>
				<tr align="center">
					<td><?php echo ++$start; ?></td>
					<td>
						<img src="<?php echo base_url() ?>/assets/goodgames/assets/images/img_clan/<?php echo $row['clan_rank'] ?>.jpg" alt="Rank Clan">
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
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="nk-gap-2"></div>
	<?php echo $this->pagination->create_links(); ?>
</div>