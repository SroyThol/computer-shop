<?php 
include 'data/dbconnection.php'
?>
<?php 
session_start();
?>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/custom_style.css">
	<link rel="icon" href="assets/images/icon/laptop_des_icon.ico">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<title>Computer Shop</title>
	<style>
		sup{
			vertical-align: top;
			position: relative; 
			top: -0.5em;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<!-- Image and text -->
			<div class="col-md-3">
				<nav class="navbar navbar-light bg-light">
					<a class="navbar-brand" href="index.php">
						<img src="assets/images/logo/02.jpg" width="30" height="25" class="d-inline-block align-top" alt="" loading="lazy">
						&nbsp;&nbsp;ComputerShops
					</a>
				</nav>
			</div>
			<div class="'col-md-6">
				<form action="search.php" method="get">
					<div class="input-group">
						<div class="input-group-prepend">
							<select class="form-control" name='pro_type'>
								<option selected>Type</option>
								<option value="">New</option>
								<option selected>second hand</option>
							</select>
						</div>
						<input type="text" size="50" class="form-control" placeholder="item..." aria-label="Recipient's username" required="true" aria-describedby="basic-addon2" name="search">
						<div class="input-group-append">
							<button type="submit" class="btn btn-danger text-white" id="basic-addon2">search</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-3 point" align="right">
				<span class="p-2"><i class="fa fa-heart-o header-icon"></i></span>
				<span class="p-2">
					<?php 
					if (isset($_SESSION['cus_id'])){
						$cus_id=$_SESSION['cus_id'];
						$sql="SELECT COUNT(*) as Total FROM orders WHERE 
						CusId='$cus_id' AND Paid=0";
						$result=$conn->query($sql);
						$row=$result->fetch_array();
						$total=$row['Total'];
						if ($total>0) {
							echo '<a href="shopping_card.php"><i class="fa fa-shopping-cart header-icon"><sup><span class="badge badge-danger rounded-circle">'.$total.'</span></sup></i></a>';

						}else{
                             echo '<i class="fa fa-shopping-cart header-icon"></i>'; 
						}
					}else{
						 echo '<i class="fa fa-shopping-cart header-icon"></i>';
					}
					?>
				</span>
				<?php 
				if (isset($_SESSION['cus_id'])) {
					echo '<a href="account.php">'.$_SESSION['cus_name'].'</a>';
				}else{
					echo '<span class="p-2"><a href="signin.php" title="sign in">Login</a></span>';
				}
				?>
			</div>
		</div>
	</nav>