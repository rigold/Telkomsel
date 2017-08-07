<?php
	
	include("connect.php");

	$sites_id = $_GET['sites_id'];
	$result = mysql_query("DELETE FROM site WHERE sites_id='$sites_id'",$conn);
	 
	$file1 = $_GET['file1'];
	unlink($file1);
	$file2 = $_GET['file2'];
	unlink($file2);
	$file3 = $_GET['file3'];
	unlink($file3);
	$file4 = $_GET['file4'];
	unlink($file4);
	$file5 = $_GET['file5'];
	unlink($file5);
	$file6 = $_GET['file6'];
	unlink($file6);

	header("Location:List_Sites.php");
?>

<?php mysql_close($conn); ?>