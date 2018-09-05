<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edvizo Assignment</title>
    <link href="<?= base_url('user_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('user_assets/css/font-awesome.min.css') ;?>" rel="stylesheet">
    <link href="<?= base_url('user_assets/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?= base_url('user_assets/css/price-range.css');?>" rel="stylesheet">
    <link href="<?= base_url('user_assets/css/animate.css');?>" rel="stylesheet">
	<link href="<?= base_url('user_assets/css/main.css');?>" rel="stylesheet">
	<link href="<?= base_url('user_assets/css/responsive.css');?>" rel="stylesheet">
  	<script src="<?= base_url('user_assets/js/jquery.js'); ?>"></script>
	<script src="<?= base_url('user_assets/js/ajax_call.js');?>"></script>
    
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <h1>MEN</h1>
            </div>
        </div>
    </section>
		<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Color</h2>
						<div class="panel-group category-products" id="accordian"><!--category-products-->
							<div class="panel panel-default">
								
									
									<input type="checkbox" name="black" id="black" value="black" onclick = "colorFilter()"><span style="font-size: 20px">  black</span><br>
									<input type="checkbox" name="blue" id="blue" value="blue" onclick = "colorFilter()"><span style="font-size: 20px">  blue</span><br>
									
								
							</div>
						</div><!--/category-products-->
					

						<div class="brands_products"><!--brands_products-->
							<h2>Size</h2>
							<div class="brands-name">
									<input id="S" type="checkbox" value="S" name="black" onclick="sizeFilter()"><span style="font-size: 20px">  S</span><br>
									<input id="M" type="checkbox" value="M" name="black" onclick="sizeFilter()"><span style="font-size: 18px">  M</span><br>
									<input id="L" type="checkbox" value="L" name="black" onclick="sizeFilter()"><span style="font-size: 20px">  L</span><br>
							</div>
						</div><!--/brands_products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right FI">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">T-Shirts</h2>
						<?php foreach ($result as $item){ ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= base_url('assets/img/'.$item->img); ?>" />
											<h2>₹<?= $item->price ;?></h2>
											<p><?= $item->item_name?></p>
									
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>₹<?= $item->price ;?></h2>
												<p><?= $item->item_name?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<script src="<?= base_url('user_assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('user_assets/js/jquery.scrollUp.min.js'); ?>"></script>
	<script src="<?= base_url('user_assets/js/price-range.js'); ?>"></script>
    <script src="<?= base_url('user_assets/js/jquery.prettyPhoto.js'); ?>"></script>
    <script src="<?= base_url('user_assets/js/main.js'); ?>"></script>

</body>
</html>