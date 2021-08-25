<div class="nk-main">
	<div class="nk-gap-1"></div>
	<div class="container">
		<ul class="nk-breadcrumbs">
			<li><a href="<?php echo base_url('home') ?>">Home</a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><a href="<?php echo base_url('webshop') ?>">Webshop</a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><span><?php echo $detail->webshop_itemname ?></span></li>
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
										<img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $detail->webshop_itemimg ?>" alt="">
									</div>
									<div class="nk-gap-1"></div>
								</div>
								<!-- END: Product Photos -->
							</div>
							<div class="col-md-6">
								<h2 class="nk-product-title h3"><?php echo $detail->webshop_itemname ?> </h2>
								<div class="nk-product-description">
									<p><?php echo $detail->webshop_itemdescription ?></p>
								</div>
								<div class="nk-gap-2"></div>
								<?php echo form_open('', 'id= "buy_form" class="nk-product-addtocart text-white"') ?>
									<div class="form-group">
										<div class="nk-product-price" id="price">&#8373; <?php echo $detail->webshop_itemprice_30days ?></div>
									</div>
									<div class="nk-gap-1"></div>
									<div class="form-group row">
										<select id="price_option" class="form-control ml-15 col-6">
											<option value="" disabled>Select Duration</option>
											<option value="<?php echo $detail->webshop_itemprice_3days ?>">3 Days</option>
											<option value="<?php echo $detail->webshop_itemprice_7days ?>">7 Days</option>
											<option value="<?php echo $detail->webshop_itemprice_30days ?>" selected>30 Days</option>
											<option value="<?php echo $detail->webshop_itemprice_permanent ?>">Permanent</option>
										</select>
										<input type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5 ml-5" value="Buy">
									</div>
								<?php echo form_close() ?>
								<script>
									$(document).ready(function(){
										$('#price_option').on('change', function(e){
											e.preventDefault();
											var price = $(this).val();
											$('#price').html('&#8373; ' + price);
											return;
										});
										$('#buy_form').on('submit', function(e){
											e.preventDefault();
											<?php if (empty($_SESSION['uid'])) : ?>
												ShowToast(2000, 'warning', 'You Need Login First.');
												setTimeout(() => {
													window.location = '<?php echo base_url('login') ?>';
												}, 2500);
											<?php endif; ?>
											<?php if (!empty($_SESSION['uid'])) : ?>
												$.ajax({
													url: '<?php echo base_url('webshop/do_buy') ?>',
													type: 'POST',
													data: {
														'<?php echo $this->security->get_csrf_token_name() ?>' : '<?php echo $this->security->get_csrf_hash() ?>',
														'player_id' : '<?php echo $_SESSION['uid'] ?>',
														'item_id' : '<?php echo $detail->id ?>',
														'item_price' : $('#price_option').val()
													},
													success: function(data){
														if (data == "true"){
															ShowToast(2000, 'success', 'Successfully Bought This Item.');
															setTimeout(() => {
																window.location = '<?php echo base_url('webshop') ?>';
															}, 2500);
														}
														else if (data == "false"){
															ShowToast(2000, 'error', 'Failed To Buy This Item.');
															setTimeout(() => {
																window.location = '<?php echo base_url('webshop') ?>';
															}, 2500);
														}
														else if (data == "false2"){
															ShowToast(2000, 'error', 'Your Webcoin Not Enough To Buy This Item.');
															setTimeout(() => {
																window.location = '<?php echo base_url('webshop') ?>';
															}, 2500);
														}
														else{
															ShowToast(3000, 'error', data);
															setTimeout(() => {
																window.location = '<?php echo base_url('webshop') ?>';
															}, 3500);
														}
													},
													error: function(data){
														ShowToast(3000, 'error', data.responseText);
														setTimeout(() => {
															window.location = '<?php echo base_url('webshop') ?>';
														}, 3500);
													}
												});
											<?php endif; ?>
										});
									});
								</script>
								<div class="nk-gap-3"></div>
							</div>
						</div>
					</div>
					<!-- START: Related Products -->
					<div class="nk-gap-3"></div>
					<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Related</span> Items</span></h3>
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
											<?php
											switch ($row['webshop_itemrating']) 
											{
												case '0.5':
													{
														echo '<i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '1.0':
													{
														echo '<i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '1.5':
													{
														echo '<i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '2.0':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '2.5':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '3.0':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '3.5':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i>';
														break;
													}
												case '4.0':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i>';
														break;
													}
												case '4.5':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i>';
														break;
													}
												case '5.0':
													{
														echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
														break;
													}
												default:
													break;
											}
											?>
										</div>
										<div class="nk-gap-1"></div>
										<div class="nk-product-price">&#8373; <?php echo $row['webshop_itemprice_30days'] ?></div>
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