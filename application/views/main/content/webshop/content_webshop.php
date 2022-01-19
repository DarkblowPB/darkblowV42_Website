<div class="nk-main">
	<div class="container">
		<div class="nk-gap-2"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_146') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_147') ?></span></h3>
		<?php if ($popular != null) : ?>
			<div class="nk-carousel nk-carousel-x4" data-autoplay="3000" data-dots="false" data-cell-align="left" data-arrows="true">
				<div class="nk-carousel-inner">
					<?php foreach ($popular as $row) :?>
						<div>
							<div class="pl-5 pr-5">
								<div class="nk-product-cat-3">
									<a class="nk-product-image" href="<?php echo base_url('webshop/details/'.$row['id']) ?>">
										<img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" alt="<?php echo $row['webshop_itemname'] ?>">
									</a>
									<div class="nk-product-cont">
										<div class="nk-gap-1"></div>
										<h3 class="nk-product-title h5">
											<a href="<?php echo base_url('webshop/details/'.$row['id']) ?>"><?php echo $row['webshop_itemname'] ?></a>
										</h3>
										<div class="nk-gap-1"></div>
										<div class="nk-product-price">&#8373; <?php echo number_format($row['webshop_itemprice_30days'], 0, ',', '.') ?></div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($popular == null) : ?>
			<div clas="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center"><?php echo $this->lang->line('STR_INFO_4') ?></div>
			</div>
		<?php endif; ?>
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_148') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_149') ?></span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
		<?php if ($webshop != null) : ?>
			<?php foreach($webshop as $row) : ?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="nk-product-cat">
						<a class="nk-product-image" href="<?php echo base_url('webshop/details/'.$row['id']) ?>">
							<img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" alt="">
						</a>
						<div class="nk-product-cont">
							<h3 class="nk-product-title h5"><a href="<?php echo base_url('webshop/details/'.$row['id']) ?>"><?php echo $row['webshop_itemname'] ?></a></h3>
							<div class="nk-gap-1"></div>
							<div class="nk-product-rating" data-rating="<?php echo $row['webshop_itemrating'] ?>">
								<?php
									// Half Star
									// <i class="fas fa-star-half">

									// Empty Star
									// <i class="far fa-star"></i>
									
									// Default Star
									//<i class="fa fa-star"></i>
								?>
								<?php
								switch ($row['webshop_itemrating'])
								{
									case '0':
										{
											echo '<i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '0.5':
										{
											echo '<i class="fas fa-star-half">
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '1':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '1.5':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fas fa-star-half"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '2':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '2.5':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fas fa-star-half"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '3':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="far fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '3.5':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fas fa-star-half"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '4':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="far fa-star"></i>';
											break;
										}
									case '4.5':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fas fa-star-half"></i>';
											break;
										}
									case '5':
										{
											echo '<i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>
												  <i class="fa fa-star"></i>';
											break;
										}
									
									default:
										break;
								}
								?>
							</div>
							<div class="nk-gap-1"></div>
							<div class="nk-product-price">&#8373; <?php echo number_format($row['webshop_itemprice_30days'], 0, ',', '.') ?></div>
							<div class="nk-gap-1"></div>
							<a href="<?php echo base_url('webshop/details/'.$row['id']) ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1 btn-block"><i class="fa fa-shopping-cart mr-2"></i><?php echo $this->lang->line('STR_DARKBLOW_207') ?></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
		<?php if ($webshop == null) : ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card bg-dark-2">
					<div class="card-body text-center">
						<?php echo $this->lang->line('STR_DARKBLOW_208') ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
    <div class="nk-gap-2"></div>
    <?php echo $this->pagination->create_links(); ?>
	</div>
</div>