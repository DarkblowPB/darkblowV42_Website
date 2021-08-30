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
								<hr class="bg-dark-4">
								<?php echo form_open('', 'id= "buy_form" class="text-white"') ?>
									<div class="form-group">
										<label class="col-form-label">Price: </label>
										<div class="nk-product-price" id="price">&#8373; <?php echo $detail->webshop_itemprice_30days ?></div>
									</div>
									<div class="form-group">
										<label class="col-form-label">Select Duration:</label>
										<select id="price_option" class="form-control">
											<option value="<?php echo $detail->webshop_itemprice_3days ?>">3 Days</option>
											<option value="<?php echo $detail->webshop_itemprice_7days ?>">7 Days</option>
											<option value="<?php echo $detail->webshop_itemprice_30days ?>" selected>30 Days</option>
											<option value="<?php echo $detail->webshop_itemprice_permanent ?>">Permanent</option>
										</select>
									</div>
									<div class="form-group text-center">
										<?php if (empty($_SESSION['uid'])) : ?>
											<a href="javascript:void(0)" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" data-toggle="modal" data-target="#login_modal">Buy</a>
										<?php endif; ?>
										<?php if (!empty($_SESSION['uid'])) : ?>
												<input id="submit_buy" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Buy">
										<?php endif; ?>
									</div>
								<?php echo form_close() ?>
								<script>
									var CSRF_TOKEN = '';
									$(document).ready(function(){
										$('#price_option').on('change', function(e){
											e.preventDefault();
											var price = $(this).val();
											$('#price').html('&#8373; ' + price);
											return;
										});
										$('#buy_form').on('submit', function(e){
											e.preventDefault();
											<?php if (!empty($_SESSION['uid'])) : ?>
												SubmitCondition('submit_buy', 'false');
												if (CSRF_TOKEN == ''){
													CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
												}
												
												$.ajax({
													url: '<?php echo base_url('webshop/do_buy') ?>',
													type: 'POST',
													dataType: 'JSON',
													data: {
														'<?php echo $this->security->get_csrf_token_name() ?>' : CSRF_TOKEN,
														'player_id' : '<?php echo $_SESSION['uid'] ?>',
														'item_id' : '<?php echo $detail->id ?>',
														'item_price' : $('#price_option').val()
													},
													success: function(data){
														var GetString = JSON.stringify(data);
														var Result = JSON.parse(GetString);

														if (Result.response == 'true'){
															SubmitCondition('submit_buy', 'true');
															
															CSRF_TOKEN = Result.token;
															ShowToast(2000, 'success', Result.message);
															setTimeout(() => {
																window.location.reload();
															}, 2000);
														}
														else if (Result.response == 'false'){
															SubmitCondition('submit_buy', 'true');

															CSRF_TOKEN = Result.token;
															ShowToast(2000, 'error', Result.message);
															return;
														}
														else{
															SubmitCondition('submit_buy', 'true');
															
															CSRF_TOKEN = Result.token;
															ShowToast(2000, 'error', Result.message);
															return;
														}
													},
													error: function(data){
														SubmitCondition('submit_buy', 'true');
														
														ShowToast(3000, 'error', data.responseText);
														setTimeout(() => {
															window.location.reload();
														}, 3500);
													}
												});
											<?php endif; ?>
										});
									});

									function SubmitCondition(button_id, param)
									{
										let getBtn = document.getElementById(button_id);
										if (param == 'true'){
											getBtn.setAttribute('type', 'submit');
											if (button_id == 'submit_login'){
												getBtn.setAttribute('value', 'Login');
											}
											else{
												getBtn.setAttribute('value', 'Buy');
											}
										}
										if (param == 'false'){
											getBtn.setAttribute('type', 'button');
											getBtn.setAttribute('value', 'Processing...');
										}
									}
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
	<?php if (empty($_SESSION['uid'])) : ?>
		<div class="nk-modal modal fade" id="login_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content" style="border-radius: 5px;">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="ion-android-close"></span>
						</button>
						<h4 class="mb-0 text-center">
							<span><span class="text-main-1">Float</span> Login</span>
						</h4>
						<?php echo form_open('', 'id="float_login" class="nk-form text-white" autocomplete="off"') ?>
							<div class="row vertical-gap">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="nk-gap"></div>
									<label class="col-form-label">Username</label>
									<input type="text" id="username" class="form-control" placeholder="Enter Your Username" autofocus>
									<label class="col-form-label">Password</label>
									<input type="password" id="password" class="form-control" placeholder="Enter Your Password">
								</div>
							</div>
							<div class="nk-gap-1"></div>
							<div class="row vertical-gap">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
									<input id="submit_login" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-main-5" value="Login">
									<div class="nk-gap"></div>
									<a href="<?php echo base_url('register') ?>" class="nk-btn nk-btn-outline nk-btn-block nk-btn-color-main-3">Register</a>
								</div>
							</div>
						<?php echo form_close() ?>
						<script>
							var FLOAT_CSRF = '';
							$(document).ready(function(){
								$('#float_login').on('submit', function(e){
									e.preventDefault();
									if ($('#username').val() == ''){
										ShowToast(2000, 'warning', 'Username Cannot Be Empty.');
										return;
									}
									else if ($('#password').val() == ''){
										ShowToast(2000, 'warning', 'Password Cannot Be Empty.');
										return;
									}
									else{

										if (FLOAT_CSRF == ''){
											FLOAT_CSRF = '<?php echo $this->security->get_csrf_hash() ?>';
										}

										SubmitCondition('submit_login', 'false');

										$.ajax({
											url: '<?php echo base_url('webshop/do_login') ?>',
											type: 'POST',
											dataType: 'JSON',
											data: {
												'<?php echo $this->security->get_csrf_token_name() ?>' : FLOAT_CSRF,
												'username' : $('#username').val(),
												'password' : $('#password').val()
											},
											success: function(data){
												var decodeString = JSON.stringify(data);
												var parseString = JSON.parse(decodeString);
												
												if (parseString.response == 'true'){
													FLOAT_CSRF = parseString.token;
													ShowToast(2000, 'success', parseString.message);
													setTimeout(() => {
														SubmitCondition('submit_login', 'true');
														window.location.reload();
													}, 2000);
													return;
												}
												else if (parseString.response == 'false'){
													FLOAT_CSRF = parseString.token;
													ShowToast(2000, 'error', parseString.message);
													setTimeout(() => {
														SubmitCondition('submit_login', 'true');
													}, 2000);
													return;
												}
											},
											error: function(data){
												ShowToast(2000, 'error', data);
												setTimeout(() => {
													window.location.reload()
												}, 2500);
											}
										});
									}
								});
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>