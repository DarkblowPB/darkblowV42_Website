<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2">
			<span>
				<span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_64') ?></span>
				<?= $this->lang->line('STR_DARKBLOW_65') ?> <?= $this->darkblowlib->GetItemName($details['item_id']); ?>
			</span>
		</h3>
		<div class="row vertical-gap">
			<div class="col-lg-6 offset-lg-3">
				<div class="nk-feature-2">
					<div class="nk-feature-icon">
						<span class="ion-information"></span>
					</div>
					<div class="nk-feature-cont text-center">
						<h3 class="nk-feature-title"><?= $this->darkblowlib->GetItemName($details['item_id']) ?></h3>
						<div class="nk-gap"></div>
						<table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
							<tbody>
								<tr>
									<td><?= $this->lang->line('STR_DARKBLOW_66') ?></td>
									<td><?= $this->darkblowlib->GetItemName($details['item_id']) ?></td>
								</tr>
								<tr>
									<td><?= $this->lang->line('STR_DARKBLOW_67') ?></td>
									<td><?= $this->darkblowlib->GetItemDuration($this->darkblowlib->GetBuyType($details['item_id']), $details['count'], $details['equip']) ?></td>
								</tr>
								<tr>
									<td><?= $this->lang->line('STR_DARKBLOW_68') ?></td>
									<td>
										<?php if ($this->darkblowlib->GetItemCategory($details['item_id']) == 1) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><?= $this->lang->line('STR_DARKBLOW_74') ?></button>
										<?php endif ?>
										<?php if ($this->darkblowlib->GetItemCategory($details['item_id']) == 2) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><?= $this->lang->line('STR_DARKBLOW_186') ?></button>
										<?php endif ?>
										<?php if ($this->darkblowlib->GetItemCategory($details['item_id']) == 3) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><?= $this->lang->line('STR_DARKBLOW_136') ?></button>
										<?php endif ?>
									</td>
								</tr>
								<tr>
									<td><?= $this->lang->line('STR_DARKBLOW_69') ?></td>
									<td>
										<?php if ($details['equip'] == 1) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2"><?= $this->lang->line('STR_DARKBLOW_187') ?></button>
										<?php endif ?>
										<?php if ($details['equip'] == 2) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3"><?= $this->lang->line('STR_DARKBLOW_188') ?></button>
										<?php endif ?>
										<?php if ($details['equip'] == 3) : ?>
											<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4"><?= $this->lang->line('STR_DARKBLOW_189') ?></button>
										<?php endif ?>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" onclick="self.history.back()"><span class="fa fa-arrow-circle-left mr-2"></span>
											<?= $this->lang->line('STR_DARKBLOW_70') ?>
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>