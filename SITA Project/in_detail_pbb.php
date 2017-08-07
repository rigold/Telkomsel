<?php 
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

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

	$sql3 = "SELECT * FROM z_detail_pbb ORDER BY no DESC LIMIT 1";
	$result3 = $conn->query($sql3);
	$row3 = $result3->fetch_assoc();

	$masuk2=$row1['nama_user'];
	$masuk="PBB/".$kota_kab."/".$row3['no']."/".$row1['nik']."/".date("Y");
	mysqli_query($conn,"INSERT INTO z_detail_pbb (no_surat,nama) VALUES ('$masuk','$masuk2');");

	header("Location: detail_pbb.php?kota_kab=".$kota_kab);
?>