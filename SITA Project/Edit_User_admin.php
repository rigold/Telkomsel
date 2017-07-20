<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "sita";
	$conn = mysqli_connect($servername, $username, $password, $database);

	$nik=$_REQUEST['nik'];
	$admin=$_REQUEST['admin'];

	$query = "SELECT * from user where nik='".$nik."'"; 
	$result = mysqli_query($conn, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);

	if($admin=="admin")
	{
		$result = mysqli_query($conn, "UPDATE user SET admin='Admin' WHERE nik='$nik'");
	}
	else
	{
		$result = mysqli_query($conn, "UPDATE user SET admin='User' WHERE nik='$nik'");
	}
	header("Location:List_User.php");
?>