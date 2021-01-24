<div class="nk-main">
	<div class="container">
		<div class="nk-gap"></div>
		<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Most</span> Popular</span></h3>
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
	                                <div class="nk-product-price"><?php echo $row['webshop_itemprice_30days'] ?>&#8373;</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
            	<?php endforeach; ?>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Webshop</span> All Items</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
    	<?php foreach ($webshop as $row) : ?>
    	<div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="<?php echo base_url('webshop/details/'.$row['id']) ?>">
                    <img src="<?php echo base_url() ?>assets/goodgames/assets/images/img_webshop/<?php echo $row['webshop_itemimg'] ?>" alt="">
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
                    <div class="nk-gap"></div>
                    <p class="text-white">
                    	<?php
                    	if ($row['webshop_itemcategory'] == "1") 
                    	{
                    		echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-1">MAIN</button>';
                    	}
                    	else if ($row['webshop_itemcategory'] == "2") 
                    	{
                    		echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-2">Character & Headgear</button>';
                    	}
                    	else if ($row['webshop_itemcategory'] == "3") 
                    	{
                    		echo '<button type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-main-3">Item</button>';
                    	}
                    	?>
                    </p>
                    <div class="nk-product-price"><?php echo $row['webshop_itemprice_30days'] ?>&#8373;</div>
                </div>
            </div>
        </div>
    	<?php endforeach; ?>
    </div>
    <div class="nk-gap-3"></div>
    <div class="nk-gap-2"></div>
    <?php echo $this->pagination->create_links(); ?>
	</div>
</div>