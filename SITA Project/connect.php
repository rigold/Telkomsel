<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "sita";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
	echo "failed";
	die("Connection failed: " . mysqli_connect_error());	
}
else {
	echo "success";
	header("Location: List_User.php");
	
	
}


?>