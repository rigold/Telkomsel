<?php
	$databaseHost = 'localhost';
	$databaseName = 'sita';
	$databaseUsername = 'root';
	$databasePassword = '';
	 
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


	$sites_id = $_GET['sites_id'];
	 
	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM site WHERE sites_id=$sites_id");
	 
	//redirecting to the display page (index.php in our case)
	header("Location:List_Sites.php");
?>