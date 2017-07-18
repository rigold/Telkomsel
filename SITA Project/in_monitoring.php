<?php 
	if(empty($_SESSION))
		session_start();

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		}

   	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sita";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$kota_kab=$_REQUEST['kota_kab'];

	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result1 = $conn->query($sql);
	$row1 = $result1->fetch_assoc();

	$sql3 = "SELECT * FROM z_detail_rpm ORDER BY no DESC LIMIT 1";
	$result3 = $conn->query($sql3);
	$row3 = $result3->fetch_assoc();

	$masuk="RPM/".$kota_kab."/".$row3['no']."/".$row1['nik']."/".date("Y");
	mysqli_query($conn,"INSERT INTO z_detail_rpm (no_surat) VALUES ('$masuk');");

	header("Location: detail_rpm.php?kota_kab=".$kota_kab);
?>