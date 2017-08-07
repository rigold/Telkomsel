<?php
	
	include("connect.php");

	$nik = $_GET['nik'];

	$sql    = "SELECT * FROM user WHERE nik=$nik";
	$result = mysql_query($sql, $conn);
	$row = mysql_fetch_assoc($result);

	mysql_query("DELETE FROM user WHERE nik=$nik",$conn);

	if("no_img.jpg"==$row['link_profile_pic'])
	{
		header("Location:List_User.php");
	}
	else
	{
		echo $row['link_profile_pic'];
		$file = $_GET['img'];
		unlink($file);
		header("Location:List_User.php");
	}

?>

<?php mysql_close($conn); ?>