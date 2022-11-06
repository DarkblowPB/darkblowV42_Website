<div class="container">
	<div class="nk-gap-2"></div>
	<h3 class="nk-decorated-h-2"><span><span class="text-main-1">
				<?= $this->lang->line('STR_DARKBLOW_84') ?>
			</span>
			<?= $this->lang->line('STR_DARKBLOW_3') ?>
		</span></h3>
	<div class="col-lg-12 col-12">
		<table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
			<thead>
				<th width="5%"><?= $this->lang->line('STR_DARKBLOW_3') ?></th>
				<th width="5%"><?= $this->lang->line('STR_DARKBLOW_31') ?></th>
				<th><?= $this->lang->line('STR_DARKBLOW_32') ?></th>
				<th width="20%"><?= $this->lang->line('STR_DARKBLOW_90') ?></th>
				<th width="15%"><?= $this->lang->line('STR_DARKBLOW_33') ?></th>
				<th width="15%"><?= $this->lang->line('STR_DARKBLOW_126') ?></th>
			</thead>
			<tbody>
				<?php if ($account != null) : ?>
					<?php foreach ($account as $key => $value) : ?>
						<tr>
							<td><?= ++$start ?></td>
							<td><img src="<?= base_url('assets/goodgames/assets/images/img_rank/' . $value['rank'] . '.gif') ?>" alt="<?= $value['rank'] ?>"></td>
							<td><?= $value['player_name'] == '' ? '<span style="font-style: italic;" class="text-muted">Empty Nickname</span>' : $value['player_name'] ?></td>
							<td>
								<?php if ($value['pc_cafe'] == 1) : ?>
									<button type="button" class="nk-btn nk-btn-outline nk-btn-color-main-1" title="<?= $this->lang->line('STR_DARKBLOW_92') ?>"><?= $this->lang->line('STR_DARKBLOW_92') ?></button>
								<?php endif ?>
								<?php if ($value['pc_cafe'] == 2) : ?>
									<button type="button" class="nk-btn nk-btn-outline nk-btn-color-main-2" title="<?= $this->lang->line('STR_DARKBLOW_93') ?>"><?= $this->lang->line('STR_DARKBLOW_93') ?></button>
								<?php endif ?>
								<?php if ($value['pc_cafe'] == 5) : ?>
									<button type="button" class="nk-btn nk-btn-outline nk-btn-color-main-3" title="<?= $this->lang->line('STR_DARKBLOW_129') ?>"><?= $this->lang->line('STR_DARKBLOW_129') ?></button>
								<?php endif ?>
							</td>
							<td><strong><?= number_format($value['exp'], 0, ',', '.') ?></strong></td>
							<td>
								<?php if ($value['access_level'] == -1) : ?>
									<p class="text-main-1" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_192') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 0) : ?>
									<p class="text-main-2" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_193') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 1) : ?>
									<p class="text-main-3" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_193') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 2) : ?>
									<p class="text-main-4" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_194') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 3) : ?>
									<p class="text-main-4" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_195') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 4) : ?>
									<p class="text-main-5" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_196') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 5) : ?>
									<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_197') ?></p>
								<?php endif ?>
								<?php if ($value['access_level'] == 6) : ?>
									<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;"><?= $this->lang->line('STR_DARKBLOW_198') ?></p>
								<?php endif ?>
							</td>
						</tr>
					<?php endforeach ?>
				<?php endif ?>
				<?php if ($account == null) : ?>
					<tr>
						<td colspan="6"><?= $this->lang->line('STR_INFO_4') ?></td>
					</tr>
				<?php endif ?>
			</tbody>
		</table>
	</div>
	<div class="nk-gap-2"></div>
	<?= $this->pagination->create_links(); ?>
</div>