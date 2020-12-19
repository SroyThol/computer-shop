
<?php include 'header.php'; ?> 
<?php include 'menu.php'; ?>
<?php 
if (isset($_GET['cat_id'])) {
	$CatId=$_GET['cat_id'];
	if (isset($_GET['brand_id'])) {
		$BrandId=$_GET['brand_id'];
	}else{
		$BrandId='';
	}
}else{
	header('laction:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Single_page</title>
</head>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<h5>Category</h5>
		</div>
	</div>
	<!-- advertise -->
	<div class="row">
		<div class="col-md-3 mt-4">
			<div class="card">
				<img src="assets/images/advertise/01.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text">Some quick example text to</p>
				</div>
			</div>
			<div class="card mt-3">
				<img src="assets/images/advertise/01.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text">Some quick example text to </p>
				</div>
			</div>
		</div>
		<!-- 	card one to four -->
		<div class="col-md-9">
			<div class="row mt-4" style="background-color: #fcfafa;">
				<div class="col-md-6">
					<a class="navbar-brand"><b>Recent Upload</b></a>
				</div>
				<div class="col-md-6" align="right">
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<button type="button" id="btn-list-items" class="btn btn-light"><i class="fa fa-th-list"></i></button>
						<button type="button" id="btn-grid-items" class="btn btn-light"><i class="fa fa-th"></i></button>

						<div class="btn-group" role="group">
							<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Filter
							</button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								<a class="dropdown-item" href="#">Low to hight</a>
								<a class="dropdown-item" href="#">Hight to low</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-3">
								<div class="row no-gutters">
									<!-- <div class="col-md-2">
										<img src="assets/images/thumbnail/01.jpg" class="card-img" alt="...">
									</div> -->
									<!-- <div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">Mackbook</h5>
											<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										</div>
									</div> -->
									<!-- <div class="col-md-2 mt-4">
										<p>price</p>
										<h5>$2500<h5>
											<button class="btn btn-warning">Add to card</button>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<?php 
					if ($CatId!='' && $BrandId!='') {
						$sql="SELECT * FROM product WHERE CatId='$CatId' AND BrandId='$BrandId'";
						$result=$conn->query($sql);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_array()) {
								?>
								<div class="col-md-12 product-item">
									<div class="row">
										<div class="col-md-12">
											<div class="card mb-3">
												<div class="row no-gutters">
													<div class="col-md-2 mt-2 product-img" >
														<img src="assets/images/thumbnail/<?php
														echo $row['ProThumbnail'] ?>" class="card-img"  alt="..." >
													</div>
													<div class="col-md-8 product-title">
														<div style="padding-left: 10px; padding-right: 10px;">
															<h5 class="card-title"><a href="product_detail.php?pro_id=<?php echo $row['ProId']?>"><?php echo $row['ProName']; ?></a></h5>
															<p class="card-text product-des">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
														</div>
													</div>
													<div class="col-md-2 mt-4 product-price" style="padding-left: 10px; padding-right: 10px; top: -30px;">
														<div >
															<p class="price-text">price</p>
															<h5>$<?php echo $row['ProPrice'] ?><h5>
																<button class="btn btn-warning btn-cart">Add to card</button>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php
								}
							}else{
								echo "
								<div class='col-md-12' align='center'>
								<img src='assets/images/icon/02.jpg' width='350px'>
								<br>
								<p class='text-warning'>0 resutls</p>
								</div>
								";
							}
						}
						elseif ($CatId!="") {
							$sql="SELECT * FROM product WHERE CatId='$CatId'";
							$result=$conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_array()) {
									?>
									<div class="col-md-12 product-item">
										<div class="row">
											<div class="col-md-12">
												<div class="card mb-3">
													<div class="row no-gutters">
														<div class="col-md-2 mt-2 product-img" >
															<img src="assets/images/thumbnail/<?php
															echo $row['ProThumbnail'] ?>" class="card-img"  alt="..." >
														</div>
														<div class="col-md-8 product-title">
															<div style="padding-left: 10px; padding-right: 10px;">
																<h5 class="card-title"><a href="product_detail.php?pro_id=<?php echo $row['ProId']?>"><?php echo $row['ProName']; ?></a></h5>
																<p class="card-text product-des">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
															</div>
														</div>
														<div class="col-md-2 mt-4 product-price" style="padding-left: 10px; padding-right: 10px; top: -30px;">
															<div >
																<p class="price-text">price</p>
																<h5>$<?php echo $row['ProPrice'] ?><h5>
																	<button class="btn btn-warning btn-cart">Add to card</button>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php
									}
								}else{
									echo "
									<div class='col-md-12' align='center'>
									<img src='assets/images/icon/02.jpg' width='350px'>
									<br>
									<p class='text-warning'>0 resutls</p>
									</div>
									";
								}
							}else{
								echo "
								<div class='col-md-12' align='center'>
								<img src='assets/images/icon/02.jpg' width='350px'>
								<br>
								<p class='text-warning'>0 resutls</p>
								</div>
								";
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>
		<?php 
		include ('footer.php');
		?>