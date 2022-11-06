<div class="nk-main">
	<div class="nk-gap-1"></div>
	<div class="container">
		<ul class="nk-breadcrumbs">
			<li><a href="<?= base_url('home') ?>">
					<?= $this->lang->line('STR_DARKBLOW_151') ?>
				</a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><a href="<?= base_url('webshop') ?>"><?= $this->lang->line('STR_DARKBLOW_148') ?></a></li>
			<li><span class="fa fa-angle-right"></span></li>
			<li><span>
					<?= $detail->webshop_itemname ?>
				</span></li>
		</ul>
		<div class="container">
			<div class="nk-gap-2"></div>
			<div class="row vertical-gap">
				<div class="col-lg-12">
					<div class="nk-store-product">
						<div class="row vertical-gap">
							<div class="col-md-6">
								<div class="nk-gallery">
									<div class="nk-gallery-item-box">
										<img src="<?= base_url() ?>assets/goodgames/assets/images/img_webshop/<?= $detail->webshop_itemimg ?>" style="max-width: 1000px;" alt="">
									</div>
									<div class="nk-gap-1"></div>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="nk-product-title h3"><?= $detail->webshop_itemname ?></h2>
								<div class="nk-product-description">
									<p><?= $detail->webshop_itemdescription ?></p>
								</div>
								<hr class="bg-dark-4">
								<?= form_open('', 'id= "buy_form" class="text-white"') ?>
								<div class="form-group">
									<label class="col-form-label">Price: </label>
									<div class="nk-product-price" id="price">&#8373; <?= $detail->webshop_itemprice_30days ?></div>
								</div>
								<div class="form-group">
									<label class="col-form-label">Select Duration:</label>
									<select id="price_option" class="form-control">
										<option value="<?= $detail->webshop_itemprice_3days ?>"><?= $this->lang->line('STR_DARKBLOW_209') ?></option>
										<option value="<?= $detail->webshop_itemprice_7days ?>"><?= $this->lang->line('STR_DARKBLOW_210') ?></option>
										<option value="<?= $detail->webshop_itemprice_30days ?>" selected><?= $this->lang->line('STR_DARKBLOW_211') ?></option>
										<option value="<?= $detail->webshop_itemprice_permanent ?>"><?= $this->lang->line('STR_DARKBLOW_80') ?></option>
									</select>
								</div>
								<div class="form-group text-center">
									<?php if (empty($this->session->userdata('uid'))) : ?>
										<a href="javascript:void(0)" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" data-toggle="modal" data-target="#login_modal"><?= $this->lang->line('STR_DARKBLOW_152') ?></a>
									<?php endif; ?>
									<?php if (!empty($this->session->userdata('uid'))) : ?>
										<input id="submit_buy" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_207') ?>">
									<?php endif; ?>
								</div>
								<?= form_close() ?>
								<script>
									var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
									$(document).ready(function() {
										$('#price_option').on('change', function(e) {
											e.preventDefault();
											var price = $(this).val();
											$('#price').html('&#8373; ' + price);
											return;
										});
										$('#buy_form').on('submit', function(e) {
											e.preventDefault();
											<?php if (!empty($this->session->userdata('uid'))) : ?>
												return Do_Buy();
											<?php endif; ?>
										});
									});

									function Do_Buy() {
										SetAttribute('submit_buy', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');
										$.ajax({
											url: '<?= base_url('webshop/do_buy') ?>',
											type: 'POST',
											dataType: 'JSON',
											data: {
												'<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
												'player_id': '<?= $this->session->userdata('uid') ?>',
												'item_id': '<?= $detail->id ?>',
												'item_price': $('#price_option').val()
											},
											success: function(data) {
												var GetString = JSON.stringify(data);
												var Result = JSON.parse(GetString);

												if (Result.response == 'true') {
													SetAttribute('submit_buy', 'submit', '<?= $this->lang->line('STR_DARKBLOW_207') ?>');
													ShowToast(2000, 'success', Result.message);
													CSRF_TOKEN = Result.token;
													return;
												} else if (Result.response == 'false') {
													SetAttribute('submit_buy', 'submit', '<?= $this->lang->line('STR_DARKBLOW_207') ?>');
													ShowToast(2000, 'error', Result.message);
													CSRF_TOKEN = Result.token;
													return;
												} else {
													SetAttribute('submit_buy', 'submit', '<?= $this->lang->line('STR_DARKBLOW_207') ?>');
													ShowToast(2000, 'error', Result.message);
													CSRF_TOKEN = Result.token;
													return;
												}
											},
											error: function() {
												SetAttribute('submit_buy', 'submit', '<?= $this->lang->line('STR_DARKBLOW_207') ?>');
												ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_15') ?>');
												setTimeout(() => {
													window.location.reload();
												}, 2000);
											}
										});
									}
								</script>
								<div class="nk-gap-3"></div>
							</div>
						</div>
					</div>
					<!-- START: Related Products -->
					<div class="nk-gap-3"></div>
					<h3 class="nk-decorated-h-2">
						<span>
							<span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_153') ?></span>
							<?= $this->lang->line('STR_DARKBLOW_136') ?>
						</span>
					</h3>
					<div class="nk-gap"></div>
					<div class="row vertical-gap">
						<?php if ($related != null) : ?>
							<?php foreach ($related as $row) : ?>
								<div class="col-md-6">
									<div class="nk-product-cat">
										<a class="nk-product-image" href="<?= base_url('webshop/details/' . $row['id']) ?>">
											<img src="<?= base_url() ?>assets/goodgames/assets/images/img_webshop/<?= $row['webshop_itemimg'] ?>" alt="<?= $row['webshop_itemname'] ?>">
										</a>
										<div class="nk-product-cont">
											<h3 class="nk-product-title h5">
												<a href="<?= base_url('webshop/details/' . $row['id']) ?>"><?= $row['webshop_itemname'] ?></a>
											</h3>
											<div class="nk-gap-1"></div>
											<div class="nk-product-rating" data-rating="<?= $row['webshop_itemrating'] ?>">
												<?php
												switch ($row['webshop_itemrating']) {
													case '0.5': {
															echo '<i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '1.0': {
															echo '<i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '1.5': {
															echo '<i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '2.0': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '2.5': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '3.0': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '3.5': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i><i class="far fa-star"></i>';
															break;
														}
													case '4.0': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i>';
															break;
														}
													case '4.5': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fas fa-star-half"></i>';
															break;
														}
													case '5.0': {
															echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
															break;
														}
													default:
														break;
												}
												?>
											</div>
											<div class="nk-gap-1"></div>
											<div class="nk-product-price">&#8373; <?= $row['webshop_itemprice_30days'] ?>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php if ($related == null) : ?>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card bg-dark-2">
									<div class="card-body text-center">
										<?= $this->lang->line('STR_DARKBLOW_212') ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<!-- END: Related Products -->
				</div>
			</div>
		</div>

	</div>
	<div class="nk-gap-1"></div>
	<?php if (empty($this->session->userdata('uid'))) : ?>
		<div class="nk-modal modal fade" id="login_modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content" style="border-radius: 5px;">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-android-close"></span></button>
						<h4 class="mb-0 text-center">
							<span>
								<span class="text-main-1"><?= $this->lang->line('STR_DARKBLOW_154') ?></span>
								<?= $this->lang->line('STR_DARKBLOW_155') ?>
							</span>
						</h4>
						<?= form_open('', 'id="float_login" class="nk-form text-white" autocomplete="off"') ?>
						<div class="row vertical-gap">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="nk-gap"></div>
								<label class="col-form-label"><?= $this->lang->line('STR_DARKBLOW_19') ?></label>
								<input type="text" id="username" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_20') ?>" autofocus>
								<label class="col-form-label"><?= $this->lang->line('STR_DARKBLOW_18') ?></label>
								<input type="password" id="password" class="form-control" placeholder="<?= $this->lang->line('STR_DARKBLOW_43') ?>">
							</div>
						</div>
						<div class="nk-gap-1"></div>
						<div class="row vertical-gap">
							<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
								<input id="submit_login" type="submit" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-block nk-btn-color-main-5" value="<?= $this->lang->line('STR_DARKBLOW_155') ?>">
								<div class="nk-gap"></div>
								<a href="<?= base_url('register') ?>" class="nk-btn nk-btn-outline nk-btn-block nk-btn-color-main-3"><?= $this->lang->line('STR_DARKBLOW_44') ?></a>
							</div>
						</div>
						<?= form_close() ?>
						<script>
							var FLOAT_CSRF = '<?= $this->security->get_csrf_hash() ?>';
							var RETRY
							$(document).ready(function() {
								$('#float_login').on('submit', function(e) {
									e.preventDefault();

									return Do_Login();
								});
							});

							function Do_Login() {
								if ($('#username').val() == '') {
									ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_1') ?>');
									return;
								} else if ($('#password').val() == '') {
									ShowToast(2000, 'warning', '<?= $this->lang->line('STR_WARNING_4') ?>');
									return;
								} else {

									SetAttribute('submit_login', 'button', '<?= $this->lang->line('STR_INFO_8') ?>');

									$.ajax({
										url: '<?= base_url('webshop/do_login') ?>',
										type: 'POST',
										dataType: 'JSON',
										data: {
											'<?= $this->security->get_csrf_token_name() ?>': FLOAT_CSRF,
											'username': $('#username').val(),
											'password': $('#password').val()
										},
										success: function(data) {
											var GetString = JSON.stringify(data);
											var Result = JSON.parse(GetString);

											if (Result.response == 'true') {
												SetAttribute('submit_login', 'submit', '<?= $this->lang->line('STR_DARKBLOW_155') ?>');
												ShowToast(2000, 'success', Result.message);
												FLOAT_CSRF = Result.token;
												setTimeout(() => {
													window.location.reload();
												}, 2000);
											} else if (Result.response == 'false') {
												SetAttribute('submit_login', 'submit', '<?= $this->lang->line('STR_DARKBLOW_155') ?>');
												ShowToast(2000, 'error', Result.message);
												FLOAT_CSRF = Result.token;
												return;
											} else {
												SetAttribute('submit_login', 'submit', '<?= $this->lang->line('STR_DARKBLOW_155') ?>');
												ShowToast(2000, 'error', Result.message);
												FLOAT_CSRF = Result.token;
												return;
											}
										},
										error: function() {
											RETRY += 1;
											if (RETRY >= 3) {
												SetAttribute('submit_login', 'submit', 'LOGIN');
												ShowToast(2000, 'error', 'Failed To Login.');
												setTimeout(() => {
													window.location.reload();
												}, 2000);
											} else {
												ShowToast(1000, 'info', '<?= $this->lang->line('STR_INFO_1') ?>');

												$.ajax({
													url: '<?= base_url('api/security/csrf') ?>',
													type: 'GET',
													dataType: 'JSON',
													data: {
														'<?= $this->darkblowlib->GetTokenName() ?>': '<?= $this->darkblowlib->GetTokenKey() ?>'
													},
													success: function(data) {
														var GetString = JSON.stringify(data);
														var Result = JSON.parse(GetString);

														if (Result.response == 'true') FLOAT_CSRF = Result.token;

														return Do_Login();
													},
													error: function() {
														SetAttribute('submit_login', 'submit', '<?= $this->lang->line('STR_DARKBLOW_155') ?>');
														ShowToast(2000, 'error', '<?= $this->lang->line('STR_ERROR_2') ?>');
														setTimeout(() => {
															window.location.reload();
														}, 2000);
													}
												});
											}
										}
									});
								}
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>