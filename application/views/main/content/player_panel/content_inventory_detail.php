<?php
include 'assets/include.php';
?>
<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<?php 
		foreach ($details as $row) :
			include 'assets/include.php';
			$query = $connec->prepare("SELECT * FROM player_items WHERE owner_id'".$_SESSION['uid']."' AND object_id='".$row['object_id']."'");
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
		?>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Details</span> Item : <?php echo $row['object_id'] ?></span></h3>
		<div class="row vertical-gap">
			<div class="col-lg-6 offset-lg-3">
				<div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <span class="ion-information"></span>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title">
							<?php
                        	if ($row['item_name'] == "Randombox") 
                        	{
                        		echo "Random Box Prize";
                        	}
                        	else
                        	{
                        		echo $row['item_name'];
							}
							?>
                        </h3>
                        <div class="nk-gap"></div>
                        <table class="table table-borderless table-hover" align="center">
                        	<tbody>
                        		<tr>
                        			<td>Unique ID</td>
                        			<td><?php echo $row['object_id'] ?></td>
                        		</tr>
                        		<tr>
                        			<td>Item Name</td>
                        			<td>
                        				<?php
			                        	if ($row['item_name'] == "Randombox") 
			                        	{
			                        		echo "Random Box Prize";
			                        	}
			                        	else
			                        	{
			                        		echo $row['item_name'];
			                        	}
			                        	?>
                        			</td>
                        		</tr>
                        		<tr>
                        			<td>Duration</td>
                        			<td>
                        				<?php
                        				$count = $row['count'] / 24 / 60 / 60;
                        				if ($row['count'] == 1) 
                        				{
                        					echo "".$row['count']." Unit";	
                        				}
				                    	else if ($row['count'] <= 86399) 
		                    			{
		                        			echo "".$row['count']." Units";
		                    			}
		                    			else if ($row['count'] == 86400)
		                    			{
		                    				echo "".$count." Day";
		                    			}
		                    			else if ($row['count'] <= 999993600)
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
                        				if ($row['category'] == "1") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Main</button>';
                        				}
                        				else if ($row['category'] == "2") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">Character / Headgear</button>';
                        				}
                        				else if ($row['category'] == "3")
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
                        				if ($row['equip'] == "1") 
                        				{
                        					echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">NOT USE</button>';
                        				}
                        				else if ($row['equip'] == "2") 
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
		<?php endforeach; ?>
	</div>
</div>