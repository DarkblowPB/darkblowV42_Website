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
				<th width="5%">
					<?= $this->lang->line('STR_DARKBLOW_3') ?>
				</th>
				<th width="5%">
					<?= $this->lang->line('STR_DARKBLOW_31') ?>
				</th>
				<th>
					<?= $this->lang->line('STR_DARKBLOW_32') ?>
				</th>
				<th width="20%">
					<?= $this->lang->line('STR_DARKBLOW_90') ?>
				</th>
				<th width="15%">
					<?= $this->lang->line('STR_DARKBLOW_33') ?>
				</th>
				<th width="15%">
					<?= $this->lang->line('STR_DARKBLOW_126') ?>
				</th>
			</thead>
			<tbody>
				<?php
				if ($account != null) {
					foreach ($account as $row) :
				?>
						<tr>
							<td>
								<?= ++$start; ?>
							</td>
							<td><img src="<?= base_url() ?>/assets/goodgames/assets/images/img_rank/<?= $row['rank'] ?>.gif" alt="<?= $row['rank'] ?>"></td>
							<td>
								<?php
								if ($row['player_name'] == null) echo 'New Player';
								else echo $row['player_name'];
								?>
							</td>
							<td>
								<?php
								if ($row['pc_cafe'] == "1") echo '<button type="button" title="' . $this->lang->line('STR_DARKBLOW_91') . '" class="nk-btn nk-btn-outline nk-btn-color-success">' . $this->lang->line('STR_DARKBLOW_92') . '</button>';
								else if ($row['pc_cafe'] == "2") echo '<button type="button" title="' . $this->lang->line('STR_DARKBLOW_91') . '" class="nk-btn nk-btn-outline nk-btn-color-warning">' . $this->lang->line('STR_DARKBLOW_93') . '</button>';
								else if ($row['pc_cafe'] == "5") echo '<button type="button" title="' . $this->lang->line('STR_DARKBLOW_94') . '" class="nk-btn nk-btn-outline nk-btn-color-danger">' . $this->lang->line('STR_DARKBLOW_129') . '</button>';
								else echo $this->lang->line('STR_DARKBLOW_191');
								?>
							</td>
							<td><strong>
									<?= number_format($row['exp'], '0', ',', '.') ?>
								</strong></td>
							<td>
								<?php
								if ($row['access_level'] == "-1") echo '<p class="text-main-1" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_192') . '</p>';
								else if ($row['access_level'] == "0") echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_193') . '</p>';
								else if ($row['access_level'] == "1") echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_193') . '</p>';
								else if ($row['access_level'] == "2") echo '<p class="text-success" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_194') . '</p>';
								else if ($row['access_level'] == "3") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_195') . '</p>';
								else if ($row['access_level'] == "4") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_196') . '</p>';
								else if ($row['access_level'] == "5") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_197') . '</p>';
								else if ($row['access_level'] == "6") echo '<p class="text-main-6" style="font-weight: bold; font-style: italic; margin-bottom: -10px;">' . $this->lang->line('STR_DARKBLOW_198') . '</p>';
								?>
							</td>
						</tr>
					<?php
					endforeach;
				} else {
					?>
					<tr>
						<td colspan="6">
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