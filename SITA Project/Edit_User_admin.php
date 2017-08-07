<?php

	include("connect.php");

	$nik=$_REQUEST['nik'];
	$admin=$_REQUEST['admin'];

	$query = "SELECT * from user where nik='".$nik."'"; 
	$result = mysql_query($query, $conn) or die ( mysql_error());
	$row = mysql_fetch_assoc($result);

	if($admin=="admin")
	{
		$result = mysql_query("UPDATE user SET admin='Admin' WHERE nik='$nik'",$conn);
	}
	else
	{
		$result = mysql_query("UPDATE user SET admin='User' WHERE nik='$nik'",$conn);
	}
	header("Location:List_User.php");
?>

<?php mysql_close($conn); ?>