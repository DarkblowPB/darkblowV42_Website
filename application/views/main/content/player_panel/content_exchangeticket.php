<div class="nk-main">
    <div class="container">
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Exchange</span> Ticket</span></h3>
        <div class="row vertical-gap">
			<div class="col-lg-12 col-12">
				<?php
				if ($this->session->flashdata('true'))
				{
					echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
					echo $this->session->flashdata('true');
					echo "</em></div>";
					echo '<div class="nk-gap-1"></div>';
				}
				else if ($this->session->flashdata('false')) 
				{
					echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
					echo $this->session->flashdata('false');
					echo "</em></div>";
					echo '<div class="nk-gap-1"></div>';
				}
				?>
			</div>
		</div>
        <div class="row vertical-gap justify-content-center">
            <div class="col-lg-3 col-12">
                <div class="nk-feature-2">
                    <div class="nk-feature-cont text-center text-white">
                        <h3 class="nk-feature-title">Information</h3>
                        <p class="font-weight-bold mb-0">Your Ticket: <?php echo $ticket ?> <span class="fa fa-ticket ml-5"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap justify-content-center">
            <?php foreach ($item_list as $row) : ?>
                <div class="col-lg-4 text-white">
                    <div class="nk-feature-2">
                        <div class="nk-feature-icon">
                            <img src="" style="max-width: 100px;" alt="">
                        </div>
                        <div class="nk-feature-cont text-center">
                            <h3 class="nk-feature-title"><?php echo $row['item_name'] ?></h3>
                            <p>Price: <?php echo $row['item_price'] ?> Tickets</p>
                            <p style="margin-top: -20px">Duration: <?php if ($row['item_count'] >= 86400){echo ($row['item_count'] / 24 / 60 / 60)." Days";}else {echo "Permanent";} ?></p>
                            <p style="margin-top: -20px">Stock: <?php if ($row['stock'] > 0){echo $row['stock']." Qty";}else{echo "Out Of Stock";} ?></p>
                            <p style="margin-top: -20px;">Status: <span style="<?php if ($this->exchangeticket->check_item_status($row['item_id']) == "Not Own"){echo "color:red;";}else{echo "color: green;";}?>"><?php echo $this->exchangeticket->check_item_status($row['item_id']) ?></span></p>
                            <a href="<?php if ($row['stock'] > 0){echo base_url('player_panel/exchange_ticket/exchange_item?item_id='.$row['item_id']);}else{echo "javascript:void(0)";}?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" <?php if ($row['stock'] < 1){?> onclick="return alert('Out Of Stock')" <?php }?>><span class="fa fa-exchange mr-5"></span>Exchange</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>