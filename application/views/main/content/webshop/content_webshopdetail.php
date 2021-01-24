<div class="nk-main">
	<div class="nk-gap-1"></div>
	<div class="container">
		<?php
        if ($this->session->flashdata('Success'))
        {
        	echo '<div class="nk-gap-1"></div>';
            echo "<div class='nk-info-box text-success'><div class='nk-info-box-icon'><i class='ion-checkmark-round'></i></div><h3>Success!</h3><em>";
            echo $this->session->flashdata('Success');
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
		<?php
		include 'assets/include.php';

		if (isset($_POST['submit-buyitem'])) 
		{
			if (isset($_SESSION['uid'])) 
			{
				$uid = $_SESSION['uid'];
				$item_id = $_POST['item_id'];
				$price = $_POST['price'];
				
				$strShop = "SELECT * FROM webshop WHERE webshop_itemid = '".$item_id."'";
				foreach ($connec->query($strShop) as $row3)
				{
					$strAcc = "SELECT * FROM accounts WHERE player_id = '".$_SESSION['uid']."'";
					foreach ($connec->query($strAcc) as $row2)
					{
						if ($_POST['price'] == $row['webshop_itemprice_3days'])
						{
							if ($row2['kuyraicoin'] >= $row3['webshop_itemprice_3days']) 
							{
								$checkingweapon = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND item_id='".$row3['webshop_itemid']."'");
								$checkingweapon->execute();
								$checkingweaponresult = $checkingweapon->fetch(PDO::FETCH_ASSOC);
								if ($checkingweaponresult) 
								{
									$this->session->set_flashdata('error', 'You Already Have This Item<br>You Cannot Purchased This Item For Twice');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
								else
								{
									$_SESSION['coin'] = $_SESSION['coin'] - $row3['webshop_itemprice_3days'];
									$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
									$ISp_Res2->execute(array(
										$_SESSION['uid'],
										$row3['webshop_itemid'],
										$row3['webshop_itemname'],
										$row3['webshop_itemcount_3days'],
										$row3['webshop_itemcategory'],
										1
									));
									$sql = 'UPDATE accounts '
									. 'SET kuyraicoin = :mn '
									. 'WHERE player_id = :p_id';
									$stmt_0 = $connec->prepare($sql);
									$stmt_0->bindParam(':mn', $_SESSION["coin"], PDO::PARAM_STR);
									$stmt_0->bindParam(':p_id', $_SESSION['uid'], PDO::PARAM_STR);
									$stmt_0->execute();
									$sql2 = 'UPDATE webshop '
									. 'SET webshop_totalbuy = :mnn '
									. 'WHERE webshop_itemid = :p_idd';
									$stmt_1 = $connec->prepare($sql2);
									$test = $row['webshop_totalbuy'] + 1;
									$stmt_1->bindParam(':mnn', $test, PDO::PARAM_STR);
									$stmt_1->bindParam(':p_idd', $item_id, PDO::PARAM_STR);
									$stmt_1->execute();

									$this->session->set_flashdata('Success', 'Successfully Purchased The Item, Please Check Your <a href="'.base_url('player_panel/inventory').'">Inventory</a>');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
							}
							else
							{
								$this->session->set_flashdata('error', 'Your Coin Not Enough To Purchase This Item');
								redirect(base_url('webshop/details/'.$row['id']),'refresh');
							}
						}
						else if ($_POST['price'] == $row['webshop_itemprice_7days']) 
						{
							if ($row2['kuyraicoin'] >= $row3['webshop_itemprice_7days']) 
							{
								$checkingweapon = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND item_id='".$row3['webshop_itemid']."'");
								$checkingweapon->execute();
								$checkingweaponresult = $checkingweapon->fetch(PDO::FETCH_ASSOC);
								if ($checkingweaponresult) 
								{
									$this->session->set_flashdata('error', 'You Already Have This Item<br>You Cannot Purchased This Item For Twice');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
								else
								{	
									$_SESSION['coin'] = $_SESSION['coin'] - $row3['webshop_itemprice_7days'];
									$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
									$ISp_Res2->execute(array(
										$_SESSION['uid'],
										$row3['webshop_itemid'],
										$row3['webshop_itemname'],
										$row3['webshop_itemcount_7days'],
										$row3['webshop_itemcategory'],
										1
									));
									$sql = 'UPDATE accounts '
									. 'SET kuyraicoin = :mn '
									. 'WHERE player_id = :p_id';
									$stmt = $connec->prepare($sql);
									$stmt->bindParam(':mn', $_SESSION["coin"], PDO::PARAM_STR);
									$stmt->bindParam(':p_id', $_SESSION['uid'], PDO::PARAM_STR);
									$stmt->execute();
									$sql2 = 'UPDATE webshop '
									. 'SET webshop_totalbuy = :mnn '
									. 'WHERE webshop_itemid = :p_idd';
									$stmt_1 = $connec->prepare($sql2);
									$test = $row['webshop_totalbuy'] + 1;
									$stmt_1->bindParam(':mnn', $test, PDO::PARAM_STR);
									$stmt_1->bindParam(':p_idd', $item_id, PDO::PARAM_STR);
									$stmt_1->execute();
									$this->session->set_flashdata('Success', 'Successfully Purchased The Item, Please Check Your <a href="'.base_url('player_panel/inventory').'">Inventory</a>');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
							}
							else
							{
								$this->session->set_flashdata('error', 'Your Coin Not Enough To Purchase This Item');
								redirect(base_url('webshop/details/'.$row['id']),'refresh');
							}
						}
						else if ($_POST['price'] == $row['webshop_itemprice_30days']) 
						{
							if ($row2['kuyraicoin'] >= $row3['webshop_itemprice_30days']) 
							{
								$checkingweapon = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND item_id='".$row3['webshop_itemid']."'");
								$checkingweapon->execute();
								$checkingweaponresult = $checkingweapon->fetch(PDO::FETCH_ASSOC);
								if ($checkingweaponresult) 
								{
									$this->session->set_flashdata('error', 'You Already Have This Item<br>You Cannot Purchased This Item For Twice');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
								else
								{
									$_SESSION['coin'] = $_SESSION['coin'] - $row3['webshop_itemprice_30days'];
									$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
									$ISp_Res2->execute(array(
										$_SESSION['uid'],
										$row3['webshop_itemid'],
										$row3['webshop_itemname'],
										$row3['webshop_itemcount_30days'],
										$row3['webshop_itemcategory'],
										1
									));
									$sql = 'UPDATE accounts '
									. 'SET kuyraicoin = :mn '
									. 'WHERE player_id = :p_id';
									$stmt = $connec->prepare($sql);
									$stmt->bindParam(':mn', $_SESSION["coin"], PDO::PARAM_STR);
									$stmt->bindParam(':p_id', $_SESSION['uid'], PDO::PARAM_STR);
									$stmt->execute();
									$sql2 = 'UPDATE webshop '
									. 'SET webshop_totalbuy = :mnn '
									. 'WHERE webshop_itemid = :p_idd';
									$stmt_1 = $connec->prepare($sql2);
									$test = $row['webshop_totalbuy'] + 1;
									$stmt_1->bindParam(':mnn', $test, PDO::PARAM_STR);
									$stmt_1->bindParam(':p_idd', $item_id, PDO::PARAM_STR);
									$stmt_1->execute();
									$this->session->set_flashdata('Success', 'Successfully Purchased The Item, Please Check Your <a href="'.base_url('player_panel/inventory').'">Inventory</a>');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
							}
							else
							{
								$this->session->set_flashdata('error', 'Your Coin Not Enough To Purchase This Item');
								redirect(base_url('webshop/details/'.$row['id']),'refresh');
							}
						}
						else if ($_POST['price'] == $row['webshop_itemprice_permanent']) 
						{
							if ($row2['kuyraicoin'] >= $row3['webshop_itemprice_permanent']) 
							{
								$checkingweapon = $connec->prepare("SELECT * FROM player_items WHERE owner_id = '".$_SESSION['uid']."' AND item_id='".$row3['webshop_itemid']."'");
								$checkingweapon->execute();
								$checkingweaponresult = $checkingweapon->fetch(PDO::FETCH_ASSOC);
								if ($checkingweaponresult) 
								{
									$this->session->set_flashdata('error', 'You Already Have This Item<br>You Cannot Purchased This Item For Twice');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
								else
								{	
									$_SESSION['coin'] = $_SESSION['coin'] - $row3['webshop_itemprice_permanent'];
									$ISp_Res2 = $connec->prepare("INSERT INTO player_items (owner_id, item_id, item_name, count, category,equip) VALUES(?, ?, ?, ?, ?, ?)");
									$ISp_Res2->execute(array(
										$_SESSION['uid'],
										$row3['webshop_itemid'],
										$row3['webshop_itemname'],
										$row3['webshop_itemcount_permanent'],
										$row3['webshop_itemcategory'],
										3
									));
									$sql = 'UPDATE accounts '
									. 'SET kuyraicoin = :mn '
									. 'WHERE player_id = :p_id';
									$stmt = $connec->prepare($sql);
									$stmt->bindParam(':mn', $_SESSION["coin"], PDO::PARAM_STR);
									$stmt->bindParam(':p_id', $_SESSION['uid'], PDO::PARAM_STR);
									$stmt->execute();
									$sql2 = 'UPDATE webshop '
									. 'SET webshop_totalbuy = :mnn '
									. 'WHERE webshop_itemid = :p_idd';
									$stmt_1 = $connec->prepare($sql2);
									$test = $row['webshop_totalbuy'] + 1;
									$stmt_1->bindParam(':mnn', $test, PDO::PARAM_STR);
									$stmt_1->bindParam(':p_idd', $item_id, PDO::PARAM_STR);
									$stmt_1->execute();
									$this->session->set_flashdata('Success', 'Successfully Purchased The Item, Please Check Your <a href="'.base_url('player_panel/inventory').'">Inventory</a>');
									redirect(base_url('webshop/details/'.$row['id']),'refresh');
								}
							}
							else
							{
								$this->session->set_flashdata('error', 'Your Webcoin Is Not Enough For Purchase This Item<br>Your Webcoin : '.$_SESSION['coin'].' &#8373;');
								redirect(base_url('webshop/details/'.$row['id']),'refresh');
							}
						}
					}
				}
			}
			else
			{
				redirect(base_url('login'),'refresh');
			}
			
		}
?>
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
								<form action="" method="POST" class="nk-product-addtocart text-white">
									
									<h3>&#8373;
										<div class="nk-product-price" id="price" style="float: left;"><?php echo $row['webshop_itemprice_30days'] ?></div>
									</h3>
									<div class="nk-gap-1"></div>
									<div class="input-group" style="width: 300px;">
										<select class="form-control" id="price_option" name="price">
											<option value="" disabled>Select Duration</option>
											<option value="<?php echo $row['webshop_itemprice_3days'] ?>">3 Days</option>
											<option value="<?php echo $row['webshop_itemprice_7days'] ?>">7 Days</option>
											<option value="<?php echo $row['webshop_itemprice_30days'] ?>" selected>30 Days</option>
											<option value="<?php echo $row['webshop_itemprice_permanent'] ?>">Permanent</option>
										</select>&nbsp;
										<button type="submit" name="submit-buyitem" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-5">Purchase</button>
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
										<input type="hidden" name="item_id" value="<?php echo $row['webshop_itemid'] ?>">
									</div>
									
								</form>
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