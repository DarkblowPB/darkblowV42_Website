<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2">
		<span>
			<span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_158') ?></span>
			<?= $this->lang->line('STR_DARKBLOW_3') ?>
		</span>
	</h3>
	<div class="col-12">
		<table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
			<thead>
				<th width="5%"><?= $this->lang->line('STR_DARKBLOW_3') ?></th>
				<th width="15%"><?= $this->lang->line('STR_DARKBLOW_158') ?> <?= $this->lang->line('STR_DARKBLOW_31') ?></th>
				<th><?= $this->lang->line('STR_DARKBLOW_5') ?></th>
				<th width="20%"><?= $this->lang->line('STR_DARKBLOW_6') ?></th>
				<th width="20%"><?= $this->lang->line('STR_DARKBLOW_7') ?></th>
			</thead>
			<tbody>
				<?php if ($clan != null) : ?>
					<?php foreach ($clan as $key => $value) : ?>
						<tr>
							<td><?= ++$start ?></td>
							<td><img src="<?= base_url('assets/goodgames/assets/images/img_clan/' . $value['clan_rank'] . '.jpg') ?>" alt="<?= $value['clan_rank'] ?>"></td>
							<td><?= $value['clan_name'] ?></td>
							<td><?= $this->clanrank->GetTotalMemberEachClan($value['clan_id']) . ' / ' . $this->clanrank->GetTOtalClanMemberCapacity($value['clan_id']) ?></td>
							<td><?= number_format($value['clan_exp'], 0, ',', '.') ?></td>
						</tr>
					<?php endforeach ?>
				<?php endif ?>
				<?php if ($clan == null) : ?>
					<tr>
						<td colspan="5"><?= $this->lang->line('STR_INFO_4') ?></td>
					</tr>
				<?php endif ?>
			</tbody>
		</table>
	</div>
	<div class="nk-gap-2"></div>
	<?= $this->pagination->create_links(); ?>
</div>