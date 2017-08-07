<?php 
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		}

   	include("connect.php");

	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result1 = mysql_query($sql, $conn);
	$row1 = mysql_fetch_assoc($result1);

	$sql3 = "SELECT * FROM z_rpm ORDER BY no DESC LIMIT 1";
	$result3 = mysql_query($sql3, $conn);
	$row3 = mysql_fetch_assoc($result3);

	$masuk2=$row1['nama_user'];
	$masuk="RPM/".$row3['no']."/".$row1['nik']."/".date("d-m-Y");
	mysql_query("INSERT INTO z_rpm (no_surat,nama) VALUES ('$masuk','$masuk2')",$conn);

	header("Location: RPM.php");
?>

<?php mysql_close($conn); ?>