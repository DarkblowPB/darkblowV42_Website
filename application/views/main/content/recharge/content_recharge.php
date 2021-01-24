<div class="nk-main">
	<div class="container">
		<div class="row veritcal-gap">
            <div class="col-lg-12">
                <div class="nk-gap-1"></div>
                <h3 class="nk-decorated-h-2"><span>Recharge <span class="text-main-1">Donation</span></span></h3>
                <div class="nk-gap-3"></div>
                <div class="row vertical-gap justify-content-center">
                    <?php foreach ($recharge as $row ) : ?>
                    <div class="col-lg-4">
                        <div class="nk-feature-2">
                            <div class="nk-feature-icon" style="margin-bottom: -10px;">
                                <span class="ion-cash"></span>
                            </div>
                            <div class="nk-feature-cont text-center">
                                <h3 class="nk-feature-title"><span class="text-main-1">IDR</span> <?php echo $row['recharge_title'] ?></h3>
                                <div class="nk-gap-1"></div>
                                <a href="<?php echo base_url('recharge/details/'.$row['id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5"><span class="fa fa-info-circle"></span> Details</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
	</div>
</div>