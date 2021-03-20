<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
  
  header("location: index.php");

}
else{ ?>
<html>
<head>
	<?php 
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'"; 
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
					
		$user_id = $row['user_id']; 
		$user_name = $row['user_name'];
		?>
		<title><?php echo"$user_name"; ?></title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
#profile_img{
	position: absolute;
	top: 0%;
	left: 50%;
	transform: translate(-50%, 40%)
}
#update_profile{
  	position: absolute;
  	top: 150px;
  	cursor: pointer;
  	left: 93px;
  	border-radius: 4px;
  	background-color: #000;
  	transform: translate(-50%, -50%);
}
#button_profile{
  	position: absolute;
	top: 0%;
	left: 50%;
	transform: translate(-65%, 280%);
  	cursor: pointer;
}
</style>
<body>
<center>
<div>
	<div>
	</div>
	<div>
          <?php
          echo "
          <center>
         	<div>
				<form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>
				    </ul>
	          	</form>
			</div>
         	<div id='profile_img'>
	            <img src='users/$user_image' alt='Profile' class='img-circle' width='180px' height='185px' />
	            <form action='profile.php?u_id=$user_id' method='post' enctype='multipart/form-data'>
	            <label id='update_profile'> Select Profile
	            <input type='file' name='u_image' size='60' />
	            </label>
	            <button id='button_profile' name='update' class='btn btn-info'>Update Profile</button>
	            </form>
          	</div><br></center>
          "; ?>

          </div>
          <center>
          <?php 

            if(isset($_POST['update'])){

              $u_image = $_FILES['u_image']['name'];
              $image_tmp = $_FILES['u_image']['tmp_name'];
              $random_number = rand(1,100);

              if($u_image==''){
                echo "<script>alert('Please Select Profile Image on clicking on the profile image area!')</script>";
                echo "<script>window.open('profile.php?u_id=$user_id','_self')</script>";
                exit();
              }else{
              
              move_uploaded_file($image_tmp,"users/$u_image.$random_number");

              
              $update = "update users set user_image='$u_image.$random_number' where user_id='$user_id'";
              
              $run = mysqli_query($con,$update); 
              
              if($run){
              
              echo "<script>alert('Your Profile Updated!')</script>";
              echo "<script>window.open('profile.php?u_id=$user_id','_self')</script>";
              }
            }
            
            }


          ?>
    <div>
	</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
	<div>
	</div>
	<div>
		<?php
		echo"
		<center><h2><strong>About</strong></h2></center><br>
		<center><h4><strong>$first_name $last_name</strong></h4></center>
        <p><strong>Relationship Status: </strong> $Relationship_status</p><br>
        <p><strong>Lives In: </strong> $user_country</p><br>
        <p><strong>Member Since: </strong> $register_date</p><br>
        <p><strong>Gender: </strong>  $user_gender</p><br>
        <p><strong>Date Of Birth: </strong>  $user_birthday</p><br>
        ";
        ?>
	</div>
</div>	
</center>
</body>
</html>
<?php } ?>