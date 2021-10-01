<div class="nk-main">
	<div class="nk-gap-1"></div>
	<div class="container">
		<ul class="nk-breadcrumbs">
			<li><a href="<?php echo base_url('home') ?>"><?php echo $this->lang->line('STR_DARKBLOW_151') ?></a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><a href="<?php echo base_url('webshop') ?>">Webshop<?php echo $this->lang->line('STR_DARKBLOW_148') ?></a></li>
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
											<a href="javascript:void(0)" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" data-toggle="modal" data-target="#login_modal"><?php echo $this->lang->line('STR_DARKBLOW_152') ?></a>
										<?php endif; ?>
										<?php if (!empty($_SESSION['uid'])) : ?>
												<input id="submit_buy" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="Buy">
										<?php endif; ?>
									</div>
								<?php echo form_close() ?>
								<script>
									var CSRF_TOKEN = '<?php echo $this->security->get_csrf_hash() ?>';
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
												SetAttribute('submit_buy', 'button', 'Processing...');
												
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
															SetAttribute('submit_buy', 'submit', 'Buy');
															ShowToast(2000, 'success', Result.message);
															CSRF_TOKEN = Result.token;
															return;
														}
														else if (Result.response == 'false'){
															SetAttribute('submit_buy', 'submit', 'Buy');
															ShowToast(2000, 'error', Result.message);
															CSRF_TOKEN = Result.token;
															return;
														}
														else{
															SetAttribute('submit_buy', 'submit', 'Buy');
															ShowToast(2000, 'error', Result.message);
															CSRF_TOKEN = Result.token;
															return;
														}
													},
													error: function(data){
														ShowToast(1000, 'info', '<?php echo $this->lang->line('STR_INFO_1') ?>');

														$.ajax({
															url: '<?php echo base_url('api/getnewtoken') ?>',
															type: 'GET',
															dataType: 'JSON',
															data: {},
															success: function(data){
																var GetString = JSON.stringify(data);
																var Result = JSON.parse(data);

																if (Result.response == 'true'){
																	CSRF_TOKEN = Result.token;
																}
																
																Do_Buy();
															},
															error: function(){
																SetAttribute('submit_buy', 'submit', 'Buy');
																ShowToast(2000, 'error', 'Failed To Buy This Item.');
																setTimeout(() => {
																	window.location.reload();
																}, 2000);
															}
														});
													}
												});
												
												function Do_Buy()
												{
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
																SetAttribute('submit_buy', 'submit', 'Buy');
																ShowToast(2000, 'success', Result.message);
																CSRF_TOKEN = Result.token;
																return;
															}
															else if (Result.response == 'false'){
																SetAttribute('submit_buy', 'submit', 'Buy');
																ShowToast(2000, 'error', Result.message);
																CSRF_TOKEN = Result.token;
																return;
															}
															else{
																SetAttribute('submit_buy', 'submit', 'Buy');
																ShowToast(2000, 'error', Result.message);
																CSRF_TOKEN = Result.token;
																return;
															}
														},
														error: function(){
															SetAttribute('submit_buy', 'submiy', 'Buy');
															ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_15') ?>');
															setTimeout(() => {
																window.location.reload();
															}, 2000);
														}
													});
												}
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
					<h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_153') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_136') ?></span></h3>
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
							<span><span class="text-main-1"><?php echo $this->lang->line('STR_DARKBLOW_154') ?></span> <?php echo $this->lang->line('STR_DARKBLOW_155') ?></span>
						</h4>
						<?php echo form_open('', 'id="float_login" class="nk-form text-white" autocomplete="off"') ?>
							<div class="row vertical-gap">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="nk-gap"></div>
									<label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_19') ?></label>
									<input type="text" id="username" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_20') ?>" autofocus>
									<label class="col-form-label"><?php echo $this->lang->line('STR_DARKBLOW_18') ?></label>
									<input type="password" id="password" class="form-control" placeholder="<?php echo $this->lang->line('STR_DARKBLOW_43') ?>">
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
							var FLOAT_CSRF = '<?php echo $this->security->get_csrf_hash() ?>';
							$(document).ready(function(){
								$('#float_login').on('submit', function(e){
									e.preventDefault();
									if ($('#username').val() == ''){
										ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_1') ?>');
										return;
									}
									else if ($('#password').val() == ''){
										ShowToast(2000, 'warning', '<?php echo $this->lang->line('STR_WARNING_4') ?>');
										return;
									}
									else{

										SetAttribute('submit_login', 'button', 'Processing...');

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
												var GetString = JSON.stringify(data);
												var Result = JSON.parse(GetString);
												
												if (Result.response == 'true'){
													SetAttribute('submit_login', 'submit', 'Login');
													ShowToast(2000, 'success', Result.message);
													FLOAT_CSRF = Result.token;
													setTimeout(() => {
														window.location.reload();
													}, 2000);
												}
												else if (Result.response == 'false'){
													SetAttribute('submit_login', 'submit', 'Login');
													ShowToast(2000, 'error', Result.message);
													FLOAT_CSRF = Result.token;
													return;
												}
												else{
													SetAttribute('submit_login', 'submit', 'Login');
													ShowToast(2000, 'error', Result.message);
													FLOAT_CSRF = Result.token;
													return;
												}
											},
											error: function(){
												ShowToast(1000, 'info', '<?php echo $this->lang->line('STR_INFO_1') ?>');
												
												$.ajax({
													url: '<?php echo base_url('api/getnewtoken') ?>',
													type: 'GET',
													dataType: 'JSON',
													data: {},
													success: function(data){
														var GetString = JSON.stringify(data);
														var Result = JSON.parse(GetString);

														if (Result.response == 'true'){
															FLOAT_CSRF = Result.token;
														}

														return Do_Login();
													},
													error: function(){
														SetAttribute('submit_login', 'submit', 'Login');
														ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_2') ?>');
														setTimeout(() => {
															window.location.reload();
														}, 2000);
													}
												});
											}
										});
									}
								});
							});

							function Do_Login()
							{
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
										var GetString = JSON.stringify(data);
										var Result = JSON.parse(GetString);

										if (Result.response == 'true'){
											SetAttribute('submit_login', 'submit', 'Login');
											ShowToast(2000, 'success', Result.message);
											FLOAT_CSRF = Result.token;
											setTimeout(() => {
												window.location.reload();
											}, 2000);
										}
										else if (Result.response == 'false'){
											SetAttribute('submit_login', 'submit', 'Login');
											ShowToast(2000, 'error', Result.message);
											FLOAT_CSRF = Result.token;
											return;
										}
										else{
											SetAttribute('submit_login', 'submit', 'Login');
											ShowToast(2000, 'error', Result.message);
											FLOAT_CSRF = Result.token;
											return;
										}
									},
									error: function(){
										SetAttribute('submit_login', 'submit', 'Login');
										ShowToast(2000, 'error', '<?php echo $this->lang->line('STR_ERROR_2') ?>');
										setTimeout(() => {
											window.location.reload();
										}, 2000);
									}
								});
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>