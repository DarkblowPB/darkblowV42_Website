<div class="nk-main">
	<div class="nk-gap-1"></div>
	<div class="container">
		<?php
        if ($this->session->flashdata('success'))
        {
			echo '<div class="nk-gap-1"></div>';
            echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
            echo $this->session->flashdata('success');
            echo "</em></div>";
            echo "<div class='nk-gap-2'></div>";
        }
        else if ($this->session->flashdata('error'))
        {
			echo '<div class="nk-gap-1"></div>';
            echo "<div class='nk-info-box text-danger'><div class='nk-info-box-icon'><i class='ion-close-round'></i></div><h3>Error!</h3><em>";
            echo $this->session->flashdata('error');
            echo "</em></div>";
            echo "<div class='nk-gap-2'></div>";
        }
        ?>
		<?php foreach ($detail as $row) : ?>
		<ul class="nk-breadcrumbs">
			<li><a href="<?php echo base_url('home') ?>">Home</a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><a href="<?php echo base_url('webshop') ?>">Webshop</a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><span><?php echo $row['webshop_itemname'] ?></span></li>
		</ul>
		<div class="container">
			<div class="nk-gap-2"></div>
			<div class="row vertical-gap">
				<div class="col-lg-12">
					<div class="nk-store-product">
						<div class="row vertical-gap">
							<div class="col-md-6">
								<!-- START: Product Photos -->
								<div class="nk-gallery">
									<div class="nk-gallery-item-box">
										<img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" alt="">
									</div>
									<div class="nk-gap-1"></div>
								</div>
								<!-- END: Product Photos -->
							</div>
							<div class="col-md-6">
								<h2 class="nk-product-title h3"><?php echo $row['webshop_itemname'] ?> </h2>
								<div class="nk-product-description">
									<p><?php echo $row['webshop_itemdescription'] ?></p>
								</div>
								<!-- START: Add to Cart -->
								<div class="nk-gap-2"></div>
								<?php echo form_open(base_url('webshop/details/'.$row['id']), 'class="nk-product-addtocart text-white"') ?>
									<h3>&#8373;
										<div class="nk-product-price" id="price" style="float: left;"><?php echo $row['webshop_itemprice_30days'] ?></div>
									</h3>
									<div class="nk-gap-1"></div>
									<div class="input-group" style="width: 300px;">
										<select class="form-control" id="price_option" name="price" required>
											<option value="" disabled>Select Duration</option>
											<option value="<?php echo $row['webshop_itemprice_3days'] ?>">3 Days</option>
											<option value="<?php echo $row['webshop_itemprice_7days'] ?>">7 Days</option>
											<option value="<?php echo $row['webshop_itemprice_30days'] ?>" selected>30 Days</option>
											<option value="<?php echo $row['webshop_itemprice_permanent'] ?>">Permanent</option>
										</select>&nbsp;
										<input type="hidden" name="item_id" value="<?php echo $row['webshop_itemid'] ?>">
										<button type="submit" name="submit_buyitem" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5">Purchase</button>
									</div>
									<script>
										$(function()
										{
											$('#price_option').on('change', function()
											{
												var harga = $(this).val();
												$('#price').html(harga);
												return false;
											});
										});
									</script>
									<div class="form-group">
										
									</div>
									
								<?php echo form_close() ?>
								<div class="nk-gap-3"></div>
								<!-- END: Add to Cart -->
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<!-- START: Related Products -->
					<div class="nk-gap-3"></div>
					<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Related</span> Products</span></h3>
					<div class="nk-gap"></div>
					<div class="row vertical-gap">
						<?php foreach ($related as $row) : ?>
							<div class="col-md-6">
								<div class="nk-product-cat">
									<a class="nk-product-image" href="<?php echo base_url('webshop/details/'.$row['id']) ?>">
										<img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" alt="<?php echo $row['webshop_itemname'] ?>">
									</a>
									<div class="nk-product-cont">
										<h3 class="nk-product-title h5"><a href="<?php echo base_url('webshop/details/'.$row['id']) ?>"><?php echo $row['webshop_itemname'] ?></a></h3>
										<div class="nk-gap-1"></div>
										<div class="nk-product-rating" data-rating="<?php echo $row['webshop_itemrating'] ?>">
											<?php if ($row['webshop_itemrating'] == "0.5") 
											{
												echo '<i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
											}
											else if ($row['webshop_itemrating'] == "1") 
											{
												echo '<i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
											}
											else if ($row['webshop_itemrating'] == "1.5") 
											{
												echo '<i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "2") 
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "2.5") 
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "3")
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "3.5") 
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "4") 
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "4.5") 
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i>';
					                    	}
					                    	else if ($row['webshop_itemrating'] == "5") 
					                    	{
					                    		echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
					                    	}
					                    	?>
										</div>
										<div class="nk-gap-1"></div>
										<div class="nk-product-price"><?php echo $row['webshop_itemprice_30days'] ?>&#8373; </div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<!-- END: Related Products -->
				</div>
			</div>
		</div>
		
	</div>
	<div class="nk-gap-1"></div>
</div>