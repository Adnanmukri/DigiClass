<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
?>
<?php 

if(!isset($_SESSION['user_email'])){
	
	header("location: index.php");

}
else{ ?>
<html>
<head>
	<title>Welcome to Digi-Class</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/home_style2.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    	body{
    		color: black;
    		font-weight: bold;
    	}
    </style>
</head>
<body>
<center>
<h1 style="color: #fff;">Hello, <?php echo"$first_name $last_name";?></h1>
<div class="btn">
  <button class="">Exam</button>
  <button class="">Study Materials</button>
  <button class="">Result</button><br>
  <button class="">Notice</button>
  <button class="">Extra Curricular</button>
  <button class="">Query/help</button>
</div>
</center>
</body>
</html>
<?php } ?>
