<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	if(!isset($_SESSION['login_user'])) {
   		header("Location: Index.php");
   		exit;
   	}

	if(time() - $_SESSION['timestamp'] > 60*60) {
	    echo"<script>alert('1 Jam Sudah Berakhir!'); </script>";
	    unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
	    $_SESSION['logged_in'] = false;
	   	echo "<script language='javascript' type='text/javascript'> location.href='logout.php' </script>";
	    exit;
	} else {
	    $_SESSION['timestamp'] = time();
	}

   	include("connect.php");

	$sql = "SELECT * FROM user WHERE nik='".$_SESSION['login_user']."'";
	$result = mysql_query($sql, $conn);
	$row = mysql_fetch_assoc($result);

	if($row['admin']=="User"){header("Location: Home.php");}
   
?>

<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SITA Project</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
		<link rel="icon" href="images/favicon.png">
	</head>
	
	<body>
		<div class=navi>
			<ul>
				<img src="images/bgnav.png" alt="">
				<li><a href="Home.php">Home</a></li>

				<li class="dropdown">
					<a class="dropbtn">Data Site</a>
					<div class="dropdown-content">
		      				<a href="Site_Daerah.php?siteloc=Bangkalan">Bangkalan</a> 
							<a href="Site_Daerah.php?siteloc=Banyuwangi">Banyuwangi</a> 
							<a href="Site_Daerah.php?siteloc=Batu">Batu</a> 
							<a href="Site_Daerah.php?siteloc=Blitar Kab.">Blitar Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Blitar Kota">Blitar Kota</a> 
							<a href="Site_Daerah.php?siteloc=Bojonegoro">Bojonegoro</a> 
							<a href="Site_Daerah.php?siteloc=Bondowoso">Bondowoso</a> 
							<a href="Site_Daerah.php?siteloc=Gresik">Gresik</a> 
							<a href="Site_Daerah.php?siteloc=Jember">Jember</a> 
							<a href="Site_Daerah.php?siteloc=Jombang">Jombang</a> 
							<a href="Site_Daerah.php?siteloc=Kediri Kab.">Kediri Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Kediri Kota">Kediri Kota</a> 
							<a href="Site_Daerah.php?siteloc=Lamongan">Lamongan</a> 
							<a href="Site_Daerah.php?siteloc=Lumajang">Lumajang</a> 
							<a href="Site_Daerah.php?siteloc=Madiun Kab.">Madiun Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Madiun Kota">Madiun Kota</a> 
							<a href="Site_Daerah.php?siteloc=Magetan">Magetan</a> 
							<a href="Site_Daerah.php?siteloc=Malang Kab.">Malang Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Malang Kota">Malang Kota</a> 
							<a href="Site_Daerah.php?siteloc=Mojokerto Kab.">Mojokerto Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Mojokerto Kota">Mojokerto Kota</a> 
							<a href="Site_Daerah.php?siteloc=Nganjuk">Nganjuk</a> 
							<a href="Site_Daerah.php?siteloc=Ngawi">Ngawi</a> 
							<a href="Site_Daerah.php?siteloc=Pacitan">Pacitan</a> 
							<a href="Site_Daerah.php?siteloc=Pamekasan">Pamekasan</a> 
							<a href="Site_Daerah.php?siteloc=Pasuruan Kab.">Pasuruan Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Pasuruan Kota">Pasuruan Kota</a> 
							<a href="Site_Daerah.php?siteloc=Ponorogo">Ponorogo</a> 
							<a href="Site_Daerah.php?siteloc=Probolinggo Kab.">Probolinggo Kab.</a> 
							<a href="Site_Daerah.php?siteloc=Probolinggo Kota">Probolinggo Kota</a> 
							<a href="Site_Daerah.php?siteloc=Sampang">Sampang</a> 
							<a href="Site_Daerah.php?siteloc=Sidoarjo">Sidoarjo</a> 
							<a href="Site_Daerah.php?siteloc=Situbondo">Situbondo</a> 
							<a href="Site_Daerah.php?siteloc=Sumenep">Sumenep</a> 
							<a href="Site_Daerah.php?siteloc=Surabaya">Surabaya</a> 
							<a href="Site_Daerah.php?siteloc=Trenggalek">Trenggalek</a> 
							<a href="Site_Daerah.php?siteloc=Tuban">Tuban</a> 
							<a href="Site_Daerah.php?siteloc=Tulungagung">Tulungagung</a> 
				    </div>
				</li>

				<li class="dropdown">
					<a class="dropbtn">Administrasi</a>
					<div class="dropdown-content">
	      				<a href="List_Panjang.php">List Perpanjangan</a>
	      				<a href="Monitoring.php">Monitoring</a>
	      				<a href="Izin.php">Perizinan</a>
					    <a href="PBB.php">PBB</a>
					    <a href="RPM.php">RPM</a>
					    <a href="Comcase.php">Comcase</a>
				    </div>
				</li>
				<li><a href="About.php">About</a></li>
				<li><a href="logout.php">Log out</a></li>
				<h1>
					<?php
					echo " " . date("Y/m/d") ;
					?>
				</h1>
				<form action="Search.php" id="search" method="GET">
					<input type="text" name="cari" />
					<input type="submit" value="" id="submit"/>
				</form>
			</ul>	
		</div>

		<div id="background">
			<div class="page">
				<div class="body2">
					<h1>Upload File Ke DATABASE</a></h1>
					<p>
						1. Download Template ms.excel berikut ini, lalu isi data anda sesuai dengan urutan header tabel. <br>
						2. Isi Tabel dengan data yang mengikuti format yang disarankan. <br>
						3. Simpan Dokumen Excel kedalam format .csv / .csv (coma delimited).<br>
						4. Untuk Upload, Klik Choose File dan pilih File .csv yang sudah fix.<br>
						4. Upload file anda dengan menekan tombol Submit !<br>
						<br>
						<br>
						<a href="File/file.xlsx">DOWNLOAD TEMPLATE</a>
						<br>
						<br>
						<br>
					</p>
					<form action="upload_sql.php" method="post" enctype="multipart/form-data">
							<input type="file" name="file" size="50" style="margin-left: 50px;"> 
							<br><br>
							Tipe File = .csv ; Max File Size = 2 MB; ~ 500 Baris Data; Max Upload Time = 5 Menit;
							<br><br>
						 	<input type="submit" value="Submit" name="submit">
					</form>
											
					
				</div>

			</div>

			
		</div>
		
	</body>
</html>

<?php mysql_close($conn); ?>