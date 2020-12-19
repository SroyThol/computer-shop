<?php 
include 'header.php';
include 'menu.php'; 
if (isset($_SESSION['cus_id'])) {
	header('location:index.php');
}
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Sign In</h5>
					<hr>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<div id="me"></div>
					<div class="card-text">
						<form id="form-login">
							<div class="form-row">
								<div class="col-md-12 mb-3">
									<label for="validationDefault01">User Name</label>
									<input type="text" class="form-control" name="UserName" required="true">
								</div>
								<div class="col-md-12 mb-3">
									<label for="validationDefault02">Password</label>
									<input type="password" class="form-control" name="UserPassword" required="true">
								</div>
							</div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										Remember your account
									</label>
								</div>
							</div>
							<span><a href="signup.php">Register</a></span>
							<button type="submit" class="btn btn-primary " style="float: right;">Sign In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<?php 
include 'footer.php';
?>
<script>
	$(document).ready(function(){
		$('#form-login').submit(function(event){
           event.preventDefault(); //event.preventDefualt();: use it to don't get value on url
           var data=$(this).serialize(); // var data=$(this).serialize(): use for get all form signin
           $.ajax({
           	url: 'action/login.php',
           	type: 'POST',
           	dataType: 'json',
           	data: data,
           })
           .done(function(data){
           	if (data=="Success") {
           		$('#me').html(`<div class="alert alert-warning mt-2" role="alert">
           			Login Successfull
           			</div>`);
           		setTimeout(function(){
           			window.location.href="index.php";
           		},3000);
           	}
           	else{
           		$('#me').html(`<div class="alert alert-warning" role="alert">
           			Fail login
           			</div>`);
           	}
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
