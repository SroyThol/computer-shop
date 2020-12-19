<?php 
include 'header.php';
include 'menu.php';  
if ($_GET['pro_id']) {
	$ProId=$_GET['pro_id'];
}else{
	header('location:index.php');
}
?>
<!-- Modal -->
<div class="modal fade" id="log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<center><h2>Please Login</h2>
					<p><a href="signin.php">Login now</a></p>
				</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<?php 
						$select="SELECT * FROM product WHERE ProId='$ProId'";
						$result=$conn->query($select);
						if ($result->num_rows>0) {
							while ($row=$result->fetch_array()) {
								?>
								<div class="col-md-5" align="center">
									<img  class="fluid" src="assets/images/thumbnail/<?php  echo $row['ProThumbnail'] ?>" height="100px" alt="card image cap">
									<br>
									<br>
									<img  class="fluid img-thumbnail" src="assets/images/thumbnail/<?php  echo $row['ProThumbnail'] ?>" height="100px" alt="card image cap" width="20%">
									<img  class="fluid img-thumbnail" src="assets/images/thumbnail/<?php  echo $row['ProThumbnail'] ?>" height="100px" alt="card image cap" width="20%">
									<img  class="fluid img-thumbnail" src="assets/images/thumbnail/<?php  echo $row['ProThumbnail'] ?>" height="100px" alt="card image cap" width="20%">
									<img  class="fluid img-thumbnail" src="assets/images/thumbnail/<?php  echo $row['ProThumbnail'] ?>" height="100px" alt="card image cap" width="20%">
								</div>
								<div class="col-md-7">
									<h3><?php echo $row['ProName'] ?></h3>
									<hr>
									<p><?php echo $row['ProDes'] ?></p>
									<br>
									<br>
									<br>
									<br>
									<h3>$<?php  echo $row['ProPrice'] ?></h3>
									<div class="form-row align-items-center">
										<div class="col-auto">
											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<div class="input-group-text">Amount</div>
												</div>
												<input type="number" class="form-control" id="inlineFormInputGroup" placeholder="1">
											</div>
										</div>
										<div class="col-auto">
											<button type="" class="btn btn-warning mb-2">Buy Now</button>
											<?php 
											if (isset($_SESSION['cus_id']
										)) {
												echo '<button class="btn btn-light mb-2 btn-card" id="'.$row['ProId'].'">Add to cart</button>';
										}else{
											echo '<button class="btn btn-light mb-2"data-toggle="modal" data-target="#log">Add to cart</button>';
										}
										?>
									</div>
								</div>
								<br>
								<br>
								<div class="alert alert-primary" role="alert">
									Shipping is not include
								</div>
							</div>
							<?php 
						}
					}else{
						echo "<div class='col-md-12'>
						<div align='center'>
						<img src='assets/images/icon/02.jpg' width='250px'>
						</div>
						</div>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?php 
include 'footer.php';
?> 
<script>
	$(document).ready(function() {
		$(document).on('click', '.btn-card', function(event){
			event.preventDefault();
			var pro_id=$(this).attr('id');
			$.ajax({
				url: 'action/add_product.php',
				type: 'POST',
				dataType: 'json',
				data: {pro_id: pro_id},
			})
			.done(function(data){
				console.log(data);
			})
			.fail(function(){
				console.log("error");
			})
			.always(function(){
				console.log("completed");
			});
		});
		
	});
</script>