<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
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
		          <h3 style="text-align: center;"><strong>Login to Digi-Class</strong></h3><hr>
		        </div>
		        <center>
		        <div class="l-part">
		          <form  action="" method="post">
		          	<input type="email" placeholder="Email" name="email" required class="form-control input-md" /><br><br>
		          	<div class="overlap-text">
			            <input type="password" placeholder="Password" name="pass" required class="form-control input-md" /><br>
			            <a style="color:#fff;" data-toggle="tooltip" title="Reset Password"  href="forgot_password.php">Forgot?</a>
		       		</div>
		       		<a style="color:#fff;" data-toggle="tooltip" title="Create Account!" href="signup.php">Don't have an account?</a><br><br>
		            <center><button id="signin" class="login" name="login">Login</button></center>
		            <?php include("login.php"); ?>
		          </form>
		        </div>
			</center>
	      </div>
		</div>
	</div>
</body>
</html>