<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;"><strong>Digi-Class</strong></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        <div class="header">
		          <h3 style="text-align: center;"><strong>Join Digi-Class</strong></h3><hr>
		        </div>
		        <center>
		        <div class="l-part">
		          <form  action="" method="post">
		            <div class="input-group">
					    <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
					</div><br>
					<div class="input-group">
					    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
					</div><br>
		            <div class="input-group">
					    <input id="password" type="password" class="form-control" name="u_pass" placeholder="Password" required="required">
					</div><br>
		            <div class="input-group">
					    <input id="email" type="text" class="form-control" name="u_email" placeholder="Email" required="required">
					</div><br>
					<div class="input-group">
			            <select class="form-control" name="u_country" required="required">
							<option disabled>Select a Country</option>
							<option>India</option>
						</select>
					</div><br>
					<div class="input-group">
						<select class="form-control input-md" name="u_gender" required="required">
							<option disabled="disabled">Select a Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div><br>
					<div class="input-group">
						<input type="date" name="u_birthday" class="form-control input-md" required="required" >
					</div><br>
					<a style="color:#fff;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
		            <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign up</button></center>
		            <?php include("insert_user.php"); ?>
		          </form>
		        </div>
		        </center>
	      </div>
		</div>
	</div>
</body>
</html>