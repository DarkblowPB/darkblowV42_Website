<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_158') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_3') ?></span></h3>
	<div class="col-lg-12">
		<table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
			<thead>
				<th width="5%"><?php echo $this->lang->line('STR_DARKBLOW_3') ?></th>
				<th width="15%"><?php echo $this->lang->line('STR_DARKBLOW_158') ?> <?php echo $this->lang->line('STR_DARKBLOW_31') ?></th>
				<th><?php echo $this->lang->line('STR_DARKBLOW_5') ?></th>
				<th width="20%"><?php echo $this->lang->line('STR_DARKBLOW_6') ?></th>
				<th width="20%"><?php echo $this->lang->line('STR_DARKBLOW_7') ?></th>
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
							<td><?php echo number_format($row['clan_exp'], 0, ',', '.') ?></td>
						</tr>
						<?php
					endforeach;
				}
				else
				{
					?>
					<tr>
						<td colspan="5"><?php echo $this->lang->line('STR_INFO_4') ?></td>
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