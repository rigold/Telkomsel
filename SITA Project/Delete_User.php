<?php
$databaseHost = 'localhost';
$databaseName = 'sita';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$nik = $_GET['nik'];

$sql = "SELECT * FROM user WHERE nik=$nik";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$result = mysqli_query($conn, "DELETE FROM user WHERE nik=$nik");

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