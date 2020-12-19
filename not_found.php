<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<html>
<head>
	<title>Single_page</title>
</head>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="input-group">
				<div class="input-group-prepend">
					<select class="form-control">
						<option selected>Type</option>
						<option value="">New</option>
						<option selected>second hand</option>
					</select>
				</div>
				<input type="text" size="50" class="form-control" placeholder="item..." aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-danger text-white" id="basic-addon2">search</button>
				</div>
			</div>
			<div style="margin: 7% auto;" align="center">
				<img src="assets/images/icon/01.png" width="100">
				<p class="text-warning">No Products Found</p>
			</div>
		</div>
	</div>
</div>
<body>
</body>
</html>