<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Details</span> Item : <?php echo $details->object_id ?></span></h3>
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
                        <table class="table table-borderless table-hover" align="center">
							<tbody>
								<tr>
									<td>Unique ID</td>
									<td><?php echo $details->object_id ?></td>
								</tr>
								<tr>
									<td>Item Name</td>
									<td>
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
                        			</td>
                        		</tr>
                        		<tr>
                        			<td>Duration</td>
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
                        			<td>Category</td>
                        			<td>
                        				<?php
                        				if ($details->category == "1") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Main</button>';
                        				}
                        				else if ($details->category == "2") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Character / Headgear</button>';
                        				}
                        				else if ($details->category == "3")
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Items</button>';
                        				}
                        				?>
                        			</td>
                        		</tr>
                        		<tr>
                        			<td>Item Status</td>
                        			<td>
                        				<?php
                        				if ($details->equip == "1") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">NOT USE</button>';
                        				}
                        				else if ($details->equip == "2") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3">USED</button>';
                        				}
                        				else
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-4">Permanent</button>';
                        				}
                        				?>
                        			</td>
                        		</tr>
                        		<tr>
                        			<td colspan="2" align="center">
                        				<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" onclick="self.history.back();"><span class="fa fa-arrow-circle-left"></span> &nbsp;Go Back</button>
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