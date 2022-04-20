<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2"><span><span class="text-main-1">
				<?= $this->lang->line('STR_DARKBLOW_158') ?>
			</span>
			<?= $this->lang->line('STR_DARKBLOW_3') ?>
		</span></h3>
	<div class="col-lg-12">
		<table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
			<thead>
				<th width="5%">
					<?= $this->lang->line('STR_DARKBLOW_3') ?>
				</th>
				<th width="15%">
					<?= $this->lang->line('STR_DARKBLOW_158') ?> <?= $this->lang->line('STR_DARKBLOW_31') ?>
				</th>
				<th>
					<?= $this->lang->line('STR_DARKBLOW_5') ?>
				</th>
				<th width="20%">
					<?= $this->lang->line('STR_DARKBLOW_6') ?>
				</th>
				<th width="20%">
					<?= $this->lang->line('STR_DARKBLOW_7') ?>
				</th>
			</thead>
			<tbody>
				<?php
				if ($clan != null) {
					foreach ($clan as $row) :
				?>
						<tr>
							<td>
								<?= ++$start; ?>
							</td>
							<td>
								<img src="<?= base_url() ?>/assets/goodgames/assets/images/img_clan/<?= $row['clan_rank'] ?>.jpg" alt="Clan Rank">
							</td>
							<td>
								<?= $row['clan_name'] ?>
							</td>
							<td>
								<?php
								$totalMember = $this->clanrank->GetTotalMemberEachClan($row['clan_id']);
								$totalCapacity = $this->clanrank->GetTotalClanMemberCapacity($row['clan_id']);
								echo $totalMember . ' / ' . $totalCapacity;
								?>
							</td>
							<td>
								<?= number_format($row['clan_exp'], 0, ',', '.') ?>
							</td>
						</tr>
					<?php
					endforeach;
				} else {
					?>
					<tr>
						<td colspan="5">
							<?= $this->lang->line('STR_INFO_4') ?>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="nk-gap-2"></div>
	<?= $this->pagination->create_links(); ?>
</div>