<?php
	$databaseHost = 'localhost';
	$databaseName = 'sita';
	$databaseUsername = 'root';
	$databasePassword = '';
	 
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


	$sites_id = $_GET['sites_id'];
	$result = mysqli_query($mysqli, "DELETE FROM site WHERE sites_id=$sites_id");
	 
	$file1 = $_GET['file1'];
	unlink($file1);
	$file2 = $_GET['file2'];
	unlink($file2);
	$file3 = $_GET['file3'];
	unlink($file3);
	$file4 = $_GET['file4'];
	unlink($file1);
	$file5 = $_GET['file5'];
	unlink($file2);
	$file6 = $_GET['file6'];
	unlink($file3);

	header("Location:List_Sites.php");
?>