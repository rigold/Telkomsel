<?php
$databaseHost = 'localhost';
$databaseName = 'sita';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


$nik = $_GET['nik'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM user WHERE nik=$nik");
 
//redirecting to the display page (index.php in our case)
header("Location:List_User.php");
?>