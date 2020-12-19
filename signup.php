<?php 
include 'header.php'; 
include 'menu.php'; 
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div id="message">

			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Sign Up</h5>
					<hr>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<div class="card-text">
						<form id="form-signup">
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="inputEmail4">Full Name</label>
									<input type="text" class="form-control" name="CusName">
								</div>
								<div class="col-md-6 mb-3">
									<label for="inputPassword4">Gender</label>
									<select name="CusGender" class="form-control">
										<option value="បរុស">បរុស</option>
										<option value="ស្រី">ស្រី</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Email</label>
								<input type="email" class="form-control" name="CusEmail"  placeholder="name@gmail.com">
							</div>
							<div class="form-group">
								<label for="inputAddress2">Address</label>
								<input type="text" class="form-control" name="CusAddress" placeholder="Apartment, studio, or floor">
								<hr>
								<h6 class="card-subtitle mb-2 text-muted">Account</h6>
								<hr>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="inputCity">Username</label>
									<input type="text" class="form-control" name="UserName" >
								</div>
								<div class="col-md-6 mb-3">
									<label for="InputZip">Password</label>
									<input type="password" class="form-control" name="UserPassword" >
								</div>
							</div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										Agree with our policy
									</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" style="float: right;">Sign Up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<?php 
include ('footer.php');
?>
<script>
	$(document).ready(function(){
		$('#form-signup').submit(function(event){
           event.preventDefault(); //event.preventDefualt();: use it to don't get value on url
           var data=$(this).serialize(); // var data=$(this).serialize(): use for get all form sign up 
           $.ajax({
           	url: 'action/action.php',
           	type: 'POST',
           	dataType: 'json',
           	data: data,
           })
           .done(function(data){
           	if (data=="success") {
           		$('#message').html(`<div class="alert alert-success" role="alert">
           			Register Successfull
           			</div>`);
           		setTimeout(function(){
           			window.location.href="signin.php";
           		},3000);
           	}else{
           		$('#message').html(`<div class="alert alert-warning" role="alert">
           			error
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