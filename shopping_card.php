
<?php include 'header.php';  
include 'menu.php'; 
if (isset($_SESSION['cus_id'])) {
	$cus_id=$_SESSION['cus_id'];
}else{
	header('location:singin.php');
}

?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<h5>Shopping_Card</h5>
		</div>
	</div>
	<!-- advertise -->
	<div class="row">
		<div class="col-md-9 mt-4">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Product</th>
						<th scope="col">Qty</th>
						<th scope="col">TUF</th>
						<th scope="col">Remove</th>
					</tr>
				</thead>
				<tbody>
					<?php 

					$sql="SELECT o.*,p.ProName,p.ProThumbnail FROM orders o JOIN product p ON o.ProId=p.ProId WHERE CusId='$cus_id'";
					$result=$conn->query($sql);
					if ($result->num_rows>0) {
						while($row=$result->fetch_array()){
							?>
							<tr>
								<th scope="row" width="50%">
									<div class="">
										<div class="row no-gutters">
											<div class="col-md-4">
												<img src="assets/images/thumbnail/<?php echo $row['ProThumbnail']?>" class="card-img" alt="...">
											</div>
											<div class="col-md-8" >
												<div class="card-body">
													<p><b><?php echo $row['ProName'] ?></b></p>
													<small class="text-muted">
														Purchase: <?php echo $row['PurchaseDate'] ?>
													</small>
												</div>
											</div>
										</div>
									</div>
								</th>
								<td width="10%">
									<input type="number" name="form-control" value="<?php echo $row['Amount'] ?>">
								</td>
								<td><b><?php echo $row['Cost'] ?></b></td>
								<td><button class="btn-danger btn-sm"  title="remove"><i class="fa fa-trash"></i></button></td>
							</tr>
							<?php
						}
					}

					?>	
					
				</tbody>
			</table>
		</div>
		
		<!-- 	card one to four -->
		<div class="col-md-3">
			<div class="row mt-4">
				<div class="col-md-12">
					<div class="car">
						<div class="card-header">
							Compound code
						</div>
						<div class="card-body">

							<div class="input-group">
								<input type="text" size="50" class="form-control" placeholder="item..." aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-danger text-white" id="basic-addon2">search</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12">
					<div class="car">
						<div class="card-header">
							Payment
						</div>
						<div class="card-body">
							<h5>Total</h5>
							<h2>
								<?php 
								   $sql="SELECT SUM(Cost*Amount) AS Total FROM orders WHERE CusId='$cus_id'";
								       $result=$conn->query($sql);
								       if ($result->num_rows>0) {
								       	$row=$result->fetch_array();
								       	echo "$ ".$row['Total'] ;
								       }else{
								       	echo "$ 0.00";
								       }

								 ?>
							</h2>
							<hr>
							<button type="" class="btn btn-success btn-block">Perchuse Now</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="alert alert-warning" role="alert">
		Read more
	</div>
</div>