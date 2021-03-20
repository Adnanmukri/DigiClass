<!DOCTYPE html>
<html>
<head>
	<title>Digi-Class</title>
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
	<div class="home">
		<center>
	  <img src="DG.png" height="300px"><br><br>
				<form method="post" action="">
					<button id="signup" class="signup" name="signup">Sign up</button>
					<?php
						if(isset($_POST['signup'])){
							echo"<script>window.open('signup.php','_self')</script>";
						}
					?>
					<button id="login" class="login" name="login">Login</button>
					<?php
						if(isset($_POST['login'])){
							echo"<script>window.open('signin.php','_self')</script>";
						}
					?>
				</form>
				</center>
			</div>
			</div>
		</div>
</body>
</html>