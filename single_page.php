
<?php include 'header.php'; ?> 
<?php include 'menu.php'; ?>
<?php 
if (isset($_GET['page_id'])) {
	$SinglePageId=$_GET['page_id'];
	if ($SinglePageId =="") {
		header('location:index.php');
	}
}else{
	header('location:index.php');
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
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<?php  
							$sql="SELECT * FROM single_page WHERE SinglePageId='$SinglePageId'";
							$result=$conn->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_array()) {
									?>
									<h3 class="card-title"><?php echo $row['SinglePageName'] ?></h3>
								    <hr>
								    <?php echo $row['SinglePageCode'] ?>
								<?php }
							}else{
								echo "";
							}

							?>  
							<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>