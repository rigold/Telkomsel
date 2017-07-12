<?php
$databaseHost = 'localhost';
$databaseName = 'sita';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$nik = $_GET['nik'];
$result = mysqli_query($conn, "DELETE FROM user WHERE nik=$nik");

$file = $_GET['img'];
unlink($file);

header("Location:List_User.php");
?>