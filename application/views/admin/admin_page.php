<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css');?>">
</head>
<div class = container >
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<h3>Add new Brand</h3>
			<form action="<?php echo base_url('admin_controller/insert_brand') ?>" method="POST">
				<label>brand name</label>
				<input type="text" name="brand_name" class="form-control">
				<button class="btn btn-primary">Add Brand</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<a href="<?= base_url('admin_controller/get_brand'); ?>">Show Brands</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<h3>Insert Item</h3>
			<form action="<?php echo base_url('admin_controller/insert_item') ?>" method="POST" enctype="multipart/form-data">
				<label>item name</label>
				<input type="text" name="item_name" class="form-control">
				<label>item brand</label>
				<input type="text" name="item_brand" class="form-control">
				<label>item category</label>
				<input type="text" name="item_cat" class="form-control">
				<label>item size</label>
				<input type="text" name="item_size" class="form-control">
				<label>item color</label>
				<input type="text" name="item_color" class="form-control">
				<label>item price</label>
				<input type="text" name="item_price" class="form-control">
				<label>item image</label>
				<input type="file" name="item_img" class="form-control">
				<button class="btn btn-primary">Add item</button>
			</form>
			
		</div>
	</div>
</div>