<!--
Connection For Database
-->
<?php
$conn = mysqli_connect("localhost","root","","digiclass");

if(!$conn)
{
	echo "Database connection faild...";
}
?>