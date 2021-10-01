<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_64') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_65') ?> <?php echo $this->inventory->GetItemRealName($details->item_id); ?></span></h3>
		<div class="row vertical-gap">
			<div class="col-lg-6 offset-lg-3">
				<div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <span class="ion-information"></span>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title">
							<?php
							$get = $this->db->get_where('shop', array('item_id' => $details->item_id));
							$result = $get->row();
							if ($result)
							{
								echo $result->item_name;
							}
							else 
							{
								echo "Null";
							}
							?>
                        </h3>
                        <div class="nk-gap"></div>
                        <table class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
							<tbody>
								<tr>
									<td><?php echo $this->lang->line('STR_DARKBLOW_66') ?></td>
									<td><?php echo $this->inventory->GetItemRealName($details->item_id); ?></td>
								</tr>
								<tr>
									<td><?php echo $this->lang->line('STR_DARKBLOW_67') ?></td>
									<td>
										<?php
										$count = $details->count / 24 / 60 / 60;
										if ($details->count == 1) 
										{
											echo "".$details->count." Unit";	
										}
										else if ($details->count <= 86399) 
										{
											echo "".$details->count." Units";
										}
										else if ($details->count == 86400)
										{
											echo "".$count." Day";
										}
										else if ($details->count <= 999993600)
										{
											echo "".$count." Days";
										}
										else 
										{
											echo "NULL";
										}
										
										?>
									</td>
								</tr>
								<tr>
									<td><?php echo $this->lang->line('STR_DARKBLOW_68') ?></td>
									<td>
										<?php
										switch ($this->inventory->GetItemCategory($details->item_id)) 
										{
											case '1':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Main</button>';
													break;
												}
											case '2':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Character / Headgear</button>';
													break;
												}
											case '3':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Items</button>';
													break;
												}
											
											default:
												{
													echo "Invalid";
													break;
												}
										}
										?>
									</td>
								</tr>
								<tr>
									<td><?php echo $this->lang->line('STR_DARKBLOW_69') ?></td>
									<td>
										<?php
										switch ($details->equip) 
										{
											case '1':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">NOT USE</button>';
													break;
												}
											case '2':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3">USED</button>';
													break;
												}
											case '3':
												{
													echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">Permanent</button>';
													break;
												}
											
											default:
												{
													echo "Invalid";
													break;
												}
										}
										?>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" onclick="self.history.back()"><span class="fa fa-arrow-circle-left mr-2"></span><?php echo $this->lang->line('STR_DARKBLOW_70') ?></button>
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