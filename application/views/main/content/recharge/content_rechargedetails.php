<div class="nk-main">
	<div class="container">
		<div class="nk-gap-1"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Details</span> Recharge</span></h3>
		<div class="nk-gap-3"></div>
		<div class="row vertical-gap justify-content-center">
			<?php
			foreach ($details as $row)
			{
			?>
				<div class="col-lg-4">
					<div class="nk-feature-2">
	                    <div class="nk-feature-icon">
	                        <span class="fa fa-money"></span>
	                    </div>
	                    <div class="nk-feature-cont text-center">
	                        <h3 class="nk-feature-title"><span class="text-main-1">Basic</span> Prize</h3>
	                        <table class="table table-borderless table-hover text-white">
	                        	<tbody>
	                        		<tr>
	                        			<td>D-Cash</td>
	                        			<td><?php echo $row['recharge_amount'] ?></td>
	                        		</tr>
	                        		<tr>
	                        			<td>Points</td>
	                        			<td><?php echo $row['recharge_prize_1'] ?></td>
	                        		</tr>
	                        		<tr>
	                        			<td>Exp</td>
	                        			<td><?php echo $row['recharge_prize_2'] ?></td>
	                        		</tr>
	                        		<tr>
	                        			<td>Webcoin</td>
	                        			<td>&#8373; <?php echo $row['recharge_prize_3'] ?></td>
	                        		</tr>
	                        	</tbody>
	                        </table>
	                    </div>
	                </div>
				</div>
				<div class="col-lg-4">
					<div class="nk-feature-2">
	                    <div class="nk-feature-icon">
	                        <span class="fa fa-trophy"></span>
	                    </div>
	                    <div class="nk-feature-cont text-center">
	                        <h3 class="nk-feature-title"><span class="text-main-1">Weapon</span> Prize</h3>
	                        <table class="table table-borderless table-hover text-white" align="center" style="width: 100%;">
	                        	<thead>
	                        		<th>Weapon</th>
	                        		<th>Duration</th>
	                        	</thead>
	                        	<tbody>
	                        		<?php
	                        		if ($row['recharge_prize_4'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_4'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        		<?php
	                        		if ($row['recharge_prize_5'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_5'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        		<?php
	                        		if ($row['recharge_prize_6'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_6'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        		<?php
	                        		if ($row['recharge_prize_7'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_7'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        	</tbody>
	                        </table>
	                    </div>
	                </div>
				</div>
				<div class="col-lg-4">
					<div class="nk-feature-2">
	                    <div class="nk-feature-icon">
	                        <span class="fa fa-list-alt"></span>
	                    </div>
	                    <div class="nk-feature-cont text-center">
	                        <h3 class="nk-feature-title"><span class="text-main-1">Item</span> Prize</h3>
	                        <table class="table table-borderless table-hover text-white" align="center" style="width: 100%;">
	                        	<thead>
	                        		<th>Item</th>
	                        		<th>Counts</th>
	                        	</thead>
	                        	<tbody>
	                        		<?php
	                        		if ($row['recharge_prize_8'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_8'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        		<?php
	                        		if ($row['recharge_prize_9'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_9'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        		<?php
	                        		if ($row['recharge_prize_10'] == "")
                        			{}
	                        		else
	                        		{
	                        		?>
	                        		<tr>
	                        			<td><?php echo $row['recharge_prize_10'] ?></td>
	                        			<td>15 Days</td>
	                        		</tr>
	                        		<?php
	                        		}
	                        		?>
	                        	</tbody>
	                        </table>
	                    </div>
	                </div>
				</div>
			<?php
			}
			?>
		</div>
		<div class="nk-gap-2"></div>
		<div class="row vertical-gap justify-content-center">
			<div class="col-lg-12">
				<div class="nk-feature-2">
					<div class="nk-gap-1"></div>
					<div class="form-group">	
						<button type="button" onclick="self.history.back();" class="nk-btn nk-btn-x2 nk-btn-rounded nk-btn-outline nk-btn-color-main-1"><span class="fa fa-arrow-left"></span> Back To Recharge</button>
						<a href="#" target="_blank" class="nk-btn nk-btn-x2 nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-phone"></span> Contact DEV & GM</a>
					</div>
					<div class="nk-gap"></div>
				</div>
			</div>
		</div>
	</div>
</div>